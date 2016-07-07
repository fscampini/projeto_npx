<?php

namespace ProjectNpx;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'is_superuser'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function documents(){
        return $this->hasMany('ProjectNpx\Document');
    }
    
    public function documentsHistories()
    {
        return $this->hasMany('ProjectNpx\DocumentHistory');
    }

    public function menus()
    {
        return $this->belongsToMany('ProjectNpx\Menu')->where('parent_menu_id', '=', null);
    }

    public function role()
    {
        return $this->belongsTo('ProjectNpx\Role');
    }

    public function hasAnyMenu($menus)
    {
        if (is_array($menus)) {
           foreach ($menus as $menu) {
               if ($this->hasRole($menu)){
                   return true;
               }
           }
        } else {
            if ($this->hasRole($menus)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
        //if ($this->menus()->())
    }

}
