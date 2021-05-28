@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> {{$wrestler->name_en}} Match Clips - create</div>
                    <div class="card-body">
                        <a class="btn btn-success" href="/admin/profile/{{$wrestler->id}}/clips">back</a>
                        <hr>
                        <form method="POST" action="/admin/profile/clips/store" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="wrestler_id" value="{{$wrestler->id}}">

                            <div class="form-group row">
                                <label for="clip_title" class="col-2 col-form-label">Clip Title</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="clip_title" name="clip_title" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="embed_code" class="col-2 col-form-label">embed code</label>
                                <div class="col-10">
                                    <textarea style="height:150px;" type="text" class="form-control" id="embed_code" name="embed_code"></textarea>
                                </div>
                                <div class="col-12"><small class="text-danger">*streamable.com embed code only</small></div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label for="sort" class="col-2 col-form-label">Sort</label>
                                <div class="col-10">
                                    <input type="number" class="form-control" id="sort" name="sort" required value="0" min="0" max="999">
                                </div>
                                <div class="col-12"><small class="text-danger"></small></div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary d-block mx-auto">Store</button>
                        </form>
                        Embed Code copy guide: <img width="100%" src="/images/embedcode_guide.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @if(Session::has('store'))
        <script>
            alert('store success!')
        </script>
    @endif
@endsection
