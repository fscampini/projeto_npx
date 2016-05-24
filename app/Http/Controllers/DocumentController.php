<?php

namespace ProjectNpx\Http\Controllers;

use Illuminate\Http\Request;
use ProjectNpx\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DocumentController extends Controller
{
    public function monitor(){
        return view('documents.monitor_documents');
    }

    public function post_upload(Request $request){

        $rules = array(
            'file' => 'required|max:10000',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return response()->json('error', 400);
        } else {
            $file = $request->file('file')->getClientOriginalName();

            Storage::disk('public_local')->put($file, $file);
            return response()->json('Arquivo carregado com sucesso!', 400);
        }
    }
}
