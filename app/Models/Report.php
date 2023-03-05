<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'report';
    
    protected $fillable = [
        'id_user',
        'title',
        'message',
        'images',
        'destination_agency',
        'status',
        'incident_date',
    ];
}
