<?php
namespace Core\Http\Header;

use Core\Http\Header\Header\HeaderInterface;
use Core\Http\Header\Header\Header;
use Core\Http\Header\Header\Pragma;
use Core\Http\Header\Header\Expires;
use Core\Http\Header\Header\CacheControl;
use Core\Http\Header\Header\ContentType;
use Core\Http\Header\Header\Location;
use Core\Http\Header\Header\HttpError;


/**
 * HeaderHandler.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
class HeaderHandler
{
    /**
     *
     * @var array
     */
    private $headers = [];

    /**
     * Sends all headers of stack
     */
    public function send()
    {
        foreach ($this->headers as $header) {
            header($header->getString(), $header->getReplace(), $header->getHttpResponseCode());
        }
    }

    /**
     * Adds a header object to the header stack
     *
     * @param HeaderInterface $header
     */
    public function addHeader(HeaderInterface $header)
    {
        $this->headers[] = $header;
    }

    /**
     * Generic header
     *
     * @param string $string
     * @param bool $replace
     * @param int $http_response_code
     */
    public function generic(string $string, $replace = null, $http_response_code = null)
    {
        $header = new Header($string);

        if (isset($replace)) {
            $header->setReplace($replace);
        }

        if (isset($http_response_code)) {
            $header->setHttpResponseCode($http_response_code);
        }

        $this->addHeader($header);
    }

    /**
     * Creates a location header
     *
     * @param string $location
     * @param bool $permanent
     */
    public function location(string $location, bool $permanent = false)
    {
        $header = new Location($location);

        if ($permanent) {
            $header->setPermanent($permanent);
        }

        $this->addHeader($header);
    }

    /**
     * Content type header
     *
     * @param string $content_type
     * @param string $charset
     */
    public function contentType(string $content_type, string $charset = '')
    {
        $header = new ContentType($content_type);

        if (!empty($charset)) {
            $header->setCharset($charset);
        }

        $this->addHeader($header);
    }

    /**
     * Create no caching headers
     */
    public function noCache()
    {
        $header = new Expires('Mon, 26 Jul 1997 05:00:00 GMT');
        $this->addHeader($header);

        $header = new CacheControl('no-cache');
        $this->addHeader($header);

        $header = new Pragma('no-cache');
        $this->addHeader($header);
    }

    /**
     * Sends a header error code
     *
     * @param int $http_response_code
     */
    public function sendHttpError(int $http_response_code = 500)
    {
        $header = new HttpError($http_response_code);
        $this->addHeader($header);
    }
}

