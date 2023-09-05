@extends('base')

@section('conteudo')

<div class="container">
    <form>
        <label class="form-label" for="isbn">ISBN: <button class="btn btn-primary" type="button" onclick="loadISBN('isbn')">Verificar</button></label>
        <input class="form-control" type="text" id="isbn">
        <label class="form-label" for="isbn13">ISBN-13: <button class="btn btn-primary" onclick="loadISBN('isbn13')" type="button">Verificar</button></label>
        <input class="form-control" type="text" id="isbn13">
        <label class="form-label" for="title">Titulo:</label>
        <input class="form-control" type="text" id="title">
        <label class="form-label" for="subtitle">Subtitulo:</label>
        <input class="form-control" type="text" id="subtitle">
        <label class="form-label" for="autor">Autor:</label>
        <input class="form-control" type="text" id="autor">
        <label class="form-label" for="publication">Data de Publicação:</label>
        <input class="form-control" id="publication" type="date">
        <label class="form-label" for="descrition">Descrição:</label>
        <textarea class="form-control" id="description"></textarea>
        <label class="form-label" for="capa">Capa:</label>
        <input class="form-control" type="file" id="capa">
        <label class="form-label" for="qtd">Quantidade:</label>
        <input class="form-control" type="number" name="" id="qtd" min=1>
        <input class="btn btn-primary" type="submit" value="cadastrar">
    </form>
</div>

@endsection

<!--TODO: layout do form-->


@section('scripts')
<script src="{{asset('js/livros.js')}}"></script>
@endsection