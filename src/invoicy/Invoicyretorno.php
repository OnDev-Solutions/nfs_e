<?php

class Invoicyretorno
{

    /**
     * @var Mensagem $Mensagem
     */
    protected $Mensagem = null;

    /**
     * @param Mensagem $Mensagem
     */
    public function __construct($Mensagem)
    {
      $this->Mensagem = $Mensagem;
    }

    /**
     * @return Mensagem
     */
    public function getMensagem()
    {
      return $this->Mensagem;
    }

    /**
     * @param Mensagem $Mensagem
     * @return Invoicyretorno
     */
    public function setMensagem($Mensagem)
    {
      $this->Mensagem = $Mensagem;
      return $this;
    }
}