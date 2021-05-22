<?php

namespace App\Http\Controllers;

use App\News;
use App\Banners;
use App\Profiles;
use App\ContactUs;
use App\Generations;
use App\WrestlerData;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    // 開發中暫用
    // public function redirectToCh() {
    //     return redirect('/admin');
    // }


    // 前台部分
    public function index() {
        $banner = Banners::find(1);
        $news = News::orderBy('sort','desc')->take(3)->get();
        return view('front.index',compact('banner','news'));
    }

    public function FAQ() {
        return view('front.FAQ');
    }

    public function FightZNews() {
        $news = News::orderBy('sort','desc')->get();
        return view('front.FightZNews',compact('news'));
    }

    public function News($id) {
        $news = News::find($id);
        return view('front.News',compact('news'));
    }

    public function PreviousShows() {
        return view('front.PreviousShows');
    }

    public function WrestlersProfile() {
        $generations = Generations::all();
        $gen0_all = Profiles::where('generations_id','0')->get();
        $gen1_all = Profiles::where('generations_id','1')->get();

        return view('front.WrestlersProfile', compact('generations','gen0_all','gen1_all'));
    }

    public function Profile($character) {
        $profile = Profiles::where('file_list_name',$character)->with('generations')->with('WLR')->first();

        $WLR = $profile->WLR;
        $data = WrestlerData::find($profile->id);

        return view('front.Profile',compact('profile','data','WLR'));
    }

    public function contact_us(Request $request) {
        ContactUs::create($request->all());

        return redirect('/#Contact')->with('message','thank you :)');
    }
}
