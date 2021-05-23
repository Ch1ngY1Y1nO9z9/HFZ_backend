@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">News - create</div>
                    <div class="card-body">
                        <a class="btn btn-success" href="/admin/news">back</a>
                        <hr>
                        <form method="POST" action="/admin/news/store" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="date" value="">

                            <div class="form-group">
                                <label for="type">Type</label>
                                <select class="form-control" id="type" name="type" onchange="change_layout(this.id)">
                                  <option value="img">fan art</option>
                                  <option value="news">news</option>
                                </select>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label for="title" class="col-2 col-form-label">Title</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-2 col-form-label">Description</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="description" name="description" required>
                                </div>
                            </div>

                            <hr>

                            <div id="fan_art">
                                <div class="form-group row">
                                    <label for="img" class="col-2 col-form-label">Fan arts file link</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" id="img" name="img">
                                    </div>
                                </div>
                            </div>

                            <div id="news" class="d-none">
                                <div class="form-group row">
                                    <label for="content" class="col-2 col-form-label">Content</label>
                                    <div class="col-10">
                                        <textarea style="height:150px;" type="text" class="form-control" id="content" name="content"></textarea>
                                    </div>
                                </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>

    <script>
        var current_date = new Date();

        var date = current_date.getFullYear() + '/' + (current_date.getMonth() + 1) + '/' + current_date.getDate()

        document.querySelector('input[name="date"]').setAttribute('value', date)



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
