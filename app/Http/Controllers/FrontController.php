<?php

namespace App\Http\Controllers;

use App\Seo;
use App\News;
use App\Poll;
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
    public function index()
    {
        $seo = Seo::find(1);
        $banner = Banners::find(1);
        $news = News::orderBy('sort', 'desc')->orderBy('id', 'desc')->take(3)->get();

        $stars = Profiles::where('toindex', 1)->first();
        $rank_leader = Profiles::where('rank', 1)->first();

        $previous_shows = Matches::orderBy('id', 'desc')->take(3)->get();

        return view('front.index', compact('seo', 'banner', 'news', 'stars', 'rank_leader', 'previous_shows'));
    }

    public function lightsoff()
    {
        if (Session::has('darkMode')) {
            Session::forget('darkMode');
        } else {
            Session::put('darkMode', 'on');
        }

        $session = Session::all();

        return $session;
    }


    public function FAQ()
    {
        return view('front.FAQ');
    }

    public function Rank()
    {
        $wrestlers = Profiles::orderBy('rank', 'asc')->get();
        return view('front.Rank', compact('wrestlers'));
    }

    public function roll()
    {
        return view('front.roll');
    }

    public function getresult(Request $request)
    {
        // rare 90% SR 8% SSR 1.9% UR 0.1%
        $roll_number = rand(1, 1000);

        if ($roll_number >= 100) {
            $rare = Roll::where('rare', '!=', 'SR')->where('rare', '!=', 'LEGEND')->where('rare', '!=', 'SSR')->inRandomOrder()->first();
        } elseif ($roll_number < 80 && $roll_number >= 1) {
            $rare = Roll::where('rare', 'SR')->inRandomOrder()->first();
        } elseif ($roll_number <= 100 && $roll_number <= 81) {
            $rare = Roll::where('rare', 'SSR')->inRandomOrder()->first();
        } else {
            $rare = Roll::where('rare', 'LEGEND')->inRandomOrder()->first();

            $another_roll = rand(1, 1000);

            if ($another_roll == 666) {
                $rare = Roll::find(666);

                return $rare;
            }
        }

        if ($roll_number == 666) {
            $rare = Roll::find(665);
        }

        return $rare;
    }

    public function getresultbycode(Request $request)
    {
        // rare 60% SR 36% SSR 3.9% UR 0.1%
        $roll_number = rand(1, 1000);

        if ($roll_number <= 600) {
            $rare = Roll::where('rare', '!=', 'SR')->where('rare', '!=', 'LEGEND')->where('rare', '!=', 'SSR')->inRandomOrder()->first();
        } elseif ($roll_number > 600 && $roll_number <= 960) {
            $rare = Roll::where('rare', 'SR')->inRandomOrder()->first();
        } elseif ($roll_number > 960 && $roll_number <= 999) {
            $rare = Roll::where('rare', 'SSR')->inRandomOrder()->first();
        } else {
            $rare = Roll::where('rare', 'LEGEND')->inRandomOrder()->first();

            $another_roll = rand(1, 1000);

            if ($another_roll == 666) {
                $rare = Roll::find(666);

                return $rare;
            }
        }

        if ($roll_number == 666) {
            $rare = Roll::find(665);
        }

        return $rare;
    }

    public function FightZNews()
    {
        $news = News::orderBy('sort', 'desc')->orderBy('id', 'desc')->get();
        return view('front.FightZNews', compact('news'));
    }

    public function News($id)
    {
        $news = News::find($id);

        if (!$news) {
            return abort(404);
        }

        return view('front.News', compact('news'));
    }

    public function Box($stream_id)
    {

        $match_records = MatchesRecords::where('stream_id', $stream_id)->get();

        if (!$match_records) {
            return abort(404);
        }

        $songs_list = SongsLists::where('stream_id', $stream_id)->orderBy('played_at', 'asc')->get();

        return view('front.Box', compact('match_records', 'stream_id', 'songs_list'));
    }


    public function PreviousShows()
    {
        $stream_records = Matches::orderBy('stream_number', 'desc')->get();

        return view('front.PreviousShows', compact('stream_records'));
    }

    public function WrestlersProfile()
    {
        $generations = Generations::all();
        $cover = Profiles::where('generations_id', '0')->get();
        $gen0_all = Profiles::where('generations_id', '1')->get();
        $gen1_all = Profiles::where('generations_id', '2')->get();
        $gen2_all = Profiles::where('generations_id', '3')->get();
        $gamers_all = Profiles::where('generations_id', '4')->get();
        $gen3_all = Profiles::where('generations_id', '5')->get();
        $gen4_all = Profiles::where('generations_id', '6')->get();
        $gen5_all = Profiles::where('generations_id', '7')->get();
        $gen6_all = Profiles::where('generations_id', '8')->get();
        $genID_all = Profiles::where('generations_id', '9')->get();
        $genEN_all = Profiles::where('generations_id', '10')->get();
        $INONAKA_all = Profiles::where('generations_id', '11')->get();
        $PROJECT_HOPE = Profiles::where('generations_id', '12')->get();
        $Council = Profiles::where('generations_id', '13')->get();

        return view('front.WrestlersProfile', compact('generations', 'gen0_all', 'gen1_all', 'gen2_all', 'gamers_all', 'gen3_all', 'gen4_all', 'gen5_all', 'gen6_all', 'genID_all', 'genEN_all', 'INONAKA_all', 'cover', 'PROJECT_HOPE', 'Council'));
    }

    public function Event()
    {
        return view('front.Event');
    }

    public function Profile($character)
    {
        $profile = Profiles::where('file_list_name', $character)->with('gens')->with('clips')->first();

        if (!$profile) {
            return abort(404);
        }

        $data = WrestlerData::find($profile->id);

        if ($data->team_name) {
            $team_mate_name = Profiles::where('name_short', $data->tag_with)->first()->file_list_name;
        } else {
            $team_mate_name = '#';
        }

        $name = $profile->name_short;

        $wreslter_records = MatchesRecords::where(function ($q) use ($name) {
            $q->orWhere('participants', 'like', "%{$name}%");
        })->orderBy('stream_id', 'desc')->orderBy('game', 'desc')->get();

        return view('front.Profile', compact('profile', 'data', 'wreslter_records', 'team_mate_name'));
    }

    public function Poll()
    {

        $list = Poll::orderBy('point', 'desc')->get();
        // $place = [1, 2, 3, 4, 5];

        // $ip = request()->ip();
        // $check = Check::where('ip_check',$ip)->first();

        // $checked = '';

        // if($check){
        //     $checked = 'true';
        // }else{
        //     $checked = 'false';
        // }

        // $OP = User::find(1);

        return view('front.poll', compact('list'));
    }

    public function contact_us(Request $request)
    {
        ContactUs::create($request->all());

        return redirect('/#Contact')->with('message', 'thank you :)');
    }
}
