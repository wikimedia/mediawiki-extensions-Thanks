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
	),
	'version'  => '1.0.0',
	'url' => 'https://www.mediawiki.org/wiki/Extension:Thanks',
	'descriptionmsg' => 'thanks-desc',
);


/* Setup */

$dir = __DIR__;

// Register files
$wgAutoloadClasses['ThanksHooks'] = $dir . '/Thanks.hooks.php';
$wgAutoloadClasses['EchoThanksFormatter'] = $dir . '/ThanksFormatter.php';
$wgAutoloadClasses['ApiThank'] = $dir . '/ApiThank.php';
$wgAutoloadClasses['ThanksLogFormatter'] = $dir . '/ThanksLogFormatter.php';
$wgExtensionMessagesFiles['Thanks'] = $dir . '/Thanks.i18n.php';

// Register APIs
$wgAPIModules['thank'] = 'ApiThank';

// Register hooks
$wgHooks['HistoryRevisionTools'][] = 'ThanksHooks::insertThankLink';
$wgHooks['DiffRevisionTools'][] = 'ThanksHooks::insertThankLink';
$wgHooks['PageHistoryBeforeList'][] = 'ThanksHooks::onPageHistoryBeforeList';
$wgHooks['DiffViewHeader'][] = 'ThanksHooks::onDiffViewHeader';
$wgHooks['BeforeCreateEchoEvent'][] = 'ThanksHooks::onBeforeCreateEchoEvent';
$wgHooks['EchoGetDefaultNotifiedUsers'][] = 'ThanksHooks::onEchoGetDefaultNotifiedUsers';
$wgHooks['AddNewAccount'][] = 'ThanksHooks::onAccountCreated';

// Register modules
$wgResourceModules['ext.thanks'] = array(
	'scripts' => array(
		'ext.thanks.thank.js',
	),
	'messages' => array(
		'thanks-thanked',
		'thanks-error-undefined',
		'thanks-error-invalidrevision',
		'thanks-error-ratelimited',
		'thanks-confirmation',
		'ok',
		'cancel',
	),
	'dependencies' => array(
		'mediawiki.jqueryMsg',
		'mediawiki.api',
		'user.tokens',
		'jquery.ui.dialog',
	),
	'localBasePath' => $dir . '/modules',
	'remoteExtPath' => 'Thanks/modules',
);

// Logging
$wgLogTypes[] = 'thanks';
$wgLogActionsHandlers['thanks/*'] = 'ThanksLogFormatter';

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
