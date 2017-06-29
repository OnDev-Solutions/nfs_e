<?php

class Recepcao extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'InvoiCy' => '\\InvoiCy',
        'Dados' => '\\Dados',
        'InvoiCyRecepcao.Cabecalho' => '\\InvoiCyRecepcaoCabecalho',
        'InvoiCyRecepcao.Informacoes' => '\\InvoiCyRecepcaoInformacoes',
        'ArrayOfInvoiCyRecepcao.DadosItem' => '\\ArrayOfInvoiCyRecepcaoDadosItem',
        'InvoiCyRecepcao.DadosItem' => '\\InvoiCyRecepcaoDadosItem',
        'Invoicyretorno' => '\\Invoicyretorno',
        'Mensagem' => '\\Mensagem',
        'ArrayOfInvoiCyRetorno.MensagemItem' => '\\ArrayOfInvoiCyRetornoMensagemItem',
        'InvoiCyRetorno.MensagemItem' => '\\InvoiCyRetornoMensagemItem',
        'Documentos' => '\\Documentos',
        'ArrayOfInvoiCyRetorno.MensagemItem.DocumentosItem' => '\\ArrayOfInvoiCyRetornoMensagemItemDocumentosItem',
        'InvoiCyRetorno.MensagemItem.DocumentosItem' => '\\InvoiCyRetornoMensagemItemDocumentosItem',
        'recepcao.Execute' => '\\recepcaoExecute',
        'recepcao.ExecuteResponse' => '\\recepcaoExecuteResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
            'features' => 1,
        ), $options);
        if (!$wsdl) {
            $wsdl = 'https://homolog.invoicy.com.br/arecepcao.aspx?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param recepcaoExecute $parameters
     * @return recepcaoExecuteResponse
     */
    public function Execute($parameters)
    {
        return $this->__soapCall('Execute', array($parameters));
    }
}