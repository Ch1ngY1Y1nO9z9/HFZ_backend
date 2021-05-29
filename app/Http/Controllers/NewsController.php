<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class NewsController extends Controller
{
    public function index()
    {
        $news_lists = News::orderBy('id','desc')->get();
        return view('admin.news.index',compact('news_lists'));
    }
    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $new_record = News::create($request->all());

        $new_record->save();

        return redirect('/admin/news')->with('store','store success!');

    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit',compact('news'));
    }

    public function update(Request $request,$id)
    {
        $item = News::find($id);
        $item->update($request->all());
        $item->save();

        return redirect('/admin/news')->with('update','update success!');
    }

    public function delete(Request $request,$id)
    {

        $items = News::find($id);

        if($items){
            $items->delete();
        }


        return redirect()->back();
    }

    //上傳檔案
    public function upload_file($file){
        $allowed_extensions =["png", "jpg", "gif", "PNG", "JPG", "GIF","jpeg","JPEG"];

        if ($file->getClientOriginalExtension() &&
            !in_array($file->getClientOriginalExtension(), $allowed_extensions))
        {
            return redirect()->back()->with('message','僅接受.jpg, .png, .gif, .jepg格式檔案!');
        }
        $extension = $file->getClientOriginalExtension();
        $destinationPath = public_path() . '/news_upload/';
        $original_filename = $file->getClientOriginalName();

        $filename = $file->getFilename() . '.' . $extension;
        $url = '/news_upload/' . $filename;

        $file->move($destinationPath, $filename);

        return $url;
    }

    //刪除檔案
    public function delete_file($path){
        File::delete(public_path().$path);
    }
}
