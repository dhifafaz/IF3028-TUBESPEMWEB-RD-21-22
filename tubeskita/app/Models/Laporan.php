<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearch($query, array $keywords)
    {
        // if(isset($keywords['search']) ? $keywords['search'] : false) {
        //     return $query->where('title', 'like', '%' . $keywords['search'] . '%')
        //                 ->orWhere('description', 'like', '%' . $keywords['search'] . '%');
        // }

        $query->when($keywords['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('description', 'like', '%' . $search . '%');
        });

    }
}
