<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        return view('public.index');
    }

    public function stock()
    {
        return view('public.stock');
    }

    public function info()
    {
        return view('public.info');
    }

    public function team()
    {
        return view('public.team');
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function license()
    {
        return view('public.license');
    }

    public function review()
    {
        return view('public.review');
    }
}