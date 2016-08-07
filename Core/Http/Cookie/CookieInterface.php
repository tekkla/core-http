<?php
namespace Core\Http\Cookie;

/**
 * CookieInterface.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
interface CookieInterface
{

    /**
     * Sets name to be used for cookie
     *
     * @param string $name
     */
    public function setName(string $name);

    /**
     * Returns cookie name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Sets cookie value
     *
     * @param string $value
     */
    public function setValue(string $value);

    /**
     * Returns cookie value
     *
     * @return string
     */
    public function getValue(): string;

    /**
     * Set expire timestamp
     *
     * @param int $expire
     */
    public function setExpire(int $expire);

    /**
     * Returns cookie expire timestamp
     *
     * @return int
     */
    public function getExpire(): int;

    /**
     * Sets cookie path
     *
     * @param string $path
     */
    public function setPath(string $path);

    /**
     * Returns cookie path
     *
     * @return string
     */
    public function getPath(): string;

    /**
     * Set domain
     *
     * @param string $domain
     */
    public function setDomain(string $domain);

    /**
     * Returns cookie domain
     *
     * @return string
     */
    public function getDomain(): string;

    /**
     * Sets secure flag
     *
     * @param bool $secure
     */
    public function setSecure(bool $secure);

    /**
     * Returns cookie secure flag
     *
     * @return bool
     */
    public function getSecure(): bool;

    /**
     * Sets httponly flag
     *
     * @param bool $httponly
     */
    public function setHttponly(bool $httponly);

    /**
     * Returns cookie httponly flag
     *
     * @return bool
     */
    public function getHttponly(): bool;
}

