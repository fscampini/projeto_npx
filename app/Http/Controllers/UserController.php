<?php

namespace ProjectNpx\Http\Controllers;

use Illuminate\Http\Request;

use ProjectNpx\Http\Requests;
use ProjectNpx\Menu;
use ProjectNpx\Role;
use ProjectNpx\User;

class UserController extends Controller
{
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function index(){
        $users = $this->userModel->paginate(6);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return Redirect::to('admin/user/create')->withErrors($validator);
        } else {

            try {

                $this->userModel->create([
                    'name' => $request->name,
                    'email' => $request->description,
                    'password' => bcrypt($request->password)
                ]);

            } catch (\Exception $e) {
                return Redirect::to('admin/user/create')->withErrors($e->getMessage());
            }
        }

        return Redirect::to('admin/user');
    }

    public function edit($id, Menu $menu, Role $role)
    {
        $user_menus = $this->userModel->find($id)->menus;
        $menus = $menu->where('parent_menu_id', '=', null)->get();
        $roles = $role->all();
        $user = $this->userModel->find($id);
        return view('users.edit', compact('user_menus', 'menus', 'user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        /* Exemplo de autorização
         * $menu = Menu::find(1);
         * $this->authorize('update', $menu);
         */

        $rules = array(
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return back()->withErrors($validator);
        } else {

            try {

                $this->userModel->find($id)->update([
                    'name' => $request->name,
                    'email' => $request->description,
                    'password' => bcrypt($request->password)
                ]);

            } catch (\Exception $e) {
                return back()->withErrors($e->getMessage());
            }
        }

        return Redirect::to('admin/user');
    }

    public function destroy($id)
    {
        try {

            $userModel = $this->userModel->find($id);
            $userModel->delete();

        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }

        return redirect()->route('admin.user.index');
    }

    public function attach(Request $request){

        //dd($request->content->name);

        if ($request->ajax()) {

            try{

                if($request->menu_ids == ""){
                    $array_menus = [];
                } else {
                    $array_menus = $request->menu_ids;
                }
                $this->userModel->find($request->user_id)->menus()->sync($array_menus);

                $content = ['status' => 'true'];
            } catch (\Exception $e) {
                $content = [
                    'status' => 'false',
                    'error_message' => $e->getMessage()
                ];
            }

        } else {
            $content = ['status' => 'false',
                'error_message' => 'Requisição ao servidor inválida!'];
        }

        return $content;
    }
}
