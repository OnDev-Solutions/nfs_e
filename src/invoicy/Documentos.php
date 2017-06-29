<?php

class Documentos
{

    /**
     * @var InvoiCyRetornoMensagemItemDocumentosItem $DocumentosItem
     */
    protected $DocumentosItem = null;

    /**
     * @param InvoiCyRetornoMensagemItemDocumentosItem $DocumentosItem
     */
    public function __construct($DocumentosItem)
    {
      $this->DocumentosItem = $DocumentosItem;
    }

    /**
     * @return InvoiCyRetornoMensagemItemDocumentosItem
     */
    public function getDocumentosItem()
    {
      return $this->DocumentosItem;
    }

    /**
     * @param InvoiCyRetornoMensagemItemDocumentosItem $DocumentosItem
     * @return Documentos
     */
    public function setDocumentosItem($DocumentosItem)
    {
      $this->DocumentosItem = $DocumentosItem;
      return $this;
    }
}