<?php
namespace Core\Http\Header\Header;

/**
 * Location.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
class Location extends AbstractHeader implements HeaderInterface
{

    /**
     *
     * @var string
     */
    private $location;

    /**
     *
     * @var bool
     */
    private $permanent = false;

    /**
     * Constructor
     *
     * @param string $location
     */
    public function __construct(string $location)
    {
        $this->setLocation($location);
    }

    /**
     * Sets location url
     *
     * @param string $location
     *
     * @throws HeaderException
     */
    public function setLocation(string $location)
    {
        if (empty($location)) {
            Throw new HeaderException('Empty location is now allowed.');
        }

        $this->location = $location;
    }

    /**
     * Returns set location url
     *
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * Sets permanent flag
     *
     * @param bool $permanent
     */
    public function setPermanent(bool $permanent)
    {
        $this->permanent = $permanent;
    }

    /**
     * Returns set permanent flag
     *
     * @return bool
     */
    public function getPermanent(): bool
    {
        return $this->permanent;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Http\Header\AbstractHeader::getString()
     */
    public function getString(): string
    {
        $this->string = 'Location: ' . str_replace(' ', '%20', $this->location);

        return $this->string;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Http\Header\AbstractHeader::getHttpResponseCode()
     */
    public function getHttpResponseCode(): int
    {
        $this->http_response_code = $this->permanent ? 302 : 301;

        return $this->http_response_code;
    }
}

