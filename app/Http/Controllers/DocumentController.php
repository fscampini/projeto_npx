<?php

namespace ProjectNpx\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ProjectNpx\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use ProjectNpx\Document;
use ProjectNpx\DocumentHistory;
use DateTime;

class DocumentController extends Controller
{
    private $documentModel;

    public function __construct(Document $documentModel)
    {
        $this->documentModel = $documentModel;
    }

    public function index(){
        return view('documents.upload_documents');
    }

    public function monitor(){

        $documents = $this->documentModel->paginate(5);

        return view('documents.monitor_documents', compact('documents'));
    }

    public function post_upload(Request $request, Document $document){

        // regra para validação das características do arquivo.
        $rules = array(
            'file' => 'required|max:10000',
        );

        $validator = Validator::make($request->all(), $rules);


        if ($validator->fails()){
            return response()->json('error', 400);
        } else {

            $partner = 'UNIMED';

            $original_filename = $request->file('file')->getClientOriginalName();

            $docInfo = $document::create([
                'original_file_name' => $original_filename,
                'partner' => $partner,
                'created_by' => Auth::user()->id,
                'last_updated_by' => Auth::user()->id
            ]);

            $new_filename = $docInfo->id.'.'.$request->file('file')->getClientOriginalExtension();

            Storage::disk('public_local')->put($new_filename, $original_filename);

            $this->maintain_history(1, Auth::user()->id, $docInfo->id, null);

            return response()->json('Arquivo carregado com sucesso!', 200);
        }
    }


    public function document_history($id, Document $document)
    {
        $document = $document::find($id);
        $document_history = $document->document_history;

        return view('documents.document_history', compact('document'));
    }



    // Métodos auxiliares
    public function generate_filename($extension)
    {
        // gerando o nome do arquivo com milisegundos
        $time = microtime(true);
        $datetime = new DateTime();
        $datetime->setTimestamp($time);
        $format = $datetime->format('H:i:s U');
        //var_dump($format);

        return str_replace(' ', '', str_replace(':','',$format)).'.'.$extension;
    }

    public function maintain_history($action_code_id, $user_id, $document_id)
    {
        DocumentHistory::create([
            'action_code_id' => $action_code_id,
            'created_by' => $user_id,
            'document_id' => $document_id
        ]);
    }
}
