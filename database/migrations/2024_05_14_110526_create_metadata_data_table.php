<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metadata_data', function (Blueprint $table) {
            $table->id();
            $table->text('isrc')->nullable();
            $table->text('albumName')->nullable();
            $table->text('songName')->nullable();
            $table->text('artist')->nullable();
            $table->foreignId('musicLabel')->nullable()->constrained('client_data')->nullOnDelete();
            $table->text('inlay_file_url');
            $table->foreignId('status_id')->nullable()->constrained('metadata_status')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metadata_data');
    }
};
