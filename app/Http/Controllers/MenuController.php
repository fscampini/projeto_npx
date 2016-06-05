<?php

namespace ProjectNpx\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use ProjectNpx\Menu;
use ProjectNpx\Http\Requests;

class MenuController extends Controller
{

    private $menuModel;

    public function __construct(Menu $menuModel)
    {
        $this->menuModel = $menuModel;
    }

    public function index(){
        $menus = $this->menuModel->paginate(5);
        return view('menu.index', compact('menus'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $rules = array(
            'route_description' => 'required',
            'font_awesome_description' => 'required',
            'name' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return Redirect::to('superuser/menu/create')->withErrors($validator);
        } else {

            try {

                $this->menuModel->create([
                    'route_description' => $request->route_description,
                    'font_awesome_description' => $request->font_awesome_description,
                    'name' => $request->name,
                    'treeview_flag' => $request->treeview_flag,
                    'created_by' => Auth::user()->id,
                    'last_updated_by' => Auth::user()->id
                ]);

            } catch (\Exception $e) {
                return Redirect::to('superuser/menu/create')->withErrors($e->getMessage());
            }
        }

        return Redirect::to('superuser/menu');
    }

    public function edit($id)
    {
        $menu = $this->menuModel->find($id);

        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'route_description' => 'required',
            'font_awesome_description' => 'required',
            'name' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return Redirect::to('superuser/menu/create')->withErrors($validator);
        } else {

            try {

                $this->menuModel->find($id)->update([
                    'route_description' => $request->route_description,
                    'font_awesome_description' => $request->font_awesome_description,
                    'name' => $request->name,
                    'treeview_flag' => $request->treeview_flag,
                    'created_by' => Auth::user()->id,
                    'last_updated_by' => Auth::user()->id
                ]);

            } catch (\Exception $e) {
                return Redirect::to('superuser/menu/create')->withErrors($e->getMessage());
            }
        }

        return Redirect::to('superuser/menu');
    }
    
    public function destroy($id)
    {
        try {

            $menuModel = $this->menuModel->find($id);
            $menuModel->delete();

        } catch (\Exception $e) {
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect()->route('superuser.menu.index');
    }


}