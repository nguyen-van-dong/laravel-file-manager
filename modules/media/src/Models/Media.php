<?php

namespace DnSoft\Media\Models;

use DnSoft\Media\Models\Folder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = 'imageservice__medias';

    protected $fillable = [
        'folder_id',
        'name',
        'file_name',
        'disk',
        'mime_type',
        'size',
        'alt',
        'description',
    ];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }

    protected function author()
    {
        return $this->morphTo();
    }
}
