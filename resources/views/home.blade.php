@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <painel titulo="Meu painel">

                    <div class="col-md-4">
                        <painel titulo="Conteúdo 1"></painel>
                    </div>

                    <div class="col-md-4">
                        <painel titulo="Conteúdo 2"></painel>
                    </div>

                    <div class="col-md-4">
                        <painel titulo="Conteúdo 3"></painel>
                    </div>

                </painel>
            </div>
        </div>
    </div>
@endsection
