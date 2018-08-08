<?php
/**
 * Created by PhpStorm.
 * User: zdaniel
 * Date: 2018.08.06.
 * Time: 14:12
 */

namespace Managesieve\Exceptions;


/**
 * Class UnknownErrorException
 *
 * @author zdaniel
 * @copyright Copyright (c) 2018, Proginet Kft.
 * @package LibSieve\Exceptions
 */
class UnknownErrorException extends SieveException
{

    /**
     * @var int
     */
    protected $code = 101;

}