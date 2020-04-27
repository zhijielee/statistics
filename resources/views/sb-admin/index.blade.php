@extends("sb-admin.home")

@section('content')

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>活动情况
                <a href="{{url("/excel?name=".$name)}}">
                    <button class="btn btn-dark" style="width: 200px;float: right" type="button">
                    excel导出
                    </button>
                </a>

            </div>
            <div class="card-body">
                <div class="card-header-pills">
                    <form id="mainform" action="{{url('/')}}" method = "GET" enctype="multipart/form-data">
                        {{--                                ==== 多个input属性搜索====--}}
                        {{--                                <input type="text" name="xy" placeholder="学院名称">--}}
                        {{--                                <input type="text" name="xy" placeholder="名称">--}}
                        {{--                                <input type="text" name="xy"  placeholder="学院">--}}
                        {{--                                <input type="text" name="xy"  placeholder="学院">--}}
                        {{--                                <input type="text" name="xy"  placeholder="学院">--}}
                        {{--                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>--}}
                        {{--                                ===== 单个input标签搜索=======--}}
                        {{--                                <div class="col-sm-6" style="float: right;">--}}
                        {{--                                    <div class="input-group input-group-sm" style="width: 300px;">--}}
                        {{--                                        <input type="text" name="xy" class="small mb-1" placeholder="姓名">--}}
                        {{--                                        <div class="btn btn-primary">--}}
                        {{--                                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        <div class="input-group"  style="width: 300px;float: right">
                            <input class="form-control" type="text" name="name" placeholder="姓名" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary" type="button">
                                    <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                        </path>
                                    </svg><!-- <i class="fas fa-search"></i> -->
                                </button>
                            </div>
                        </div>


                    </form>
                </div>

                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row"></div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <tr role="row">
                                        <th rowspan="1" colspan="1" style="width: 200px;">姓名</th>
                                        <th rowspan="1" colspan="1" style="width: 200px;">时间</th>
                                        <th rowspan="1" colspan="1" style="width: 200px;">进出类型</th>
                                        <th rowspan="1" colspan="1" style="width: 200px;">单位</th>
                                    </tr>
                                    <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1" style="width: 200px;">姓名</th>
                                        <th rowspan="1" colspan="1" style="width: 200px;">时间</th>
                                        <th rowspan="1" colspan="1" style="width: 200px;">进出类型</th>
                                        <th rowspan="1" colspan="1" style="width: 200px;">单位</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($result as $result)
                                            <tr role="row" class="even">
                                                <td>{{$result -> name}}</td>
                                                <td>{{$result -> time}}</td>
                                                <td>{{$result -> goin}}</td>
                                                <td>{{$result -> group_name}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
                                    Showing {{($current -1) * 10 + 1 }} to {{($current -1) * 10 + 10 }} of {{$num}} entries
                                </div>
                            </div>
                            @include('sb-admin.pagniation')
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


@endsection
