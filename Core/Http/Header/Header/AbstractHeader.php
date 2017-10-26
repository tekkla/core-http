<?php
namespace Core\Http\Header\Header;

/**
 * AbstractHeader.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016-2017
 * @license MIT
 */
abstract class AbstractHeader implements HeaderInterface
{

    /**
     *
     * @var string
     */
    protected $string;

    /**
     *
     * @var bool
     */
    protected $replace = null;

    /**
     *
     * @var int
     */
    protected $http_response_code = null;

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Header\Header\HeaderInterface::setString()
     */
    public function setString(string $string)
    {
        if (empty($string)) {
            Throw new HeaderException('Header string is not allowed to be empty');
        }
        
        $this->string = $string;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Header\Header\HeaderInterface::getString()
     */
    public function getString(): string
    {
        if (isset($this->string)) {
            return $this->string;
        }
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Header\Header\HeaderInterface::setReplace()
     */
    public function setReplace(bool $replace)
    {
        $this->replace = $replace;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Header\Header\HeaderInterface::getReplace()
     */
    public function getReplace()
    {
        return $this->replace;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Header\Header\HeaderInterface::setHttpResponseCode()
     */
    public function setHttpResponseCode(int $http_response_code)
    {
        $this->http_response_code = $http_response_code;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Http\Header\Header\HeaderInterface::getHttpResponseCode()
     */
    public function getHttpResponseCode()
    {
        return $this->http_response_code;
    }
}

