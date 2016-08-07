<?php
namespace Core\Http\Header\Header;

/**
 * HttpError.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
class HttpError extends AbstractHeader implements HeaderInterface
{

    /**
     * Constructor
     *
     * @param int $http_response_code
     */
    public function __construct(int $http_response_code)
    {
        $this->setHttpResponseCode($http_response_code);
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Http\Header\Header\AbstractHeader::getString()
     */
    public function getString(): string
    {
        $status = [
            403 => 'Forbidden',
            404 => 'Not Found',
            410 => 'Gone',
            500 => 'Internal Server Error',
            503 => 'Service Unavailable'
        ];

        $protocol = preg_match('~HTTP/1\.[01]~i', $_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0';

        if (empty($status[$this->http_response_code])) {
            $this->string = $protocol . ' 500 Internal Server Error';
        }
        else {
            $this->string = $protocol . ' ' . $this->http_response_code . ' ' . $status[$this->http_response_code];
        }

        return $this->string;
    }
}

