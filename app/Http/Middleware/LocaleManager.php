<?php namespace App\Http\Middleware;

use Closure;
use Cookie;
use App;
use Config;

class LocaleManager {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $language = Cookie::get('language', Config::get('app.locale'));
        App::setLocale($language);
        
        return $next($request);
    }

}