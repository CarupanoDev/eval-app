<?php

declare(strict_types=1);

namespace Src\Domain;

final class Order
{
    private $id;
    private $orderDate;
    private $reference;
    private $code;
    private $location;
    private $status;
    private $company;
    private $observations;

    public function getId(): string
    {
        return $this->id;
    }

    public function getOrderDate(): string
    {
        return $this->orderDate;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function getObservations(): string
    {
        return $this->observations;
    }

    public function __construct(
        string $id,
        string $orderDate,
        string $reference,
        string $code,
        string $location,
        string $status,
        string $company,
        string $observations
    )
    {
        $this->id = $id;
        $this->orderDate = $orderDate;
        $this->reference = $reference;
        $this->code = $code;
        $this->location = $location;
        $this->status = $status;
        $this->company = $company;
        $this->observations = $observations;
    }

    public static function create(
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
