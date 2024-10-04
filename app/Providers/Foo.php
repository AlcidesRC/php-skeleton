<?php

declare(strict_types=1);

namespace App\Providers;

use DateTimeImmutable;

final class Foo
{
    public static function getDateTime(?string $format = 'Y-m-d H:i:s'): string
    {
        return (new DateTimeImmutable())->format($format);
    }

    public function ping(): string
    {
        return 'pong';
    }
}
