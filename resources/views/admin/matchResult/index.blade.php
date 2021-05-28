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
                    Stream {{$id}} Match results Management
                    </div>

                    <div class="card-body">
                        <a class="btn btn-secondary" href="/admin/stream">back to Stream Management</a>
                        <hr>
                        <a class="btn btn-success" href="/admin/stream/match_result/{{$id}}/create">Create</a>
                        <hr>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Game</th>
                                <th>Type</th>
                                <th>Participants</th>
                                <th>Result</th>
                                <th width="80">Feature</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{$item->game}}</td>
                                    <td>
                                        {{$item->type}}
                                    </td>
                                    <td>
                                        {{$item->participants}}
                                    </td>
                                    <td>
                                        {{$item->result}}
                                    </td>
                                    <td width="200">
                                        <a class="btn btn-primary btn-sm" href="/admin/stream/match_result/{{$id}}/edit/{{$item->id}}">edit</a>
                                        <a class="btn btn-danger  btn-sm" href="#" data-itemid="{{$item->id}}" href="">delete</a>

                                        <form class="destroy-form" data-itemid="{{$item->id}}"
                                            action="/admin/stream/match_result/delete/{{$item->id}}" method="POST"
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
                order: [[ 4, 'asc' ]],
            });

            $('#example').on('click','.btn-danger',function(){
                event.preventDefault();
                var r = confirm("Do you want delete this match result?");
                if (r == true) {
                    var itemid = $(this).data("itemid");
                    $(`.destroy-form[data-itemid="${itemid}"]`).submit();
                }
            });
        } );
    </script>

@endsection
