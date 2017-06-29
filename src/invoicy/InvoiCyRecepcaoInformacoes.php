<?php

class InvoiCyRecepcaoInformacoes
{

    /**
     * @var string $Texto
     */
    protected $Texto = null;

    /**
     * @param string $Texto
     */
    public function __construct($Texto)
    {
      $this->Texto = $Texto;
    }

    /**
     * @return string
     */
    public function getTexto()
    {
      return $this->Texto;
    }

    /**
     * @param string $Texto
     * @return InvoiCyRecepcaoInformacoes
     */
    public function setTexto($Texto)
    {
      $this->Texto = $Texto;
      return $this;
    }
}