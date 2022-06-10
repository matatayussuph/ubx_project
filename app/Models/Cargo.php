<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;
    protected $table = 'cargo';

    protected $guarded = [];
    
    // protected $fillable = [
    //     'cargo_no',
    //     'cargo_type',
    //     'weight',
    //     'cargo_size',
    //     'remarks',
    //     'wharfage',
    //     'storage',
    //     'penalty',
    //     'electricity',
    //     'destuffing',
    //     'lifting'
    // ];
}
