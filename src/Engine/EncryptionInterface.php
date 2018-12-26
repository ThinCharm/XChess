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

/**
 * The encrypter interface.
 */
interface EncryptionInterface
{

    /**
     * Create a new encrypter instance.
     *
     * @return void Returns nothing.
     */
    public function __construct();

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
    public function encrypt($data, string $key = null, $chipher = null, $serialize = true);

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
    public function encrypt($data, string $key = null, $chipher = null, $unserialize = true);
}
