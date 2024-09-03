<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tasks extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'name',
        'description',
        'note',
        'status_id',
        'user_id',
        'project_id',
        'start_date',
        'end_date',
        'completed_on',
        'deleted_by'
    ];

    public function project(){
        return $this->belongsTo(Projects::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
