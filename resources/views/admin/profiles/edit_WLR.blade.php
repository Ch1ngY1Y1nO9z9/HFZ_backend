@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{$name}} - win lose ratio edit</div>
                    <div class="card-body">
                        <a class="btn btn-success" href="/admin/profile">back</a>
                        <hr>
                        <form method="POST" action="/admin/profile_WLR/update/{{$item->id}}" enctype="multipart/form-data">
                            @csrf

                            <h1>{{$name}}</h1>

                            <hr>

                            <div class="form-group row">
                                <label for="single_total" class="col-2 col-form-label">1v1 total</label>
                                <div class="col-10">
                                    <input type="number" min="0" class="form-control" id="single_total" name="single_total" value="{{$item->single_total}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="single_win" class="col-2 col-form-label">1v1 win</label>
                                <div class="col-10">
                                    <input type="number" min="0" class="form-control" id="single_win" name="single_win" value="{{$item->single_win}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tag_total" class="col-2 col-form-label">2v2 total</label>
                                <div class="col-10">
                                    <input type="number" min="0" class="form-control" id="tag_total" name="tag_total" value="{{$item->tag_total}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tag_win" class="col-2 col-form-label">2v2 total</label>
                                <div class="col-10">
                                    <input type="number" min="0" class="form-control" id="tag_win" name="tag_win" value="{{$item->tag_win}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="specailEvent_total" class="col-2 col-form-label">Specail Event total</label>
                                <div class="col-10">
                                    <input type="number" min="0" class="form-control" id="specailEvent_total" name="specailEvent_total" value="{{$item->specailEvent_total}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="specailEvent_win" class="col-2 col-form-label">Specail Event total</label>
                                <div class="col-10">
                                    <input type="number" min="0" class="form-control" id="specailEvent_win" name="specailEvent_win" value="{{$item->specailEvent_win}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="draw" class="col-2 col-form-label">draw</label>
                                <div class="col-10">
                                    <input type="number" min="0" class="form-control" id="draw" name="draw" value="{{$item->draw}}">
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

@section('js')

@endsection
