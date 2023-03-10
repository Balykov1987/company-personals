<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'people';
    protected $guarded = false;

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
