<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ButtonDesktop extends Model
{
    use HasFactory;

    protected $table = 'button_desktop';

    protected $fillable = [
     'button_color',
     'login_button_background_color',
     'login_button_border_color',
     'login_button_background_hover_color',
     'login_button_background_selected_color',
     'login_button_background_hover_color',
     'login_button_text_color',
     'login_button_background_opacity',
     'login_button_border_opacity',
     'login_button_hover_opacity',
     'login_button_selected_opacity',
     'login_button_text_opacity'
    ];
}
