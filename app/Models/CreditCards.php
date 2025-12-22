<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditCards extends Model
{
    //
    protected $fillable = [
    'logo',
    'card_name',
    'cut_day',
    'pay_day',
    'credit_limit',
    'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public const PAGINATE = 10;
}
