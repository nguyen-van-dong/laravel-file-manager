<?php

namespace DnSoft\Media\Models;

use DnSoft\Media\Models\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mediable extends Model
{
    use HasFactory;

    protected $table = 'imageservice__mediables';

    protected $fillable = [
        'media_id',
        'group',
    ];

    public function mediable()
    {
        return $this->morphTo();
    }

    protected function media()
    {
        return $this->belongsTo(Media::class, 'media_id', 'id');
    }
}
