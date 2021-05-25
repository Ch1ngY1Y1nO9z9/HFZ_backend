<?php

namespace App\Http\Controllers;

use App\Profiles;
use App\WinLoseRatio;
use App\WrestlerData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfilesController extends Controller
{
    public function index()
    {
        $items = Profiles::with('gens')->get();

        return view('admin.profiles.index',compact('items'));
    }


    public function edit_data($id)
    {
        $wrestler = Profiles::find($id);
        $item = WrestlerData::find($id);

        return view('admin.profiles.edit_data',compact('wrestler','item'));
    }

    public function update_data(Request $request,$id)
    {
        $all_wrestler = Profiles::all();

        $item = WrestlerData::find($id);
        $item->update($request->all());

        $item->save();

        if($request->toindex){

            foreach($all_wrestler as $single_data){
                $single_data->toindex = 0;
                $single_data->save();
            }

            $wrestler = $item->data;
            $wrestler->toindex = 1;
        }else{
            $wrestler = $item->data;
            $wrestler->toindex = 0;
        }

        if($request->rank){
            
            foreach($all_wrestler as $single_data){
                $single_data->rank = 0;
                $single_data->save();
            }

            $wrestler = $item->data;
            $wrestler->rank = 1;
        }else{
            $wrestler = $item->data;
            $wrestler->rank = 0;
        }

        $wrestler->save();


        return redirect('/admin/profile')->with('message','success!');
    }

    public function delete(Request $request,$id)
    {
        $items = Profiles::find($id);

        if($items->image_url){
            $this->delete_file($items->image_url);
        }

        $items->delete();

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
        $destinationPath = public_path() . '/profiles/';
        $original_filename = $file->getClientOriginalName();

        $filename = $file->getFilename() . '.' . $extension;
        $url = '/profiles/' . $filename;

        $file->move($destinationPath, $filename);

        return $url;
    }

    //刪除檔案
    public function delete_file($path){
        File::delete(public_path().$path);
    }
}
