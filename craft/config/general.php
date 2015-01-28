<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
    '*' => array(
        'omitScriptNameInUrls' => true,
        'defaultImageQuality' => '65',
        'useEmailAsUsername' => false,
        'loginPath' => 'account/login',
        'logoutPath' => 'account/logout',
        'postLoginRedirect' => 'account/my-account',
        'autoLoginAfterAccountActivation' => true,
        'activateAccountFailurePath' => 'account/activation-failed',
        'activateAccountSuccessPath' => 'account/activation-success',
        'setPasswordPath' => 'account/setpassword',
        'setPasswordSuccessPath' => 'account/login?m=passchanged',
        'purgePendingUsersDuration' => 'P3D',
    ),

    // Local
    'LOCAL' => array(
        'devMode' => true,
        'cacheDuration' => 'PT1S',

        'siteUrl' => array(
            'en_us' => 'http://qca.craft.dev/',
        ),

        'environmentVariables' => array(
            'basePath'  => '/Users/snetman/sites/qca/public/',
            'baseUrl' => 'http://qca.craft.dev/',
        )

    ),

    // Staging
    'STAGING' => array(
        'cooldownDuration' => 0,

        'siteUrl' => array(
            'en_us' => 'http://staging.qca.org/',
        ),

        'environmentVariables' => array(
            'basePath'  => '/storage/user-account-here/www/staging_html/public/',
            'baseUrl' => 'http://staging.url-here.com/',
        )
    ),

    // Production
    'PRODUCTION' => array(
        'cooldownDuration' => 0,

        'siteUrl' => array(
            'en_us' => 'http://www.qca.org/',
        ),

        'environmentVariables' => array(
            'basePath'  => '/storage/user-account-here/www/public_html/public/',
            'baseUrl' => 'http://www.url-here.com/',
        )
    )
);
