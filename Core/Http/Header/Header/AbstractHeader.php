<?php
namespace Core\Http\Header\Header;

/**
 * AbstractHeader.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
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
     * (non-PHPdoc)
     *
     * @see \Core\Http\Header\HeaderInterface::setString()
     *
     */
    public function setString(string $string)
    {
        if (empty($string)) {
            Throw new HeaderException('Header string is not allowed to be empty');
        }

        $this->string = $string;
    }

    /**
     * (non-PHPdoc)
     *
     * @see \Core\Http\Header\HeaderInterface::getString()
     *
     */
    public function getString(): string
    {
        if (isset($this->string)) {
            return $this->string;
        }
    }

    /**
     * (non-PHPdoc)
     *
     * @see \Core\Http\Header\HeaderInterface::setReplace()
     *
     */
    public function setReplace(bool $replace)
    {
        $this->replace = $replace;
    }

    /**
     * (non-PHPdoc)
     *
     * @see \Core\Http\Header\HeaderInterface::getReplace()
     *
     */
    public function getReplace()
    {
        return $this->replace;
    }

    /**
     * (non-PHPdoc)
     *
     * @see \Core\Http\Header\HeaderInterface::setHttpResponseCode()
     *
     */
    public function setHttpResponseCode(int $http_response_code)
    {
        $this->http_response_code = $http_response_code;
    }

    /**
     * (non-PHPdoc)
     *
     * @see \Core\Http\Header\HeaderInterface::getHttpResponseCode()
     *
     */
    public function getHttpResponseCode()
    {
        return $this->http_response_code;
    }
}

