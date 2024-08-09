<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function homePage () {
    return view('pages.home');
}
   public function aboutPage () {
    return view('pages.about');
}
   public function coursesPage () {
    return view('pages.courses');
}
   public function blogPage () {
    return view('pages.blog');
}
}
