<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkCompany extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'link',

    ];

    public function company_profile()
    {
        return $this->belongsTo(CompanyProfile::class);
    }
}
