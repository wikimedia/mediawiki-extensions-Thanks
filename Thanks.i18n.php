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
	'notification-thanks-flyout' => '$1 {{GENDER:$1|thanked}} you for $2 on $3.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|thanked}} you for your edit on {{SITENAME}}',
	'notification-thanks-email-body' => '{{SITENAME}} user $1 {{GENDER:$1|thanked}} you for your edit on $2.

View your edit:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|thanked}} you for your edit on $2.',
);

/** Message documentation (Message documentation)
 */
$messages['qqq'] = array(
	'thanks-desc' => '{{desc}}',
	'thanks-thank' => 'Link to thank another user. This is a verb.',
	'thanks-thanked' => 'Message that replaces the link to thank another user after they have been thanked ({{msg-mw|Echo-thank}})',
	'thanks-error-undefined' => 'Error message that is displayed when the thank action fails',
	'thanks-error-invalidrevision' => 'Error message that is displayed when the revision ID is not valid',
	'thanks-error-ratelimited' => 'Error message that is displayed when user exceeds rate limit',
	'thanks-thank-tooltip' => 'Tooltip that appears when a user hovers over the "thank" link',
	'echo-pref-subscription-edit-thank' => 'Option for getting notifications when someone thanks the user for their edit.

This is the conclusion of the sentence begun by the header: {{msg-mw|Prefs-echosubscriptions}}.',
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
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'thanks-desc' => 'Ergänzt Dankeslinks zur Versionsgeschichte und zu Versionsunterschiedsansichten',
	'thanks-thank' => 'danken',
	'thanks-thanked' => 'dankte',
	'thanks-error-undefined' => 'Dankesaktion fehlgeschlagen. Bitte erneut versuchen.',
	'thanks-error-invalidrevision' => 'Die Versionskennung ist ungültig.',
	'thanks-error-ratelimited' => 'Du hast deine Bewertungsgrenze überschritten. Bitte warte einige Zeit und versuche es erneut.',
	'thanks-thank-tooltip' => 'Diesem Benutzer eine Dankesbenachrichtigung senden',
	'echo-pref-subscription-edit-thank' => 'mir für meine Bearbeitung dankt',
	'echo-category-title-edit-thank' => 'Dankes',
	'notification-thanks-diff-link' => 'deine Bearbeitung',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|dankte}} dir für $2 auf [[$3]].',
	'notification-thanks-flyout' => '$1 {{GENDER:$1|dankte}} dir für $2 auf $3.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|dankte}} dir für deine Bearbeitung auf {{SITENAME}}',
	'notification-thanks-email-body' => '{{GENDER:$1|Der {{SITENAME}}-Benutzer|Die {{SITENAME}}-Benutzerin}} $1 dankte dir für deine Bearbeitung auf $2.

Sieh dir deine Bearbeitung an:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|dankte}} dir für deine Bearbeitung auf $2.',
);

/** French (français)
 * @author Boniface
 * @author Gomoko
 */
$messages['fr'] = array(
	'thanks-desc' => 'Ajoute des liens de remerciement aux vues historique et de différence',
	'thanks-thank' => 'merci',
	'thanks-thanked' => 'remercié',
	'thanks-error-undefined' => 'Échec de l’action de remerciement. Veuillez réessayer.',
	'thanks-error-invalidrevision' => 'L’ID de révision n’est pas valide.',
	'thanks-error-ratelimited' => 'Vous avez dépassé votre limite de débit. Veuillez attendre un peu et réessayer.',
	'thanks-thank-tooltip' => 'Envoyer une notification de remerciement à cet utilisateur',
	'echo-pref-subscription-edit-thank' => 'Me remercier pour ma modification',
	'echo-category-title-edit-thank' => 'Merci',
	'notification-thanks-diff-link' => 'votre modification',
	'notification-thanks' => '[[User:$1|$1]] vous {{GENDER:$1|a remercié}} pour $2 sur [[$3]].',
	'notification-thanks-flyout' => '$1 vous {{GENDER:$1|a remercié}} pour $2 sur $3.',
	'notification-thanks-email-subject' => '$1 vous {{GENDER:$1|a remercié}} pour votre modification sur {{SITENAME}}',
	'notification-thanks-email-body' => 'L’utilisateur $1 de {{SITENAME}} vous {{GENDER:$1|a remercié}} pour votre modification sur $2.

Voir votre modification :

$3

$4',
	'notification-thanks-email-batch-body' => '$1 vous {{GENDER:$1|a remercié}} pour votre modification sur $2.',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'thanks-desc' => 'Engade ligazóns de agradecemento no historial e na vista de diferenzas',
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => 'agradecido',
	'thanks-error-undefined' => 'Houbo un erro ao realizar o agradecemento. Inténteo de novo.',
	'thanks-error-invalidrevision' => 'O ID da revisión non é válido.',
	'thanks-error-ratelimited' => 'Superou o seu límite de velocidade. Agarde uns minutos e inténteo de novo.',
	'thanks-thank-tooltip' => 'Envía unha notificación de agradecemento a este usuario',
	'echo-pref-subscription-edit-thank' => 'Me agradeza unha edición feita por min',
	'echo-category-title-edit-thank' => 'Grazas',
	'notification-thanks-diff-link' => 'a súa edición',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|agradeceu}} $2 en "[[$3]]".',
	'notification-thanks-flyout' => '$1 {{GENDER:$1|agradeceu}} $2 en "$3".',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeceu}} a súa edición en {{SITENAME}}',
	'notification-thanks-email-body' => '{{GENDER:$1|O editor|A editora}} $1 agradeceu a súa edición en "$2".

Ollar a súa edición:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|agradeceu}} a súa edición en "$2".',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 */
$messages['nl'] = array(
	'echo-category-title-edit-thank' => 'Bedankt',
);
