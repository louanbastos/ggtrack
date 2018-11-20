@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->code }}
                <!--<?php echo e($product->code); ?>-->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->description }}
            </div>
        </div>
    </div>
    <!--Recipiente para mostrar resultado de rastreamento.-->
    <div id="YQContainer"></div>

    <!--O script pode ser colocado na parte inferior da página, aguarde a página carregar e depois execute.-->
    <script type="text/javascript" src="//www.17track.net/externalcall.js"></script>
    <script type="text/javascript">
        var num = "<?php echo e($product->code); ?>"
        YQV5.trackSingle({
            //Necessário, Especifique o ID do recipiente do conteúdo da transportadora.
            YQ_ContainerId:"YQContainer",
            //Opcional, especifique a altura do resultado do rastreamento, altura máxima de 800px, padrão de 560px.
            YQ_Height:560,
            //Opcional, selecione transportadora, padrão para auto identificar.
            YQ_Fc:"0",
            //Opcional, especifique o idioma da interface, idioma padrão é automaticamente detectado baseado nas configurações do navegador.
            YQ_Lang:"en",
            //Necessário, especifique o código necessário para o rastreamento.
            YQ_Num:num
        });
    </script>
@endsection
