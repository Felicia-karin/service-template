<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageDesktop extends Model
{
    use HasFactory;
    
    protected $table = 'homepage_desktop';

    protected $fillable = [
     'announcer_text',
     'background_color',
     'icon_color',
     'text_color',
     'background_opacity',
     'icon_opacity'
    ];
}
