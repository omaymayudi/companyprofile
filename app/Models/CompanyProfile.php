<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'logo',
        'address',
        'phone',
        'email',
        'about',
        'services'
    ];


    public function link_companies()
    {
        return $this->hasMany(LinkCompany::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function blos()
    {
        return $this->hasMany(Blog::class);
    }
}
