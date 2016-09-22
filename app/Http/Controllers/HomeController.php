<?php namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $data['title'] = 'Home';

        return view('home.index',$data);
    }
}
