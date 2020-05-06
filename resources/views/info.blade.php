<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TJU-疫情防控数据中心</title>

    <!-- Bootstrap -->
    <link href="/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/gentelella/build/css/custom.min.css" rel="stylesheet">
    <style type="text/css">
        .input-group-addon {
            padding: 11px 11px;
        }
    </style>

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
    @include("sidebar")

    <!-- top navigation -->
    @include("top_nav")
    <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

       <!--      <div class="page-title">
                <div class="title_left">
                    <h3>流动详情</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div> -->
            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                           <!--  <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div> -->
                        </div>
                        <div class="x_content">
                            <form id="form">
                            @csrf
                            <!-- 查询栏 -->
                            <div class="row">

                                <div class="col-sm-2">
                                    <label>部门:</label>
                                    <div class="form-group">
                                        <input type="text" name="title" id="title" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label>工号/学号:</label>
                                    <div class="form-group">
                                        <input type="text" name="uid" id="uid" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label>姓名:</label>
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label>联系方式:</label>
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="">
                                    </div>
                                </div>
                           
                                <div class="col-sm-3">
                                    <label>地点：</label>
                                    <div class="form-group">
                                        <select class="form-control" name="location" id="location">
                                            <option value="">全部</option>
                                            @foreach($location as $loc)
                                            <option value="{{$loc->SID}}">{{$loc->NAME}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <label>进出情况：</label>
                                    <div class="form-group">
                                        <select class="form-control" name="goin" id="goin">
                                            <option value="0">全部</option>
                                            <option value="1">进</option>
                                            <option value="2">出</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <label>时间：</label>
                                    <div class="form-group">
                                        <div class="input-prepend input-group">
                                            <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" name="time" id="daterangepicker"
                                                   class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <label>&nbsp;</label>
                                    <div class="form-group">
                                        <button class="btn btn-info" type="button" id="info_search">
                                            <i class="glyphicon glyphicon-search">
                                            </i></button>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <label>&nbsp;</label>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-info" id="info_export">
                                            <i class="glyphicon glyphicon-download-alt">
                                            </i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="card-box table-responsive">
                                            <table id="datatable" class="table table-striped table-bordered"
                                                   style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>单位</th>
                                                    <th>工号/学号</th>
                                                    <th>姓名</th>
                                                    <th>联系方式</th>
                                                    <th>地点</th>
                                                    <th>进出类型</th>
                                                    <th>体温</th>
                                                    <th>时间</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                               

                                                </tbody>
                                            </table>
                                        </div>
                     </div>
                 </div>
                 
        </div>

        <!-- /page content -->

        <!-- footer content -->
    @include("footer")
    <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="/gentelella/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/gentelella/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-datetimepicker -->
<script src="/gentelella/vendors/moment/min/moment.min.js"></script>
<script src="/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- Custom Theme Scripts -->
<script src="/gentelella/build/js/custom.min.js"></script>

<script type="text/javascript">
    $(function () {
        $('#daterangepicker').daterangepicker({
            timePicker: true,
            timePicker24Hour: true,
          /*  startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),*/
            "locale": {
                "format": "YYYY/MM/DD HH:mm",
                "separator": "-",
                "applyLabel": "提交",
                "cancelLabel": "取消",
                "fromLabel": "From",
                "toLabel": "To",
                "customRangeLabel": "Custom",
                "weekLabel": "W",
                "daysOfWeek": ["日","一", "二", "三", "四", "五","六"],
                "monthNames": [
                    "1月",
                    "2月",
                    "3月",
                    "4月",
                    "5月",
                    "6月",
                    "7月",
                    "8月",
                    "9月",
                    "10月",
                    "11月",
                    "12月"
                ],
                "firstDay": 1
            }
        });

       //  /* //change the selected date range of that picker
       // $('#daterange').data('daterangepicker').setStartDate('03/01/2014');
       // $('#daterange').data('daterangepicker').setEndDate('03/31/2014');
       $("#info_search").click(function(){
            var parms = $("#form").serializeArray();
            $.ajax({
                url:"{{url('/info_search')}}",    //请求的url地址
                dataType:"json",   //返回格式为json
                data:parms,    //参数值
                type:"POST",   //请求方式
                success:function(req){
                   //请求成功时处理
                    console.log(req);
                }
            });
        });
        $("#info_export").click(function(){
            var parms = $("#form").serialize();
            $.ajax({
                url:"{{url('/info_export')}}",    //请求的url地址
                dataType:"json",   //返回格式为json
                data:parms,    //参数值
                type:"POST",   //请求方式
                success:function(req){
                   //请求成功时处理
                    console.log(req);
                }
            });
        });
    });
</script>
</body>
</html>
