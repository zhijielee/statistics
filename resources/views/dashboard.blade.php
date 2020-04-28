<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>校内人员流动数据</title>

    <!-- Bootstrap -->
    <link href="/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">

    <link href="/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/gentelella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include("sidebar")

        @include("header")
        <!-- top navigation -->
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>建筑内实时人数 </h3>
                    </div>

{{--                    搜索按钮，考虑去掉--}}
{{--                    <div class="title_right">--}}
{{--                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="text" class="form-control" placeholder="Search for...">--}}
{{--                                <span class="input-group-btn">--}}
{{--                      <button class="btn btn-default" type="button">Go!</button>--}}
{{--                    </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="x_panel">
                        <div class="x_content">
{{--                            首字母选择，类似于分页--}}
                            <div class="col-md-12 col-sm-12  text-center">
{{--                                <ul class="pagination pagination-split">--}}
{{--                                    <li><a href="#">A</a></li>--}}
{{--                                    <li><a href="#">B</a></li>--}}
{{--                                    <li><a href="#">C</a></li>--}}
{{--                                    <li><a href="#">D</a></li>--}}
{{--                                    <li><a href="#">E</a></li>--}}
{{--                                    <li>...</li>--}}
{{--                                    <li><a href="#">W</a></li>--}}
{{--                                    <li><a href="#">X</a></li>--}}
{{--                                    <li><a href="#">Y</a></li>--}}
{{--                                    <li><a href="#">Z</a></li>--}}
{{--                                </ul>--}}
                            </div>

                            <div class="clearfix"></div>

                            <div  class="col-md-4 col-sm-4 profile_details">
                                <div class="well profile_view">
                                    <div class="left col-sm-12">
                                        <h4 class="brief"><i>实时人数</i></h4>
                                        <div class="left col-md-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="glyphicon glyphicon-home fa fa-caret-square-o-right"></i>
                                                </div>
                                                <div class="count">179</div>
                                                <h3>55教学楼</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" bottom text-center">
                                        <div class=" col-sm-12 emphasis">
                                            <p class="ratings">
                                             <a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 天津大学北洋园校区
                                             </a>
                                            </p>
                                        </div>
                                        <div class="col-md-12  pricing_footer">
                                            <a href="{{url("/#")}}">
                                                <button  type="button" class="btn btn-primary btn-block">
                                                    <i class="fa fa-building-o"> </i> 查看详情
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="col-md-4 col-sm-4 profile_details">
                                <div class="well profile_view">
                                    <div class="left col-sm-12">
                                        <h4 class="brief"><i>实时人数</i></h4>
                                        <div class="left col-md-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="glyphicon glyphicon-home fa fa-caret-square-o-right"></i>
                                                </div>
                                                <div class="count">179</div>
                                                <h3>55教学楼</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" bottom text-center">
                                        <div class=" col-sm-12 emphasis">
                                            <p class="ratings">
                                                <a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    天津大学北洋园校区
                                                </a>
                                            </p>
                                        </div>
                                        <div class="col-md-12  pricing_footer">
                                            <a href="{{url("/#")}}">
                                                <button  type="button" class="btn btn-primary btn-block">
                                                    <i class="fa fa-building-o"> </i> 查看详情
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="col-md-4 col-sm-4 profile_details">
                                <div class="well profile_view">
                                    <div class="left col-sm-12">
                                        <h4 class="brief"><i>实时人数</i></h4>
                                        <div class="left col-md-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="glyphicon glyphicon-home fa fa-caret-square-o-right"></i>
                                                </div>
                                                <div class="count">179</div>
                                                <h3>55教学楼</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" bottom text-center">
                                        <div class=" col-sm-12 emphasis">
                                            <p class="ratings">
                                                <a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    天津大学北洋园校区
                                                </a>
                                            </p>
                                        </div>
                                        <div class="col-md-12  pricing_footer">
                                            <a href="{{url("/#")}}">
                                                <button  type="button" class="btn btn-primary btn-block">
                                                    <i class="fa fa-building-o"> </i> 查看详情
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="col-md-4 col-sm-4 profile_details">
                                <div class="well profile_view">
                                    <div class="left col-sm-12">
                                        <h4 class="brief"><i>实时人数</i></h4>
                                        <div class="left col-md-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="glyphicon glyphicon-home fa fa-caret-square-o-right"></i>
                                                </div>
                                                <div class="count">179</div>
                                                <h3>55教学楼</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" bottom text-center">
                                        <div class=" col-sm-12 emphasis">
                                            <p class="ratings">
                                                <a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    天津大学北洋园校区
                                                </a>
                                            </p>
                                        </div>
                                        <div class="col-md-12  pricing_footer">
                                            <a href="{{url("/#")}}">
                                                <button  type="button" class="btn btn-primary btn-block">
                                                    <i class="fa fa-building-o"> </i> 查看详情
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="col-md-4 col-sm-4 profile_details">
                                <div class="well profile_view">
                                    <div class="left col-sm-12">
                                        <h4 class="brief"><i>实时人数</i></h4>
                                        <div class="left col-md-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="glyphicon glyphicon-home fa fa-caret-square-o-right"></i>
                                                </div>
                                                <div class="count">179</div>
                                                <h3>55教学楼</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" bottom text-center">
                                        <div class=" col-sm-12 emphasis">
                                            <p class="ratings">
                                                <a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    天津大学北洋园校区
                                                </a>
                                            </p>
                                        </div>
                                        <div class="col-md-12  pricing_footer">
                                            <button type="button" class="btn btn-primary btn-block">
                                                <i class="fa fa-building-o"> </i> 查看详情
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="col-md-4 col-sm-4 profile_details">
                                <div class="well profile_view">
                                    <div class="left col-sm-12">
                                        <h4 class="brief"><i>实时人数</i></h4>
                                        <div class="left col-md-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="glyphicon glyphicon-home fa fa-caret-square-o-right"></i>
                                                </div>
                                                <div class="count">179</div>
                                                <h3>55教学楼</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" bottom text-center">
                                        <div class=" col-sm-12 emphasis">
                                            <p class="ratings">
                                                <a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    天津大学北洋园校区
                                                </a>
                                            </p>
                                        </div>
                                        <div class="col-md-12  pricing_footer">
                                            <button type="button" class="btn btn-primary btn-block">
                                                <i class="fa fa-building-o"> </i> 查看详情
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="col-md-4 col-sm-4 profile_details">
                                <div class="well profile_view">
                                    <div class="left col-sm-12">
                                        <h4 class="brief"><i>实时人数</i></h4>
                                        <div class="left col-md-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="glyphicon glyphicon-home fa fa-caret-square-o-right"></i>
                                                </div>
                                                <div class="count">179</div>
                                                <h3>55教学楼</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" bottom text-center">
                                        <div class=" col-sm-12 emphasis">
                                            <p class="ratings">
                                                <a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    天津大学北洋园校区
                                                </a>
                                            </p>
                                        </div>
                                        <div class="col-md-12  pricing_footer">
                                            <button type="button" class="btn btn-primary btn-block">
                                                <i class="fa fa-building-o"> </i> 查看详情
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="col-md-4 col-sm-4 profile_details">
                                <div class="well profile_view">
                                    <div class="left col-sm-12">
                                        <h4 class="brief"><i>实时人数</i></h4>
                                        <div class="left col-md-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="glyphicon glyphicon-home fa fa-caret-square-o-right"></i>
                                                </div>
                                                <div class="count">179</div>
                                                <h3>55教学楼</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" bottom text-center">
                                        <div class=" col-sm-12 emphasis">
                                            <p class="ratings">
                                                <a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    天津大学北洋园校区
                                                </a>
                                            </p>
                                        </div>
                                        <div class="col-md-12  pricing_footer">
                                            <button type="button" class="btn btn-primary btn-block">
                                                <i class="fa fa-building-o"> </i> 查看详情
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="col-md-4 col-sm-4 profile_details">
                                <div class="well profile_view">
                                    <div class="left col-sm-12">
                                        <h4 class="brief"><i>实时人数</i></h4>
                                        <div class="left col-md-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="glyphicon glyphicon-home fa fa-caret-square-o-right"></i>
                                                </div>
                                                <div class="count">179</div>
                                                <h3>55教学楼</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" bottom text-center">
                                        <div class=" col-sm-12 emphasis">
                                            <p class="ratings">
                                                <a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    天津大学北洋园校区
                                                </a>
                                            </p>
                                        </div>
                                        <div class="col-md-12  pricing_footer">
                                            <button type="button" class="btn btn-primary btn-block">
                                                <i class="fa fa-building-o"> </i> 查看详情
                                            </button>
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

<!-- Custom Theme Scripts -->
<script src="/gentelella/build/js/custom.min.js"></script>
</body>
</html>
