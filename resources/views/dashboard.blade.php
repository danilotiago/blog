@extends('layouts.app')

@section('content')
    <pagina tamanho="8">
        <painel titulo="Meu painel" cor="panel-primary">

            <div class="col-md-4">
                <caixa titulo="Artigos" quantidade="10" url="{{ route('dashboard.artigos.index') }}" cor="#00c0ef" icone="ion ion-clipboard"></caixa>
            </div>

            <div class="col-md-4">
                <caixa titulo="Usuários" quantidade="10" url="{{ route('dashboard.artigos.index') }}" cor="#00c0ef" icone="ion ion-ios-people"></caixa>
            </div>

            <div class="col-md-4">
                <caixa titulo="Autores" quantidade="10" url="{{ route('dashboard.artigos.index') }}" cor="#00c0ef" icone="fa fa-users"></caixa>
            </div>

        </painel>
    </pagina>
@endsection
