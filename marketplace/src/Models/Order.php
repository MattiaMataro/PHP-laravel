<?php

namespace Andrea\Marketplace\Models;

final class Order extends AbstractModel
{
    public function __construct(
        int $id,
        public int $created_at,
        public int $updated_at,
        public string $status,
        public User $user
    )
    {
        parent::_construct($id);
    }
}