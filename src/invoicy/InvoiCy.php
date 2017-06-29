<?php

class InvoiCy
{

    /**
     * @var InvoiCyRecepcaoCabecalho $Cabecalho
     */
    protected $Cabecalho = null;

    /**
     * @var InvoiCyRecepcaoInformacoes $Informacoes
     */
    protected $Informacoes = null;

    /**
     * @var Dados $Dados
     */
    protected $Dados = null;

    /**
     * @param InvoiCyRecepcaoCabecalho $Cabecalho
     * @param InvoiCyRecepcaoInformacoes $Informacoes
     * @param Dados $Dados
     */
    public function __construct($Cabecalho, $Informacoes, $Dados)
    {
      $this->Cabecalho = $Cabecalho;
      $this->Informacoes = $Informacoes;
      $this->Dados = $Dados;
    }

    /**
     * @return InvoiCyRecepcaoCabecalho
     */
    public function getCabecalho()
    {
      return $this->Cabecalho;
    }

    /**
     * @param InvoiCyRecepcaoCabecalho $Cabecalho
     * @return InvoiCy
     */
    public function setCabecalho($Cabecalho)
    {
      $this->Cabecalho = $Cabecalho;
      return $this;
    }

    /**
     * @return InvoiCyRecepcaoInformacoes
     */
    public function getInformacoes()
    {
      return $this->Informacoes;
    }

    /**
     * @param InvoiCyRecepcaoInformacoes $Informacoes
     * @return InvoiCy
     */
    public function setInformacoes($Informacoes)
    {
      $this->Informacoes = $Informacoes;
      return $this;
    }

    /**
     * @return Dados
     */
    public function getDados()
    {
      return $this->Dados;
    }

    /**
     * @param Dados $Dados
     * @return InvoiCy
     */
    public function setDados($Dados)
    {
      $this->Dados = $Dados;
      return $this;
    }
}