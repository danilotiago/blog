<template>
    <div>
        <div class="form-group pull-right">
            <input type="search" v-model="buscar" class="form-control" placeholder="Buscar" />
        </div>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th v-for="titulo in titulos">{{titulo}}</th>
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
                buscar:''
            }
        },
        props: [
            'titulos',
            'itens',
            'url_detalhes',
            'url_editar',
            'url_deletar',
            'token_deletar'
        ],
        computed: {
            lista_busca: function() {

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
            }
        }
    }
</script>

<style>

</style>
