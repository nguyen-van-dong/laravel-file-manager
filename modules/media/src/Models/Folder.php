<?php

namespace DnSoft\Media\Models;

use DnSoft\Media\Models\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $table = 'imageservice__folders';

    protected $fillable = [
        'name',
        'parent_id',
    ];

    protected function medias()
    {
        return $this->hasMany(Media::class);
    }
}
