<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Special;

class HomeController extends Controller
{
    public function index(){

        $pages = Page::All();
        
        $pageDetail = Page::where('id', 1)->first();

        $specials = Special::ALL();

        return view('website.home',['pages' => $pages ,'pageDetail' => $pageDetail , 'specials' => $specials]);
    }

    public function page($pageid){

        $pages = Page::All();

        $specials = Special::ALL();

        $pageDetail = Page::where('id', $pageid)->first();

        return view('website.home',['pages' => $pages ,'pageDetail' => $pageDetail,'specials' => $specials]);

    }
    
    public function specialEntry($id){


        $special = Special::where('id',$id)->first();

        

        return view('website.special-entry',['special' => $special]);

    }
}

