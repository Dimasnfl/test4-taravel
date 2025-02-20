<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Transaction extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['coa'];
    
    public function coa() {
        return $this->belongsTo(Coa::class);
    }
}
