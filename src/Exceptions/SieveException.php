<?php
/**
 * Created by PhpStorm.
 * User: zdaniel
 * Date: 2018.08.06.
 * Time: 14:12
 */

namespace Managesieve\Exceptions;


/**
 * Class SieveException
 *
 * @author zdaniel
 * @copyright Copyright (c) 2018, Proginet Kft.
 * @package LibSieve\Exceptions
 */
class SieveException extends \RuntimeException
{

    /**
     * @var int
     */
    protected $code = 100;

}