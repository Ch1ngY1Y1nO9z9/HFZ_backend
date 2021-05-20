<?php

namespace App\Http\Controllers;

use App\Banners;
use App\ContactUs;
use App\News;
use App\Products;
use App\ProductsType;
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
        return view('front.WrestlersProfile');
    }

    public function Profile($character) {
        return view('front.Profile');
    }

    public function contact_us(Request $request) {
        ContactUs::create($request->all());

        return redirect('/#Contact')->with('message','thank you :)');
    }
}
