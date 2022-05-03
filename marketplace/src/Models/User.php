<?php

namespace Andrea\Marketplace\Models;

final class User extends AbstractModel
{
    public function __construct(
        int $id,
        public string $email,
        private string $_password,
        public ?Role $role = null
    )
    {
        parent::__construct($id);
    }
}