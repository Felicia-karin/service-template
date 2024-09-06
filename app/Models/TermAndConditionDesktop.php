<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermAndConditionDesktop extends Model
{
    use HasFactory;


    protected $table = 'term_and_condition_desktop';

    protected $fillable = [
     'background_color',
     'close_button_color',
     'text_color'
    ];
}
