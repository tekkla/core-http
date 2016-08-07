<?php
namespace Core\Http\Header\Header;

/**
 * CacheControl.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
class CacheControl extends AbstractHeader implements HeaderInterface
{
    /**
     *
     * @var string
     */
    private $cache_control;

    /**
     * Constructor
     *
     * @param string $cache_control
     */
    public function __construct(string $cache_control)
    {
        $this->setCacheControl($cache_control);
    }

    /**
     * Sets cache_control string
     *
     * @param string $cache_control
     */
    public function setCacheControl(string $cache_control)
    {
        if (empty($cache_control)) {
            Throw new HeaderException('Empty cache control string is not allowed.');
        }

        $this->cache_control = $cache_control;
    }

    /**
     * Returns set cache_control string
     *
     * @return string
     */
    public function getCacheControl(): string
    {
        if (isset($this->cache_control)) {
            return $this->cache_control;
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
        $this->string = 'Cache-Control: ' . $this->cache_control;

        return $this->string;
    }
}

