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

            <div class="page-title">
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

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="{{url('/info')}}" method="post">
                            @csrf
                            <!-- 查询栏 -->
                            <div class="row">

                                <div class="col-sm-2">
                                    <label>部门:</label>
                                    <div class="form-group">
                                        <input type="text" name="title" id="" class="form-control" placeholder=" ">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label>工号/学号:</label>
                                    <div class="form-group">
                                        <input type="text" name="uid" id="" class="form-control" placeholder=" ">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label>姓名:</label>
                                    <div class="form-group">
                                        <input type="text" name="name" id="" class="form-control" placeholder=" ">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label>联系方式:</label>
                                    <div class="form-group">
                                        <input type="text" name="phone" id="" class="form-control" placeholder=" ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>地点：</label>
                                    <div class="form-group">
                                        <select class="form-control" name="location">
                                            <option value="">全部</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label>进出：</label>
                                    <div class="form-group">
                                        <select class="form-control" name="goin">
                                            <option>全部</option>
                                            <option>进</option>
                                            <option>出</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label>时间：</label>
                                    <div class="form-group">
                                        <div class="input-prepend input-group">
                                            <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" name="time" id="reservation-time"
                                                   class="form-control"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-1">
                                    <label>&nbsp;</label>
                                    <div class="form-group">
                                        <button class="btn btn-info" type="submit">
                                            <i class="glyphicon glyphicon-search">
                                            </i></button>

                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <label>&nbsp;</label>
                                    <div class="form-group">
                                        <button class="btn btn-info" >
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
                                        <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0"
                                       aria-controls="datatable-buttons" href="{{url($excel_url)}}">
                                        <span>
                                            CSV
                                        </span>
                                    </a>
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


                                            <!--     <tbody>
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

                                                </tbody> -->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                             <!--    <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="datatable_info" role="status"
                                             aria-live="polite">
                                            Showing {{($current - 1) * 10 + 1}} to {{($current - 1) * 10 + 10}}
                                            of {{$total_num}} entries
                                        </div>
                                    </div>
                                    @include("pagniation")
                                </div> -->
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
        $('input[name="date_time"]').daterangepicker({
            timePicker: true,
            timePicker24Hour: true,
          /*  startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),*/
            locale: {
                format: 'M/DD hh:mm'
            }
        });

       //  /* //change the selected date range of that picker
       // $('#daterange').data('daterangepicker').setStartDate('03/01/2014');
       // $('#daterange').data('daterangepicker').setEndDate('03/31/2014');*/


    });
</script>
</body>
</html>
