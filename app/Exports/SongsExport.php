<?php

namespace App\Exports;

use App\Models\MetadataData;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SongsExport implements FromCollection, WithHeadings, WithMapping
{
    protected $label;
    protected $song_name;
    protected $from_date;
    protected $to_date;
    protected $song_status;

    public function __construct($label, $song_name, $from_date, $to_date, $song_status)
    {
        $this->label = $label;
        $this->song_name = $song_name;
        $this->from_date = $from_date;
        $this->to_date = $to_date;
        $this->song_status = $song_status;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $label = $this->label;
        $song_name = $this->song_name;
        $from_date = $this->from_date;
        $to_date = $this->to_date;
        $song_status = $this->song_status;

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
            ->get();
        return $songs_list;
    }

    public function headings(): array
    {
        return [
            'Song',
            'ISRC',
            'Artist',
            'Music Label',
            'Status',
        ];
    }

    public function map($song): array
    {
        return [
            $song->songName,
            $song->isrc,
            $song->artist,
            $song->client->parentLabelCompany,
            $song->status->status_name,
        ];
    }
}
