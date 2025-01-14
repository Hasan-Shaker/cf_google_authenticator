<?php declare(strict_types=1);
/**
 * Interface QrImageGeneratorInterface
 *
 * @author        Robin 'codeFareith' von den Bergen <robinvonberg@gmx.de>
 * @copyright (c) 2018-2022 by Robin von den Bergen
 * @license       http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version       1.0.0
 *
 * @link          https://github.com/codeFareith/cf_google_authenticator
 * @see           https://www.fareith.de
 * @see           https://typo3.org
 */

namespace CodeFareith\CfGoogleAuthenticator\Service;

use CodeFareith\CfGoogleAuthenticator\Domain\Immutable\AuthenticationSecret;

/**
 * QR code image generator interface
 *
 * This interface defines the base methods for any QR code image generator service.
 *
 * @package CodeFareith\CfGoogleAuthenticator\Service
 * @since   1.0.0
 */
interface QrCodeGeneratorInterface
{
    public function generateUri(AuthenticationSecret $secretImmutable): string;
}
