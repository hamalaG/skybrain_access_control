<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorizedVehicles extends Model
{
    use HasFactory;

    protected $fillable = [ 'plate_number',
                            'vehicle_type',
                            'vehicle_model',
                            'vehicle_owner',];
}
