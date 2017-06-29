<?php

class ArrayOfInvoiCyRecepcaoDadosItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InvoiCyRecepcaoDadosItem[] $InvoiCyRecepcaoDadosItem
     */
    protected $InvoiCyRecepcaoDadosItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InvoiCyRecepcaoDadosItem[]
     */
    public function getInvoiCyRecepcaoDadosItem()
    {
      return $this->InvoiCyRecepcaoDadosItem;
    }

    /**
     * @param InvoiCyRecepcaoDadosItem[] $InvoiCyRecepcaoDadosItem
     * @return ArrayOfInvoiCyRecepcaoDadosItem
     */
    public function setInvoiCyRecepcaoDadosItem(array $InvoiCyRecepcaoDadosItem = null)
    {
      $this->InvoiCyRecepcaoDadosItem = $InvoiCyRecepcaoDadosItem;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->InvoiCyRecepcaoDadosItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InvoiCyRecepcaoDadosItem
     */
    public function offsetGet($offset)
    {
      return $this->InvoiCyRecepcaoDadosItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InvoiCyRecepcaoDadosItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->InvoiCyRecepcaoDadosItem[] = $value;
      } else {
        $this->InvoiCyRecepcaoDadosItem[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->InvoiCyRecepcaoDadosItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InvoiCyRecepcaoDadosItem Return the current element
     */
    public function current()
    {
      return current($this->InvoiCyRecepcaoDadosItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InvoiCyRecepcaoDadosItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InvoiCyRecepcaoDadosItem);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->InvoiCyRecepcaoDadosItem);
    }

    /**
     * Countable implementation
     *
     * @return $InvoiCyRecepcaoDadosItem count of elements
     */
    public function count()
    {
      return count($this->InvoiCyRecepcaoDadosItem);
    }
}