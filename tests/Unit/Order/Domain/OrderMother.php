<?php

declare(strict_types=1);

namespace Tests\Unit\Order\Domain;

use Src\Application\Create\OrderCreatorRequest;
use Src\Domain\Order;

final class OrderMother
{
    public static function fromRequest(OrderCreatorRequest $request): Order
    {

        $id = $request->getId();
        $orderDate = $request->getOrderDate();
        $reference = $request->getReference();
        $code = $request->getCode();
        $location = $request->getLocation();
        $status = $request->getStatus();
        $company = $request->getCompany();
        $observations = $request->getObservations();

        return self::create($id, $orderDate, $reference, $code, $location, $status, $company, $observations);
    }

    private static function create(
        string $id,
        string $orderDate,
        string $reference,
        string $code,
        string $location,
        string $status,
        string $company,
        string $observations
    ): Order
    {
        return new Order(
            $id,
            $orderDate,
            $reference,
            $code,
            $location,
            $status,
            $company,
            $observations
        );
    }
}
