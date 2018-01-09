<template>

    <a v-bind:href="url">
    <div class="info-box">
        <span class="info-box-icon" v-bind:style="define_cor"><i v-bind:class="icone"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">{{ titulo }}</span>
            <span class="info-box-number">{{ quantidade }}</span>
        </div>
        <!-- /.info-box-content -->
    </div>
    </a>

</template>

<script>
    export default {
        props: [
            'titulo',
            'quantidade',
            'url',
            'cor',
            'icone'
        ],
        computed: {
            define_cor: function ()
            {
                return "background-color:"+ this.cor +" !important;";
            }
        }
    }
</script>

<style>
    .info-box {
        display: block;
        min-height: 90px;
        background: #fff;
        width: 100%;
        box-shadow: 0 1px 1px rgba(0,0,0,0.1);
        border-radius: 2px;
        margin-bottom: 15px;
    }

    .bg-aqua {
        background-color: #00c0ef !important;
    }

    .info-box-icon {
        border-top-left-radius: 2px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 2px;
        display: block;
        float: left;
        height: 90px;
        width: 90px;
        text-align: center;
        font-size: 45px;
        line-height: 90px;
        background: rgba(0,0,0,0.2);
        color: #fff !important;
    }

    .info-box-content {
        padding: 5px 10px;
        margin-left: 90px;
    }

    .info-box-text {
        text-transform: uppercase;
        display: block;
        font-size: 14px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    a:link {
        text-decoration: none;
        color: #2a2a2a;
    }

    a:visited {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
        color: #5e5e5e;
    }

    .info-box-number {
        display: block;
        font-weight: bold;
        font-size: 18px;
    }


</style>
