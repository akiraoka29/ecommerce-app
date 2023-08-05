<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'banner_id';

    protected $fillable = [
        'banner_id', 'title', 'description', 'tag', 'redirect_url', 'show_button', 'order', 'file_name', 'file_path'
    ];
}
