<?php
/**
 * Thanks extension
 *
 * This extension adds 'thank' links that allow users to thank other users for
 * specific revisions. It relies on the Echo extension to send the actual thanks.
 * For more info see http://mediawiki.org/wiki/Extension:Thanks
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * This program is distributed WITHOUT ANY WARRANTY.
 *
 * @file
 * @ingroup Extensions
 * @author Ryan Kaldari
 * @license MIT License
 */

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Thanks',
	'author' => array(
		'Ryan Kaldari',
		'Benjamin Chen',
		'Wctaiwan',
	),
	'version'  => '1.2.0',
	'url' => 'https://www.mediawiki.org/wiki/Extension:Thanks',
	'descriptionmsg' => 'thanks-desc',
	'license-name' => 'MIT',
);


/* Setup */

// Register files
$wgAutoloadClasses['ThanksHooks'] = __DIR__ . '/Thanks.hooks.php';
$wgAutoloadClasses['EchoThanksFormatter'] = __DIR__ . '/ThanksFormatter.php';
$wgAutoloadClasses['EchoFlowThanksFormatter'] = __DIR__ . '/FlowThanksFormatter.php';
$wgAutoloadClasses['ApiThank'] = __DIR__ . '/ApiThank.php';
$wgAutoloadClasses['ApiRevThank'] = __DIR__ . '/ApiRevThank.php';
$wgAutoloadClasses['ApiFlowThank'] = __DIR__ . '/ApiFlowThank.php';
$wgAutoloadClasses['ThanksLogFormatter'] = __DIR__ . '/ThanksLogFormatter.php';
$wgAutoloadClasses['SpecialThanks'] = __DIR__ . '/SpecialThanks.php';
$wgMessagesDirs['Thanks'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['Thanks'] = __DIR__ . '/Thanks.i18n.php';
$wgExtensionMessagesFiles['ThanksAlias'] = __DIR__ . '/Thanks.alias.php';

// Register APIs
$wgAPIModules['thank'] = 'ApiRevThank';

// Register special page
$wgSpecialPages['Thanks'] = 'SpecialThanks';

// Register hooks
$wgHooks['HistoryRevisionTools'][] = 'ThanksHooks::insertThankLink';
$wgHooks['DiffRevisionTools'][] = 'ThanksHooks::insertThankLink';
$wgHooks['PageHistoryBeforeList'][] = 'ThanksHooks::onPageHistoryBeforeList';
$wgHooks['DiffViewHeader'][] = 'ThanksHooks::onDiffViewHeader';
$wgHooks['BeforeCreateEchoEvent'][] = 'ThanksHooks::onBeforeCreateEchoEvent';
$wgHooks['EchoGetDefaultNotifiedUsers'][] = 'ThanksHooks::onEchoGetDefaultNotifiedUsers';
$wgHooks['AddNewAccount'][] = 'ThanksHooks::onAccountCreated';
$wgHooks['BeforeSpecialMobileDiffDisplay'][] = 'ThanksHooks::onBeforeSpecialMobileDiffDisplay';
$wgHooks['UnitTestsList'][] = 'ThanksHooks::registerUnitTests';
$wgHooks['GetLogTypesOnUser'][] = 'ThanksHooks::onGetLogTypesOnUser';
$wgHooks['BeforePageDisplay'][] = 'ThanksHooks::onBeforePageDisplay';
$wgHooks['ResourceLoaderTestModules'][] = 'ThanksHooks::onResourceLoaderTestModules';
$wgHooks['ApiMain::moduleManager'][] = 'ThanksHooks::onApiMainModuleManager';

// Register modules
$wgResourceModules['ext.thanks'] = array(
	'scripts' => array(
		'ext.thanks.thank.js',
	),
	'localBasePath' => __DIR__ . '/modules',
	'remoteExtPath' => 'Thanks/modules',
);
$wgResourceModules['ext.thanks.revthank'] = array(
	'scripts' => array(
		'ext.thanks.revthank.js',
	),
	'messages' => array(
		'thanks-thanked',
		'thanks-error-undefined',
		'thanks-error-invalidrevision',
		'thanks-error-ratelimited',
		'thanks-confirmation2',
		'thanks-thank-tooltip-no',
		'thanks-thank-tooltip-yes',
		'ok',
		'cancel',
	),
	'dependencies' => array(
		'mediawiki.jqueryMsg',
		'mediawiki.api',
		'jquery.confirmable',
		'ext.thanks',
	),
	'localBasePath' => __DIR__ . '/modules',
	'remoteExtPath' => 'Thanks/modules',
);
$wgResourceModules['ext.thanks.mobilediff'] = array(
	'scripts' => array(
		'ext.thanks.mobilediff.js',
	),
	'messages' => array(
		'thanks-button-thank',
		'thanks-button-thanked',
		'thanks-error-invalidrevision',
		'thanks-error-ratelimited',
		'thanks-error-undefined',
		'thanks-thanked-notice',
	),
	'dependencies' => array(
		// Module name changed in MobileFrontend on 2014-02-25
		'mobile.special.mobilediff.scripts',
		'mediawiki.api',
		'mobile.toast',
	),
	'targets' => array( 'desktop', 'mobile' ),
	'localBasePath' => __DIR__ . '/modules',
	'remoteExtPath' => 'Thanks/modules',
);
$wgResourceModules['ext.thanks.flowthank'] = array(
	'scripts' => array(
		'ext.thanks.flowthank.js',
	),
	'messages' => array(
		'thanks-button-thanked',
		'thanks-error-undefined',
		'thanks-error-ratelimited',
	),
	'dependencies' => array(
		'mediawiki.jqueryMsg',
		'mediawiki.api',
		'ext.thanks',
	),
	'localBasePath' => __DIR__ . '/modules',
	'remoteExtPath' => 'Thanks/modules',
);

// Logging
$wgLogTypes[] = 'thanks';
$wgLogActionsHandlers['thanks/*'] = 'ThanksLogFormatter';
$wgFilterLogTypes['thanks'] = true;

/* Configuration */

// Enable sending thanks to bots
$wgThanksSendToBots = false;

// Whether or not thanks should be logged in Special:Log
$wgThanksLogging = true;

// Whether or not confirmation is required for sending thanks
$wgThanksConfirmationRequired = true;

// Set how many thanks can be sent per minute by a single user (default 10)
$wgRateLimits += array(
	'thanks-notification' => array( 'user' => array( 10, 60 ) ),
);

// Set default user options
$wgDefaultUserOptions['echo-subscriptions-web-edit-thank'] = true;
// This is overriden for new users in ThanksHooks::onAccountCreated
$wgDefaultUserOptions['echo-subscriptions-email-edit-thank'] = false;
