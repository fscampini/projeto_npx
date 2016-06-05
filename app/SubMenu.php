<?php

namespace ProjectNpx;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    protected $fillable = [
        'route_description',
        'name',
        'menu_id',
        'created_by',
        'last_updated_by'
    ];

    public function user_created(){
        return $this->belongsTo('ProjectNpx\User', 'created_by');
    }

    public function user_updated(){
        return $this->belongsTo('ProjectNpx\User', 'last_updated_by');
    }

    public function menu(){
        return $this->belongsTo('ProjectNpx\Menu');
    }
}
