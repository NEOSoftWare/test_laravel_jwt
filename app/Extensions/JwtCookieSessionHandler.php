<?php

namespace App\Extensions;

use App\Facades\JwtFacade;

class JwtCookieSessionHandler implements \SessionHandlerInterface
{

    public function open($savePath, $sessionName)
    {
    }

    public function close()
    {
    }

    public function read($sessionId)
    {
        $token = \Cookie::get('jwt_cookie');
        if (!empty($token)) {
            $result = JwtFacade::decode($token);

            return $result->data;
        }

        return null;
    }

    public function write($sessionId, $data)
    {
        $token = JwtFacade::encode(['data' => $data]);
        \Cookie::queue('jwt_cookie', $token);
    }

    public function destroy($sessionId)
    {
    }

    public function gc($lifetime)
    {
    }
}
