@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de artigos" cor="panel-primary">

            <a href="{{ route('dashboard.artigos.create') }}">Criar</a>

            <!-- atributo ordenacao e campo opcionais -->
            <tabela-lista
                    v-bind:titulos="['#', 'Título', 'Descrição', 'Autor', 'Data publicação']"
                    v-bind:itens="[ [1, 'PHP OO', 'Curso de PHP oo', 'Danilo Tiago', '99/99/9999'], [2, 'Vue js', 'Curso de vue', 'Danilo Tiago', '99/99/9999'] ]"
                    url_detalhes="#detalhes"
                    url_editar="#editar"
                    url_deletar="#excluir"
                    token_deletar="token"
                    ordenacao_tabela="DESC"
                    indice_campo_ordenacao_tabela="0"
            ></tabela-lista>

        </painel>
    </pagina>
@endsection
