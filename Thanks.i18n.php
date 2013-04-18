<?php
/**
 * Internationalization file for the Thanks extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 */
$messages['en'] = array(
	'thanks-desc' => 'Adds thank links to history and diff views',
	'thanks-thank' => 'thank',
	'thanks-thanked' => 'thanked',
	'thanks-error-undefined' => 'Thank action failed. Please try again.',
	'thanks-error-invalidrevision' => 'Revision ID is not valid.',
	'thanks-error-ratelimited' => "You've exceeded your rate limit. Please wait some time and try again.",
	'thanks-thank-tooltip' => 'Send a thank you notification to this user',
	'echo-pref-subscription-edit-thank' => 'Thanks me for my edit',
	'echo-category-title-edit-thank' => 'Thanks',
	'notification-thanks-diff-link' => 'your edit',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|thanked}} you for $2 on [[$3]].',
	'notification-thanks-flyout' => '<b>$1</b> {{GENDER:$1|thanked}} you for $2 on <b>$3</b>.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|thanked}} you for your edit on {{SITENAME}}',
	'notification-thanks-email-body' => '{{SITENAME}} user $1 {{GENDER:$1|thanked}} you for your edit on $2.

View your edit:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|thanked}} you for your edit on $2.',
	'log-name-thanks' => 'Thanks log',
	'log-description-thanks' => 'These events track when users thank other users',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|thanked}} $3',
);

/** Message documentation (Message documentation) */
$messages['qqq'] = array(
	'thanks-desc' => '{{desc}}',

	'thanks-thank' => 'Link to thank another user. This is a verb.',
	'thanks-thanked' => 'Message that replaces the link to thank another user after they have been thanked ({{msg-mw|Echo-thank}})',
	'thanks-error-undefined' => 'Error message that is displayed when the thank action fails',
	'thanks-error-invalidrevision' => 'Error message that is displayed when the revision ID is not valid',
	'thanks-error-ratelimited' => 'Error message that is displayed when user exceeds rate limit',
	'thanks-thank-tooltip' => 'Tooltip that appears when a user hovers over the "thank" link',
	'echo-pref-subscription-edit-thank' => "Option for getting notifications when someone thanks the user for their edit.

This is the conclusion of the sentence begun by the header: {{msg-mw|Prefs-echosubscriptions}}.",
	'echo-category-title-edit-thank' => 'This is a short title for the notification category. Used as <code>$1</code> in {{msg-mw|Echo-dismiss-message}} and <code>$2</code> in {{msg-mw|Echo-email-batch-
category-header}} and <code>$2</code> in {{msg-mw|Echo-email-batch-
category-header}}.',
	'notification-thanks-diff-link' => "The text of a link to the user's edit.

Used for <code>$2</code> in {{msg-mw|Notification-thanks}}. Should have capitalization appropriate for the middle of a sentence.",
	'notification-thanks' => "Format for displaying notifications when a user is thanked for their edit. Parameters:
* $1 is the username of the person who edited, plain text. Can be used for GENDER.
* $2 is a link to the user's edit. The text of the link is {{msg-mw|Notification-thanks-diff-link}}.
* $3 is the title of the page the user edited.",
	'notification-thanks-flyout' => "Format for displaying notifications in the flyout when a user is thanked for their edit. Parameters:
* $1 is the username of the person who edited, plain text. Can be used for GENDER.
* $2 is a link to the user's edit. The text of the link is {{msg-mw|Notification-thanks-diff-link}}.
* $3 is the title of the page the user edited.",
	'notification-thanks-email-subject' => 'E-mail subject',
	'notification-thanks-email-body' => "E-mail notification. Parameters:
* $1 is a username. Can be used for GENDER.
* $2 the title of the page the user edited.
* $3 is a link to the user's edit.
* $4 is the e-mail footer, {{msg-mw|echo-email-footer-default}}",
	'notification-thanks-email-batch-body' => 'E-mail notification. Parameters:
* $1 is a username. Can be used for GENDER.
* $2 the title of the page the user edited.',
	'log-name-thanks' => 'Name of log that appears on Special:Log',
	'log-description-thanks' => 'Description of thanks log',
	'logentry-thanks-thank' => 'Log entry that is created when a user thanks another user for an edit. Parameters:
* $1 is a user link, for example "Jane Doe (Talk | contribs)"
* $2 is a username. Can be used for GENDER.
* $3 is a user link, for example "John Doe (Talk | contribs)',
);
