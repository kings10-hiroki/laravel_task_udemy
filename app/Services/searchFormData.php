<?php

namespace App\Services;

use App\Http\Requests\StoreContactForm;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchFormData
{
    public static function editFormData($data, $query)
    {
        $search_split = mb_convert_kana($data, 's');

        $search_split2 = preg_split('/[\s]+/', $search_split, -1, PREG_SPLIT_NO_EMPTY);

        foreach ($search_split2 as $value) {
            $data = $query->where('your_name', 'like', '%' . $value . '%');
        }

        return $data;
    }
}
