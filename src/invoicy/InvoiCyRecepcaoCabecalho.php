<?php

class InvoiCyRecepcaoCabecalho
{

    /**
     * @var string $EmpPK
     */
    protected $EmpPK = null;

    /**
     * @var string $EmpCK
     */
    protected $EmpCK = null;

    /**
     * @var string $EmpCO
     */
    protected $EmpCO = null;

    /**
     * @param string $EmpPK
     * @param string $EmpCK
     * @param string $EmpCO
     */
    public function __construct($EmpPK, $EmpCK, $EmpCO)
    {
      $this->EmpPK = $EmpPK;
      $this->EmpCK = $EmpCK;
      $this->EmpCO = $EmpCO;
    }

    /**
     * @return string
     */
    public function getEmpPK()
    {
      return $this->EmpPK;
    }

    /**
     * @param string $EmpPK
     * @return InvoiCyRecepcaoCabecalho
     */
    public function setEmpPK($EmpPK)
    {
      $this->EmpPK = $EmpPK;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmpCK()
    {
      return $this->EmpCK;
    }

    /**
     * @param string $EmpCK
     * @return InvoiCyRecepcaoCabecalho
     */
    public function setEmpCK($EmpCK)
    {
      $this->EmpCK = $EmpCK;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmpCO()
    {
      return $this->EmpCO;
    }

    /**
     * @param string $EmpCO
     * @return InvoiCyRecepcaoCabecalho
     */
    public function setEmpCO($EmpCO)
    {
      $this->EmpCO = $EmpCO;
      return $this;
    }
}