<?php
/**
 * Created by PhpStorm.
 * User: zdaniel
 * Date: 2018.08.08.
 * Time: 11:53
 */

namespace Managesieve;


use Managesieve\Exceptions\SocketException;

/**
 * Class SocketResult
 *
 * @author zdaniel
 * @copyright Copyright (c) 2018, Proginet Kft.
 * @package Managesieve
 */
class SocketResult
{

    /**
     * @var
     */
    private $socket;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var int
     */
    private $port;

    /**
     * SocketResult constructor.
     * @param string $ip
     * @param int $port
     * @param $socket
     */
    public function __construct(string $ip, int $port, $socket)
    {
        if (is_resource($socket) === false) {
            throw new SocketException("SocketResult parameter must be a resource");
        }

        $this->ip = $ip;
        $this->port = $port;
        $this->socket = $socket;
    }

    /**
     * @return resource
     */
    public function getSocket()
    {
        return $this->socket;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

}