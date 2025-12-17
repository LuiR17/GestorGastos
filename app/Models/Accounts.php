<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    //
    protected $fillable = [
        'service_name',
        'price',
        'renovation',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public const PAGINATE = 10;
}
