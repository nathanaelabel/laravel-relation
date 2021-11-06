<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'emp_id';
    protected $keyType = 'integer';

    protected $fillable = ['emp_name', 'job_position', 'gender', 'hire_date', 'dept_name'];
    
    public function departments()
    {
        return $this->belongsTo(Department::class, 'dept_name', 'dept_id');
    }
    
}
