<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table="services_category";

    protected $primaryKey = 'category_id';


    public function serviceDetails()
    {
        return $this->hasMany(ServicesDetail::class);
    }
}
