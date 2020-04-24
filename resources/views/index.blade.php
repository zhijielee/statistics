@extends("home")

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>活动情况</div>
                    <div class="card-body">
                        <div class="card-header-pills">
                            <form id="mainform" action="{{url('/manager/academy_search/1')}}" method = "GET" enctype="multipart/form-data">
{{--                                <div class="col-sm-1" style="float: right;">--}}
{{--                                    <div class="input-group input-group-sm" style="width: 200px;">--}}
                                        <input type="text" name="xy" placeholder="学院名称">
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-1" style="float: left;">--}}
{{--                                    <div class="input-group input-group-sm" style="width: 200px;">--}}
                                        <input type="text" name="xy" placeholder="名称">
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-1" style="float: initial;">--}}
{{--                                    <div class="input-group input-group-sm" style="width: 200px;">--}}
                                        <input type="text" name="xy"  placeholder="学院">
                                <input type="text" name="xy"  placeholder="学院">
                                <input type="text" name="xy"  placeholder="学院">


{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="input-group-btn">--}}
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
{{--                                </div>--}}
                            </form>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
{{--                                <thead>--}}
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
{{--                                </thead>--}}
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

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; zhijie.li 2020</div>
                </div>
            </div>
        </footer>
    </div>


@endsection
