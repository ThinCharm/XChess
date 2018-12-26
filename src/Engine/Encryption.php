<?php
declare(strict_types=1);
/**
 * XChess.
 * 
 * The worlds best chess playing website.
 *
 * @author XChess Contributors <https://github.com/orgs/XChess/people>
 *
 * @link <https://github.com/XChess> XChess Code.
 */

namespace XChess\Engine;

use Illuminate\Encryption\Encrypter;

/**
 * The encrypter.
 */
class Encryption implements EncryptionInterface
{

    /** @var $instance The laravel encrypter instance. */
    private $instance;

    /**
     * Create a new encrypter instance.
     *
     * @return void Returns nothing.
     */
    public function __construct()
    {
        $this->instance = null;
    }

    /**
     * Encrypt data.
     *
     * @param mixed  $data      The data to encrypt.
     * @param string $key       The encryption key.
     * @param string $chiper    The encryption chipher
     * @param bool   $serialize Determines if we serialize or not.
     *
     * @return mixed Returns the encrypted data.
     */
    public function encrypt($data, string $key = null, $chipher = null, $serialize = true)
    {
        
        if (is_null($this->instance)) {
            $this->instance = new Encrypter($key, $chipher);
            if (is_null($key)) {
                $key = $this->instance->generateKey($cipher);
            }
        }
        return $this->instance->encrypt($data, $serialize);
    }

    /**
     * Decrypt data.
     *
     * @param mixed  $encrypted The data to decrypt.
     * @param string $key       The encryption key.
     * @param string $chiper    The encryption chipher
     * @param bool   $serialize Determines if we unserialize or not.
     *
     * @return mixed Returns the decrypted data.
     */
    public function decrypt($data, string $key = null, $chipher = null, $unserialize = true)
    {
        
        if (is_null($this->instance)) {
            $this->instance = new Encrypter($key, $chipher);
            if (is_null($key)) {
                $key = $this->instance->generateKey($cipher);
            }
        }
        return $this->instance->decrypt($data, $unserialize);
    }
}
