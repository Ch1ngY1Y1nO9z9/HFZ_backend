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
                        Poll
                    </div>

                    <div class="card-body">
                        @if($OP->event_controll != 'stop')
                            <form method="POST" action="/admin/poll/close" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary d-block mx-auto">Close</button>
                                    <div class="col-12 text-danger">
                                        *Click it to close the poll :)
                                    </div>
                                </div>
                            </form>
                        @endif
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>place</th>
                                    <th>name</th>
                                    <th>point</th>
                                    <th>votes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $item->name_short }}</td>
                                        <td>{{ $item->point }}</td>
                                        <td>{{ $item->vote }}</td>
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
                order: [
                    [0, 'asc'],
                    "lengthMenu": [
                        [-1],
                        ["All"]
                    ]
                ],
            });
        });
    </script>

@if (Session::has('closed'))
<script>
    alert('poll is closed!')
</script>
@endif
@endsection
