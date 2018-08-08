<?php
/**
 * Created by PhpStorm.
 * User: zdaniel
 * Date: 2018.08.06.
 * Time: 14:35
 */

namespace Managesieve\Exceptions;


/**
 * Class AuthenticationException
 *
 * @author zdaniel
 * @copyright Copyright (c) 2018, Proginet Kft.
 * @package LibSieve\Exceptions
 */
class AuthenticationException extends SieveException
{

    /**
     * @var int
     */
    protected $code = 103;

}