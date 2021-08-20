<?php

declare(strict_types=1);

namespace Src\Application\Create;

use Src\Domain\Order;
use Src\Domain\OrderRepository;

final class OrderCreator
{
    private $repository;

    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(OrderCreatorRequest $request): void
    {
        $id = $request->getId();
        $orderDate = $request->getOrderDate();
        $reference = $request->getReference();
        $code = $request->getCode();
        $location = $request->getLocation();
        $status = $request->getStatus();
        $company = $request->getCompany();
        $observations = $request->getObservations();

        $order = Order::create(
            $id,
            $orderDate,
            $reference,
            $code,
            $location,
            $status,
            $company,
            $observations
        );

        $this->repository->save($order);
    }
}
