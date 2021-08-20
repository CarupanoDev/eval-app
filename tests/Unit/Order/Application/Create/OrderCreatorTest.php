<?php

declare(strict_types=1);

namespace Tests\Unit\Order\Application\Create;

use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Src\Application\Create\OrderCreator;
use Src\Domain\Order;
use Src\Domain\OrderRepository;
use Tests\Unit\Order\Domain\OrderMother;
use Tests\Unit\Order\Infrastructure\InMemoryOrderRepository;

final class OrderCreatorTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_create_a_valid_order_and_return_null(): void
    {
        $request = OrderCreatorRequestMother::random();
        $creator = new OrderCreator(new InMemoryOrderRepository());
        $response = ($creator)($request);

        self::assertNull($response);
    }
}
