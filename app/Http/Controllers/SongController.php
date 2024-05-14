<?php

namespace App\Http\Controllers;

use App\Models\MetadataData;
use App\Models\MetadataStatus;
use Illuminate\Http\Request;

class SongController extends Controller
{
    function list(Request $request){
        $songs_list = MetadataData::with('client','status')->get();
        $status_list = MetadataStatus::all();
        // dd($songs_list);
        return view('songs.list',compact('songs_list','status_list'));
    }
}
