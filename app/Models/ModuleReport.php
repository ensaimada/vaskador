<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable; 
use App\Events\ModuleReportDeleted;
use App\Events\ModuleReportSaved;

class ModuleReport extends Model {
    use HasFactory;
    use Notifiable;    

    protected $primaryKey = 'report_key';
    public $incrementing = false;
    protected $keyType = 'string';

    # M:1 -- MODULE #
    public function Module() {
        return $this->belongsTo(Module::class);
    }

    # M:1 -- PROJECT #
    public function Project() {
        return $this->belongsTo(Project::class);
    }

    protected $dispatchesEvents = [
        'saved' => ModuleReportSaved::class,
        'deleted' => ModuleReportDeleted::class,
    ];
}
