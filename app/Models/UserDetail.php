<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\UserDetailDeleted;
use App\Events\UserDetailSaved;

class UserDetail extends Model
{
    use HasFactory;
    use Notifiable;    

    # 1:1 -- USER #
    public function User(){
        return $this->belongsTo(User::class);
    }

    protected $dispatchesEvents = [
        'saved' => UserDetailDeleted::class,
        'deleted' => UserDetailSaved::class,
    ];
}
