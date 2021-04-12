<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable; 
use App\Events\UserDetailDeleted;
use App\Events\UserDetailSaved;

class UserDetail extends Model {
    use HasFactory;
    use Notifiable;    

    /**
     * Attributes that are mass assignable.
     * @var array
     */
    ## Attributes Definition ##
    protected $fillable = ['user_name_title', 'user_name_given', 'user_name_middle', 'user_name_last', 'user_dateofbirth', 'user_gender']; 

    # 1:1 -- USER #
    public function User(){
        return $this->belongsTo(User::class);
    }

    protected $dispatchesEvents = [
        'saved' => UserDetailDeleted::class,
        'deleted' => UserDetailSaved::class,
    ];
}
