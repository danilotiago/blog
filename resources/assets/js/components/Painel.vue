<template>

    <div v-bind:class="define_cor">
        <div class="panel-heading">{{ titulo }}</div>
        <div class="panel-body">

            <slot></slot>

        </div>
    </div>

</template>

<script>
    export default {
        props: [
            'titulo',
            'cor'
        ],
        computed: {

            define_cor: function()
            {
                return "panel " + (this.cor || "panel-default");
            }
        }
    }
</script>

<style>

</style>
