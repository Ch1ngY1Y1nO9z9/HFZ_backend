@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Profile Management
                    </div>

                    <div class="card-body">
                        <a class="btn btn-success" href="/admin/products/create">新增產品</a>
                        <hr>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>產品分類</th>
                                <th>產品圖片</th>
                                <th>名稱(中)</th>
                                <th>名稱(英)</th>
                                <th>詳細訊息(中)</th>
                                <th>詳細訊息(英)</th>
                                <th>排序</th>
                                <th width="80">功能</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{$item->type}}</td>
                                    <td><img src="{{$item->img}}" width="200" alt=""></td>
                                    <td>{{$item->name_ch}}</td>
                                    <td>{{$item->name_en}}</td>
                                    <td>{{$item->content_ch}}</td>
                                    <td>{{$item->content_en}}</td>
                                    <td>{{$item->sort}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="/admin/products/edit/{{$item->id}}">編輯</a>
                                        <a class="btn btn-danger  btn-sm" href="#" data-itemid="{{$item->id}}" href="">刪除</a>

                                        <form class="destroy-form" data-itemid="{{$item->id}}"
                                            action="/admin/products/delete/{{$item->id}}" method="POST"
                                            style="display: none;">
                                          @csrf
                                      </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js" defer></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                order: [[ 3, 'desc' ]],
                language:{
                    "processing":   "處理中...",
                    "loadingRecords": "載入中...",
                    "lengthMenu":   "顯示 _MENU_ 項結果",
                    "zeroRecords":  "沒有符合的結果",
                    "info":         "顯示第 _START_ 至 _END_ 項結果，共 _TOTAL_ 項",
                    "infoEmpty":    "顯示第 0 至 0 項結果，共 0 項",
                    "infoFiltered": "(從 _MAX_ 項結果中過濾)",
                    "infoPostFix":  "",
                    "search":       "搜尋:",
                    "paginate": {
                        "first":    "第一頁",
                        "previous": "上一頁",
                        "next":     "下一頁",
                        "last":     "最後一頁"
                    },
                    "aria": {
                        "sortAscending":  ": 升冪排列",
                        "sortDescending": ": 降冪排列"
                    }
                }
            });

            $('#example').on('click','.btn-danger',function(){
                event.preventDefault();
                var r = confirm("你確定要刪除此項目嗎?");
                if (r == true) {
                    var itemid = $(this).data("itemid");
                    $(`.destroy-form[data-itemid="${itemid}"]`).submit();
                }
            });
        } );
    </script>

    @if(Session::has('message'))
        <script>
            alert('更新成功!')
        </script>
    @endif
@endsection
