<?php

class ArrayOfInvoiCyRetornoMensagemItemDocumentosItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InvoiCyRetornoMensagemItemDocumentosItem[] $InvoiCyRetornoMensagemItemDocumentosItem
     */
    protected $InvoiCyRetornoMensagemItemDocumentosItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InvoiCyRetornoMensagemItemDocumentosItem[]
     */
    public function getInvoiCyRetornoMensagemItemDocumentosItem()
    {
      return $this->InvoiCyRetornoMensagemItemDocumentosItem;
    }

    /**
     * @param InvoiCyRetornoMensagemItemDocumentosItem[] $InvoiCyRetornoMensagemItemDocumentosItem
     * @return ArrayOfInvoiCyRetornoMensagemItemDocumentosItem
     */
    public function setInvoiCyRetornoMensagemItemDocumentosItem(array $InvoiCyRetornoMensagemItemDocumentosItem = null)
    {
      $this->InvoiCyRetornoMensagemItemDocumentosItem = $InvoiCyRetornoMensagemItemDocumentosItem;
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
      return isset($this->InvoiCyRetornoMensagemItemDocumentosItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InvoiCyRetornoMensagemItemDocumentosItem
     */
    public function offsetGet($offset)
    {
      return $this->InvoiCyRetornoMensagemItemDocumentosItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InvoiCyRetornoMensagemItemDocumentosItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->InvoiCyRetornoMensagemItemDocumentosItem[] = $value;
      } else {
        $this->InvoiCyRetornoMensagemItemDocumentosItem[$offset] = $value;
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
      unset($this->InvoiCyRetornoMensagemItemDocumentosItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InvoiCyRetornoMensagemItemDocumentosItem Return the current element
     */
    public function current()
    {
      return current($this->InvoiCyRetornoMensagemItemDocumentosItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InvoiCyRetornoMensagemItemDocumentosItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InvoiCyRetornoMensagemItemDocumentosItem);
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
      reset($this->InvoiCyRetornoMensagemItemDocumentosItem);
    }

    /**
     * Countable implementation
     *
     * @return $InvoiCyRetornoMensagemItemDocumentosItem Return count of elements
     */
    public function count()
    {
      return count($this->InvoiCyRetornoMensagemItemDocumentosItem);
    }
}