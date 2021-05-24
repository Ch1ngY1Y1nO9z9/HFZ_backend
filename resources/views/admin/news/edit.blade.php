@extends('layouts.app')

@section('css')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">News - edit</div>

                    <div class="card-body">
                        <a class="btn btn-success" href="/admin/news">back</a>
                        <hr>
                        <form method="POST" action="/admin/news/update/{{$news->id}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="date" value="{{$news->date}}">

                            <div class="form-group">
                                <label for="type">Type</label>
                                <select class="form-control" id="type" name="type" onchange="change_layout(this.id)">
                                  <option value="img">fan art</option>
                                  <option value="news" @if($news->type == 'news') selected @endif >news</option>
                                </select>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-2 col-form-label">Title</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="title" name="title" value="{{$news->title}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-2 col-form-label">Description</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="description" name="description" value="{{$news->description}}" required>
                                </div>
                            </div>

                            <hr>

                            <div id="fan_art" @if($news->type == 'news') class="d-none" @endif>
                                <div class="form-group row">
                                    <label for="img" class="col-2 col-form-label">Fan arts file link</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" id="img" name="img" @if($news->type == 'img') value="{{$news->img}}" @endif>
                                    </div>
                                </div>
                            </div>

                            <div id="news" @if($news->type == 'img') class="d-none" @endif>
                                <div class="form-group row">
                                    <label for="content" class="col-2 col-form-label">Content</label>
                                    <div class="col-10">
                                        <textarea style="height:150px;" type="text" class="form-control" id="content" name="content" @if($news->type == 'news') @endif>{{$news->content}}</textarea>
                                    </div>
                                </div>
                            </div>


                            <hr>
                            <div class="form-group row">
                                <label for="sort" class="col-2 col-form-label">Sort</label>
                                <div class="col-10">
                                    <input type="number" class="form-control" id="sort" name="sort" value="{{$news->sort}}" required min="0" max="999">
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary d-block mx-auto">編輯</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    function change_layout(x){
        var type = document.getElementById(x).value;
        var img_layout = document.getElementById('fan_art');
        var content_layout = document.getElementById('news')
        var img = document.getElementById('img');
        var content = document.getElementById('content')

        if(type == 'img'){
            content.value = '';
            content_layout.classList.add('d-none')
            img_layout.classList.remove('d-none')
        }else{
            img.value = '';
            content_layout.classList.remove('d-none')
            img_layout.classList.add('d-none')
        }
    }
</script>
@endsection