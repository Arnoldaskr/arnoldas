<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['vardas', 'pavarde', 'telefonas', 'el_pastas', 'company_id'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}

