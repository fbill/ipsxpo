<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        Return view('ips/index');
    }
    public function about()
    {
        return view('ips/about');
    }
    public function advantage()
    {
        return view('ips/advantage');
    }
    public function quote()
    {
        return view('ips/quote');
    }
    public function products()
    {
        return view('ips/products');
    }
    public function faq()
    {
        return view('ips/faq');
    }
    public function contact()
    {
        return view('ips/contact');
    }
    public function request_budget()
    {
        return view('ips/request');
    }
}
