<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SideBarDesktop extends Model
{
    use HasFactory;

    protected $table = 'sidebar_desktop';

    protected $fillable = [
     'background_color',
     'sidebar_background_color',
     'sidebar_background_opacity',
     'sidebar_section_title_color',
     'sidebar_icon_color',
     'sidebar_text_color',
     'sidebar_section_title_opacity',
     'sidebar_icon_opacity',
     'sidebar_text_opacity'
    ];
}
