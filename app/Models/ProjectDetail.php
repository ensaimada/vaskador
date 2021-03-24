<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\ProjectDetailDeleted;
use App\Events\ProjectDetailSaved;

class ProjectDetail extends Model
{
    use HasFactory;
    use Notifiable;    

    # 1:1 -- PROJECT #
    public function Project(){
        return $this->belongsTo(Project::class);
    }

    protected $dispatchesEvents = [
        'saved' => ProjectDetailSaved::class,
        'deleted' => ProjectDetailDeleted::class,
    ];
}
