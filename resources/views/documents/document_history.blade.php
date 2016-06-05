@extends('app')

@section('content')

        <!-- row -->
<div class="row">
    <div class="col-md-12">
        <!-- The time line -->
        <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    Documento criado
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->

            @foreach($document->documentHistory as $document_history)
            <li>

                {!! $document_history->action_code->font_awesome_description !!}

                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{ $document_history->created_at }}</span>
                    <h3 class="timeline-header"><a href="#">Ação: </a> {{ $document_history->action_code->description }}</h3>
                    <div class="timeline-body">
                            <strong>Responsável:</strong> {{ $document_history->user_created->name }} <br>
                            <strong>E-mail:</strong> {{ $document_history->user_created->email }} <br>
                            <strong>Nome do documento:</strong> {{ $document_history->document->original_file_name }} <br>
                    </div>
                    <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Detalhes do usuário</a>
                        <a href="{{ asset("uploads/".$document->id.".xml") }}" target="_blank" class="btn btn-primary btn-xs">Download do documento</a>
                    </div>
                </div>
            </li>

            @endforeach

            <!-- END timeline item -->
            <li>
                <i class="fa fa-clock-o bg-gray"></i>
            </li>
        </ul>
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

<input type="hidden" value="{{ $indice = '2' }}">

@endsection


