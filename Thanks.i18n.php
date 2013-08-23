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
	'thanks-thanked' => '{{GENDER:$1|thanked}}',
	'thanks-error-undefined' => 'Thank action failed. Please try again.',
	'thanks-error-invalidrevision' => 'Revision ID is not valid.',
	'thanks-error-ratelimited' => "You've exceeded your rate limit. Please wait some time and try again.",
	'thanks-thank-tooltip' => '{{GENDER:$1|Send}} a thank you notification to this {{GENDER:$2|user}}',
	'thanks-confirmation' => 'Are you sure you want to {{GENDER:$1|thank}} $2 for this edit?',
	'echo-pref-subscription-edit-thank' => 'Thanks me for my edit',
	'echo-pref-tooltip-edit-thank' => 'Notify me when someone thanks me for an edit I made.',
	'echo-category-title-edit-thank' => 'Thanks',
	'notification-thanks-diff-link' => 'your edit',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|thanked}} you for $2 on [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|thanked}} you for your edit on $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|thanked}} you for your edit on {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|thanked}} you for your edit on $2.',
	'notification-link-text-respond-to-user' => 'Respond to user',
	'log-name-thanks' => 'Thanks log',
	'log-description-thanks' => 'Below is a list of users thanked by other users.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|thanked}} {{GENDER:$4|$3}}',
);

/** Message documentation (Message documentation)
 * @author Amire80
 * @author Raymond
 * @author Shirayuki
 * @author Siebrand
 */
$messages['qqq'] = array(
	'thanks-desc' => '{{desc|name=Thanks|url=http://www.mediawiki.org/wiki/Extension:Thanks}}',
	'thanks-thank' => '{{Doc-actionlink}}
A link to thank another user. This appears next to messages such as {{msg-mw|editundo}} and {{msg-mw|rollbacklink}} and should be translated in a similar fashion.',
	'thanks-thanked' => "This message immediately replaces the message {{msg-mw|Thanks-thank}} after it's pressed. It means that the thanking operation has been completed. It can be translated as \"''thanked''\" in \"You thanked the user\" or \"The user has just been ''thanked''\" - whatever is appropriate to your language.

Parameters:
* \$1 is the current user, for GENDER support.",
	'thanks-error-undefined' => 'Error message that is displayed when the thank action fails.
{{Identical|Please try again}}',
	'thanks-error-invalidrevision' => 'Error message that is displayed when the revision ID is not valid',
	'thanks-error-ratelimited' => 'Error message that is displayed when user exceeds rate limit',
	'thanks-thank-tooltip' => 'Tooltip that appears when a user hovers over the "thank" link.  Parameters
* $1 - The user sending the thanks.  Can be used for GENDER support.
* $2 - The user receiving the thanks.  Can be used for GENDER support',
	'thanks-confirmation' => 'A confirmation message to make sure the user actually wants to send thanks to another user.

Parameters:
* $1 - the user sending the thanks. Can be used for GENDER.
* $2 - the username of the recipient. Can NOT be used for GENDER.',
	'echo-pref-subscription-edit-thank' => 'Option for getting notifications when someone thanks the user for their edit.

This is the conclusion of the sentence begun by the header: {{msg-mw|Prefs-echosubscriptions}}.',
	'echo-pref-tooltip-edit-thank' => 'This is a short description of the edit-thank notification category.',
	'echo-category-title-edit-thank' => 'This is a short title for the notification category.

Used as <code>$1</code> in {{msg-mw|Echo-dismiss-message}} and as <code>$2</code> in {{msg-mw|Echo-email-batch-category-header}}
{{Identical|Thanks}}',
	'notification-thanks-diff-link' => "The text of a link to the user's edit.

Used for <code>$2</code> in {{msg-mw|Notification-thanks}}. Should have capitalization appropriate for the middle of a sentence.",
	'notification-thanks' => "Format for displaying notifications when a user is thanked for their edit. Parameters:
* $1 is the username of the person sending the thanks, as plain text. Can be used for GENDER.
* $2 is a link to the user's edit. The text of the link is {{msg-mw|Notification-thanks-diff-link}}.
* $3 is the title of the page the user edited.",
	'notification-thanks-flyout2' => 'Format for displaying notifications in the flyout when a user is thanked for their edit. Parameters:
* $1 is the username of the person sending the thanks, as plain text. Can be used for GENDER.
* $2 is the title of the page the user edited.',
	'notification-thanks-email-subject' => 'E-mail subject. Parameters:
* $1 is the username of the person sending the thanks, as plain text. Can be used for GENDER.',
	'notification-thanks-email-batch-body' => 'E-mail notification. Parameters:
* $1 is the username of the person sending the thanks, as plain text. Can be used for GENDER.
* $2 the title of the page the user edited.',
	'notification-link-text-respond-to-user' => 'Label for button that links to a user page.',
	'log-name-thanks' => 'Name of log that appears on [[Special:Log]].',
	'log-description-thanks' => 'Description of thanks log',
	'logentry-thanks-thank' => 'Log entry that is created when a user thanks another user for an edit. Parameters:
* $1 is a user link, for example "Jane Doe (Talk | contribs)"
* $2 is a username. Can be used for GENDER.
* $3 is a user link, for example "John Doe (Talk | contribs)
* $4 is the username of the recipient. Can be used for GENDER.',
);

/** Arabic (العربية)
 * @author ترجمان05
 */
$messages['ar'] = array(
	'thanks-thanked' => 'مشكور', # Fuzzy
	'echo-category-title-edit-thank' => 'شكرا',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'thanks-desc' => "Amiesta enllaces d'agradecimientu a les vistes d'historial y diferencies",
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => '{{GENDER:$1|agradecíu|agradecida}}',
	'thanks-error-undefined' => "Falló l'aición d'agradecimientu. Por favor, vuelva a probar.",
	'thanks-error-invalidrevision' => 'La ID de la revisión nun ye válida.',
	'thanks-error-ratelimited' => 'Pasó la llende de repeticiones. Espere un tiempu y vuelva a intentalo.',
	'thanks-thank-tooltip' => "Unvie una notificación d'agradecimientu a esti usuariu",
	'thanks-confirmation' => '¿Ta {{GENDER:$1|seguru|segura}} de que quier agradecer a $2 la so edición?',
	'echo-pref-subscription-edit-thank' => 'Agradecimientos pola mio edición',
	'echo-pref-tooltip-edit-thank' => 'Avisame cuando alguién me de les gracies por una edición de mio.',
	'echo-category-title-edit-thank' => 'Gracies',
	'notification-thanks-diff-link' => 'la so edición',
	'notification-thanks' => '[[User:$1|$1]] ta {{GENDER:$1|agradecíu|agradecida}} por $2 en [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|agradeció}} la so edición de $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeció}} la so edición en {{SITENAME}}',
	'notification-thanks-email-body' => "{{GENDER:$1|L'usuariu|La usuaria}} $1 agradeció la so edición en $2.

Vea la so edición:

$3

$4",
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|agradeció}} la so edición en $2.',
	'notification-link-text-respond-to-user' => 'Contestar al usuariu',
	'log-name-thanks' => "Rexistru d'agradecimientos",
	'log-description-thanks' => "Mas abaxo ta la llista d'usuarios a los qu'otros usuarios dieron les gracies.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|dio les gracies a}} $3',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 * @author Bellayet
 */
$messages['bn'] = array(
	'thanks-thank' => 'ধন্যবাদ',
	'thanks-thanked' => '{{GENDER:$1|ধন্যবাদ}}',
	'thanks-error-undefined' => 'ধন্যবাদ পদক্ষেপ ব্যর্থ। অনুগ্রহ করে আবার চেষ্টা করুন।',
	'echo-pref-subscription-edit-thank' => 'আমার সম্পাদনার জন্য আমার ধন্যবাদসমূহ',
	'echo-pref-tooltip-edit-thank' => 'আমার কোনো সম্পাদনার জন্য কেউ আমাকে ধন্যবাদ দিলে তা আমাকে জানাও',
	'echo-category-title-edit-thank' => 'ধন্যবাদসমূহ',
	'notification-thanks-diff-link' => 'আপনার সম্পাদনা',
	'notification-link-text-respond-to-user' => 'ব্যবহারকারীর প্রতিক্রিয়া',
	'log-name-thanks' => 'ধন্যবাদ লগ',
	'log-description-thanks' => 'নিচে ব্যবহারকারীদের একটি তালিকা রয়েছে যারা অন্য ব্যবহারকারী হতে ধন্যবাদ পেয়েছেন।',
	'logentry-thanks-thank' => '$1 $3কে {{GENDER:$2|ধন্যবাদ জানিয়েছেন}}',
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'thanks-thank' => 'trugarez',
	'thanks-thanked' => 'trugarekaet', # Fuzzy
);

/** Catalan (català)
 * @author QuimGil
 */
$messages['ca'] = array(
	'thanks-desc' => "Afegeix enllaços d'agraïment a les pàgines d'historial i diferències de revisions.",
	'thanks-thank' => 'agraeix',
	'thanks-thanked' => '{{GENDER:$1|agraït}}',
	'thanks-error-undefined' => "L'agraïment ha fallat. Si us plau torneu a intentar-ho.",
	'thanks-error-invalidrevision' => "L'identificador de revisió no és vàlid.",
	'thanks-error-ratelimited' => "Heu excedit el límit d'agraïments. Si us plau espereu una mica abans de tornar-hi.",
	'thanks-thank-tooltip' => "Envia una notificació d'agraïment a aquest usuari.",
	'echo-pref-subscription-edit-thank' => "M'agraeix una edició",
	'echo-pref-tooltip-edit-thank' => "Notifica'm quan algú agraeix una edició que he fet.",
	'echo-category-title-edit-thank' => 'Gràcies',
	'notification-thanks-diff-link' => 'la teva edició',
	'notification-thanks' => "[[User:$1|$1]] t'{{GENDER:$1|agraeix}} per $2 a [[:$3]].",
	'notification-thanks-email-subject' => "$1 t'{{GENDER:$1|agraeix}} per la teva edició a {{SITENAME}}",
	'notification-thanks-email-body' => "$1 a {{SITENAME}} t'{{GENDER:$1|agraeix}} la teva edició en $2. 

Mira la teva edició: 

$3 

$4",
	'notification-thanks-email-batch-body' => "$1 t'{{GENDER:$1|agraeix}} per la teva edició a $2.",
	'log-name-thanks' => "Registre d'agraïments",
	'log-description-thanks' => "A continuació teniu una llista d'usuaris agraïts per part d'altres usuaris.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|ha agraït}} $3',
);

/** Sorani Kurdish (کوردی)
 * @author Calak
 */
$messages['ckb'] = array(
	'echo-pref-subscription-edit-thank' => 'بۆ دەستکارییەکم سپاسم بکە',
	'echo-category-title-edit-thank' => 'سپاس',
	'notification-thanks-diff-link' => 'دەستکارییەکەت',
	'log-name-thanks' => 'لۆگی سپاس',
);

/** Czech (česky)
 * @author Mormegil
 */
$messages['cs'] = array(
	'thanks-desc' => 'Přidává do historie a zobrazení rozdílů odkazy pro poděkování',
	'thanks-thank' => 'poděkovat',
	'thanks-thanked' => 'poděkováno', # Fuzzy
	'thanks-error-undefined' => 'Poděkování se nezdařilo. Zkuste to prosím znovu.',
	'thanks-error-invalidrevision' => 'ID revize je neplatné.',
	'thanks-error-ratelimited' => 'Překročili jste rychlostní limit. Počkejte prosím chvíli a zkuste to znovu.',
	'thanks-thank-tooltip' => 'Poslat tomuto uživateli poděkování',
	'echo-pref-subscription-edit-thank' => '…mi někdo poděkuje za editaci',
	'echo-category-title-edit-thank' => 'poděkování',
	'notification-thanks-diff-link' => 'vaši úpravu',
	'notification-thanks' => '[[User:$1|$1]] vám {{GENDER:$1|poděkoval|poděkovala}} za $2 stránky [[:$3]].',
	'notification-thanks-email-subject' => '$1 vám {{GENDER:$1|poděkoval|poděkovala}} za vaši editaci na {{grammar:6sg|{{SITENAME}}}}',
	'notification-thanks-email-body' => '{{GENDER:$1|Uživatel|Uživatelka}} $1 na {{grammar:6sg|{{SITENAME}}}} vám {{GENDER:$1|poděkoval|poděkovala}} za vaši úpravu stránky $2.

Můžete si prohlédnout svou úpravu:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 vám {{GENDER:$1|poděkoval|poděkovala}} za vaši úpravu stránky $2.',
);

/** German (Deutsch)
 * @author MF-Warburg
 * @author Metalhead64
 */
$messages['de'] = array(
	'thanks-desc' => 'Ergänzt „Danke schön“-Links zur Versionsgeschichte und zu Versionsunterschieden',
	'thanks-thank' => 'danken',
	'thanks-thanked' => '{{GENDER:$1|bereits bedankt}}',
	'thanks-error-undefined' => '„Danke schön“ fehlgeschlagen. Bitte erneut versuchen.',
	'thanks-error-invalidrevision' => 'Die Versionskennung ist ungültig.',
	'thanks-error-ratelimited' => 'Du hast dein Aktionslimit überschritten. Bitte warte einige Zeit und versuche es erneut.',
	'thanks-thank-tooltip' => '{{GENDER:$2|Diesem Benutzer|Dieser Benutzerin}} ein „Danke schön“ {{GENDER:$1|senden}}',
	'thanks-confirmation' => 'Möchtest du $2 wirklich für diese Bearbeitung {{GENDER:$1|danken}}?',
	'echo-pref-subscription-edit-thank' => '„Danke schöns“ für meine Bearbeitung',
	'echo-pref-tooltip-edit-thank' => 'Benachrichtige mich, wenn mir jemand für eine Bearbeitung dankt, die ich gemacht habe.',
	'echo-category-title-edit-thank' => 'Danke schön',
	'notification-thanks-diff-link' => 'deine Bearbeitung',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|dankte}} dir für $2 auf [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|dankte}} dir für deine Bearbeitung auf „$2“.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|dankte}} dir für deine Bearbeitung auf {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|dankte}} dir für deine Bearbeitung auf $2.',
	'notification-link-text-respond-to-user' => 'Antwort an Benutzer',
	'log-name-thanks' => 'Dankeschön-Logbuch',
	'log-description-thanks' => 'Es folgt eine Liste von Benutzern, die anderen Benutzern dankten.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|dankte}} {{GENDER:$4|$3}}',
);

/** Spanish (español)
 * @author Fitoschido
 * @author Hahc21
 */
$messages['es'] = array(
	'thanks-desc' => 'Añade enlaces para agradecer al historial y las vistas de diferencias',
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => '{{GENDER:$1|agradeció}}',
	'thanks-error-undefined' => 'Acción de agradecimiento fallida. Por favor intente de nuevo.',
	'thanks-error-invalidrevision' => 'ID de revisión no válido.',
	'thanks-error-ratelimited' => 'Has excedido tu límite. Por favor espera un tiempo e intenta de nuevo.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Enviar}} una notificación de agradecimiento a {{GENDER:$2|este|esta|este}} {{GENDER:$2|usuario|usuaria|usuario}}',
	'thanks-confirmation' => 'Estás segur{{GENDER:$1|o|a|o}} que quieres agradecer a $2 por ésta edición?',
	'echo-pref-subscription-edit-thank' => 'Agradacerme por mi edición',
	'echo-pref-tooltip-edit-thank' => 'Notificarme cuando alguién me agradezca pur una edición que haya realizado.',
	'echo-category-title-edit-thank' => 'Gracias',
	'notification-thanks-diff-link' => 'tu edición',
	'notification-thanks' => '[[Usuario:$1|$1]] te ha agradecido por $2 en [[:$3]].', # Fuzzy
	'notification-thanks-flyout2' => '[[Usuario:$1|$1]] te ha agradecido por tu edición en $2.', # Fuzzy
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeció}} tu edición en {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 te ha agradecido por tu edición en $2.',
	'notification-link-text-respond-to-user' => 'Responder al usuario',
	'log-name-thanks' => 'Registro de agradecimientos',
	'log-description-thanks' => 'A continuación, una lista de usuarios que han sido agradecidos por otros usuarios.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|agradeció}} a {{GENDER:$4|$3}}',
);

/** Estonian (eesti)
 * @author Kyng
 * @author Pikne
 */
$messages['et'] = array(
	'thanks-desc' => 'Lisab ajalugudesse ja erinevuse vaadete juurde tänulingid.',
	'thanks-thank' => 'täna',
	'thanks-thanked' => '{{GENDER:$1|tänatud}}',
	'thanks-error-undefined' => 'Tänamine ebaõnnestus. Palun proovi uuesti.',
	'thanks-error-invalidrevision' => 'Redaktsiooni identifikaator ei sobi.',
	'thanks-error-ratelimited' => 'Oled ületanud piirangumäära. Palun oota natuke ja proovi uuesti.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Saada}} sellele {{GENDER:$2|kasutajale}} tänuteavitus',
	'thanks-confirmation' => 'Kas oled kindel, et soovid kasutajat $2 selle muudatuse eest {{GENDER:$1|tänada}}?',
	'echo-pref-subscription-edit-thank' => 'Mind tänatakse minu muudatuse eest',
	'echo-pref-tooltip-edit-thank' => 'Teavita mind, kui keegi tänab mind tehtud muudatuse eest.',
	'echo-category-title-edit-thank' => 'Tänamine',
	'notification-thanks-diff-link' => 'sinu muudatuse',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|tänas}} sind $2 eest leheküljel [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] tänas sind sinu muudatuse eest leheküljel $2.',
	'notification-thanks-email-subject' => '$1 tänas sind {{GRAMMAR:inessive|{{SITENAME}}}} muudatuse eest',
	'notification-thanks-email-batch-body' => '$1 tänas sind sinu muudatuse eest leheküljel $2.',
	'notification-link-text-respond-to-user' => 'Vasta kasutajale',
	'log-name-thanks' => 'Tänulogi',
	'log-description-thanks' => 'Allpool on nimekiri kasutajatest, keda teised kasutajad on tänanud.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|tänas}} kasutajat {{GENDER:$4|$3}}',
);

/** Persian (فارسی)
 * @author A.R.Rostamzade
 * @author Ladsgroup
 * @author Reza1615
 */
$messages['fa'] = array(
	'thanks-desc' => 'پیوند به تشکر را به تاریخچه و نمایش تفاوت‌ها می‌افزاید',
	'thanks-thank' => 'تشکر',
	'thanks-thanked' => '{{GENDER:$1|تشکر شد}}',
	'thanks-error-undefined' => 'تشکر کردن موفق نبود، دوباره تلاش کنید',
	'thanks-error-invalidrevision' => 'شماره تفاوت صحیح نیست',
	'thanks-error-ratelimited' => 'شما از مقدار مجاز فراتر رفته‌اید. لطفا چند لحظه صبر کنید و دوباره امتحان کنید.',
	'thanks-thank-tooltip' => 'یک پیام تشکر به اعلامیه‌های این کاربر بفرستید',
	'echo-pref-subscription-edit-thank' => 'برای ویرایش هایم از من تشکر کن.',
	'echo-pref-tooltip-edit-thank' => 'هنگامی که کسی برای ویرایشی که من انجام دادم از من تشکر کرد مرا مطلع کن.',
	'echo-category-title-edit-thank' => 'تشکر',
	'notification-thanks-diff-link' => 'ویرایش های شما',
	'notification-thanks' => '[[User:$1|$1]] به $2 {{GENDER:$1|شما}} در [[:$3]] تشکر کرده‌است.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|تشکر شدید}} برای ویرایشی که بر روی صفحه ی {{SITENAME}} داشتید.',
	'notification-thanks-email-body' => '{{SITENAME}} کاربر $1 {{GENDER:$1|تشکر شده}} از شما برای ویرایشتان بر $2.

نمایش ویرایش های شما:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|تشکر شده}} برای ویرایش هایتان بر روی $2.',
	'log-name-thanks' => 'ورودی تشکرها',
	'log-description-thanks' => 'در زیر لیستی از کاربرانی که توسط کاربران دیگر از آن ها تشکر شده آمده است.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|تشکر شده کرده است از}} $3',
);

/** Finnish (suomi)
 * @author Silvonen
 */
$messages['fi'] = array(
	'thanks-thank' => 'kiitä',
	'thanks-thanked' => 'kiitetty', # Fuzzy
	'log-name-thanks' => 'Kiitosloki',
);

/** French (français)
 * @author Automatik
 * @author Boniface
 * @author Gomoko
 * @author Ltrlg
 * @author Metroitendo
 */
$messages['fr'] = array(
	'thanks-desc' => 'Ajoute des liens de remerciement aux vues historique et de différence',
	'thanks-thank' => 'merci',
	'thanks-thanked' => '{{GENDER:$1|remercié|remerciée}}',
	'thanks-error-undefined' => 'Échec de l’action de remerciement. Veuillez réessayer.',
	'thanks-error-invalidrevision' => 'L’ID de révision n’est pas valide.',
	'thanks-error-ratelimited' => 'Vous avez dépassé votre limite de débit. Veuillez attendre un peu et réessayer.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Envoyer}} une notification de remerciement à {{GENDER:$2|cet utilisateur|cette utilisatrice}}',
	'thanks-confirmation' => 'Êtes-vous sûr de vouloir {{GENDER:$1|remercier}} $2 pour cette modification ?',
	'echo-pref-subscription-edit-thank' => 'Me remercier pour ma modification',
	'echo-pref-tooltip-edit-thank' => 'Me prévenir quand quelqu’un me remercie pour une modification que j’ai faite.',
	'echo-category-title-edit-thank' => 'Merci',
	'notification-thanks-diff-link' => 'votre modification',
	'notification-thanks' => '[[User:$1|$1]] vous {{GENDER:$1|a remercié}} pour $2 sur [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] vous {{GENDER:$1|a remercié}} pour votre modification sur $2.',
	'notification-thanks-email-subject' => '$1 vous {{GENDER:$1|a remercié}} pour votre modification sur {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 vous {{GENDER:$1|a remercié}} pour votre modification sur $2.',
	'notification-link-text-respond-to-user' => 'Répondre à l’utilisateur',
	'log-name-thanks' => 'Entrée remerciements',
	'log-description-thanks' => "Ci-dessous se trouve une liste d'utilisateurs qui ont été remerciés par d'autres.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|a remercié}} {{GENDER:$4|$3}}',
);

/** Northern Frisian (Nordfriisk)
 * @author Murma174
 */
$messages['frr'] = array(
	'thanks-desc' => 'Saat en "soonk" tu a werjuunsferluup',
	'thanks-thank' => 'soonke',
	'thanks-thanked' => '{{GENDER:$1|besoonket}}',
	'thanks-error-undefined' => '"Soonk" hää ei loket. Ferschük det man noch ans.',
	'thanks-error-invalidrevision' => 'Det werjuun jaft at ei.',
	'thanks-error-ratelimited' => 'Dü heest tuföl aktjuunen onernimen. Teew en uugenblak an ferschük det noch ans weder.',
	'thanks-thank-tooltip' => 'Schüür didiar brüker en "soonk".',
	'thanks-confirmation' => 'Wel dü $2 würelk {{GENDER:$1|en soonk schüür}} för didiar bidrach?',
	'echo-pref-subscription-edit-thank' => '"Soonk" saien för man bidrach',
	'echo-pref-tooltip-edit-thank' => 'Du mi bööd, wan mi hoker en "soonk" schüürt för man bidrach.',
	'echo-category-title-edit-thank' => 'Föl soonk',
	'notification-thanks-diff-link' => 'dan bidrach',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|soonket}} di för $2 üüb [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|soonket}} di för dan bidrach üüb $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|soonket}} di för dan bidrach üüb {{SITENAME}}',
	'notification-thanks-email-body' => '{{GENDER:$1|Di {{SITENAME}}-brüker|Det {{SITENAME}}-brükerin}} $1 soonket di för dan bidrach üüb $2.

Dan bidrach uunluke:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|soonket}} di för dan bidrach üüb $2.',
	'notification-link-text-respond-to-user' => 'Di brüker swaare',
	'log-name-thanks' => 'Soonk-logbuk',
	'log-description-thanks' => 'Oner stäänt en list faan brükern, diar faan ööder brükern soonk saad wurden as.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|soonket}} $3',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'thanks-desc' => 'Engade ligazóns de agradecemento no historial e na vista de diferenzas',
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => '{{GENDER:$1|agradecido|agradecida}}',
	'thanks-error-undefined' => 'Houbo un erro ao realizar o agradecemento. Inténteo de novo.',
	'thanks-error-invalidrevision' => 'O ID da revisión non é válido.',
	'thanks-error-ratelimited' => 'Superou o seu límite de velocidade. Agarde uns minutos e inténteo de novo.',
	'thanks-thank-tooltip' => 'Envía unha notificación de agradecemento a este usuario',
	'thanks-confirmation' => 'Está {{GENDER:$1|seguro|segura}} de querer agradecer a $2 a súa edición?',
	'echo-pref-subscription-edit-thank' => 'Me agradeza unha edición feita por min',
	'echo-pref-tooltip-edit-thank' => 'Notificádeme cando alguén me agradeza unha edición feita por min.',
	'echo-category-title-edit-thank' => 'Agradecemento',
	'notification-thanks-diff-link' => 'a súa edición',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|agradeceu}} $2 en "[[:$3]]".',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|agradeceu}} a súa edición en "$2".',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeceu}} a súa edición en {{SITENAME}}',
	'notification-thanks-email-body' => '{{GENDER:$1|O editor|A editora}} $1 agradeceu a súa edición en "$2".

Ollar a súa edición:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|agradeceu}} a súa edición en "$2".',
	'notification-link-text-respond-to-user' => 'Responder ao usuario',
	'log-name-thanks' => 'Rexistro de agradecementos',
	'log-description-thanks' => 'A continuación hai unha lista dos usuarios que recibiron agradecementos doutros usuarios.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|deu as grazas a}} $3',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Rotemliss
 */
$messages['he'] = array(
	'thanks-desc' => 'הוספת קישורי "תודה" לדפי היסטוריה והשוואה',
	'thanks-thank' => 'תודה',
	'thanks-thanked' => '{{GENDER:$1|הודֵיתָ|הודֵיתְ}}',
	'thanks-error-undefined' => 'פעולת תודה נכשלה. נא לנסות שוב.',
	'thanks-error-invalidrevision' => 'מזהה גרסה אינו תקין.',
	'thanks-error-ratelimited' => 'עברת את מגבלת הקצב שלך. נא להמתין ולנסות שוב.',
	'thanks-thank-tooltip' => '{{GENDER:$1|שלח|שלחי}} הודעת תודה {{GENDER:$2|למשתמש הזה|למשתמשת הזו}}',
	'thanks-confirmation' => 'האם {{GENDER:$1|אתה|את}} באמת רוצה להודות ל{{GRAMMAR:תחילית|$2}} על העריכה הזאת?',
	'echo-pref-subscription-edit-thank' => 'מודה לי על עריכה שלי',
	'echo-pref-tooltip-edit-thank' => 'להודיע לי כשמישהו מודה לי על עריכה שעשיתי.',
	'echo-category-title-edit-thank' => 'תודות',
	'notification-thanks-diff-link' => 'עריכה שלך',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|הודה|הודתה}} לך על $2 בדף [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|הודה|הודתה}} לך על עריכתך בדף $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|הודה|הודתה}} לך על עריכה שלך באתר {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|הודה|הודתה}} לך על עריכה שלך בדף $2.',
	'notification-link-text-respond-to-user' => 'להשיב',
	'log-name-thanks' => 'יומן תודות',
	'log-description-thanks' => 'להלן רשימת משתמשים שאנשים אחרים הודו להם.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|הודה|הודתה}} ל{{GRAMMAR:תחילית|$3}}', # Fuzzy
);

/** Hungarian (magyar)
 * @author Samat
 */
$messages['hu'] = array(
	'thanks-error-undefined' => 'A megköszönés sikertelen. Kérlek, próbáld meg újra!',
	'thanks-error-invalidrevision' => 'A lapváltozat azonosítója érvénytelen.',
	'thanks-confirmation' => 'Biztos, hogy {{GENDER:$1|meg akarod köszönni}} $2 szerkesztését?',
	'echo-pref-tooltip-edit-thank' => 'Értesítést kérek, ha valaki megköszöni egy szerkesztésemet.',
	'echo-category-title-edit-thank' => 'köszönet',
	'notification-thanks-diff-link' => 'a szerkesztésed',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|megköszönte}} a(z) $2 lapon tett szerkesztésedet.',
	'notification-link-text-respond-to-user' => 'Válaszolok a szerkesztőnek.',
	'log-name-thanks' => 'Köszönési napló',
	'log-description-thanks' => 'Az alábbi szerkesztők köszönetet mondtak egy másik szerkesztőnek.',
);

/** Indonesian (Bahasa Indonesia)
 * @author Iwan Novirion
 */
$messages['id'] = array(
	'notification-thanks-flyout2' => '[[User:$1|$1]] mengucapkan {{GENDER:$1|terima kasih}} atas suntingan Anda pada $2.',
	'notification-link-text-respond-to-user' => 'Beri tanggapan',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'thanks-desc' => 'Agnayon kadagiti silpo ti panagyaman kadagiti panagkita ti pakasaritaan ken sabali',
	'thanks-thank' => 'yamanan',
	'thanks-thanked' => '{{GENDER:$1|nayamanan}}',
	'thanks-error-undefined' => 'Napaay ti tignay a panagyaman. Pangngaasi a padasen manen.',
	'thanks-error-invalidrevision' => 'Saan nga umiso to ID ti panagbaliw.',
	'thanks-error-ratelimited' => 'Nalabesamon ti patingga ti gatadmo. Pangngaasi nga agurayka bassit ken padasem manen.',
	'thanks-thank-tooltip' => 'Agipatulod ti pakaammo a panagyaman iti daytoy nga agar-aramat',
	'echo-pref-subscription-edit-thank' => 'Pagyamanennak para iti inurnosko',
	'echo-category-title-edit-thank' => 'Agyamanak',
	'notification-thanks-diff-link' => 'ti inurnosmo',
	'notification-thanks' => 'Ni [[User:$1|$1]] ket {{GENDER:$1|agyaman}} kenka para iti $2 iti [[:$3]].',
	'notification-thanks-email-subject' => 'Ni $1 ket {{GENDER:$1|agyaman}} kenka para it inurnosmo idiay {{SITENAME}}',
	'notification-thanks-email-body' => 'Ti agar-aramat ti {{SITENAME}} a ni $1 ket {{GENDER:$1|agyaman}} kenka para iti inurnosmo idiay $2.

Kitaem ti inurnosmo:

$3

$4',
	'notification-thanks-email-batch-body' => 'Ni $1 ket {{GENDER:$1|agyaman}} kenka para iti inurnosmo idiay $2.',
	'log-name-thanks' => 'Listaan kadagiti panagyaman',
	'log-description-thanks' => 'Dita baba ket listaan dagiti agar-aramat a nayamanan babaen dagiti dadduma nga agar-aramat.',
	'logentry-thanks-thank' => 'Ni $1 ket {{GENDER:$2|nagyaman}} kenni $3',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'thanks-desc' => 'Aggiunge un collegamento per ringraziare nella cronologia e nelle differenze fra versioni',
	'thanks-thank' => 'ringrazia',
	'thanks-thanked' => '{{GENDER:$1|ringraziato|ringraziata|ringraziato/a}}',
	'thanks-error-undefined' => 'Errore durante ringraziamento. Riprova ancora.',
	'thanks-error-invalidrevision' => 'ID versione non è valido.',
	'thanks-error-ratelimited' => "Hai superato il limite massimo di ringraziamenti. Aspetta un po' di tempo e riprova.",
	'thanks-thank-tooltip' => 'Invia una notifica di ringraziamento a questo utente',
	'thanks-confirmation' => 'Sei sicuro di voler {{GENDER:$1|ringraziare}} $2 per questa modifica?',
	'echo-pref-subscription-edit-thank' => 'Mi ringrazia per una mia modifica',
	'echo-pref-tooltip-edit-thank' => 'Avvisami quando qualcuno mi ringrazia per una modifica che ho fatto.',
	'echo-category-title-edit-thank' => 'Ringraziamenti',
	'notification-thanks-diff-link' => 'la tua modifica',
	'notification-thanks' => '[[User:$1|$1]] ti {{GENDER:$1|ha ringraziato}} per $2 su [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] ti {{GENDER:$1|ha ringraziato}} per la tua modifica su $2.',
	'notification-thanks-email-subject' => '$1 ti {{GENDER:$1|ha ringraziato}} per la tua modifica su {{SITENAME}}.',
	'notification-thanks-email-body' => "L'utente $1 di {{SITENAME}} ti {{GENDER:$1|ha ringraziato}} per la tua modifica su $2.

Vedi la tua modifica:

$3

$4",
	'notification-thanks-email-batch-body' => '$1 ti {{GENDER:$1|ha ringraziato}} per la tua modifica su $2.',
	'notification-link-text-respond-to-user' => "Rispondi all'utente",
	'log-name-thanks' => 'Ringraziamenti',
	'log-description-thanks' => 'Di seguito è riportato un elenco di utenti ringraziati da altri utenti.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|ha ringraziato}} $3',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Shirayuki
 */
$messages['ja'] = array(
	'thanks-desc' => '履歴ページおよび差分ページに、感謝を示すリンクを追加する',
	'thanks-thank' => '感謝',
	'thanks-thanked' => '{{GENDER:$1|感謝を示しました}}',
	'thanks-error-undefined' => '感謝の操作に失敗しました。もう一度やり直してください。',
	'thanks-error-invalidrevision' => '版 ID が無効です。',
	'thanks-error-ratelimited' => '速度制限を超えました。しばらくしてからもう一度やり直してください。',
	'thanks-thank-tooltip' => 'この{{GENDER:$2|利用者}}に感謝の通知を{{GENDER:$1|送信する}}',
	'thanks-confirmation' => '$2 のこの編集に対して本当に{{GENDER:$1|感謝を示しますか}}?',
	'echo-pref-subscription-edit-thank' => '自分の編集に誰かが感謝を示したとき',
	'echo-pref-tooltip-edit-thank' => '自分の編集に誰かが感謝を示したら通知する。',
	'echo-category-title-edit-thank' => '感謝',
	'notification-thanks-diff-link' => 'あなたの編集',
	'notification-thanks' => '[[User:$1|$1]] が [[:$3]] での$2に{{GENDER:$1|感謝を示しました}}',
	'notification-thanks-flyout2' => '[[User:$1|$1]] が $2 でのあなたの編集に{{GENDER:$1|感謝を示しました}}。',
	'notification-thanks-email-subject' => '$1 が{{SITENAME}}でのあなたの編集に{{GENDER:$1|感謝を示しました}}',
	'notification-thanks-email-batch-body' => '$1 が $2 でのあなたの編集に{{GENDER:$1|感謝を示しました}}',
	'notification-link-text-respond-to-user' => '利用者に返信',
	'log-name-thanks' => '感謝記録',
	'log-description-thanks' => '以下に、他の利用者から感謝を示された利用者を列挙します。',
	'logentry-thanks-thank' => '$1 が {{GENDER:$4|$3}} に{{GENDER:$2|感謝を示しました}}',
);

/** Korean (한국어)
 * @author Hym411
 * @author 아라
 */
$messages['ko'] = array(
	'thanks-desc' => '역사와 차이 보기에 감사 링크를 추가합니다',
	'thanks-thank' => '감사',
	'thanks-thanked' => '{{GENDER:$1|감사합니다}}',
	'thanks-error-undefined' => '감사 작업을 실패했습니다. 다시 시도하세요.',
	'thanks-error-invalidrevision' => '판 ID가 올바르지 않습니다.',
	'thanks-error-ratelimited' => '속도 제한을 초과했습니다. 잠시 기다리고 나서 다시 시도하세요.',
	'thanks-thank-tooltip' => '이 {{GENDER:$2|사용자}}에게 감사의 알림을 {{GENDER:$1|보냅니다}}',
	'thanks-confirmation' => '이 편집에 대해 $2님에게 {{GENDER:$1|감사}}하겠습니까?',
	'echo-pref-subscription-edit-thank' => '내 편집에 대해 다른 사용자가 감사합니다',
	'echo-pref-tooltip-edit-thank' => '내 편집에 대해 누군가가 감사할 때 내게 알립니다.',
	'echo-category-title-edit-thank' => '감사',
	'notification-thanks-diff-link' => '내 편집',
	'notification-thanks' => '[[User:$1|$1]]님이 [[:$3]]에 대한 $2에 {{GENDER:$1|감사했습니다}}.',
	'notification-thanks-flyout2' => '[[User:$1|$1]]님이 $2에 대한 내 편집에 {{GENDER:$1|감사했습니다}}.',
	'notification-thanks-email-subject' => '$1님이 {{SITENAME}}에 대한 내 편집에 {{GENDER:$1|감사했습니다}}',
	'notification-thanks-email-batch-body' => '$1님이 $2에 대한 내 편집에 {{GENDER:$1|감사했습니다}}.',
	'notification-link-text-respond-to-user' => '사용자에게 답장',
	'log-name-thanks' => '감사 기록',
	'log-description-thanks' => '아래에는 다른 사용자가 감사한 사용자의 목록입니다.',
	'logentry-thanks-thank' => '$1 사용자가 {{GENDER:$4|$3}}님에게 {{GENDER:$2|감사했습니다}}',
);

/** Kirghiz (Кыргызча)
 * @author Викиней
 */
$messages['ky'] = array(
	'notification-thanks-diff-link' => 'сиздин оңдооңуз',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'thanks-desc' => "Setzt 'Merci'Linken bäi den Historique a bäi Versiounsënnerscheeder derbäi",
	'thanks-thank' => 'merci',
	'thanks-error-invalidrevision' => 'Versiounsnummer (ID) ass net valabel.',
	'thanks-thank-tooltip' => '{{GENDER:$2|Dësem Benotzer|Dëser Benotzerin}} ee "Merci" {{GENDER:$1|schécken}}',
	'echo-pref-subscription-edit-thank' => "'Mercie' fir meng Ännerung",
	'echo-pref-tooltip-edit-thank' => 'Mech Informéieren wann ee mir fir eng Ännerung déi ech gemaach hu Merci seet.',
	'echo-category-title-edit-thank' => 'Merci',
	'notification-thanks-diff-link' => 'Är Ännerung',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|seet}} Iech merci fir Är Ännerung op $2.',
	'notification-link-text-respond-to-user' => 'Dem Benotzer äntwerten',
	'log-name-thanks' => 'Logbuch vum Merci-soen',
	'log-description-thanks' => "Hei drënner ass eng Lëscht vu Benotzer déi anere Benotzer 'Merci' gesot hunn.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|huet dem}} {{GENDER:$4|$3}} Merci gesot',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'thanks-desc' => 'Додава врски за заблагодарувања во историјата и прегледот на разликите',
	'thanks-thank' => 'заблагодари се',
	'thanks-thanked' => '{{GENDER:$1|заблагодарено}}',
	'thanks-error-undefined' => 'Заблагодарувањето не успеа. Обидете се повторно.',
	'thanks-error-invalidrevision' => 'Ревизијата има неважечка назнака.',
	'thanks-error-ratelimited' => 'Ја надминавте границата на заблагодарувања. Почекајте некое време, па обидете се подоцна',
	'thanks-thank-tooltip' => '{{GENDER:$1|Испратете}} му благодарност (во порака) на {{GENDER:$2|корисников}}',
	'thanks-confirmation' => 'Дали сте сигурни дека сакате да  {{GENDER:$1|му се заблагодарите|да ѝ се заблагодарите}} на $2 за уредувањево?',
	'echo-pref-subscription-edit-thank' => 'Ќе ми се заблагодари за мое уредување',
	'echo-pref-tooltip-edit-thank' => 'Извести ме кога некој ќе ми заблагодари за напарвено уредување.',
	'echo-category-title-edit-thank' => 'Благодарам',
	'notification-thanks-diff-link' => 'вашето уредување',
	'notification-thanks' => '[[User:$1|$1]] ви {{GENDER:$1|благодари}} за $2 на [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|Ви заблагодари}} за вашето уредување на $2.',
	'notification-thanks-email-subject' => '$1 ви {{GENDER:$1|благодари}} за вашето уредување на {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|Ви заблагодари}} за вашето уредување на $2.',
	'notification-link-text-respond-to-user' => 'Одговори му на корисникот',
	'log-name-thanks' => 'Дневник на благодарности',
	'log-description-thanks' => 'Следи список на корисници на кои други им искажале благодарност.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|му се заблагодари на|ѝ се заблагодари на|се заблагодари на}} {{GENDER:$4|$3}}',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'thanks-thank-tooltip' => '{{GENDER:$2|user}} ला एक धन्यवादाची अधिसूचना{{GENDER:$1|ने पाठविली}}',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'thanks-desc' => 'Meletakkan pautan terima kasih pada paparan sejarah dan beza',
	'thanks-thank' => 'berterima kasih',
	'thanks-thanked' => '{{GENDER:$1|berterima kasih kepada}}',
	'thanks-error-undefined' => 'Tindakan terima kasih gagal. Sila cuba lagi.',
	'thanks-error-invalidrevision' => 'ID semakan tidak sah.',
	'thanks-error-ratelimited' => 'Anda telah melampaui had kadar anda. Sila cuba seketika, kemudian cuba lagi.',
	'thanks-thank-tooltip' => 'Hantar ucapan terima kasih kepada pengguna ini',
	'thanks-confirmation' => 'Adakah anda betul-betul ingin {{GENDER:$1|berterima kasih}} kepada $2 atas suntingan ini?',
	'echo-pref-subscription-edit-thank' => 'Berterima kasih pada saya atas suntingan saya',
	'echo-pref-tooltip-edit-thank' => 'Beritahu saya apabila seseorang berterima kasih kepada saya atas suntingan saya.',
	'echo-category-title-edit-thank' => 'Terima kasih',
	'notification-thanks-diff-link' => 'suntingan anda',
	'notification-thanks' => '[[User:$1|$1]] telah {{GENDER:$1|berterima kasih}} kepada anda atas $2 di [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|berterima kasih}} kepada anda kerana menyunting $2.',
	'notification-thanks-email-subject' => '$1 telah {{GENDER:$1|berterima kasih}} kepada anda atas suntingan anda di {{SITENAME}}',
	'notification-thanks-email-body' => 'Pengguna {{SITENAME}}, $1 telah {{GENDER:$1|berterima kasih}} kepada anda atas suntingan anda di $2.

Lihat suntingan anda:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 telah {{GENDER:$1|berterima kasih}} kepada anda atas suntingan anda di $2.',
	'notification-link-text-respond-to-user' => 'Balas pengguna',
	'log-name-thanks' => 'Log ucapan terima kasih',
	'log-description-thanks' => 'Yang berikut adalah senarai pengguna yang menerima ucapan terima kasih daripada pengguna lain.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|berterima kasih}} kepada $3',
);

/** Dutch (Nederlands)
 * @author Hansmuller
 * @author Konovalov
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'thanks-desc' => 'Voegt "Bedankt"-koppelingen toe aan geschiedenis en verschillenweergaves',
	'thanks-thank' => 'bedanken',
	'thanks-thanked' => '{{GENDER:$1|is bedankt}}',
	'thanks-error-undefined' => 'Bedanken is mislukt. Probeer het opnieuw.',
	'thanks-error-invalidrevision' => 'Het versienummer is niet geldig.',
	'thanks-error-ratelimited' => 'U hebt uw limiet voor bedankjes overschreden. Wacht even en probeer het dan opnieuw.',
	'thanks-thank-tooltip' => 'Deze gebruiker bedanken',
	'thanks-confirmation' => 'Weet u zeker dat u $2 wilt {{GENDER:$1|bedanken}} voor deze bewerking?',
	'echo-pref-subscription-edit-thank' => 'Bedankt u voor uw bewerking',
	'echo-pref-tooltip-edit-thank' => 'U een melding zenden als iemand u bedankt voor een bewerking die u hebt gemaakt.',
	'echo-category-title-edit-thank' => 'Bedankt',
	'notification-thanks-diff-link' => 'uw bewerking',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|heeft}} u bedankt voor $2 op [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|heeft}} u bedankt voor uw bewerking van $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|heeft}} u bedankt voor uw bewerking op  {{SITENAME}}',
	'notification-thanks-email-body' => 'Gebruiker $1 van {{SITENAME}} {{GENDER:$1|heeft}} u bedankt voor uw bewerking aan$2.

Bekijk uw bewerking:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|heeft}} u bedankt voor uw bewerking op $2.',
	'notification-link-text-respond-to-user' => 'Gebruiker antwoorden',
	'log-name-thanks' => 'Logboek voor bedankjes',
	'log-description-thanks' => 'Hieronder wordt een lijst weergegeven met gebruikers die door andere gebruikers zijn bedankt.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|heeft}} $3 bedankt',
);

/** Punjabi (ਪੰਜਾਬੀ)
 * @author Babanwalia
 */
$messages['pa'] = array(
	'thanks-thank' => 'ਮਿਹਰਬਾਨੀ',
	'thanks-thanked' => '{{GENDER:$1|ਧੰਨਵਾਦ ਕੀਤਾ ਗਿਆ}}',
	'thanks-error-undefined' => 'ਮਿਹਰਬਾਨੀ ਕਾਰਜ ਫੇਲ੍ਹ ਹੋਇਆ। ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰੋ ਜੀ।',
	'thanks-thank-tooltip' => 'ਇਸ ਵਰਤੋਂਕਾਰ ਨੂੰ ਇੱਕ ਮਿਹਰਬਾਨੀ ਸੂਚਨਾ ਭੇਜੋ',
	'echo-pref-subscription-edit-thank' => 'ਮੇਰੀਆਂ ਸੋਧਾਂ ਦਾ ਧੰਨਵਾਦ ਕਰਦਾ ਹੈ',
	'echo-pref-tooltip-edit-thank' => 'ਜਦੋਂ ਕੋਈ ਮੇਰੀ ਸੋਧ ਦਾ ਧੰਨਵਾਦ ਕਰਦਾ ਹੈ ਤਾਂ ਮੈਨੂੰ ਇਤਲਾਹ ਦਿਓ',
	'echo-category-title-edit-thank' => 'ਮਿਹਰਬਾਨੀ',
	'notification-thanks-diff-link' => 'ਤੁਹਾਡੀ ਸੋਧ',
	'notification-link-text-respond-to-user' => 'ਵਰਤੋਂਕਾਰ ਨੂੰ ਜੁਆਬ ਦਿਓ',
	'log-name-thanks' => 'ਮਿਹਰਬਾਨੀਆਂ ਦਾ ਇੰਦਰਾਜ',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|ਧੰਨਵਾਦ ਕੀਤਾ ਗਿਆ}} $3',
);

/** Polish (polski)
 * @author Chrumps
 * @author Matma Rex
 * @author Tar Lócesilion
 * @author Ty221
 * @author WTM
 */
$messages['pl'] = array(
	'thanks-desc' => 'Dodaje do historii i różnicy pomiędzy wersjami link umożliwiający podziękowanie',
	'thanks-thank' => 'podziękuj',
	'thanks-thanked' => '{{GENDER:$1|podziękowałeś|podziękowałaś}}',
	'thanks-error-undefined' => 'Operacja podziękowania nie powiodła się. Proszę spróbować ponownie.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Wyślij}} podziękowanie do {{GENDER:$2|tego użytkownika|tej użytkowniczki}}',
	'thanks-confirmation' => 'Czy na pewno chcesz {{GENDER:$1|podziękować}} $2 za tę edycję?',
	'echo-pref-subscription-edit-thank' => 'podziękuje mi za edycję, którą wykonałem',
	'echo-pref-tooltip-edit-thank' => 'Powiadom mnie, kiedy ktoś podziękuje mi za edycję, którą wykonałem.',
	'echo-category-title-edit-thank' => 'Podziękowania',
	'notification-thanks-diff-link' => 'Twoja edycja',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|podziękował|podziękowała}} Ci za $2 na stronie [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|podziękował|podziękowała}} Ci za edycję na stronie $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|podziękował|podziękowała}} Ci za edycję na {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|podziękował|podziękowała}} Ci za edycję na stronie $2.',
	'notification-link-text-respond-to-user' => 'Odpowiedz',
	'log-name-thanks' => 'Rejestr podziękowań',
	'log-description-thanks' => 'Poniżej znajduje się lista użytkowników, którym podziękowali inni użytkownicy.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|podziękował|podziękowała}} {{GENDER:$4|użytkownikowi|użytkowniczce}} $3',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'thanks-thank' => 'مننه',
	'thanks-thanked' => '{{GENDER:$1|منندوی شو}}',
	'thanks-error-undefined' => 'د مننې چاره پاتې راغله. بيا مو هڅه وکړۍ.',
	'thanks-error-invalidrevision' => 'د کره کتنې پېژند سم نه دی.',
	'thanks-thank-tooltip' => 'دې کارن ته د مننې يو پيغام ورلېږل',
	'echo-pref-subscription-edit-thank' => 'زه د سمون پخاطر زما منندوی شه',
	'echo-category-title-edit-thank' => 'مننه',
	'notification-thanks-diff-link' => 'ستاسې سمون',
);

/** Portuguese (português)
 * @author GoEThe
 * @author Helder.wiki
 * @author OTAVIO1981
 * @author Oona
 * @author Vitorvicentevalente
 */
$messages['pt'] = array(
	'thanks-desc' => 'Adiciona ligações para agradecimentos quando na página do histórico ou em diffs',
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => '{{GENDER:$1|Agradecimento enviado}}',
	'thanks-error-undefined' => 'Acção de agradecimento falhou. Por favor, tente novamente.',
	'thanks-error-invalidrevision' => 'O ID de revisão não é válido.',
	'thanks-error-ratelimited' => 'Excedeu o limite de velocidade. Por favor, espere algum tempo e tente novamente.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Envie}} um agradecimento para {{GENDER:$2|este utilizador|esta utilizadora}}',
	'thanks-confirmation' => 'Tem a certeza que deseja {{GENDER:$1|agradecer}}  a $2 por esta edição?',
	'echo-pref-subscription-edit-thank' => 'Agradece-me pela minha edição',
	'echo-pref-tooltip-edit-thank' => 'Notificar-me quando alguém me agradecer por uma edição que eu fiz.',
	'echo-category-title-edit-thank' => '{{GENDER:$1|Obrigado!|Obrigada|Obrigado(a)!}}', # Fuzzy
	'notification-thanks-diff-link' => 'a sua edição',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|agradeceu-lhe}} pela $2 em [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|agradeceu-lhe}} pela sua edição em $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeceu-lhe}} pela sua edição em {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|agradeceu-lhe}} pela sua edição em $2.',
	'notification-link-text-respond-to-user' => 'Responder ao utilizador',
	'log-name-thanks' => 'Registo de agradecimentos',
	'log-description-thanks' => 'Abaixo está uma lista de utilizadores que receberam agradecimentos de outros utilizadores.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|agradeceu}} a {{GENDER:$4|$3}}',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Dianakc
 * @author HenriqueCrang
 * @author OTAVIO1981
 * @author Teles
 */
$messages['pt-br'] = array(
	'thanks-desc' => 'Adiciona link de agradecimento as páginas de histórico e de diferença entre edições',
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => '{{GENDER:$1|Agradecido|Agradecida}}',
	'thanks-error-undefined' => 'O agradecer falhou. Por favor tente de novo.',
	'thanks-error-invalidrevision' => 'ID de revisão inválido.',
	'thanks-error-ratelimited' => 'Você excedeu seu limite. Por favor aguarde um pouco e tente novamente.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Envie}} uma nota de agradecimento para este {{GENDER:$2|usuário}}',
	'thanks-confirmation' => 'Você tem certeza que deseja {{GENDER:$1|agradecer}}  a $2 por esta edição?',
	'echo-pref-subscription-edit-thank' => 'Agradeça-me pela minha edição',
	'echo-pref-tooltip-edit-thank' => 'Notifique-me quando alguém agradecer por uma edição que fiz.',
	'echo-category-title-edit-thank' => 'Agradecimento',
	'notification-thanks-diff-link' => 'sua edição',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|agradeceu-lhe}} pela $2 em [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|agradeceu-lhe}} pela sua edição em $2.',
	'notification-thanks-email-subject' => '$1 agradeceu por sua edição na {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 agradeceu por sua edição em $2.',
	'notification-link-text-respond-to-user' => 'Responder ao usuário',
	'log-name-thanks' => 'Registro de agradecimentos',
	'log-description-thanks' => 'Abaixo está uma lista de usuários que receberam agradecimentos de outros usuários.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|agradeceu}} {{GENDER:$4|$3}}',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'thanks-desc' => "Aggiunge le collegaminde de rengraziamende sus a le viste d'u cunde e de le differenze",
	'thanks-thank' => 'grazie',
	'thanks-thanked' => '{{GENDER:$1|ringraziate}}',
	'thanks-error-undefined' => 'Azione de ringraziamende fallite. Pe piacere pruéve arrete.',
	'thanks-error-invalidrevision' => "ID d'a revisione non g'è valide.",
	'thanks-error-ratelimited' => "Tu è sbunnate le limite de valutazione tune. Pe piacere aspitte 'nu picche e pruève arrete.",
	'thanks-thank-tooltip' => "Manne 'na notifiche de rengraziamende a stu utende",
	'thanks-confirmation' => 'Sì secure ca vuè ccu {{GENDER:$1|rengrazie}} $2 pe stu cangiamende?',
	'echo-pref-subscription-edit-thank' => 'Ringraziame pu cangiamende mije',
	'echo-pref-tooltip-edit-thank' => "Notificame quanne quacchedune me ringrazie pe 'nu cangiamende ca agghie fatte.",
	'echo-category-title-edit-thank' => 'Grazie!',
	'notification-thanks-diff-link' => 'le cangiaminde tune',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|te rengrazie}} pe $2 sus a [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|te rengrazie}} pu cangiamende tune sus a $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|te rengrazie}} pu cangiamende tune sus a {{SITENAME}}',
	'notification-thanks-email-body' => "L'utende de {{SITENAME}} $1 {{GENDER:$1|te rengrazie}} pu cangiamende tune sus a $2.

'Ndruche 'u cangiamende tune:

$3

$4",
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|te rengrazie}} pu cangiamende tune sus a $2.',
	'notification-link-text-respond-to-user' => "Respunne a l'utende",
	'log-name-thanks' => 'Archivije de le rengraziaminde',
	'log-description-thanks' => "Sotte stè 'n'elenghe de utinde ca onne rengraziate otre utinde.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|ave ringraziate}} $3',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Милан Јелисавчић
 */
$messages['sr-ec'] = array(
	'thanks-thank' => 'захвали се',
	'thanks-thank-tooltip' => 'Пошаљите захвалницу овом кориснику',
	'echo-category-title-edit-thank' => 'Захвалнице',
	'notification-thanks-diff-link' => 'вашој измени',
	'notification-thanks' => '[[User:$1|$1]] вам се {{GENDER:$1|захваљује}} на $2 странице [[:$3]].',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Jopparn
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'thanks-desc' => 'Lägger till tacklänkar till historik och skillnadsjämförelser',
	'thanks-thank' => 'tacka',
	'thanks-thanked' => '{{GENDER:$1|tackade}}',
	'thanks-error-undefined' => 'Tackåtgärden misslyckades. Var god försök igen.',
	'thanks-error-invalidrevision' => 'Versions-ID är inte giltigt.',
	'thanks-error-ratelimited' => 'Du har överskridit din frekvensgräns. Var god vänta en stund och försök igen',
	'thanks-thank-tooltip' => 'Skicka ett tackmeddelande till denna användare', # Fuzzy
	'thanks-confirmation' => 'Är du säker på att du vill {{GENDER:$1|tacka}} $2 för denna redigering?',
	'echo-pref-subscription-edit-thank' => 'Tackar mig för min redigering',
	'echo-pref-tooltip-edit-thank' => 'Meddela mig när någon tackar mig för en redigering jag har gjort.',
	'echo-category-title-edit-thank' => 'Tack',
	'notification-thanks-diff-link' => 'din redigering',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|tackade}} dig för $2 på [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|tackade}} dig för din redigering på $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|tackade}} dig för din redigering på {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|tackade}} dig för din redigering på $2.',
	'notification-link-text-respond-to-user' => 'Svara användare',
	'log-name-thanks' => 'Tacklogg',
	'log-description-thanks' => 'Nedan är en lista med användare som fått tack från andra användare.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|tackade}} $3', # Fuzzy
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'thanks-error-undefined' => 'కృతజ్ఞతల చర్య విఫలమైంది. దయచేసి మళ్ళీ ప్రయత్నించండి.',
	'notification-thanks-diff-link' => 'మీ మార్పు',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'thanks-desc' => 'Nagdaragdag ng mga kawing na pampasalamat sa pantanaw ng kasaysayan at ng pagkakaiba',
	'thanks-thank' => 'pasalamatan',
	'thanks-thanked' => 'napasalamatan na', # Fuzzy
	'thanks-error-undefined' => 'Nabigo ang galaw ng pagpapasalamat. Paki subukan ulit.',
	'thanks-error-invalidrevision' => 'Hindi katanggap-tanggap ang ID ng rebisyon.',
	'thanks-error-ratelimited' => 'Lumampas ka na sa iyong hangganang antas. Paki maghintay ng ilang panahon at sumubok ulit.',
	'thanks-thank-tooltip' => 'Magpadala ng isang pabatid ng pasasalamat sa tagagamit na ito',
	'echo-pref-subscription-edit-thank' => 'Pinasalamatan ako dahil sa aking pamamatnugot',
	'echo-category-title-edit-thank' => 'Salamat',
	'notification-thanks-diff-link' => 'ang binago mo',
	'notification-thanks' => '{{GENDER:$1|Pinasalamatan}} ka ni [[User:$1|$1]] para sa $2 na naroon sa [[:$3]].',
	'notification-thanks-email-subject' => '{{GENDER:$1|Pinasalamatan}} ka ni $1 para sa iyong pamamatnugot doon sa {{SITENAME}}',
	'notification-thanks-email-body' => 'Ang tagagamit ng {{SITENAME}} na si $1 ay {{GENDER:$1|nagpapasalamat}} sa iyo para sa pamamatnugot mo roon sa $2.

Tanawin ang binago mo:

$3

$4',
	'notification-thanks-email-batch-body' => '{{GENDER:$1|Pinasalamatan}} ka ni $1 para sa iyong binago roon sa $2.',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Base
 * @author Ата
 */
$messages['uk'] = array(
	'thanks-desc' => 'Додає посилання вдячності до переглядів історії та різниці версій',
	'thanks-thank' => 'дякую',
	'thanks-thanked' => '{{GENDER:$1|подякував|подякувала}}',
	'thanks-error-undefined' => 'Не вдалось подякувати. Спробуйте знову.',
	'thanks-error-invalidrevision' => 'Неправильний ідентифікатор версії.',
	'thanks-error-ratelimited' => 'Ви перевищили свій ліміт частоти. Будь ласка, зачекайте деякий час, і спробуйте знову.',
	'thanks-thank-tooltip' => 'Надіслати сповіщення вдячності до користувача', # Fuzzy
	'thanks-confirmation' => 'Ви справді хочете {{GENDER:$1|подякувати}} $2 за цю зміну?',
	'echo-pref-subscription-edit-thank' => 'Дякує мені за мої редагування',
	'echo-pref-tooltip-edit-thank' => 'Повідомляти, коли хтось дякує мені за редагування, зроблені мною.',
	'echo-category-title-edit-thank' => 'вдячність',
	'notification-thanks-diff-link' => 'Ваше редагування',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|подякував|подякувала}} Вам за $2 на [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]]  {{GENDER:$1|подякував|подякувала}} Вам за Ваше редагування на $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|подякував|подякувала}} Вам за Ваше редагування на {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|подякував|подякувала}} Вам за Ваше редагування на $2.',
	'notification-link-text-respond-to-user' => 'Відгукнутися на користувача',
	'log-name-thanks' => 'Журнал вдячностей',
	'log-description-thanks' => 'Нижче наведено перелік користувачів, які подякували іншими користувачами.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|подякував|подякувала}} $3', # Fuzzy
);

/** Urdu (اردو)
 * @author Noor2020
 */
$messages['ur'] = array(
	'thanks-thanked' => '{{GENDER:$1|کا شکریہ ادا کیا}}',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'thanks-desc' => 'Thêm liên kết cám ơn vào các trang lịch sử và khác biệt',
	'thanks-thank' => 'cám ơn',
	'thanks-thanked' => '{{GENDER:$1}}đã cám ơn',
	'thanks-error-undefined' => 'Thất bại cám ơn. Xin vui lòng thử lại.',
	'thanks-error-invalidrevision' => 'Số phiên bản không hợp lệ.',
	'thanks-error-ratelimited' => 'Bạn đã vượt quá giới hạn tốc độ. Xin vui lòng thử lại lát nữa.',
	'thanks-thank-tooltip' => 'Gửi thông báo cám ơn cho người dùng này',
	'thanks-confirmation' => 'Bạn có chắc chắn muốn {{GENDER:$1}}gửi lời cám ơn cho $2 vì sửa đổi này?',
	'echo-pref-subscription-edit-thank' => 'Gửi lời cám ơn cho tôi vì một sửa đổi của tôi',
	'echo-pref-tooltip-edit-thank' => 'Báo cho tôi biết khi nào người ta gửi lời cám ơn về một sửa đổi của tôi.',
	'echo-category-title-edit-thank' => 'Cám ơn',
	'notification-thanks-diff-link' => 'sửa đổi của bạn',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1}}cám ơn bạn vì $2 tại [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1}}cám ơn bạn vì sửa đổi của bạn tại $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1}}cám ơn bạn vì sửa đổi của bạn tại {{SITENAME}}',
	'notification-thanks-email-body' => 'Người dùng $1 tại {{SITENAME}} {{GENDER:$1}}cám ơn bạn vì sửa đổi gần đây của bạn tại $2.

Xem sửa đổi của bạn:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1}}cám ơn bạn vì sửa đổi của bạn tại $2.',
	'notification-link-text-respond-to-user' => 'Trả lời cho người dùng',
	'log-name-thanks' => 'Nhật trình cám ơn',
	'log-description-thanks' => 'Dưới đây có danh sách những người dùng được người khác gửi lời cám ơn.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2}}đã cám ơn $3',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hzy980512
 * @author Qiyue2001
 * @author Yfdyh000
 * @author Zhuyifei1999
 */
$messages['zh-hans'] = array(
	'thanks-desc' => '添加感谢链接到历史记录和差异查看',
	'thanks-thank' => '感谢',
	'thanks-thanked' => '{{GENDER:$1|已感谢}}',
	'thanks-error-undefined' => '感谢操作失败。请再试一次。',
	'thanks-error-invalidrevision' => '修订ID无效。',
	'thanks-error-ratelimited' => '您已超过您的速率限制。请等一段时间再试。',
	'thanks-thank-tooltip' => '发送一条感谢你通知给此用户', # Fuzzy
	'thanks-confirmation' => '您确定要{{GENDER:$1|感谢}}因此编辑感谢$2吗？',
	'echo-pref-subscription-edit-thank' => '感谢我的编辑',
	'echo-pref-tooltip-edit-thank' => '别人因我的编辑感谢我时通知我。',
	'echo-category-title-edit-thank' => '感谢',
	'notification-thanks-diff-link' => '您的编辑',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|感谢}}你的$2在[[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]]因您在$2的编辑{{GENDER:$1|感谢}}了您。',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|感谢}} 您的编辑在{{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|感谢}} 您的编辑在$2',
	'notification-link-text-respond-to-user' => '回应用户',
	'log-name-thanks' => '感谢日志',
	'log-description-thanks' => '下面列出了被其他用户感谢的用户。',
	'logentry-thanks-thank' => '$1{{GENDER:$2|感谢了}}$3', # Fuzzy
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 * @author Waihorace
 */
$messages['zh-hant'] = array(
	'thanks-thank' => '感謝',
	'thanks-thanked' => '{{GENDER:$1|感謝}}',
	'thanks-error-undefined' => '操作失敗。請再試一次。',
	'thanks-error-invalidrevision' => '修訂ID無效。',
	'echo-pref-tooltip-edit-thank' => '當有人感謝我所做的編輯，通知我。',
	'echo-category-title-edit-thank' => '感謝',
	'notification-thanks-diff-link' => '編輯',
	'notification-thanks-flyout' => '[[User:$1|$1]]{{GENDER:$1|感謝}}你在<b>$3</b>的$2。',
	'log-name-thanks' => '感謝日誌',
	'log-description-thanks' => '用戶鳴謝以下的用戶。',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|感謝}} $3',
);
