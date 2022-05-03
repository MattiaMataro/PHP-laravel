<?php

namespace Andrea\Marketplace\Models;

final class ProductCategory extends AbstractModel
{
    public function __construct(
        int $id,
        public string $name,
        public ProductCategory $productCategory = null
    )
    {
        parent::__construct($id);
    }
}