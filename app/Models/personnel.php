<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class personnel extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function scopeFilter($query)
    {
        if (request('searchEmployee')){
            $query->where('nip','like',''.request('searchEmployee'). '%')
            ->orWhereRaw("LOWER(fullname) LIKE '%" . strtolower(request('searchEmployee')) . "%'");
        }
    }
    public function User() :HasOne
    {
        return $this->hasOne(User::class,'employee_id','id');
    }
}
