<?php

namespace App\Service;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JwtService
{
    protected $keySecret;

    protected const ALGORITHM = 'HS256';

    public function __construct(string $keySecret)
    {
        $this->keySecret = $keySecret;
    }

    public function decode(string $value): \stdClass
    {
        return JWT::decode($value, new Key($this->keySecret, self::ALGORITHM));
    }

    public function encode(array $payload): string
    {
        return JWT::encode($payload, config('jwt.secret'), self::ALGORITHM);
    }
}
