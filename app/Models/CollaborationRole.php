<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#use App\Events\CollaborationRoleDeleted;
#use App\Events\CollaborationRoleSaved;

class CollaborationRole extends Model
{
    use HasFactory;
    #use Notifiable;    

    protected $primaryKey = 'collaboration_role_code';          //   double check this PK name
    public $incrementing = false;
    protected $keyType = 'char';

    # 1:M -- COLLABORATION ROSTER #
    public function CollaborationRoster(){
        return $this->hasMany(CollaborationRoster::class);
    }
}
