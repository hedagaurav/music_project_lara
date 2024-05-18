<?php

namespace App\Http\Controllers;

use App\Exports\SongsExport;
use App\Models\MetadataData;
use App\Models\MetadataStatus;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class SongController extends Controller
{
    function list(Request $request)
    {
        try {
            if ($request->method() == 'POST') {
                // dd($request->input());
                $label = $request->input('label_name');
                $song_name = $request->input('song_name');
                $from_date = $request->input('from_song_date');
                $to_date = $request->input('to_song_date');
                $song_status = $request->input('song_status');

                // DB::enableQueryLog();
                $status_list = MetadataStatus::all();

                if ($from_date) {
                    $from_date = Carbon::parse($from_date)->format('Y-m-d');
                }
                if ($to_date) {
                    $to_date = Carbon::parse($to_date)->format('Y-m-d');
                }
                $songs_list = MetadataData::with(['client', 'status'])
                    ->when($label, function ($query) use ($label) {
                        return $query->whereHas('client', function ($query) use ($label) {
                            $query->where('parentLabelCompany', 'like', "%{$label}%");
                        });
                    })
                    ->when($song_status, function ($query) use ($song_status) {
                        return $query->whereHas('status', function ($query) use ($song_status) {
                            $query->where('status_id', '=', $song_status);
                        });
                    })
                    ->when($song_name, function ($query) use ($song_name) {
                        return $query->where('songName', 'like', "%{$song_name}%");
                    })
                    ->when($from_date && $to_date, function ($query) use ($from_date, $to_date) {
                        return $query->whereBetween('created_at', [$from_date, $to_date]);
                    })
                    // ->select('songName')
                    ->get();

                // dd(DB::getQueryLog());
                // dd($songs_list->toArray());
                return view('songs.list', compact('songs_list', 'status_list'));
            } else {
                $songs_list = MetadataData::with('client', 'status')->get();
                $status_list = MetadataStatus::all();
                return view('songs.list', compact('songs_list', 'status_list'));
            }
        } catch (Exception $ex) {
            // print_r($ex);
        }
    }

    function export_data(Request $request)
    {
        $label = $request->input('label_name');
        $song_name = $request->input('song_name');
        $from_date = $request->input('from_song_date');
        $to_date = $request->input('to_song_date');
        $song_status = $request->input('song_status');

        if ($from_date) {
            $from_date = Carbon::parse($from_date)->format('Y-m-d');
        }
        if ($to_date) {
            $to_date = Carbon::parse($to_date)->format('Y-m-d');
        }
        return Excel::download(new SongsExport($label, $song_name, $from_date, $to_date, $song_status), 'Songs.xlsx');
    }
}
