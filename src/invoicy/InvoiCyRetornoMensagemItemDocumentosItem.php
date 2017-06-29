<?php

class InvoiCyRetornoMensagemItemDocumentosItem
{

    /**
     * @var string $Documento
     */
    protected $Documento = null;

    /**
     * @param string $Documento
     */
    public function __construct($Documento)
    {
      $this->Documento = $Documento;
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
     * @return InvoiCyRetornoMensagemItemDocumentosItem
     */
    public function setDocumento($Documento)
    {
      $this->Documento = $Documento;
      return $this;
    }
}