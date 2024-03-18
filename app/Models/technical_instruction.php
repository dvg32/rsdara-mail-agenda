<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class technical_instruction extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function relationEmployee()
    {
        return $this->hasOne(personnel::class,'id','employee_id');
    }

    public function scopeFilter($query)
    {
        if (request('search')){
            $query->where('judul_juknis','like',''.request('search').'');
        }
    }
    public function getFormattedDateAttribute()
    {
        return Carbon::parse($this->waktu_dibuat)->isoFormat('D MMMM Y');
    }

}
