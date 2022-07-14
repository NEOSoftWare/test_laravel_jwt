<?php declare(strict_types=1);

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \stdClass decode(string $value)
 * @method static string encode(array $payload)
 */
class JwtFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'jwt.service';
    }
}
