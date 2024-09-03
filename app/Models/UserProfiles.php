<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfiles extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'facebook',
        'twitter',
        'googleplus',
        'linkedin',
        'about',
        'website',
        'phone',
        'deleted_by'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
