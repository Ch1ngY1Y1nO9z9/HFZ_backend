<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;

class getLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

        $language = '';
        $cookieLanguage = $request->cookie('lang');
        $paramLanguage = $request->route()->parameter('lang');
        $envLanguage = config('app.locale');

        if(!empty($paramLanguage)){
            $language = $paramLanguage;
        }else{
            if(!empty($cookieLanguage)){
                $language = $cookieLanguage;
            }else{
                $language = $envLanguage;
            }

        }

        if(!file_exists(base_path().'/resources/lang/'.$language)){
            if(!empty($cookieLanguage) and $language != $cookieLanguage){
                $language = $cookieLanguage;
            }else if(!epmty($paramLanguage) and $language != $paramLanguage){
                $language = $paramLanguage;
            }else if(!empty($envLanguage) and $language != $envLanguage){
                $language = $envLanguage;
            }
        }

        if($language != $cookieLanguage){
            Cookie::queue('lang', $language, 1000*60*60*24*365);
        }

        if($language != $paramLanguage){
            return redirect('/admin/'.$language);
        }

        return $next($request);
    }
}
