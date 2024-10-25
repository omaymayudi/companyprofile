<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'foto',
        'description',

    ];

    public function company_profile()
    {
        return $this->belongsTo(CompanyProfile::class);
    }
}
