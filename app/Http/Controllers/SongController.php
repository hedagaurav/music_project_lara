<?php

namespace App\Http\Controllers;

use App\Models\MetadataData;
use Illuminate\Http\Request;

class SongController extends Controller
{
    function list(Request $request){
        $songs_list = MetadataData::with('client','status')->get();
        // dd($songs_list);
        return view('songs.list',compact('songs_list'));
    }
}
