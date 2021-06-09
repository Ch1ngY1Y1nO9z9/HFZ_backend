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
                                <select class="form-control" id="type" name="type" disabled>
                                  <option value="{{$news->type}}" selected>{{$news->type}}</option>
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

                            @if($news->type == 'img')
                                <div id="fan_art">
                                    <div class="form-group row">
                                        <label for="img" class="col-2 col-form-label">Fan arts file link</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="img" name="img" @if($news->type == 'img') value="{{$news->img}}" @endif>
                                        </div>
                                        <div class="col-12"><small class="text-danger">*link be like: https://i.ytimg.com/vi/JacN1MzyeKo/hqdefault.jpg <- should have file format at the end</small></div>
                                    </div>
                                </div>
                            @elseif($news->type == 'video')
                                <div id="video">
                                    <div class="form-group row">
                                        <div class="form-group row">
                                            <label for="video_from" class="col-2 col-form-label">Video from</label>
                                            <div class="col-10">
                                                <select class="form-control" id="video_from" name="video_from">
                                                    <option value="youtube" @if($news->video_from == 'youtube') selected @endif>youtube</option>
                                                    <option value="streamable" @if($news->video_from == 'streamable') selected @endif>streamable</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <small class="text-danger">
                                                    *Video id only, don't put embed code<br>
                                                    video id guide: <br>
                                                    <img src="/images/embedcode_guide.jpg" alt="">
                                                    <img src="/images/youtube_video_example.jpg" alt="">
                                                </small>
                                            </div>
                                        </div>
                                        <label for="content" class="col-2 col-form-label">Content</label>
                                        <div class="col-10">
                                            <textarea style="height:150px;" type="text" class="form-control" id="content" name="content">{{$news->content}}</textarea>
                                        </div>
                                        <div class="col-12"><small class="text-danger">*If you want put OC video, streamable.com embed code ONLY</small></div>
                                    </div>
                                </div>
                            @else
                                <div id="news_layout"  @if($news->type != 'news') class="d-none" @endif>
                                    <div class="form-group row">
                                        <label for="news" class="col-2 col-form-label">Content</label>
                                        <div class="col-10">
                                            <textarea style="height:150px;" type="text" class="form-control" id="news" name="content">{{$news->content}}</textarea>
                                        </div>
                                        <div class="col-12"><small class="text-danger">*If you want put OC video embed code, please select video</small></div>
                                    </div>
                                </div>
                            @endif

                            <hr>
                            <div class="form-group row">
                                <label for="sort" class="col-2 col-form-label">Sort</label>
                                <div class="col-10">
                                    <input type="number" class="form-control" id="sort" name="sort" value="{{$news->sort}}" required min="0" max="999">
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary d-block mx-auto">update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

