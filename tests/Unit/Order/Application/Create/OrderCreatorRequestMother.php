<?php

declare(strict_types=1);

namespace Tests\Unit\Order\Application\Create;

use Faker\Factory;
use Src\Application\Create\OrderCreatorRequest;

final class OrderCreatorRequestMother
{
    public static function random(): OrderCreatorRequest
    {
        $faker = Factory::create();

        $id = $faker->uuid;
        $orderDate = $faker->date('Y-m-d');
        $reference = $faker->name;
        $code = $faker->name;
        $location = $faker->name;
        $status = $faker->name;
        $company = $faker->name;
        $observations = $faker->name;

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
    ): OrderCreatorRequest
    {
        return new OrderCreatorRequest(
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
