<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicMarks extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'class_x_school_name', 'class_x_completion_year', 'class_x_marksheet', 
        'class_x_eng', 'class_x_dzo', 'class_x_mat', 'class_x_phy', 'class_x_che', 'class_x_bio', 'class_x_eco', 'class_x_his', 'class_x_geo', 'class_x_it', 'class_x_percentage',
        'class_xii_school_name', 'class_xii_completion_year', 'class_xii_marksheet', 
        'class_xii_eng', 'class_xii_dzo', 'class_xii_mat', 'class_xii_com', 'class_xii_eco', 'class_xii_acc', 'class_xii_it', 'class_xii_percentage',
        'stream', 'stream_eng', 'stream_dzo', 'stream_mat', 'stream_phy', 'stream_che', 'stream_bio', 'stream_it', 'stream_percentage',
        'arts_eng','arts_dzo','arts_mat','arts_geo','arts_his','arts_it','arts_percentage',
    ];
}
