<?php

namespace App\Http\Controllers;
use App\picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class paginationController extends Controller
{
    //

    public function index(){
        //$images = picture::paginate(2);
        $images = DB::table('pictures')->paginate(4);
        return view('pagination',['images' => $images]);
    }
}
