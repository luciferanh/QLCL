<?php

namespace App\Http\Services\BoPhan;

use App\Models\BoPhan;

class BoPhanService
{
    public function getAll()
    {
        return BoPhan::orderbyDesc('id')->paginate(20);
    }
}
