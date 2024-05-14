<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MetadataData extends Model
{
    use HasFactory;

    /**
     * Get the client associated with the MetadataData
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client(): HasOne
    {
        return $this->hasOne(ClientData::class, 'id','musicLabel');
    }

    function status()
    {
        return $this->hasOne(MetadataStatus::class, 'id','status_id');
    }
}
