<?php

$pluginSignature = 'ts3view_pi1';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

//$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['news_pi1'] = 'recursive,select_key,pages'
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'recursive,select_key,pages';



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:ts3view/Configuration/FlexForms/ts3view.xml'
);
