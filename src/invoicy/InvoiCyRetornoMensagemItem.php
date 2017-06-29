<?php

class InvoiCyRetornoMensagemItem
{

    /**
     * @var int $Codigo
     */
    protected $Codigo = null;

    /**
     * @var string $Descricao
     */
    protected $Descricao = null;

    /**
     * @var Documentos $Documentos
     */
    protected $Documentos = null;

    /**
     * @param int $Codigo
     * @param string $Descricao
     * @param Documentos $Documentos
     */
    public function __construct($Codigo, $Descricao, $Documentos)
    {
      $this->Codigo = $Codigo;
      $this->Descricao = $Descricao;
      $this->Documentos = $Documentos;
    }

    /**
     * @return int
     */
    public function getCodigo()
    {
      return $this->Codigo;
    }

    /**
     * @param int $Codigo
     * @return InvoiCyRetornoMensagemItem
     */
    public function setCodigo($Codigo)
    {
      $this->Codigo = $Codigo;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescricao()
    {
      return $this->Descricao;
    }

    /**
     * @param string $Descricao
     * @return InvoiCyRetornoMensagemItem
     */
    public function setDescricao($Descricao)
    {
      $this->Descricao = $Descricao;
      return $this;
    }

    /**
     * @return Documentos
     */
    public function getDocumentos()
    {
      return $this->Documentos;
    }

    /**
     * @param Documentos $Documentos
     * @return InvoiCyRetornoMensagemItem
     */
    public function setDocumentos($Documentos)
    {
      $this->Documentos = $Documentos;
      return $this;
    }
}