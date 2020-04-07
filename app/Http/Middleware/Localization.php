<?php

namespace App\Http\Middleware;

use Closure;
use App;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
     {
       // Getting URL Parameters.
       if(!in_array($request->route('lang'), ['da', 'en']))
       {
         // Setting default lang
         $locale = 'da';
         // Setting locale
         App::setLocale($locale);
         session()->put('locale', $locale);
         return redirect()->route($request->route()->getName(), $locale);
       }
       else
       {
         $locale = $request->route('lang');
       }
       // Setting locale
       App::setLocale($locale);
       session()->put('locale', $locale);

       // if (session()->has('locale')) {
       //     App::setLocale(session()->get('locale'));
       // }

       return $next($request);
     }
}
