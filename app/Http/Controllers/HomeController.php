<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Fancy Store";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Fancy Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "Welcome to our store ! We provide various kinds of bags, shoes, clothes, watches, and others.";
        $viewData["author"] = "Developed by: Afifah Naura Kamilia";
        return view('home.about')->with("viewData", $viewData);
    }
}
