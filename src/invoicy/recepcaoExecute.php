<?php

class recepcaoExecute
{

    /**
     * @var InvoiCy $Invoicyrecepcao
     */
    protected $Invoicyrecepcao = null;

    /**
     * @param InvoiCy $Invoicyrecepcao
     */
    public function __construct($Invoicyrecepcao)
    {
      $this->Invoicyrecepcao = $Invoicyrecepcao;
    }

    /**
     * @return InvoiCy
     */
    public function getInvoicyrecepcao()
    {
      return $this->Invoicyrecepcao;
    }

    /**
     * @param InvoiCy $Invoicyrecepcao
     * @return recepcaoExecute
     */
    public function setInvoicyrecepcao($Invoicyrecepcao)
    {
      $this->Invoicyrecepcao = $Invoicyrecepcao;
      return $this;
    }
}