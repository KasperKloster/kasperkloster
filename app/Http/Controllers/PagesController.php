<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class PagesController extends Controller
{
    public function getIndex($locale)
    {      
      App::setLocale($locale);
      session()->put('locale', $locale);
      return view('pages.index');
    }

    public function getAbout($locale)
    {
      App::setLocale($locale);
      session()->put('locale', $locale);
      return view('pages.about');
    }

    public function getWork($locale)
    {
      App::setLocale($locale);
      session()->put('locale', $locale);
      return view('pages.work');
    }
}
