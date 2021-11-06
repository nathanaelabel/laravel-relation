<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $primaryKey = 'dept_id';
    protected $keyType = 'integer';

    protected $fillable = ['dept_name', 'location', 'description'];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'dept_name', 'dept_id');
    }
    
}
