<?php
namespace Core\Http\Cookie;

/**
 * Cookie.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
class Cookie
{

    /**
     * Cookie name
     *
     * @var string
     */
    private $name = '';

    /**
     * Cookie value
     *
     * @var mixed
     */
    private $value = '';

    /**
     * Days after cookie expires
     *
     * @var int
     */
    private $expire = 0;

    /**
     * Path parameter
     *
     * @var string
     */
    private $path = '/';

    /**
     * Domain
     *
     * @var string
     */
    private $domain = '';

    /**
     * Secure flag
     *
     * @var boolean
     */
    private $secure = false;

    /**
     * Httponly flag
     *
     * @var boolean
     */
    private $httponly = false;

    /**
     * Returns cookie name
     *
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * Returns cookie value
     *
     * @return the $value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Returns cookie expire timestamp
     *
     * @return int
     */
    public function getExpire(): int
    {
        return $this->expire;
    }

    /**
     * Returns cookie path
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Returns cookie domain
     *
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * Returns cookie secure flag
     *
     * @return bool
     */
    public function getSecure(): bool
    {
        return $this->secure;
    }

    /**
     * Returns cookie httponly flag
     *
     * @return bool
     */
    public function getHttponly(): bool
    {
        return $this->httponly;
    }

    /**
     * Sets name to be used for cookie
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Sets cookie value
     *
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value = $value;
    }

    /**
     * Set expire timestamp
     *
     * @param int $expire
     */
    public function setExpire(int $expire)
    {
        $this->expire = (int) $expire;
    }

    /**
     * Sets cookie path
     *
     * @param string $path
     */
    public function setPath(string $path)
    {
        $this->path = $path;
    }

    /**
     * Set domain
     *
     * @param string $domain
     */
    public function setDomain(string $domain)
    {
        $this->domain = $domain;
    }

    /**
     * Sets secure flag
     *
     * @param bool $secure
     */
    public function setSecure(bool $secure)
    {
        $this->secure = $secure;
    }

    /**
     * Sets httponly flag
     *
     * @param bool $httponly
     */
    public function setHttponly(bool $httponly)
    {
        $this->httponly = $httponly;
    }
}
