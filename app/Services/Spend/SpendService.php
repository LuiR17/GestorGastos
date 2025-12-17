<?php

namespace App\Services\Spend;

use App\Models\Spend;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class SpendService
{
    public function getAll(): LengthAwarePaginator
    {
        $query = Spend::latest();
        return $query->paginate(Spend::PAGINATE);

    }

    public function create(array $data): Spend
    {
        $data['user_id'] = Auth::id();
        return Spend::create($data);
    }
}
