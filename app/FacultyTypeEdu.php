<?php

namespace App;

use App\Edutype;
use Illuminate\Database\Eloquent\Model;

class FacultyTypeEdu extends Model
{
    protected $table = 'faculty_type_education';
    protected $fillable = [
    	'faculty_id',
    	'type_education_id',

    ];

    public function edu_type(){
        return $this->belongsTo(Edutype::class,'type_education_id' , 'id');
    }
}
