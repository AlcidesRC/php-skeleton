<?php

declare(strict_types=1);

namespace App\Providers;

use DateTimeImmutable;

final class Foo
{
    public static function dump(): string
    {
        $date = (new DateTimeImmutable())->format('Y-m-d H:i:s');

        $line = 'Executed method [ ' . __FUNCTION__ . ' ] in [ ' . getenv('ENV') . ' ] mode' . PHP_EOL;

        return sprintf('[%s] %s: %s', $date, self::class, $line);
    }

    public function ping(): string
    {
        return 'pong';
    }
}
