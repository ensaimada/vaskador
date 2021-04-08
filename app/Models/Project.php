<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\ProjectDeleted;
use App\Events\ProjectSaved;

class Project extends Model {
    use HasFactory;
    use Notifiable;    

    protected $primaryKey = 'project_key';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * Attributes that are mass assignable.
     * @var array
     */
    ## Attributes Definition ##
    protected $fillable = ['project_title', 'project_description']; 

    # 1:1 -- PROJECT DETAIL #
    public function ProjectDetail() {
        return $this->hasOne(ProjectDetail::class);
    }

    # 1:1 -- COLLABORATION #
    public function CollaborationRoster() {
        return $this->hasOne(CollaborationRoster::class);
    }

    # 1:M -- MODULE REPORT #
    public function ModuleReport() {
        return $this->hasMany(ModuleReport::class);
    }

    protected $dispatchesEvents = [
        'saved' => ProjectSaved::class,
        'deleted' => ProjectDeleted::class,
    ];
    

}
