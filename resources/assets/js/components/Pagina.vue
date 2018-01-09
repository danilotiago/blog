<template>

    <div class="container">
        <div class="row">
            <div v-bind:class="define_tamanho">

                <slot></slot>

            </div>
        </div>
    </div>

</template>

<script>
    export default {
        props: [
            'tamanho'
        ],
        computed: {
            define_tamanho: function ()
            {
                var classe_tamanho = '';

                if(this.tamanho >= 12)
                {
                    classe_tamanho = "col-md-12 col-md-offset-0";
                }
                else if(this.tamanho <= 2)
                {
                    classe_tamanho = "col-md-2 col-md-offset-5";
                }
                else
                {
                    if( (this.tamanho % 2) == 0 )
                    {
                        classe_tamanho = "col-md-"+this.tamanho+" col-md-offset-"+((12 - this.tamanho) / 2);
                    }
                    else
                    {
                        classe_tamanho = "col-md-"+(parseInt(this.tamanho) + 1)+" col-md-offset-"+((12 - (parseInt(this.tamanho) + 1)) / 2);
                    }
                }

                return classe_tamanho;

            }
        }
    }
</script>
