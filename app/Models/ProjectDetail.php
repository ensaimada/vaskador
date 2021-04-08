<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\ProjectDetailDeleted;
use App\Events\ProjectDetailSaved;

class ProjectDetail extends Model {
    use HasFactory;
    use Notifiable;    

    /**
     * Attributes that are mass assignable.
     * @var array
     */
    ## Attributes Definition ##
    protected $fillable = [
        'project_addr_line', 'project_addr_road', 'project_addr_subdistrict', 'project_addr_district', 'project_addr_province', 'project_addr_postcode',
        'project_busn_industry', 'project_busn_industry', 'user_gender']; 

    # 1:1 -- PROJECT #
    public function Project(){
        return $this->belongsTo(Project::class);
    }

    protected $dispatchesEvents = [
        'saved' => ProjectDetailSaved::class,
        'deleted' => ProjectDetailDeleted::class,
    ];
}
