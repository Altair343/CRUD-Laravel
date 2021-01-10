@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{!!  asset('css/papelera.css') !!}">
@endsection

@section('contentData')
    <div class=" title">
        <h1>Papelera</h1>
        <div class="slogan">
            <p>Recuerda todas tus ideas</p>
        </div>
    </div>
    <div class="contantData-papelera">
        <div class="card-table">
            <div class="card__title">
                <div class="card__title-title">Título</div>
                <div class="card__title-modifi">Modificado</div>
                <div class="card__title-type">Tipo</div>
                <div class="card__title-action">Acción</div>
            </div>
            @if (!empty($dataNotes))
                @foreach ($dataNotes as $note)

                    <div class="card__body">
                        <div class="card__body-title">{{$note->title}}</div>
                        <div class="card__body-modifi">{{$note->updated_at}}</div>

                        @if ($note->type === 'link')
                            <div class="card__body-type">Link</div>
                        @else
                            <div class="card__body-type">Recordatorio</div>
                        @endif

                        <div class="card__body-action">
                            <div class="icon"><a href="{{ route('paper.arch', ['id' => $note->id]) }}" class="res"><i class="fas fa-trash-restore"></i></a></div>
                            <div class="icon"><a href="{{ route('paper.delet', ['id' => $note->id]) }}" class="del"><i class="fas fa-trash"></i></a></div>
                        </div>
                    </div>

                @endforeach
            @endif

        </div>
    </div>


@endsection
