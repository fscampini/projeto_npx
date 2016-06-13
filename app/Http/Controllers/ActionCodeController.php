<?php

namespace ProjectNpx\Http\Controllers;

use Illuminate\Http\Request;

use ProjectNpx\ActionCode;
use ProjectNpx\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ActionCodeController extends Controller
{
    private $actionCodeModel;

    public function __construct(ActionCode $actionCodeModel)
    {
        $this->actionCodeModel = $actionCodeModel;
    }

    public function index(){
        $action_codes = $this->actionCodeModel->paginate(5);
        return view('action_code.index', compact('action_codes'));
    }

    public function create()
    {
        return view('action_code.create');
    }

    public function store(Request $request)
    {
        $rules = array(
            'description' => 'required',
            'font_awesome_description' => 'required',
            'status_label' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return Redirect::to('superuser/action_code/create')->withErrors($validator);
        } else {

            try {

                $this->actionCodeModel->create([
                    'description' => $request->description,
                    'font_awesome_description' => $request->font_awesome_description,
                    'status_label' => $request->status_label,
                    'created_by' => Auth::user()->id,
                    'last_updated_by' => Auth::user()->id
                ]);

            } catch (\Exception $e) {
                return Redirect::to('superuser/action_code/create')->withErrors($e->getMessage());
            }
        }

        return Redirect::to('superuser/action_code');
    }

    public function edit($id)
    {
        $action_code = $this->actionCodeModel->find($id);

        return view('action_code.edit', compact('action_code'));
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'description' => 'required',
            'font_awesome_description' => 'required',
            'status_label' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return back()->withErrors($validator);
        } else {

            try {

                $this->actionCodeModel->find($id)->update([
                    'description' => $request->description,
                    'font_awesome_description' => $request->font_awesome_description,
                    'status_label' => $request->status_label,
                    'created_by' => Auth::user()->id,
                    'last_updated_by' => Auth::user()->id
                ]);

            } catch (\Exception $e) {
                return back()->withErrors($e->getMessage());
            }
        }

        return Redirect::to('superuser/action_code');
    }

    public function destroy($id)
    {
        try {

            $actionCodeModel = $this->actionCodeModel->find($id);
            $actionCodeModel->delete();

        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }

        return redirect()->route('superuser.action_code.index');
    }
}
