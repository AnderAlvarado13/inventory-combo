<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'document_type', 'document_number', 'position', 'department'];

    public function assets()
    {
        return $this->hasMany(CompanyAsset::class);
    }

    public function companyAssets()
    {
        return $this->hasMany(CompanyAsset::class);
    }

    public function logs()
    {
        return $this->hasMany(Log::class);
    }
}
