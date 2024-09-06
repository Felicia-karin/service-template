<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermAndConditionMobile extends Model
{
    use HasFactory;

    protected $table = 'term_and_condition_mobile';

    protected $fillable = [
     'background_color',
     'close_button_color',
     'text_color'
    ];
}
