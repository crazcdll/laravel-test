<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver;

class SitesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
//        $data = [];
//        $data['first'] = 'zcdll';
//        $data['last'] = 'zhang';
        $first = 'zcdll';
        $last = 'zhang';
        $people = ['a', 'b', 'c'];
//        $people = [];
        return view('sites.about', compact('first', 'last', 'people'));
//        return view('sites.about')->with([
//            'first' => 'zcdll',
//            'last' => 'zhang'
//        ]);
    }

    public function contact()
    {
        $first = 'zcdll';
        return view('sites.contact', compact('first'));
    }
}

