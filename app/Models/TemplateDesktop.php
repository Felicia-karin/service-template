<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateDesktop extends Model
{
    use HasFactory;

    protected $table = 'template_desktop';

    protected $fillable = [
     'primary',
     'secondary'
    ];
}
