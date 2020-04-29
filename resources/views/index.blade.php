<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TJU-疫情防控数据平台</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <!-- bootstrap-daterangepicker -->
    <link href="/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="/gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/gentelella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

    @include("sidebar")

    @include("top_nav")

    <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>数据详情 <small>各建筑内人员流动详情</small></h3>
                    </div>

                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>数据详情 <small>Users</small></h2>
                                <ul class="nav navbar-right panel_toolbox">

                                    <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0"
                                       aria-controls="datatable-buttons" href="{{url($excel_url)}}">
                                        <span>
                                            CSV
                                        </span>
                                    </a>
                                    {{--                                    <li><a class="close-link"><i class="fa fa-close"></i></a>--}}
                                    {{--                                    </li>--}}
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="{{url("/info?page=".$current)}}" method="GET">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            &nbsp;&nbsp;&nbsp;Date and Time
                                            <form class="col-sm-12">
                                                <fieldset>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <div class="input-prepend input-group">
                                                                <span class="add-on input-group-addon"><i
                                                                        class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                                <input type="text" name="date_time"
                                                                       id="reservation-time" class="form-control"
                                                                       value={{$param["date_time"]}} />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class="col-sm-2">
                                            <div id="datatable_filter" class="dataTables_filter">
                                                <label>姓名:
                                                    <input name="user_name" type="search" class="form-control input-sm"
                                                           placeholder={{is_null($param['user_name'])?"姓名":$param['user_name']}} aria-controls="datatable">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div id="datatable_filter" class="dataTables_filter">
                                                <label>单位名:
                                                    <input name="group_name" type="search" class="form-control input-sm"
                                                           placeholder={{is_null($param['group_name'])?"单位名称":$param['group_name']}} aria-controls="datatable">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div id="datatable_filter" class="dataTables_filter">
                                                <label>建筑名称:
                                                    <input name="build_name" type="search" class="form-control input-sm"
                                                           placeholder={{is_null($param['build_name'])?"建筑名称":$param['build_name']}} aria-controls="datatable">
                                                </label>

                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div id="datatable_filter" class="dataTables_filter">
                                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span class="input-group-btn">
                                                    <button class="btn btn-info" type="submit">
                                                        <i class="glyphicon glyphicon-search">
                                                        </i></button>
                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <table id="datatable" class="table table-striped table-bordered"
                                                   style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>工号/学号</th>
                                                    <th>姓名</th>
                                                    <th>时间</th>
                                                    <th>进出类型</th>
                                                    <th>体温</th>
                                                    <th>单位</th>
                                                    <th>楼宇</th>
                                                </tr>
                                                </thead>
                                                <tfoot>
                                                <tr>
                                                    <th>工号/学号</th>
                                                    <th>姓名</th>
                                                    <th>时间</th>
                                                    <th>进出类型</th>
                                                    <th>体温</th>
                                                    <th>单位</th>
                                                    <th>楼宇</th>
                                                </tr>
                                                </tfoot>

                                                <tbody>
                                                @foreach($result as $result)
                                                    <tr>
                                                        <td>{{$result -> user_id}}</td>
                                                        <td>{{$result -> user_name}}</td>
                                                        <td>{{$result -> time}}</td>
                                                        <td>{{$result -> goin}}</td>
                                                        <td>{{$result -> body}}</td>
                                                        <td>{{$result -> group_name}}</td>
                                                        <td>{{$result -> build_name}}</td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="datatable_info" role="status"
                                             aria-live="polite">
                                            Showing {{($current - 1) * 10 + 1}} to {{($current - 1) * 10 + 10}}
                                            of {{$total_num}} entries
                                        </div>
                                    </div>
                                    @include("pagniation")
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

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
<!-- iCheck -->
<script src="/gentelella/vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="/gentelella/vendors/moment/min/moment.min.js"></script>
<script src="/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-datetimepicker -->
{{--<script src="/gentelella/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>--}}

<script src="/gentelella/vendors/jszip/dist/jszip.min.js"></script>
<script src="/gentelella/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="/gentelella/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="/gentelella/build/js/custom.min.js"></script>

<!-- Initialize datetimepicker -->
<script type="text/javascript">
    $(function () {
        $('#myDatepicker').datetimepicker();
    });

</script>
</body>
</html>


