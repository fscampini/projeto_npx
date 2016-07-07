<?php

namespace ProjectNpx;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'description',
        'created_by',
        'last_updated_by'
    ];

    public function user_created(){
        return $this->belongsTo('ProjectNpx\User', 'created_by');
    }

    public function user_updated(){
        return $this->belongsTo('ProjectNpx\User', 'last_updated_by');
    }

    public function menus(){
        return $this->belongsToMany('ProjectNpx\Menu');
    }

    public function permissions(){
        return $this->belongsToMany('ProjectNpx\Permission');
    }
}
