<?php return array(
    'root' => array(
        'name' => 'duosecurity/duo_universal_wordpress',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '2583455d5229db41a1254ee1ddc845f03971ba16',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'duosecurity/duo_universal_php' => array(
            'pretty_version' => '1.1.1',
            'version' => '1.1.1.0',
            'reference' => '4ee7253863d84653a60a8cad4b03aa3b66fcfd35',
            'type' => 'library',
            'install_path' => __DIR__ . '/../duosecurity/duo_universal_php',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'duosecurity/duo_universal_wordpress' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '2583455d5229db41a1254ee1ddc845f03971ba16',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'firebase/php-jwt' => array(
            'pretty_version' => 'v6.3.1',
            'version' => '6.3.1.0',
            'reference' => 'ddfaddcb520488b42bca3a75e17e9dd53c3667da',
            'type' => 'library',
            'install_path' => __DIR__ . '/../firebase/php-jwt',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
