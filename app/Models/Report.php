<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model {
    use HasFactory;

    protected $primaryKey = 'report_key';
    public $incrementing = false;
    protected $keyType = 'string';
}
