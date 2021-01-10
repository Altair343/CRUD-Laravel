@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{!!  asset('css/index.css') !!}">
@endsection

@section('modal')
    @include('includes.modal')
@endsection

@section('contentData')
    <div class=" title">
        <h1>Notas</h1>
        <div class="slogan">
            <p>Recuerda todas tus ideas</p>
        </div>
    </div>
    <div class="content_sub-menu">
        <nav class="main-sub-menu">
            <ul class="sub-menu">
                <li class="sub-menu__item"><a href="#" id="link1" class="sub-menu__link select">Todos</a></li>
                <li class="sub-menu__item"><a href="#" id="link2" class="sub-menu__link">Recordatorios</a></li>
                <li class="sub-menu__item"><a href="#" id="link3" class="sub-menu__link">Links</a></li>
            </ul>
        </nav>
        <div class="add" id="add">
            <i class="fas fa-plus"></i> Nuevo
        </div>
    </div>
    <div id="myContent">

    </div>
@endsection

@section('script')
    <script src="{!!  asset('js/index.js') !!}"></script>
    <script src="{!!  asset('js/modal.js') !!}"></script>
    <script src="{!!  asset('js/nota.js') !!}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
@endsection


