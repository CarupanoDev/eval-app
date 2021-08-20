<?php

declare(strict_types=1);

namespace Tests\Unit\Order\Infrastructure;

use Src\Domain\Order;
use Src\Domain\OrderRepository;

final class InMemoryOrderRepository implements OrderRepository
{

    public function save(Order $order): void
    {
        // TODO: Implement save() method.
    }
}
