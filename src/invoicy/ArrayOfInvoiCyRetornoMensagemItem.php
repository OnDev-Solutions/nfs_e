<?php

class ArrayOfInvoiCyRetornoMensagemItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InvoiCyRetornoMensagemItem[] $InvoiCyRetornoMensagemItem
     */
    protected $InvoiCyRetornoMensagemItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InvoiCyRetornoMensagemItem[]
     */
    public function getInvoiCyRetornoMensagemItem()
    {
      return $this->InvoiCyRetornoMensagemItem;
    }

    /**
     * @param InvoiCyRetornoMensagemItem[] $InvoiCyRetornoMensagemItem
     * @return ArrayOfInvoiCyRetornoMensagemItem
     */
    public function setInvoiCyRetornoMensagemItem(array $InvoiCyRetornoMensagemItem = null)
    {
      $this->InvoiCyRetornoMensagemItem = $InvoiCyRetornoMensagemItem;
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
      return isset($this->InvoiCyRetornoMensagemItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InvoiCyRetornoMensagemItem
     */
    public function offsetGet($offset)
    {
      return $this->InvoiCyRetornoMensagemItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InvoiCyRetornoMensagemItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->InvoiCyRetornoMensagemItem[] = $value;
      } else {
        $this->InvoiCyRetornoMensagemItem[$offset] = $value;
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
      unset($this->InvoiCyRetornoMensagemItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InvoiCyRetornoMensagemItem Return the current element
     */
    public function current()
    {
      return current($this->InvoiCyRetornoMensagemItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InvoiCyRetornoMensagemItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InvoiCyRetornoMensagemItem);
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
      reset($this->InvoiCyRetornoMensagemItem);
    }

    /**
     * Countable implementation
     *
     * @return $InvoiCyRetornoMensagemItem Return count of elements
     */
    public function count()
    {
      return count($this->InvoiCyRetornoMensagemItem);
    }
}