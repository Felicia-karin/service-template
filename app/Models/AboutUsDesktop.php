<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsDesktop extends Model
{
    use HasFactory;

    protected $table = 'about_us_desktop';

    protected $fillable = [
     'wrapped_background_color',
     'wrapped_border_color',
     'title_text_color',
     'content_text_color',
     'wrapper_background_opacity',
     'wrapper_border_opacity',
     'title_text_opacity',
     'content_text_opacity'
    ];
}
