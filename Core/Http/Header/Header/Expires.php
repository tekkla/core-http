<?php
namespace Core\Http\Header\Header;

/**
 * Expires.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
class Expires extends AbstractHeader implements HeaderInterface
{

    /**
     *
     * @var string
     */
    private $expires;

    /**
     * Constructor
     *
     * @param string $expires
     */
    public function __construct(string $expires)
    {
        $this->expires = $expires;
    }

    /**
     * Sets expires string
     *
     * @param string $expires
     */
    public function setExpires(string $expires)
    {
        if (empty($expires)) {
            Throw new HeaderException('Empty expires is not allowed.');
        }

        $this->expires = $expires;
    }

    /**
     * Returns set expires string
     *
     * @return string
     */
    public function getExpires(): string
    {
        if (isset($this->expires)) {
            return $this->expires;
        }
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Http\Header\Header\AbstractHeader::getString()
     */
    public function getString(): string
    {
        $this->string = 'Expires: ' . $this->expires;

        return $this->string;
    }
}

