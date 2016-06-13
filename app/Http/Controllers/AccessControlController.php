<?php

namespace ProjectNpx\Http\Controllers;

use Illuminate\Http\Request;

use ProjectNpx\Http\Requests;
use ProjectNpx\Menu;
use ProjectNpx\User;

class AccessControlController extends Controller
{
   private $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function details($id, Menu $menu){
        $user = $this->userModel->find($id);
        $menus = $menu->all();
        return view('users.edit', compact('user', 'menus'));
    }
}
