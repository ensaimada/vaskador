<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Events\UserDeleted;
use App\Events\UserSaved;

class User extends Model {
    use HasFactory;
    use Notifiable;    

    protected $primaryKey = 'user_key';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * Attributes that are mass assignable.
     * @var array
     */
    ## Attributes Definition ##
    protected $fillable = ['email', 'password']; 

    # 1:1 -- USER DETAIL #
    public function UserDetail() {
        return $this->hasOne(UserDetail::class);
    }

    # 1:1 -- USER ROLE #
    public function UserRole() {
        return $this->hasOne(UserRole::class);
    }

    # 1:M -- COLLABORATION ROSTER #
    public function CollaborationRoster() {
        return $this->hasMany(CollaborationRoster::class);
    }

    protected $dispatchesEvents = [
        'saved' => UserSaved::class,
        'deleted' => UserDeleted::class,
    ];

}
