<?php
declare(strict_types=1);

function factorial(int $n): int
{
    if ($n < 0) {
        throw new InvalidArgumentException("no pues der negativo");
    }

    if ($n === 0 || $n === 1) {
        return 1;
    }

    return $n * factorial($n - 1);
}

$numero = 5;
echo "El factorial de $numero es: " . factorial($numero);
