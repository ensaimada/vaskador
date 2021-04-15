<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model {
    use HasFactory;
    #use Notifiable;    

    /**
     * Attributes that are mass assignable.
     * @var array
     */
    ## Attributes Definition ##
    protected $fillable = [
                            'role_name', 
                            'role_description'
                        ]; 

    # 1:M -- USER ROLE #
    public function UserRole() {
        return $this->hasMany(UserRole::class);
    }
}
