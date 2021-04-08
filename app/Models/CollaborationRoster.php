<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#use App\Events\CollaborationRosterDeleted;
#use App\Events\CollaborationRosterSaved;

class CollaborationRoster extends Model {
    use HasFactory;
    #use Notifiable;    

    # M:1 -- COLLABORATION #
    public function Collaboration(){
        return $this->belongsTo(Collaboration::class);
    }

    # M:1 -- COLLABORATION #
    public function CollaborationRole(){
        return $this->belongsTo(CollaborationRole::class);
    }

    # M:1 -- USER #
    public function User(){
        return $this->belongsTo(User::class);
    }

    
}
