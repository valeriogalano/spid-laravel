<?php
/**
 * This class implements a SPIDLogoutException for SPIDAuth Package.
 *
 * @license BSD-3-clause
 */

namespace Italia\SPIDAuth\Exceptions;

class SPIDLogoutException extends SPIDException
{
    const SAML_LOGOUT_ERROR = 0;
    const SAML_VALIDATION_ERROR = 1;
}
