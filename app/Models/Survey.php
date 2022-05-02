<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Survey extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'survey_answers';
    protected $fillable = [
        'comp_584',
        'comp_333',
        'comp_484',
        'comp_424',
        'comp_583',
    ];
}
