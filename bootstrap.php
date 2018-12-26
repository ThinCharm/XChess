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

require_once __DIR__ . '/vendor/autoload.php';

// Load the dotenv configuration file.
(new Dotenv())->load(__DIR__ . '/xchess.env');
