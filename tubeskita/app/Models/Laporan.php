<?php

namespace App\Models;

use App\Models\User;
use App\Models\set_library;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
                        ->orWhere('description', 'like', '%' . $search . '%')
                        ->orderBy('created_at', 'desc');
        });

    }

    public function category()
    {
        return $this->belongsTo(set_library::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type()
    {
        return $this->belongsTo(set_library::class, 'laporan_type_id');
    }

    public function status()
    {
        return $this->belongsTo(set_library::class, 'status_id');
    }


}
