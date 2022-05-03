<?php

namespace Andrea\Marketplace\Models;

use Andrea\Marketplace\Interfaces\IModel;

abstract class AbstractModel implements IModel
{
    public function __construct(
        private int $_id
    )
    {
        // Declares the private prop $_id
    }

    public function getId(): int
    {
        return $this->_id;
    }
}