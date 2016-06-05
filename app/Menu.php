<?php

namespace ProjectNpx;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'route_description',
        'font_awesome_description',
        'name',
        'treeview_flag',
        'created_by',
        'last_updated_by'
    ];

    public function user_created(){
        return $this->belongsTo('ProjectNpx\User', 'created_by');
    }

    public function user_updated(){
        return $this->belongsTo('ProjectNpx\User', 'last_updated_by');
    }

    public function documentHistory(){
        return $this->hasMany('ProjectNpx\SubMenu');
    }

    public function users()
    {
        return $this->belongsToMany('ProjectNpx\User');
    }

    public function sub_menus()
    {
        return $this->hasMany('ProjectNpx\SubMenu');
    }

    public function treeview_flag()
    {
        switch ($this->attributes['treeview_flag'])
        {
            case 0:
                return 'Falso';
                break;
            case 1:
                return 'Verdadeiro';
                break;
        }
    }
}
