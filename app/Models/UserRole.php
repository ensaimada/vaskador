<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    #use Notifiable;    

    # M:1 -- ROLE #
    public function Role(){
        return $this->belongsTo(Role::class);
    }

    # M:1 -- USER #
    public function User(){
        return $this->belongsTo(User::class);
    }
}
