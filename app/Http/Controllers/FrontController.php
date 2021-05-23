<?php

namespace App\Http\Controllers;

use App\Seo;
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
        $seo = Seo::find(1);
        $banner = Banners::find(1);
        $news = News::orderBy('sort','desc')->take(3)->get();

        $stars = Profiles::where('toindex', 1)->first();
        $rank_leader = Profiles::where('rank', 1)->first();

        return view('front.index',compact('seo','banner','news','stars','rank_leader'));
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

    public function Box($stream_id) {
        // $news = News::find($id);
        return view('front.Box');
    }


    public function PreviousShows() {
        return view('front.PreviousShows');
    }

    public function WrestlersProfile() {
        $generations = Generations::all();
        $cover = Profiles::where('generations_id','0')->get();
        $gen0_all = Profiles::where('generations_id','1')->get();
        $gen1_all = Profiles::where('generations_id','2')->get();
        $gen2_all = Profiles::where('generations_id','3')->get();
        $gamers_all = Profiles::where('generations_id','4')->get();
        $gen3_all = Profiles::where('generations_id','5')->get();
        $gen4_all = Profiles::where('generations_id','6')->get();
        $gen5_all = Profiles::where('generations_id','7')->get();
        $genID1_all = Profiles::where('generations_id','8')->get();
        $genID2_all = Profiles::where('generations_id','9')->get();
        $genEN_all = Profiles::where('generations_id','10')->get();
        $INONAKA_all = Profiles::where('generations_id','11')->get();

        return view('front.WrestlersProfile', compact('generations','gen0_all','gen1_all','gen2_all','gamers_all','gen3_all','gen4_all','gen5_all','genID1_all','genID2_all','genEN_all','INONAKA_all','cover'));
    }

    public function Profile($character) {
        $profile = Profiles::where('file_list_name',$character)->with('gens')->with('WLR')->with('clips')->first();

        $WLR = $profile->WLR;
        $data = WrestlerData::find($profile->id);

        return view('front.Profile',compact('profile','data','WLR'));
    }

    public function contact_us(Request $request) {
        ContactUs::create($request->all());

        return redirect('/#Contact')->with('message','thank you :)');
    }
}
