<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class PagesController extends Controller
{
    public function getIndex($locale = null)
    {
      if($locale == 'en')
      {
        App::setLocale('en');
        session()->put('locale', 'en');
      }
      else {
        App::setLocale('da');
        session()->put('locale', 'da');
      }

      return view('pages.index');
    }

    public function getAbout()
    {
      return view('pages.about');
    }

    public function getWork($locale)
    {
      App::setLocale($locale);
      session()->put('locale', $locale);
      return view('pages.work');
    }
}
