<?php
namespace Core\Http;

use Core\Http\Cookie\CookieHandler;
use Core\Http\Header\HeaderHandler;

/**
 * Http.php
 *
 * Wrapper service to provide access to Post and Cookies service via one service.
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
class Http
{
    /**
     * Cookies Service
     *
     * @var CookieHandler
     */
    public $cookies;

    /**
     * Header Service
     *
     * @var HeaderHandler
     */
    public $header;

    /**
     * Constructor
     *
     * @param CookieHandler $cookies
     * @param HeaderHandler $header
     */
    public function __construct(CookieHandler $cookies, HeaderHandler $header)
    {
        $this->cookies = $cookies;
        $this->header = $header;
    }
}
