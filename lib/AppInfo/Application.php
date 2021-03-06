<?php
/**
 * Nextcloud - twofactor_yubikey.
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Jack <site-nextcloud@jack.org.uk>
 * @copyright Jack 2016
 */

namespace OCA\TwoFactor_Yubikey\AppInfo;

use OCP\AppFramework\App;

class Application extends App
{
    public function __construct($urlParams = [])
    {
        parent::__construct('twofactor_yubikey', $urlParams);

        $container = $this->getContainer();
        $container->registerAlias('\OCA\TwoFactor_Yubikey\Service\IYubiotp', '\OCA\TwoFactor_Yubikey\Service\Yubiotp');
    }
}
