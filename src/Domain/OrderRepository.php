<?php

declare(strict_types=1);

namespace Src\Domain;

interface OrderRepository
{
    public function save(Order $order): void;
}
