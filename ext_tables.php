<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'vmfds Site provider');
Tx_Flux_Core::registerProviderExtensionKey('vmfds_epic', 'Page');
Tx_Flux_Core::registerProviderExtensionKey('vmfds_epic', 'Content');

