<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentelella</title>

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

{{--    <link href="/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">--}}

    <!-- Custom Theme Style -->
    <link href="/gentelella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        @include("sidebar")

        @include("header")

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
{{--                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li class="dropdown">--}}
{{--                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>--}}
{{--                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                                            <a class="dropdown-item" href="#">Settings 1</a>--}}
{{--                                            <a class="dropdown-item" href="#">Settings 2</a>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
                                    <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#">
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
                                <div class="row">
                                    <div class="col-sm-5">
                                        &nbsp;&nbsp;&nbsp;Date and Time
                                            <form class="col-sm-12">
                                                <fieldset>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <div class="input-prepend input-group">
                                                                <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                                <input type="text" name="reservation-time" id="reservation-time" class="form-control" value="01/01/2016 - 01/25/2016" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                    </div>
                                    <div class="col-sm-2">
                                            <div id="datatable_filter" class="dataTables_filter">
                                                <label>姓名:
                                                    <input name="user_name" type="search" class="form-control input-sm" placeholder="姓名" aria-controls="datatable">
                                                </label>
                                            </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div id="datatable_filter" class="dataTables_filter">
                                            <label>单位名:
                                                <input name="group_name" type="search" class="form-control input-sm" placeholder="单位名称" aria-controls="datatable">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div id="datatable_filter" class="dataTables_filter">
                                            <label>建筑名称:
                                                <input name="build_name" type="search" class="form-control input-sm" placeholder="建筑名称" aria-controls="datatable">
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
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
{{--                                            <p class="text-muted font-13 m-b-30">--}}
{{--                                                DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>--}}
{{--                                            </p>--}}
                                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>姓名</th>
                                                    <th>时间</th>
                                                    <th>进出类型</th>
                                                    <th>单位</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                                </thead>
                                                <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                                </tfoot>

                                                <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
<script src="/gentelella/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<script src="/gentelella/vendors/jszip/dist/jszip.min.js"></script>
<script src="/gentelella/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="/gentelella/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="/gentelella/build/js/custom.min.js"></script>

<!-- Initialize datetimepicker -->
<script  type="text/javascript">
    $(function () {
        $('#myDatepicker').datetimepicker();
    });

    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });

    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });

    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();

    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });

    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });

    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>
</body>
</html>


