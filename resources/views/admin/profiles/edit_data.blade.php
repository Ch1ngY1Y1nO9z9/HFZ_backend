@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{$name}} - data edit</div>
                    <div class="card-body">
                        <a class="btn btn-success" href="/admin/profile">back</a>
                        <hr>
                        <form method="POST" action="/admin/profile_data/update/{{$item->id}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="birth_day" class="col-2 col-form-label">birth day</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="birth_day" name="birth_day" value="{{$item->birth_day}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="debut" class="col-2 col-form-label">debut</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="debut" name="debut" value="{{$item->debut}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="weight" class="col-2 col-form-label">weight</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="weight" name="weight" value="{{$item->weight}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fan_name" class="col-2 col-form-label">fan name</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="fan_name" name="fan_name" value="{{$item->fan_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="signature" class="col-2 col-form-label">signature</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="signature" name="signature" value="{{$item->signature}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="finisher" class="col-2 col-form-label">finisher</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="finisher" name="finisher" value="{{$item->finisher}}">
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
