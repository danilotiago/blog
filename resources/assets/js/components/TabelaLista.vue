<template>
    <div>
        <div class="form-group pull-right">
            <input type="search" v-model="buscar" class="form-control" placeholder="Buscar" />
        </div>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th style="cursor: pointer" v-on:click="recebe_indice_coluna_ordenacao(index)" v-for="(titulo, index) in titulos">{{titulo}}</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(item,index) in lista_busca">
                <td v-for="dado in item">{{dado}}</td>
                <td>
                    <a v-if="url_detalhes" v-bind:href="url_detalhes">Detalhes  |</a>
                    <a v-if="url_editar" v-bind:href="url_editar">Editar  |</a>
                    <!-- só aparece a lógica de deletar caso seja enviado o link e o token de deletar -->
                    <span v-if="url_deletar && token_deletar">
                        <a v-on:click="executa_form(index)">Deletar</a>
                        <form v-bind:id="'form-delete-' + index" method="post" v-bind:action="url_deletar">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" v-bind:value="token_deletar">
                        </form>
                    </span>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                buscar:'',
                // o atributo recebera o prop ou um valor default
                v_ordenacao_tabela: this.ordenacao_tabela || 'DESC',
                v_indice_campo_ordenacao_tabela: this.indice_campo_ordenacao_tabela || 0
            }
        },
        props: [
            'titulos',
            'itens',
            'url_detalhes',
            'url_editar',
            'url_deletar',
            'token_deletar',
            'ordenacao_tabela',
            'indice_campo_ordenacao_tabela'
        ],
        computed: {
            lista_busca: function() {

                // chamada do metodo de ordenacao da tabela
                this.ordena_tabela();

                // faz o filtro com filter nos itens para cada item
                return this.itens.filter(item => {

                    // loop em cada posição (dado) do item
                    for(let i = 0; i < item.length; i++) {

                        // converte o item para string
                        // deixa em minusculo
                        // indexOf faz a busca de qualquer referencia dentro de outra, se >= 0 entao
                        // aquela referencia existe
                        if((item[i] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0)
                        {
                            return true;
                        }
                    }
                    return false;
                });
            }
        },
        methods: {
            executa_form: function(index)
            {
                document.getElementById('form-delete-' + index).submit();
            },

            //  recebe o indice da coluna que foi clicado
            recebe_indice_coluna_ordenacao: function(indice_coluna)
            {
                // atribui o indice da coluna selecionada
                this.v_indice_campo_ordenacao_tabela = parseInt(indice_coluna);
                // troca a ordenacao as, desc
                this.troca_ordem();
            },


            // caso desc vai pra asc e vice-versa do atributo do vue
            troca_ordem: function ()
            {
                if(this.v_ordenacao_tabela.toLowerCase() == 'asc')
                {
                    this.v_ordenacao_tabela = 'desc';
                }
                else
                {
                    this.v_ordenacao_tabela = 'asc';
                }


            },

            // faz a ordenacao da tabela dos itens do array
            ordena_tabela: function ()
            {
                // var local para pegar o indice de ordenacao
                let campo = this.v_indice_campo_ordenacao_tabela;

                // ordena em crescente
                if(this.v_ordenacao_tabela == 'asc')
                {
                    // sort para crescente
                    this.itens.sort(function(a,b) {
                        if(a[campo] > b[campo]) return 1;
                        if(a[campo] < b[campo]) return -1;
                        return 0;
                    });
                }
                else // ordena em decrescente
                {
                    // sort para decrescente
                    this.itens.sort(function(a,b) {
                        if(a[campo] < b[campo]) return 1;
                        if(a[campo] > b[campo]) return -1;
                        return 0;
                    });
                }
            }
        }
    }
</script>

<style>

</style>
