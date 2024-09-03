<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = ['name'];

    public function pomodoros(){
        return $this->belongsTo(Pomodoros::class);
    }

    public function projects(){
        return $this->belongsTo(Projects::class);
    }

    public function tasks(){
        return $this->belongsTo(Tasks::class);
    }
}
