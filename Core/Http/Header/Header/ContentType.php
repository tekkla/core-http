<?php
namespace Core\Http\Header\Header;

/**
 * ContentType.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
class ContentType extends AbstractHeader implements HeaderInterface
{

    /**
     *
     * @var string
     */
    private $content_type;

    /**
     *
     * @var string
     */
    private $charset = '';

    /**
     * Constructor
     *
     * @param string $content_type
     */
    public function __construct(string $content_type)
    {
        $this->setContentType($content_type);
    }

    /**
     * Sets content type string
     *
     * @param string $content_type
     */
    public function setContentType(string $content_type)
    {
        if (empty($content_type)) {
            Throw new HeaderException('Empty content type is not allowed.');
        }

        $this->content_type = $content_type;
    }

    /**
     * Returns set content type
     *
     * @return string
     */
    public function getContentType(): string
    {
        if (isset($this->content_type)) {
            return $this->content_type;
        }
    }

    public function setCharset(string $charset)
    {
        if (empty($charset)) {
            Throw new HeaderException('Empty charset is not allowed.');
        }

        $this->charset = $charset;
    }

    /**
     * Returns set charset
     *
     * @return string
     */
    public function getCharset(): string
    {
        return $this->charset;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Http\Header\AbstractHeader::getString()
     */
    public function getString(): string
    {
        $this->string = $this->content_type;

        if (!empty($this->charset)) {
            $this->string .= '; charset=' . $this->charset;
        }

        return $this->string;
    }
}

