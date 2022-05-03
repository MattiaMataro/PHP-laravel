<?php

namespace Andrea\Marketplace\Models;

final class Product extends AbstractModel
{
    public function __construct(
        int $id,
        public string $name,
        public string $description,
        public float $price,
        public int $quantity,
        public string $image = ''
    )
    {
        parent::__construct($id);
    }
}