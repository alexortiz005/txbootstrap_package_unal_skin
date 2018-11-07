<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('bootstrap_package_unal_skin', 'Configuration/TypoScript', 'Complemento para Bootstrap Package y UNAL Skin');

    }
);
