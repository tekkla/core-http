<?php
namespace Core\Http\Post;

use Psr\Log\LoggerInterface;

/**
 * Post.php
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @copyright 2016
 * @license MIT
 */
class Post
{

    /**
     *
     * @var LoggerInterface
     */
    private $logger;

    /**
     *
     * @var string
     */
    private $token_name = '__token';

    /**
     *
     * @var string
     */
    private $compare_token;

    /**
     * Sets as Psr\Log compatible logger
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Sets name of POST session token
     *
     * @param string $token_name
     */
    public function setTokenName(string $token_name)
    {
        $this->token_name = $token_name;
    }

    /**
     * Returns set session token name
     *
     * @return string
     */
    public function getTokenName(): string
    {
        return $this->token_name;
    }

    /**
     * Returns the value of $_POST
     *
     * Note: By default only data in $_POST['core'] will be returned. If you want complete $_POST data, use set
     *
     * @return array
     */
    public function get(): array
    {
        // Do only react on POST requests and when there is $_POST data
        if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST)) {
            return false;
        }

        // Return complete $_POST data
        return $_POST;
    }

    /**
     * Cleans the global $_POST variable by setting an empty array
     */
    public function clean()
    {
        $_POST = [];
    }

    /**
     * Walks thourgh $_POST and trims all data
     */
    public function trimData()
    {

        // Trim data
        array_walk_recursive($_POST, function (&$data) {
            $data = trim($data);
        });
    }

    /**
     * Checks for set $_POST['token'] and validates it's value against a possibly set compare token.
     *
     * @param string $compare_token
     *            The token to compare a $_POST['token'] against
     * @return bool
     */
    public function validateCompareWithPostToken(string $compare_token): bool
    {
        // No $_POST data means no token.
        if (empty($_POST)) {
            return true;
        }

        // Show warning in error log when using a form without a token
        if (empty($_POST[$this->token_name])) {

            if (isset($this->logger)) {
                $this->logger->notice(sprintf('Form data without proper token "%s" received. All data will be dropped.', $this->token_name));
            }

            return false;
        }

        // Token sent so let's check it
        if ($compare_token != $_POST[$this->token_name]) {

            if (isset($this->logger)) {
                $this->logger->warning('The token "%s" in $_POST is not he same as set compare token "%s". All data will be dropped.', [
                    $_POST[$this->token_name],
                    $this->compare_token
                ]);
            }

            return false;
        }

        unset($_POST[$this->token_name]);

        return true;
    }
}
