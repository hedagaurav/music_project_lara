<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetadataDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metadata_data')->insert([
            ['isrc' => '2200001', 'albumName' => 'Album 01', 'songName' => 'Namo Namo', 'artist' => 'artist1,artist29', 'musicLabel' => 3, 'inlay_file_url' => '2200001.jpg', 'status_id' => 3, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '2200002', 'albumName' => 'Album 02', 'songName' => 'Me Hu Don', 'artist' => 'artist20,artist3,artist1', 'musicLabel' => 2, 'inlay_file_url' => '2200002.jpg', 'status_id' => 8, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '2200003', 'albumName' => 'Album 03', 'songName' => 'Tu Kya Lagte Ho', 'artist' => 'artist4,artist2', 'musicLabel' => 2, 'inlay_file_url' => '2200003.jpg', 'status_id' => 4, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '2200004', 'albumName' => 'Album 04', 'songName' => 'Challo Challo', 'artist' => 'artist5', 'musicLabel' => 3, 'inlay_file_url' => '2200004.jpg', 'status_id' => 2, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '2200005', 'albumName' => 'Album 05', 'songName' => 'Mere Liye', 'artist' => 'artist8,artist14', 'musicLabel' => 3, 'inlay_file_url' => '2200005.jpg', 'status_id' => 8, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '2200006', 'albumName' => 'Album 06', 'songName' => 'Dheere Dheere', 'artist' => 'artist8', 'musicLabel' => 3, 'inlay_file_url' => '2200006.jpg', 'status_id' => 8, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '2200007', 'albumName' => 'Album 07', 'songName' => 'Tere Bina Jina', 'artist' => 'artist5,artist1', 'musicLabel' => 2, 'inlay_file_url' => '2200007.jpg', 'status_id' => 2, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '2200008', 'albumName' => 'Album 08', 'songName' => 'Me Hu Hero', 'artist' => 'artist1', 'musicLabel' => 2, 'inlay_file_url' => '2200008.jpg', 'status_id' => 8, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '2200009', 'albumName' => 'Album 09', 'songName' => 'Tum Jo Aaye', 'artist' => 'artist6', 'musicLabel' => 3, 'inlay_file_url' => '2200009.jpg', 'status_id' => 8, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '22000010', 'albumName' => 'Album 10', 'songName' => 'Beta Ke Bina', 'artist' => 'artist7', 'musicLabel' => 3, 'inlay_file_url' => '22000010.jpg', 'status_id' => 3, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '22000011', 'albumName' => 'Album 11', 'songName' => 'Lal Duptta', 'artist' => 'artist9,artist3', 'musicLabel' => 1, 'inlay_file_url' => '22000011.jpg', 'status_id' => 8, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '22000012', 'albumName' => 'Album 12', 'songName' => 'Keasriya', 'artist' => 'artist3', 'musicLabel' => 3, 'inlay_file_url' => '22000012.jpg', 'status_id' => 8, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '22000013', 'albumName' => 'Album 13', 'songName' => 'Blue Eyes', 'artist' => 'artist15', 'musicLabel' => 3, 'inlay_file_url' => '22000013.jpg', 'status_id' => 3, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '22000014', 'albumName' => 'Album 14', 'songName' => 'Dhire Dhire Se', 'artist' => 'artist3', 'musicLabel' => 1, 'inlay_file_url' => '22000014.jpg', 'status_id' => 8, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '22000015', 'albumName' => 'Album 15', 'songName' => 'Dhire Dhire Bola Ye', 'artist' => 'artist5,artist8', 'musicLabel' => 3, 'inlay_file_url' => '22000015.jpg', 'status_id' => 8, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '22000016', 'albumName' => 'Album 16', 'songName' => 'Duniya Ek Numberi', 'artist' => 'artist1', 'musicLabel' => 3, 'inlay_file_url' => '22000016.jpg', 'status_id' => 4, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '22000017', 'albumName' => 'Album 17', 'songName' => 'Bade Miya Chote Miya', 'artist' => 'artist5', 'musicLabel' => 2, 'inlay_file_url' => '22000017.jpg', 'status_id' => 8, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '22000018', 'albumName' => 'Album 18', 'songName' => 'Get Lost', 'artist' => 'artist5,artist9,artist10', 'musicLabel' => 3, 'inlay_file_url' => '22000018.jpg', 'status_id' => 8, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '22000019', 'albumName' => 'Album 19', 'songName' => 'Me Hu Khal Nayak', 'artist' => 'artist3', 'musicLabel' => 1, 'inlay_file_url' => '22000019.jpg', 'status_id' => 3, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['isrc' => '22000020', 'albumName' => 'Album 20', 'songName' => 'Lets Go', 'artist' => 'artist2', 'musicLabel' => 3, 'inlay_file_url' => '22000020.jpg', 'status_id' => 8, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
        ]);
    }
}
