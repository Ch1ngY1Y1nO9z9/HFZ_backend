<?php

namespace App\Http\Controllers;

use App\Poll;
use App\Check;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function index()
    {
        $items = Poll::orderBy('point', 'desc')->get();

        return view('admin.poll.index', compact('items'));
    }

    public function countVote(Request $request)
    {

        $ip = request()->ip();

        $check = Check::where('ip_check',$ip)->first();

        if($check){
            return "NO :(";
        }else{
            $this->check($ip);
        }

        $votes = $request->all();

        if(!empty($votes['place1'])){
            $place1 = Poll::where('name_short', $votes['place1'])->first();

            $place1['vote'] += 1;
            $place1['point'] += 7;

            $place1->save();
        }

        if(!empty($votes['place2'])){
            $place2 = Poll::where('name_short', $votes['place2'])->first();

            $place2['vote'] += 1;
            $place2['point'] += 4;

            $place2->save();
        }

        if(!empty($votes['place3'])){
            $place3 = Poll::where('name_short', $votes['place3'])->first();

            $place3['vote'] += 1;
            $place3['point'] += 3;

            $place3->save();
        }

        if(!empty($votes['place4'])){
            $place4 = Poll::where('name_short', $votes['place4'])->first();

            $place4['vote'] += 1;
            $place4['point'] += 2;

            $place4->save();
        }

        if(!empty($votes['place5'])){
            $place5 = Poll::where('name_short', $votes['place5'])->first();

            $place5['vote'] += 1;
            $place5['point'] += 1;

            $place5->save();
        }


        return redirect('/Poll')->with('thanks');
    }

    public function check($data)
    {
        $reply = $this->poke($data);

        if ($reply && $reply->status != 'fail') {
            $query = $reply->query;
            $proxy = $reply->proxy;
            $country = $reply->country;
            $location = $reply->lat . ',' . $reply->lon;
            $city = $reply->city;

            $user_record = new Check();
            $user_record->ip_check = $data;
            $user_record->VPN = $proxy;
            $user_record->city = $city;
            $user_record->location = $location;
            $user_record->country = $country;

            $user_record->save();
        }else{
            $user_record = new Check();
            $user_record->ip_check = $data;
            $user_record->country = $reply->status;

            $user_record->save();
        }

    }

    public function poke($data)
    {
        $url = "http://ip-api.com/json/";
        $url_back = "?fields=status,message,country,countryCode,city,lat,lon,proxy,query";
        $curl = curl_init($url . $data . $url_back);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $reply = curl_exec($curl);
        curl_close($curl);

        $reply = json_decode($reply);

        return $reply;
    }
}
