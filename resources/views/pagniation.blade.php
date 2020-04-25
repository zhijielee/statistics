<div class="col-sm-12 col-md-7">
    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
        <ul class="pagination">
            @if($current <= 1)
                <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                    <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                </li>
            @else
                <li class="paginate_button page-item previous" id="dataTable_previous">
                    <a href="{{$home . "page=".($current -1) }}" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                </li>
            @endif
            @php
                $start = $current < ($total - 4 ) ? $current : ($total -4 > 0 ? $total - 4 : 1);
                $end = $current + 4 > $total ? $total : ($current + 4);
            @endphp
            @if(($start - 1) > 1)
                <li class="paginate_button page-item" aria-controls="dataTables-example" tabindex="0">
                    <a href="{{$home}}page=1"  aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                </li>
                <li class="paginate_button page-item">
                    <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">...</a>
                </li>
            @endif
            @for($i=$start ; $i <= $end; $i++)
                @if($current == $i)
                    <li class="paginate_button page-item active">
                        <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">
                        {{$i}}
                        </a>
                    </li>
                @else
                    <li class="paginate_button page-item">
                        <a href="{{$home ."page=". $i}}" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">{{$i}}</a>
                    </li>
                @endif
            @endfor
            @if(($end + 1) < $total)
                <li  class="paginate_button page-item">
                    <a href="#"  aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">...</a>
                </li>
            @endif
            @if($end < $total)
                <li  class="paginate_button page-item">
                    <a href="{{$home . "page=".$total}}"  aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">{{$total}}</a>
                </li>
            @endif

            @if($current >= $total)
                <li class="paginate_button page-item next disabled"id="dataTable_next">
                    <a href="#"  aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">Next</a>
                </li>
            @else
                <li class="paginate_button page-item next" id="dataTable_next">
                    <a href="{{$home . "page=".($current  + 1)}}"  aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">Next</a>
                </li>
            @endif
        </ul>
    </div>

</div>
