@extends('layouts.app')

@section('content')

<?php

$root = 'http://localhost/projetoreeducarecicla/';
$foto = 'salveo%20planeta.png';

$title = $facebook_title = "Contato";
$keywords = 'recicla,palavras,chave,separadas,por,virgula';
$description = $facebook_description = substr(strip_tags('<p>A Reeduca, por sua atitude empresarial e pela qualidade das relações que busca desenvolver com os diversos agentes que articula, expressa sua marca na identidade com pessoas e empresas que se comprometem a atuar de maneira efetiva na colaboração por um mundo mais saudável para se habitar, em respeito ao meio ambiente do qual fazem parte e responsabilidade para com as gerações por vir.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container">

    <form action="{{ route('cidade.cadastrar') }}" method="post" class="user-info-setting-form" enctype="multipart/form-data">
        @csrf
        <p><input type="text" name="cidade" class="form-control" placeholder="Nome"></p>
        <p><input type="file" name="imagem" class="form-control" placeholder="Nome"></p>
        <p><button type="submit" class="btn btn-card btn-primary">Enviar</button></p>
    </form>

</div>


@endsection
fredpiuma
