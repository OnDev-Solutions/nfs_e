<?php

class Dados
{

    /**
     * @var InvoiCyRecepcaoDadosItem $DadosItem
     */
    protected $DadosItem = null;

    /**
     * @param InvoiCyRecepcaoDadosItem $DadosItem
     */
    public function __construct($DadosItem)
    {
      $this->DadosItem = $DadosItem;
    }

    /**
     * @return InvoiCyRecepcaoDadosItem
     */
    public function getDadosItem()
    {
      return $this->DadosItem;
    }

    /**
     * @param InvoiCyRecepcaoDadosItem $DadosItem
     * @return Dados
     */
    public function setDadosItem($DadosItem)
    {
      $this->DadosItem = $DadosItem;
      return $this;
    }
}