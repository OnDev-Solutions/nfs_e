<?php

class InvoiCyRecepcaoDadosItem
{

    /**
     * @var string $Documento
     */
    protected $Documento = null;

    /**
     * @var string $Parametros
     */
    protected $Parametros = null;

    /**
     * @param string $Documento
     * @param string $Parametros
     */
    public function __construct($Documento, $Parametros)
    {
      $this->Documento = $Documento;
      $this->Parametros = $Parametros;
    }

    /**
     * @return string
     */
    public function getDocumento()
    {
      return $this->Documento;
    }

    /**
     * @param string $Documento
     * @return InvoiCyRecepcaoDadosItem
     */
    public function setDocumento($Documento)
    {
      $this->Documento = $Documento;
      return $this;
    }

    /**
     * @return string
     */
    public function getParametros()
    {
      return $this->Parametros;
    }

    /**
     * @param string $Parametros
     * @return InvoiCyRecepcaoDadosItem
     */
    public function setParametros($Parametros)
    {
      $this->Parametros = $Parametros;
      return $this;
    }
}