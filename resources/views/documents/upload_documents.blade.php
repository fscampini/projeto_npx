
@extends('app')

@section('content')

    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                <h3 class="box-title">Upload de XMLs</h3>
            </div>
            {!! Form::open
                        ([
                            'route'=>['documents.upload'],
                            'method'=>'post',
                            'enctype'=>"multipart/form-data",
                            'class' => "dropzone",
                            'id' => "myAwesomeDropzone"
                        ])
                    !!}

            {!! Form::close() !!}
        </div>
    </div>

    <!-- Aqui embaixo o template do envio dos arquivos -->
    <div class="table table-striped" class="files" id="previews">
        <div id="template" class="file-row">
            <!-- This is used as the file preview template -->
            <div>
                <p class="name" data-dz-name></p>
                <strong class="error text-danger" data-dz-errormessage></strong>
            </div>
            <div>
                <p class="size" data-dz-size></p>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    <div class="progress-bar" style="width:0%;" data-dz-uploadprogress></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("javascript")
    <script>
        // buscando o template em html para exibição dos envios dos arquivos.
        var previewNode = document.querySelector("#template");
        previewNode.id = "";
        var previewTemplate = previewNode.parentNode.innerHTML;
        previewNode.parentNode.removeChild(previewNode);

        // "myAwesomeDropzone" is the camelized version of the HTML element's ID
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB,
            dictDefaultMessage: "Arraste os arquivos XML's para esta área.",
            previewTemplate: previewTemplate,
            previewsContainer: null,
            acceptedFiles: ".xml",
            accept: function(file, done) {
                if (file.name == "teste.jpg") {
                    done("Naha, you don't.");
                }
                else { done(); }
            }
        };
    </script>

    {{ $indice = '1' }}
@endsection