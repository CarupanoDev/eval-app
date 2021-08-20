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

final class OrderCreatorTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_create_a_valid_order_and_return_null(): void
    {
        $request = OrderCreatorRequestMother::random();
        $order = OrderMother::fromRequest($request);
        $this->shouldCreate($order);
        $creator = new OrderCreator($this->repository());
        $response = ($creator)($request);

        self::assertNull($response);
    }

    private function shouldCreate(Order $order): void
    {
        $this->repository()
            ->shouldReceive('save')
            ->with($this->similarTo($order))
            ->once()
            ->andReturnNull();
    }

    protected function repository()
    {
        return $this->repository = $this->repository ?? $this->mock(OrderRepository::class);
    }

    protected function mock(string $className): MockInterface
    {
        return Mockery::mock($className);
    }

    public static function similarTo($value, $delta = 0.0): MedineMatcherIsSimilar
    {
        return new MedineMatcherIsSimilar($value, $delta);
    }
}
