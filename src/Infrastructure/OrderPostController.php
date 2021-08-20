<?php

declare(strict_types=1);

namespace Src\Infrastructure;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class OrderPostController
{
    public function __invoke(Request $request)
    {
        return new JsonResponse(null, JsonResponse::HTTP_CREATED);
    }
}
