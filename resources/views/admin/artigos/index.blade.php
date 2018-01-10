@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de artigos" cor="panel-primary">

        <a href="#">Criar</a>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Autor</th>
                        <th>Data publicação</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Título de teste</td>
                        <td>Descrição de teste</td>
                        <td>Autor de teste</td>
                        <td>99/99/9999</td>
                        <td>
                            <a href="#">Editar</a> |
                            <a href="#">Deletar</a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </painel>
    </pagina>
@endsection
