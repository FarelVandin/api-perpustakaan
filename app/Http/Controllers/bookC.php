<?php

namespace App\Http\Controllers;

use App\Models\bookM;
use Illuminate\Http\Request;
use App\Http\Resources\bookR;

class bookC extends Controller
{
    public function index(){
        $books = bookM::all();
        return bookR::collection($books);
    }
    public function detail($id){
        $books = bookM::findOrfail($id);
        return new bookR($books);
    }
}

