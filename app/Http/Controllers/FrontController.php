<?php

namespace App\Http\Controllers;

use App\Seo;
use App\News;
use App\Roll;
use App\User;
use App\Check;
use App\Banners;
use App\Matches;
use App\Profiles;
use App\ContactUs;
use App\SongsLists;
use App\Generations;
use App\WrestlerData;
use App\MatchesRecords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Contracts\Service\Attribute\Required;

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

        $previous_shows = Matches::orderBy('id','desc')->take(3)->get();

        return view('front.index',compact('seo','banner','news','stars','rank_leader','previous_shows'));
    }

    public function lightsoff() {
        if(Session::has('darkMode')){
            Session::forget('darkMode');
        }else{
            Session::put('darkMode','on');
        }

        $session = Session::all();

        return $session;
    }


    public function FAQ() {
        return view('front.FAQ');
    }

    public function Rank() {
        $wrestlers = Profiles::orderBy('rank','asc')->get();
        return view('front.Rank',compact('wrestlers'));
    }

    public function roll() {
        return view('front.roll');
    }

    public function getresult(Request $request){
        // $roll_number = rand(1,49);
        $roll_number = 49;

        $result = Roll::find($roll_number);

        return $result;
    }

    public function FightZNews() {
        $news = News::orderBy('sort','desc')->orderBy('id','desc')->get();
        return view('front.FightZNews',compact('news'));
    }

    public function News($id) {
        $news = News::find($id);

        return view('front.News',compact('news'));
    }

    public function Box($stream_id) {

        $match_records = MatchesRecords::where('stream_id',$stream_id)->get();
        $songs_list = SongsLists::where('stream_id',$stream_id)->orderBy('played_at','asc')->get();

        return view('front.Box',compact('match_records','stream_id','songs_list'));
    }


    public function PreviousShows() {
        $stream_records = Matches::orderBy('stream_number','desc')->get();

        return view('front.PreviousShows',compact('stream_records'));
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

        if (isset($_SERVER['HTTP_CLIENT_IP'])) {

            $result = $_SERVER['HTTP_CLIENT_IP'];

         } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {

            $result = $_SERVER['HTTP_X_FORWARDED_FOR'];

         } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {

            $result = $_SERVER['HTTP_X_FORWARDED'];

         } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {

            $result = $_SERVER['HTTP_FORWARDED_FOR'];

         } elseif (isset($_SERVER['HTTP_FORWARDED'])) {

            $result = $_SERVER['HTTP_FORWARDED'];

         } elseif (isset($_SERVER['REMOTE_ADDR'])) {

            $result = $_SERVER['REMOTE_ADDR'];

         } else {

             $result = '';
         }

        $all_check = Check::where('ip_check_for_jp',$result)->first();
        if(!$all_check){
            $check = Check::create();
            $check->ip_check_for_jp = $result;
            $check->save();
        }else{
            $all_check->ip_check_for_jp = '';
            $all_check->save();
            $all_check->ip_check_for_jp = $result;
            $all_check->save();
        }

        return view('front.WrestlersProfile', compact('generations','gen0_all','gen1_all','gen2_all','gamers_all','gen3_all','gen4_all','gen5_all','genID1_all','genID2_all','genEN_all','INONAKA_all','cover'));
    }

    public function Event()
    {
        return view('front.Event');
    }

    public function Profile($character) {
        $profile = Profiles::where('file_list_name',$character)->with('gens')->with('clips')->first();

        $data = WrestlerData::find($profile->id);

        if($data->team_name){
            $team_mate_name = Profiles::where('name_short',$data->tag_with)->first()->file_list_name;
        }else{
            $team_mate_name = '#';
        }

        $name = $profile->name_short;

        $wreslter_records = MatchesRecords::where(function ($q) use ($name) {
            $q->orWhere('participants', 'like', "%{$name}%");
            })->orderBy('id','desc')->get();

        return view('front.Profile',compact('profile','data','wreslter_records','team_mate_name'));
    }

    public function contact_us(Request $request) {
        ContactUs::create($request->all());

        return redirect('/#Contact')->with('message','thank you :)');
    }
}
