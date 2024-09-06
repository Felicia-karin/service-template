<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateMobile extends Model
{
    use HasFactory;

    protected $table = 'template_mobile';

    protected $fillable = [
     'primary',
     'secondary'
    ];
}
