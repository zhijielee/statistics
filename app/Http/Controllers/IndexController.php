<?php


namespace App\Http\Controllers;



use Illuminate\Foundation\Console\PackageDiscoverCommand;
use Illuminate\Http\Request;
use App\Http\Controllers\CommonController as Func;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel as Excel;

class IndexController extends Controller {


    public static function index(Request $request) {
        return view("dashboard");
    }
//    public static function index(Request $request) {
//
//        //获取当前的页数
//        if(is_null($request->input("page"))) {
//            $page = 1;
//        } else{
//            $page = $request->input("page");
//        }
////        // 获取本页的数据
////        if(is_null($request->input("name"))) {
////            $name = null;
////            $home = "/?";
////            $num = DB::select("select count(Q.SID) as num ".
////                    "from t_qrcode Q")[0]->num;
////            $result = DB::select("SELECT G.TITLE AS group_name, T2.name as name, T2.goin, T2.time as time ".
////                    "FROM (select GU.GROUP_SID, T1.name as name, T1.goin as goin, T1.time as time ".
////                    "from (SELECT U.SID AS sid, NAME AS name, Q.GOIN AS goin, Q.CREATE_TIME as time ".
////                    "FROM t_qrcode Q INNER JOIN t_td_user U ON Q.USID = U.SID order by Q.SID desc limit ?, 10) as T1 ".
////                    "inner join t_td_group_user GU on GU.U_SID = T1.sid) AS T2 ".
////                    "inner join t_td_group AS G ON G.SID = T2.GROUP_SID", [($page - 1) * 10]);
////        } else {
////            $name = $request->input("name");
////            $home = "/?name=".$name."&";
////            $num = DB::select("select count(Q.SID) as num ".
////                    "from t_qrcode Q inner join t_td_user U on Q.USID = U.SID ".
////                    "where U.NAME = ?", [$name])[0]->num;
////            $result = DB::select("SELECT G.TITLE AS group_name, T2.name as name, T2.name as name, T2.goin, T2.time as time ".
////                "FROM (select GU.GROUP_SID, T1.name as name, T1.goin as goin, T1.time as time ".
////                "from (SELECT U.SID AS sid, NAME AS name, Q.GOIN AS goin, Q.CREATE_TIME as time ".
////                "FROM t_qrcode Q INNER JOIN t_td_user U where U.NAME = ? and Q.USID = U.SID order by Q.SID desc limit ?, 10) as T1 ".
////                "inner join t_td_group_user GU on GU.U_SID = T1.sid) AS T2 ".
////                "inner join t_td_group AS G ON G.SID = T2.GROUP_SID", [$name, ($page - 1) * 10]);
////        }
//
////        return view("index", [
////            "name" => $name,
////            "result" => $result,
////            "num" => $num,
////            "total" => intval(($num + 9) / 10),
////            "current" => $page,
////            "home" => $home
////        ]);
//
//        return view("dashboard", [
//           "result" => 1
//        ]);
//
//    }

    public static function info(Request $request) {

        // 多参数处理
        $page = is_null($request->input("page")) ? 1 : $request->input("page");
        $dateTime = $request->input("date_time");
        // 时间格式转换
        if(is_null($dateTime)) {
            $start = "'".DB::select("select CREATE_TIME from t_qrcode where CREATE_TIME is not NULL order by SID limit 1")[0]->CREATE_TIME."'";
            $end = "'".DB::select("select CREATE_TIME from t_qrcode where CREATE_TIME is not NULL order by SID desc limit 1")[0]->CREATE_TIME."'";
            $start_array = explode(" ", substr($start,1, strlen($start) - 2));
            $date = explode("-", $start_array[0]);
            $time = explode(":", $start_array[1]);
            $dateTime = $date[2] . "/" . $date[1] . "/" . $date[0] . " " . ($time[0] > '12' ? intval($time[0]) - 12 : $time[0]) .":" . $time[1] ." " . ($time[0] > '12' ? "PM":"AM") ." - ";
            $end_array = explode(" ", $start);
            $date = explode("-", $end_array[0]);
            $time = explode(":", $end_array[1]);
            $dateTime = $dateTime . $date[2] . "/" . $date[1] . "/" . $date[0] . " " . ($time[0] > '12' ? intval($time[0]) - 12 : $time[0]) .":" . $time[1] ." " . ($time[0] > '12' ? "PM":"AM");
        } else {
            $start_init = explode(" - ", $dateTime)[0];
            $end_init = explode(" - ", $dateTime)[1];
            $start_array = explode(" ", $start_init);
            $end_array = explode(" ", $end_init);
            $date = explode("/", $start_array[0]);
            $time = explode(":", $start_array[1]);
            $start = "'" . $date[2] . "-" . $date[0] . "-" . $date[1] . " " . ($start_array[2] == "PM" ? intval($time[0]) + 12 : $time[0]) . ":" . $time[1] .":00'";
            $date = explode("/", $end_array[0]);
            $time = explode(":", $end_array[1]);
            $end = "'" . $date[2] . "-" . $date[0] . "-" . $date[1] . " " . ($end_array[2] == "PM" ? intval($time[0]) + 12 : $time[0]) . ":" . $time[1] .":59'";
        }

        if(is_null($request->input("user_name"))) {
            $user_name = null;
            $user_sql = "";
        } else {
            $user_name = $request->input("user_name");
            $user_sql = " and NAME = '" .$user_name . "'";
        }

        if(is_null($request->input("group_name"))) {
            $group_name = null;
            $group_sql = "";
        } else {
            $group_name = $request->input("group_name");
            $group_sql = " and TITLE = '" .$group_name . "'";
        }

        if(is_null($request->input("build_name"))) {
            $build_name = null;
            $build_sql = "";
        } else {
            $build_name = $request->input("build_name");
            $build_sql = " and BUILDING = '" .$build_name . "'";
        }

        $param = [
            "page" => $page,
            "date_time" => $dateTime,
            "user_name" => $user_name,
            "group_name" => $group_name,
            "build_name" => $build_name
        ];

        $total_num = DB::select("select count(SID) as num from t_td_group as G inner join ".
                        "(select U.CURRENT_GROUP_SID as group_id from t_qrcode Q inner join ".
                        "t_td_user U on Q.USID = U.SID ".
                        "where Q.CREATE_TIME between " . $start . " and ".$end . $user_sql . $build_name.") as T ".
                        "on T.group_id = G.SID where 1 = 1".$group_name)[0]->num;

        $result = DB::select("select T.user_id as user_id, T.user_name as user_name, T.bulid_name as build_name, T.goin as goin, T.time as time, T.body as body, TITLE as group_name from t_td_group as G inner join ".
            "(select U.SID as user_id, U.NAME as user_name, Q.BUILDING as bulid_name, U.CURRENT_GROUP_SID as group_id, Q.GOIN as goin, Q.BODY as body, Q.CREATE_TIME as time from t_qrcode Q inner join ".
            "t_td_user U on Q.USID = U.SID ".
            "where Q.CREATE_TIME between " . $start . " and ".$end . $user_sql . $build_name." order by Q.SID desc limit ".($page - 1) * 10 .", 10) as T ".
            "on T.group_id = G.SID where 1 = 1".$group_name);

        $url = "?user_name=".$user_name."&group_name=".$group_name."&date_time=".$dateTime."&build_name=".$build_name;
        return view("index", [
            "param" => $param,
            "excel_url" => "/excel".$url,
            "home" => "/info".$url,
            "current" => $page,
            "total_num" => $total_num,
            "total" => intval(($total_num + 9) / 10),
            "result" => $result
        ]);
    }

    public static function toExcel(Request $request, Excel $excel) {
        if(is_null($request->input("name"))) {
            Func::alert("数据量过大，请选择导出");
            Func::goBack();
            exit();
        }
        $name = $request->input("name");
        $result = DB::select("SELECT G.TITLE AS group_name, T2.name as name, T2.name as name, T2.goin, T2.time as time ".
            "FROM (select GU.GROUP_SID, T1.name as name, T1.goin as goin, T1.time as time ".
            "from (SELECT U.SID AS sid, NAME AS name, Q.GOIN AS goin, Q.CREATE_TIME as time ".
            "FROM t_qrcode Q INNER JOIN t_td_user U where U.NAME = ? and Q.USID = U.SID order by Q.SID) as T1 ".
            "inner join t_td_group_user GU on GU.U_SID = T1.sid) AS T2 ".
            "inner join t_td_group AS G ON G.SID = T2.GROUP_SID",[$name]);

        $title = [
            0 => '姓名',
            1 => '时间',
            2 => '进出类型',
            3 => '单位'
        ];
        $export = null;
        foreach ($result as $key => $val) {
            $export[$key][0] = $val->name;
            $export[$key][1] = $val->time;
            $export[$key][2] = $val->goin;
            $export[$key][3] = $val->group_name;
        }
        $sell = array_merge($title, $export);
        $excel->create($name.'的活动记录',function($excel) use ($sell){
            $excel->sheet('score', function($sheet) use ($sell){
                $sheet->rows($sell);
            });
        })->export('xls');
        Func::goBack();
    }

}
