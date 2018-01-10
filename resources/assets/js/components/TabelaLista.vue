<template>
    <div>

        <a href="#">Criar</a>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th v-for="titulo in titulos">{{titulo}}</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item in itens">
                <td v-for="dado in item">{{dado}}</td>
                <td>
                    <a href="#">Detalhes</a> |
                    <a href="#">Editar</a> |
                    <a href="#">Deletar</a>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
    export default {
        props: [
            'titulos',
            'itens'
        ]
    }
</script>
