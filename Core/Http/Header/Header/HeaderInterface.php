<?php
namespace Core\Http\Header\Header;

/**
 * HeaderInterface.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
interface HeaderInterface
{

    /**
     * Sets header string value
     *
     * @param string $string
     */
    public function setString(string $string);

    /**
     * Returns set header string value
     *
     * @return string
     */
    public function getString(): string;

    /**
     * Sets replace flag
     *
     * @param bool $replace
     */
    public function setReplace(bool $replace);

    /**
     * Returns set replace flag
     *
     * @return bool|null
     */
    public function getReplace();

    /**
     * Set http response code
     *
     * @param int $http_response_code
     */
    public function setHttpResponseCode(int $http_response_code);

    /**
     * Returns set http response code
     *
     * @return int|null
     */
    public function getHttpResponseCode();
}

