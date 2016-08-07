<?php
namespace Core\Http\Header\Header;

/**
 * Header.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
class Header extends AbstractHeader implements HeaderInterface
{

    /**
     * Constructor
     *
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->setString($string);
    }
}

