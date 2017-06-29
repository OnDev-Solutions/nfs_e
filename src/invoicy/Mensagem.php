<?php

class Mensagem
{

    /**
     * @var InvoiCyRetornoMensagemItem $MensagemItem
     */
    protected $MensagemItem = null;

    /**
     * @param InvoiCyRetornoMensagemItem $MensagemItem
     */
    public function __construct($MensagemItem)
    {
      $this->MensagemItem = $MensagemItem;
    }

    /**
     * @return InvoiCyRetornoMensagemItem
     */
    public function getMensagemItem()
    {
      return $this->MensagemItem;
    }

    /**
     * @param InvoiCyRetornoMensagemItem $MensagemItem
     * @return Mensagem
     */
    public function setMensagemItem($MensagemItem)
    {
      $this->MensagemItem = $MensagemItem;
      return $this;
    }
}