@extends('layouts.main')

@section('title', 'Cadastrar')

@section('css-style')
    <link rel="stylesheet" href="{{asset('assets/css/index.style.css')}}">
@endsection

@section('content')
    <section class="register-container">
        <form class="form" method="post" action="/cadastra-ordem">
        @csrf
            <div class="row">
                <div class="col">
                    <label for="txtName">Nome</label>
                    <input type="text" name="txtNome" id="txtNome">
                </div>
                <div class="col">
                    <label for="txtCpf">CPF:</label>
                    <input type="text" name="txtCpf" id="txtCpf">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="txtEmail">Email:</label>
                    <input type="email" name="txtEmail" id="txtEmail">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="txtTelefone">Telefone:</label>
                    <input type="text" name="txtTelefone" id="txtTelefone">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="txtAparelho">Aparelho</label>
                    <input type="text" name="txtAparelho" id="txtAparelho">
                </div>
    
                <div class="col">
                    <label for="txtMarca">Marca</label>
                    <input type="text" name="txtMarca" id="txtMarca">
                </div>
                <div class="col">
                    <label for="txtSerie">N° Série</label>
                    <input type="text" name="txtSerie" id="txtSerie">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="txtProblema">Problema:</label>
                    <input type="text" name="txtProblema" id="txtProblema">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="txtPedido">Pedido de assistência:</label>
                    <textarea type="text"rows="10" cols="100" name="txtPedido"> </textarea>
                </div>
            </div>
            <div class="row">
                <div class="button-container">
                    <button type="reset">Limpar</button>
                    <button type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </section>
@endsection