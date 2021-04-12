<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable; 
use App\Events\CollaborationDeleted;
use App\Events\CollaborationSaved;

class Collaboration extends Model {
    use HasFactory;
    use Notifiable;    

    protected $primaryKey = 'collaboration_key';
    public $incrementing = false;
    protected $keyType = 'string';

    # 1:M -- COLLABORATION ROSTER #
    public function CollaborationRoster() {
        return $this->hasOne(CollaborationRoster::class);
    }

    protected $dispatchesEvents = [
        'saved' => CollaborationSaved::class,
        'deleted' => CollaborationDeleted::class,
    ];
}
