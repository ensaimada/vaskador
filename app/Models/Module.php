<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#use App\Events\ModuleDeleted;
#use App\Events\ModuleSaved;

class Module extends Model {
    use HasFactory;
    #use Notifiable;    

    protected $primaryKey = 'module_code';              // double check this PK name
    public $incrementing = false;
    protected $keyType = 'char';

    # 1:M -- MODULE REPORT #
    public function ModuleReport() {
        return $this->hasMany(ModuleReport::class);
    }

    

    
}
