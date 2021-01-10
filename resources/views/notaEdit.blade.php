@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{!!  asset('css/noteEdit.css') !!}">
@endsection

@section('contentData')
    <div class=" title">
        <h1>Editar la nota</h1>
        <div class="slogan">
            <p>Recuerda todas tus ideas</p>
        </div>
    </div>
    <div class="contentNotes">
        <div class="content-form">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert-danger" role="alert">
                    <p>* {{$error}}</p>
                    </div>
                @endforeach
            @endif
            <form action="{{route('notas.update',['id' => $dataNotes->id]) }}" method="post" class="formulario">
                {{ csrf_field() }}
                <div class="form__item">
                    <label for="title" class="form__item__label">Título</label>
                    <input type="text" class="form__item__input" id="title" name="title" placeholder="Titulo de la nota"
                       value="{{$dataNotes->title}}" required>
                </div>
                <div class="form__item">
                    <label for="description" class="form__item__label">Descripción</label>
                    <textarea cols="20" rows="4" class="form__item__input" name="description" id="description"
                        placeholder="Descripción de la nota" required> {{$dataNotes->description}}</textarea>
                    <div class="contentCount">
                        <p class="count" id="count">200</p>
                    </div>
                </div>

                <div class="form__item">
                    <label for="type" class="form__item__label">Tipo</label>
                    <select name="type" id="type" class="form__item__select" required>
                        <option value="0">Seleccione</option>
                        <option {{$dataNotes->type === 'recort' ? 'selected' : ''}} value="recort">Recordatorio</option>
                        <option {{$dataNotes->type === 'link' ? 'selected' : ''}} value="link">Link</option>
                    </select>
                </div>

                <div class="form__item__bt">
                    <button type="submit" class="form__item__bt__button">Guardar</button>
                </div>
                <input type="hidden" name="_method" value="PUT">
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{!!  asset('js/edit.js') !!}"></script>
@endsection