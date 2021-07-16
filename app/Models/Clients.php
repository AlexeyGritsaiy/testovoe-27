<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $fillable = [
        'companies_id',
        'firstName',
        'secondName',
        'lastName',
        'email',
        'phone',

    ];

    public function company()
    {
        return $this->belongsTo(Company::class,'companies_id','id');
    }
}
