<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'foto',
        'treaser',
        'body'

    ];


    public function company_profile()
    {
        return $this->belongsTo(CompanyProfile::class);
    }
}
