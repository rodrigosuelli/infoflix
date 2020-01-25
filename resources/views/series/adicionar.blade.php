@extends('layouts.app')

@section('titulo')
InfoFlix - Adicionar Série
@endsection

@section('content')
<div class="container conteudo">
    <h2 class="text-center">Adicionar Série/Anime</h2>
    <form action="/adicionando" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="titulo">Título: </label>
                <input placeholder="Título" required="required" class="form-control" type="text" name="titulo"
                    id="titulo">
            </div>

            <div class="form-group col-md-2">
                <label for="ano_lancamento">Ano Lançamento: </label>
                <input required="required" class="form-control" min="0" max="9999" type="number" name="ano_lancamento"
                    id="ano_lancamento">
            </div>

            <div class="form-group col-md-2">
                <label for="tipo">Tipo: </label>
                <select required="required" class="custom-select" name="tipo" id="tipo">
                    <option value="anime">Anime</option>
                    <option value="serie">Série</option>
                </select>
            </div>


            <div class="form-group col-md-2">
                <label for="nota">Nota: </label>
                <input required="required" class="form-control" type="number" step="1" min="0" max="10" name="nota"
                    id="nota">
            </div>
        </div>

        <div class="form-row">
            <label for="imagem">Insira o link da imagem: </label>
            <div class="form-group col-md-12">
                <input required="required" class="form-control" type="text" name="imagem" id="imagem">
            </div>
        </div>

        <div class="form-row">
            <label for="wallpaper">(Já tem muito) Insira o link do wallpaper: </label>
            <div class="form-group col-md-12">
                <input class="form-control" type="text" name="wallpaper" id="wallpaper">
            </div>
        </div>


        <div class="form-row">
            <label for="trailer">Insira o link do trailer: </label>
            <div class="form-group col-md-12">
                <input
                    placeholder="Quero somente a última parte do link, exemplo: https://youtu.be/0yzytPs2ivo copie só o 0yzytPs2ivo"
                    required="required" class="form-control" type="text" name="trailer" id="trailer">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="sinopse">Sinopse: </label>
                <textarea wrap="soft" placeholder="Digite a sinopse aqui" required="required" class="form-control"
                    name="sinopse" id="sinopse" cols="100" rows="10"></textarea>
            </div>
        </div>

        <div class="form-row justify-content-center">
            <div class="form-group col-md-9">
                <input id="btn-adicionar" class="form-control btn btn-dark btn-lg mt-2" type="submit" value="Adicionar">
            </div>
        </div>
    </form>
</div>
@endsection
