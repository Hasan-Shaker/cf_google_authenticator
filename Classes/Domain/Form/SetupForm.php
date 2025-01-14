<?php declare(strict_types=1);
/**
 * Class SetupForm
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

namespace CodeFareith\CfGoogleAuthenticator\Domain\Form;

/**
 * Setup form values object
 *
 * Use this class to hold setup form values that either originate from a
 * submitted setup form or to pass initial values of a form to the view.
 *
 * @see     \CodeFareith\CfGoogleAuthenticator\Controller\Frontend\SetupController
 *
 * @package CodeFareith\CfGoogleAuthenticator\Domain\Form
 * @since   1.0.0
 */
class SetupForm
    implements FormInterface
{
    /*─────────────────────────────────────────────────────────────────────────────*\
            Constants
    \*─────────────────────────────────────────────────────────────────────────────*/
    public const FORM_NAME = 'GoogleAuthenticatorSetupForm';

    /*─────────────────────────────────────────────────────────────────────────────*\
            Properties
    \*─────────────────────────────────────────────────────────────────────────────*/
    /**
     * @var string
     */
    protected $secret;

    /**
     * @var string
     */
    protected $oneTimePassword;

    /*─────────────────────────────────────────────────────────────────────────────*\
            Methods
    \*─────────────────────────────────────────────────────────────────────────────*/
    public function __construct(string $secret, string $oneTimePassword = null)
    {
        $oneTimePassword = $oneTimePassword ?? '';

        $this->setSecret($secret);
        $this->setOneTimePassword($oneTimePassword);
    }

    public function getSecret(): string
    {
        return $this->secret;
    }

    public function setSecret(string $secret): void
    {
        $this->secret = $secret;
    }

    public function getOneTimePassword(): string
    {
        return $this->oneTimePassword;
    }

    public function setOneTimePassword(string $oneTimePassword): void
    {
        $this->oneTimePassword = $oneTimePassword;
    }
}
