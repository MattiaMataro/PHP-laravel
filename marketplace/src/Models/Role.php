<?php

namespace Andrea\Marketplace\Models;

final class Role extends AbstractModel
{
    public function __construct(
        $id,
        public string $name
    )
    {
        parent::__construct($id);
    }
}