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

  <!-- Custom Theme Style -->
  <link href="/gentelella/build/css/custom.min.css" rel="stylesheet">
   <style type="text/css">
        ul.widget_profile_box{
            margin-top: 0px;
        }
        ul.count2 li{
            width: 50%;
           
        } 
      .now{
        color: #1ABB9C;
         font-weight:bold !important;
      }
        .all{
            font-weight:bold !important;
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

        <div class="page-title">
          <div class="title_left">
            <h3>Dashboard</h3>
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
               
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
<!--                   更新下边 -->
                  <div class="col-md-3  widget_tally_box">
                        <div class="x_panel fixed_height_300">
                          <div class="x_content">
                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
                                <li>
                                  <a>北</a>
                                </li>
                                <li></li>
                                <li></li>
                              </ul>
                            </div>
                            <h3 class="name">梅园餐厅</h3>
                            <div class="flex">
                              <ul class="list-inline count2">
                                <li>
                                  <h3 class="now">120</h3>
                                  <span>Now</span>
                                </li>
                                <li>
                                  <h3 class="all">1300</h3>
                                  <span>All</span>
                                </li>
                              </ul>
                            </div>
                             <div class="flex">
                             <button type="button" class="btn btn-round btn-info" style="width: 100%"><i class="fa fa-building-o"> </i>   查看详情</button>
                            </div>
                          </div>
                        </div>
                    </div>

                     <div class="col-md-3  widget_tally_box">
                        <div class="x_panel fixed_height_300">
                          <div class="x_content">
                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
                                <li>
                                  <a>卫</a>
                                </li>
                                <li></li>
                                <li></li>
                              </ul>
                            </div>
                            <h3 class="name">梅园餐厅</h3>
                            <div class="flex">
                              <ul class="list-inline count2">
                                <li>
                                  <h3 class="now">120</h3>
                                  <span>Now</span>
                                </li>
                                <li>
                                  <h3 class="all">1300</h3>
                                  <span>All</span>
                                </li>
                              </ul>
                            </div>
                             <div class="flex">
                             <button type="button" class="btn btn-round btn-info" style="width: 100%"><i class="fa fa-building-o"> </i>   查看详情</button>
                            </div>
                          </div>
                        </div>
                    </div>

                     <div class="col-md-3  widget_tally_box">
                        <div class="x_panel fixed_height_300">
                          <div class="x_content">
                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
                                <li>
                                  <a>卫</a>
                                </li>
                                <li></li>
                                <li></li>
                              </ul>
                            </div>
                            <h3 class="name">梅园餐厅</h3>
                            <div class="flex">
                              <ul class="list-inline count2">
                                <li>
                                  <h3 class="now">120</h3>
                                  <span>Now</span>
                                </li>
                                <li>
                                  <h3 class="all">1300</h3>
                                  <span>All</span>
                                </li>
                              </ul>
                            </div>
                             <div class="flex">
                             <button type="button" class="btn btn-round btn-info" style="width: 100%"><i class="fa fa-building-o"> </i>   查看详情</button>
                            </div>
                          </div>
                        </div>
                    </div>

                     <div class="col-md-3  widget_tally_box">
                        <div class="x_panel fixed_height_300">
                          <div class="x_content">
                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
                                <li>
                                  <a>北</a>
                                </li>
                                <li></li>
                                <li></li>
                              </ul>
                            </div>
                            <h3 class="name">梅园餐厅</h3>
                            <div class="flex">
                              <ul class="list-inline count2">
                                <li>
                                  <h3 class="now">120</h3>
                                  <span>Now</span>
                                </li>
                                <li>
                                  <h3 class="all">1300</h3>
                                  <span>All</span>
                                </li>
                              </ul>
                            </div>
                             <div class="flex">
                             <button type="button" class="btn btn-round btn-info" style="width: 100%"><i class="fa fa-building-o"> </i>   查看详情</button>
                            </div>
                          </div>
                        </div>
                    </div>

                     <div class="col-md-3  widget_tally_box">
                        <div class="x_panel fixed_height_300">
                          <div class="x_content">
                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
                                <li>
                                  <a>北</a>
                                </li>
                                <li></li>
                                <li></li>
                              </ul>
                            </div>
                            <h3 class="name">梅园餐厅</h3>
                            <div class="flex">
                              <ul class="list-inline count2">
                                <li>
                                  <h3 class="now">120</h3>
                                  <span>Now</span>
                                </li>
                                <li>
                                  <h3 class="all">1300</h3>
                                  <span>All</span>
                                </li>
                              </ul>
                            </div>
                             <div class="flex">
                             <button type="button" class="btn btn-round btn-info" style="width: 100%"><i class="fa fa-building-o"> </i>   查看详情</button>
                            </div>
                          </div>
                        </div>
                    </div>

                     <div class="col-md-3  widget_tally_box">
                        <div class="x_panel fixed_height_300">
                          <div class="x_content">
                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
                                <li>
                                  <a>北</a>
                                </li>
                                <li></li>
                                <li></li>
                              </ul>
                            </div>
                            <h3 class="name">梅园餐厅</h3>
                            <div class="flex">
                              <ul class="list-inline count2">
                                <li>
                                  <h3 class="now">120</h3>
                                  <span>Now</span>
                                </li>
                                <li>
                                  <h3 class="all">1300</h3>
                                  <span>All</span>
                                </li>
                              </ul>
                            </div>
                             <div class="flex">
                             <button type="button" class="btn btn-round btn-info" style="width: 100%"><i class="fa fa-building-o"> </i>   查看详情</button>
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

  <!-- Custom Theme Scripts -->
  <script src="/gentelella/build/js/custom.min.js"></script>
</body>
</html>
