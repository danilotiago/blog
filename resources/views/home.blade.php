@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <painel titulo="Meu painel" cor="panel-primary">

                    <div class="col-md-4">
                        <caixa titulo="Artigos" quantidade="10" url="#" cor="#00c0ef" icone="ion ion-clipboard"></caixa>
                    </div>

                    <div class="col-md-4">
                        <caixa titulo="Usuários" quantidade="10" url="#" cor="#00c0ef" icone="ion ion-ios-people"></caixa>
                    </div>

                    <div class="col-md-4">
                        <caixa titulo="Autores" quantidade="10" url="#" cor="#00c0ef" icone="fa fa-users"></caixa>
                    </div>

                </painel>
            </div>
        </div>
    </div>
@endsection
