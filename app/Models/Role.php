<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Remove the creating event from Role model
class Role extends Model
{
    use HasFactory;

    protected $table = 'role'; // Specify the table name

    protected $fillable = [
        'roleID',
        'role',
        'description',
    ];
}
