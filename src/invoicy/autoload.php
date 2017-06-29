<?php


 function autoload_4f4c5db168d643539de5fc2538a0e36c($class)
{
    $classes = array(
        'Recepcao' => __DIR__ .'/Recepcao.php',
        'InvoiCy' => __DIR__ .'/InvoiCy.php',
        'Dados' => __DIR__ .'/Dados.php',
        'InvoiCyRecepcaoCabecalho' => __DIR__ .'/InvoiCyRecepcaoCabecalho.php',
        'InvoiCyRecepcaoInformacoes' => __DIR__ .'/InvoiCyRecepcaoInformacoes.php',
        'ArrayOfInvoiCyRecepcaoDadosItem' => __DIR__ .'/ArrayOfInvoiCyRecepcaoDadosItem.php',
        'InvoiCyRecepcaoDadosItem' => __DIR__ .'/InvoiCyRecepcaoDadosItem.php',
        'Invoicyretorno' => __DIR__ .'/Invoicyretorno.php',
        'Mensagem' => __DIR__ .'/Mensagem.php',
        'ArrayOfInvoiCyRetornoMensagemItem' => __DIR__ .'/ArrayOfInvoiCyRetornoMensagemItem.php',
        'InvoiCyRetornoMensagemItem' => __DIR__ .'/InvoiCyRetornoMensagemItem.php',
        'Documentos' => __DIR__ .'/Documentos.php',
        'ArrayOfInvoiCyRetornoMensagemItemDocumentosItem' => __DIR__ .'/ArrayOfInvoiCyRetornoMensagemItemDocumentosItem.php',
        'InvoiCyRetornoMensagemItemDocumentosItem' => __DIR__ .'/InvoiCyRetornoMensagemItemDocumentosItem.php',
        'recepcaoExecute' => __DIR__ .'/recepcaoExecute.php',
        'recepcaoExecuteResponse' => __DIR__ .'/recepcaoExecuteResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_4f4c5db168d643539de5fc2538a0e36c');

// Do nothing. The rest is just leftovers from the code generation.
{
}
