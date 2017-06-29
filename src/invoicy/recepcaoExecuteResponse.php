<?php

class recepcaoExecuteResponse
{

    /**
     * @var Invoicyretorno $Invoicyretorno
     */
    protected $Invoicyretorno = null;

    /**
     * @param Invoicyretorno $Invoicyretorno
     */
    public function __construct($Invoicyretorno)
    {
      $this->Invoicyretorno = $Invoicyretorno;
    }

    /**
     * @return Invoicyretorno
     */
    public function getInvoicyretorno()
    {
      return $this->Invoicyretorno;
    }

    /**
     * @param Invoicyretorno $Invoicyretorno
     * @return recepcaoExecuteResponse
     */
    public function setInvoicyretorno($Invoicyretorno)
    {
      $this->Invoicyretorno = $Invoicyretorno;
      return $this;
    }
}