<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class OrganizationUnit extends Model
{
    use HasFactory, NodeTrait;

    protected $fillable = [
        'name',
        'short_name',
        'is_company',
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_has_organization_units', 'organization_unit_id', 'employee_id')
            ->withPivot('start_date', 'job_role_id')
            ->withTimestamps();
    }

    public function getNavigationPath()
    {
        $nodes = Self::ancestorsAndSelf($this->id);
        $path = collect($nodes)->map(function($node){
            $obj = new \stdClass();
            $obj->unit_id = $node->id;
            $obj->name = $node->name;
            
            return $obj;
        });
        
        return $path;
    }
}
