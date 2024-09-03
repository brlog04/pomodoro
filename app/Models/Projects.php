<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projects extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'name',
        'description',
        'note',
        'client_id',
        'status_id',
        'start_date',
        'end_date',
        'created_by',
        'deleted_by'
    ];

    public function status(){
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function pomodoros(){
        return $this->hasMany(Pomodoros::class);
    }

    public function tasks(){
        return $this->hasMany(Tasks::class);
    }

    public function client(){
        return $this->belongsTo(Clients::class);
    }

    public function createdBy(){
        return $this->belongsTo(User::class, 'created_by');
    }

}
