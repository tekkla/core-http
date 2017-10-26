<?php
namespace Core\Http\Cookie;

/**
 * Cookie.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
class Cookie implements CookieInterface
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
     *
     * {@inheritdoc}
     * @see \Core\Http\Cookie\CookieInterface::getName()
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Cookie\CookieInterface::getValue()
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Cookie\CookieInterface::getExpire()
     */
    public function getExpire(): int
    {
        return $this->expire;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Cookie\CookieInterface::getPath()
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Cookie\CookieInterface::getDomain()
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Cookie\CookieInterface::getSecure()
     */
    public function getSecure(): bool
    {
        return $this->secure;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Cookie\CookieInterface::getHttponly()
     */
    public function getHttponly(): bool
    {
        return $this->httponly;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Cookie\CookieInterface::setName()
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Cookie\CookieInterface::setValue()
     */
    public function setValue(string $value)
    {
        $this->value = $value;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Cookie\CookieInterface::setExpire()
     */
    public function setExpire(int $expire)
    {
        $this->expire = (int) $expire;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Cookie\CookieInterface::setPath()
     */
    public function setPath(string $path)
    {
        $this->path = $path;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Cookie\CookieInterface::setDomain()
     */
    public function setDomain(string $domain)
    {
        $this->domain = $domain;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Cookie\CookieInterface::setSecure()
     */
    public function setSecure(bool $secure)
    {
        $this->secure = $secure;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Cookie\CookieInterface::setHttponly()
     */
    public function setHttponly(bool $httponly)
    {
        $this->httponly = $httponly;
    }
}
