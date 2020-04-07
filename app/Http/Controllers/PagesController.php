<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class PagesController extends Controller
{
    public function getIndex($locale = null)
    {
      return view('pages.index');
    }

    public function getAbout($locale)
    {
      return view('pages.about');
    }

    public function getWork($locale)
    {
      return view('pages.work');
    }
}
