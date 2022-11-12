<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorizedPeople extends Model
{
    use HasFactory;

    protected $fillable = [ 'first_name',
                            'last_name',
                            'position',
                            'phone_number',
                            'email',
                            'image', ];
}
