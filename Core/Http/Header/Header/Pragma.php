<?php
namespace Core\Http\Header\Header;

/**
 * Pragma.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
class Pragma extends AbstractHeader implements HeaderInterface
{

    /**
     *
     * @var string
     */
    private $pragma;

    /**
     * Constructor
     *
     * @param string $pragma
     */
    public function __construct(string $pragma)
    {
        $this->setPragma($pragma);
    }

    /**
     * Sets pragma string
     *
     * @param string $pragma
     */
    public function setPragma(string $pragma)
    {
        if (empty($pragma)) {
            Throw new HeaderException('Empty pragma is not allowed.');
        }

        $this->pragma = $pragma;
    }

    /**
     * Returns set pragma string
     *
     * @return string
     */
    public function getPragma(): string
    {
        if (isset($this->pragma)) {
            return $this->pragma;
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
        $this->string = 'Pragma: ' . $this->pragma;

        return $this->string;
    }
}

