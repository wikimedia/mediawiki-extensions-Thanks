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
	'thanks-thank-tooltip' => 'Send a thank you notification to this user',
	'echo-pref-subscription-edit-thank' => 'Thanks me for my edit',
	'echo-pref-tooltip-edit-thank' => 'Notify me when someone thanks me for an edit I made.',
	'echo-category-title-edit-thank' => 'Thanks',
	'notification-thanks-diff-link' => 'your edit',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|thanked}} you for $2 on [[$3]].',
	'notification-thanks-flyout' => '[[User:$1|$1]] {{GENDER:$1|thanked}} you for $2 on <b>$3</b>.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|thanked}} you for your edit on {{SITENAME}}',
	'notification-thanks-email-body' => '{{SITENAME}} user $1 {{GENDER:$1|thanked}} you for your edit on $2.

View your edit:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|thanked}} you for your edit on $2.',
	'log-name-thanks' => 'Thanks log',
	'log-description-thanks' => 'Below is a list of users thanked by other users.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|thanked}} $3',
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
	'thanks-thanked' => 'Message that replaces the link to thank another user after they have been thanked (Echo-thank). This is short for "You thanked the user for their edit.". Parameters:
* $1 is the current user, for GENDER support.',
	'thanks-error-undefined' => 'Error message that is displayed when the thank action fails.
{{Identical|Please try again}}',
	'thanks-error-invalidrevision' => 'Error message that is displayed when the revision ID is not valid',
	'thanks-error-ratelimited' => 'Error message that is displayed when user exceeds rate limit',
	'thanks-thank-tooltip' => 'Tooltip that appears when a user hovers over the "thank" link',
	'echo-pref-subscription-edit-thank' => 'Option for getting notifications when someone thanks the user for their edit.

This is the conclusion of the sentence begun by the header: {{msg-mw|Prefs-echosubscriptions}}.',
	'echo-pref-tooltip-edit-thank' => 'This is a short description of the edit-thank notification category.',
	'echo-category-title-edit-thank' => 'This is a short title for the notification category.

Used as <code>$1</code> in {{msg-mw|Echo-dismiss-message}} and as <code>$2</code> in {{msg-mw|Echo-email-batch-category-header}}
{{Identical|Thanks}}',
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
	'log-name-thanks' => 'Name of log that appears on [[Special:Log]].',
	'log-description-thanks' => 'Description of thanks log',
	'logentry-thanks-thank' => 'Log entry that is created when a user thanks another user for an edit. Parameters:
* $1 is a user link, for example "Jane Doe (Talk | contribs)"
* $2 is a username. Can be used for GENDER.
* $3 is a user link, for example "John Doe (Talk | contribs)',
);

/** Arabic (العربية)
 * @author ترجمان05
 */
$messages['ar'] = array(
	'thanks-thanked' => 'مشكور',
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
	'echo-pref-subscription-edit-thank' => 'Agradecimientos pola mio edición',
	'echo-category-title-edit-thank' => 'Gracies',
	'notification-thanks-diff-link' => 'la so edición',
	'notification-thanks' => '[[User:$1|$1]] ta {{GENDER:$1|agradecíu|agradecida}} por $2 en [[$3]].',
	'notification-thanks-flyout' => '[[User:$1|$1]] ta {{GENDER:$1|agradecíu|agradecida}} por $2 en <b>$3</b>.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeció}} la so edición en {{SITENAME}}',
	'notification-thanks-email-body' => "{{GENDER:$1|L'usuariu|La usuaria}} $1 agradeció la so edición en $2.

Vea la so edición:

$3

$4",
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|agradeció}} la so edición en $2.',
	'log-name-thanks' => "Rexistru d'agradecimientos",
	'log-description-thanks' => "Mas abaxo ta la llista d'usuarios a los qu'otros usuarios dieron les gracies.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|dio les gracies a}} $3',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 */
$messages['bn'] = array(
	'log-name-thanks' => 'ধন্যবাদ লগ',
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'thanks-thank' => 'trugarez',
	'thanks-thanked' => 'trugarekaet',
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
	'echo-category-title-edit-thank' => 'Poděkování',
	'notification-thanks-diff-link' => 'vaši úpravu',
	'notification-thanks' => '[[User:$1|$1]] vám {{GENDER:$1|poděkoval|poděkovala}} za $2 stránky [[$3]].',
	'notification-thanks-flyout' => '[[User:$1|$1]] vám {{GENDER:$1|poděkoval|poděkovala}} za $2 stránky <b>$3</b>.',
	'notification-thanks-email-subject' => '$1 vám {{GENDER:$1|poděkoval|poděkovala}} za vaši editaci na {{grammar:6sg|{{SITENAME}}}}',
	'notification-thanks-email-body' => '{{GENDER:$1|Uživatel|Uživatelka}} $1 na {{grammar:6sg|{{SITENAME}}}} vám {{GENDER:$1|poděkoval|poděkovala}} za vaši úpravu stránky $2.

Můžete si prohlédnout svou úpravu:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 vám {{GENDER:$1|poděkoval|poděkovala}} za vaši úpravu stránky $2.',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'thanks-desc' => 'Ergänzt „Danke schön“-Links zur Versionsgeschichte und zu Versionsunterschieden',
	'thanks-thank' => 'danken',
	'thanks-thanked' => '{{GENDER:$1|dankte}}',
	'thanks-error-undefined' => '„Danke schön“ fehlgeschlagen. Bitte erneut versuchen.',
	'thanks-error-invalidrevision' => 'Die Versionskennung ist ungültig.',
	'thanks-error-ratelimited' => 'Du hast dein Aktionslimit überschritten. Bitte warte einige Zeit und versuche es erneut.',
	'thanks-thank-tooltip' => 'Diesem Benutzer ein „Danke schön“ senden',
	'echo-pref-subscription-edit-thank' => '„Danke schöns“ für meine Bearbeitung',
	'echo-category-title-edit-thank' => 'Danke schön',
	'notification-thanks-diff-link' => 'deine Bearbeitung',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|dankte}} dir für $2 auf [[$3]].',
	'notification-thanks-flyout' => '[[User:$1|$1]] {{GENDER:$1|dankte}} dir für $2 auf <b>$3</b>.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|dankte}} dir für deine Bearbeitung auf {{SITENAME}}',
	'notification-thanks-email-body' => '{{GENDER:$1|Der {{SITENAME}}-Benutzer|Die {{SITENAME}}-Benutzerin}} $1 dankte dir für deine Bearbeitung auf $2.

Sieh dir deine Bearbeitung an:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|dankte}} dir für deine Bearbeitung auf $2.',
	'log-name-thanks' => 'Dankeschön-Logbuch',
	'log-description-thanks' => 'Es folgt eine Liste von Benutzern, die anderen Benutzern dankten.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|dankte}} $3',
);

/** Spanish (español)
 * @author Fitoschido
 */
$messages['es'] = array(
	'thanks-desc' => 'Añade enlaces para agradecer al historial y las vistas de diferencias',
	'echo-category-title-edit-thank' => 'Gracias',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeció}} tu edición en {{SITENAME}}',
	'log-name-thanks' => 'Registro de agradecimientos',
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
 * @author Metroitendo
 */
$messages['fr'] = array(
	'thanks-desc' => 'Ajoute des liens de remerciement aux vues historique et de différence',
	'thanks-thank' => 'merci',
	'thanks-thanked' => '{{GENDER:$1|remercié|remerciée}}',
	'thanks-error-undefined' => 'Échec de l’action de remerciement. Veuillez réessayer.',
	'thanks-error-invalidrevision' => 'L’ID de révision n’est pas valide.',
	'thanks-error-ratelimited' => 'Vous avez dépassé votre limite de débit. Veuillez attendre un peu et réessayer.',
	'thanks-thank-tooltip' => 'Envoyer une notification de remerciement à cet utilisateur',
	'echo-pref-subscription-edit-thank' => 'Me remercier pour ma modification',
	'echo-category-title-edit-thank' => 'Merci',
	'notification-thanks-diff-link' => 'votre modification',
	'notification-thanks' => '[[User:$1|$1]] vous {{GENDER:$1|a remercié}} pour $2 sur [[$3]].',
	'notification-thanks-flyout' => '[[User:$1|$1]] vous {{GENDER:$1|a remercié}} pour $2 sur <b>$3</b>.',
	'notification-thanks-email-subject' => '$1 vous {{GENDER:$1|a remercié}} pour votre modification sur {{SITENAME}}',
	'notification-thanks-email-body' => 'L’utilisateur $1 de {{SITENAME}} vous {{GENDER:$1|a remercié}} pour votre modification sur $2.

Voir votre modification :

$3

$4',
	'notification-thanks-email-batch-body' => '$1 vous {{GENDER:$1|a remercié}} pour votre modification sur $2.',
	'log-name-thanks' => 'Entrée remerciements',
	'log-description-thanks' => "Ci-dessous se trouve une liste d'utilisateurs qui ont été remerciés par d'autres.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|remercie}} $3',
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
	'echo-pref-subscription-edit-thank' => 'Me agradeza unha edición feita por min',
	'echo-pref-tooltip-edit-thank' => 'Notificádeme cando alguén me agradeza unha edición feita por min.',
	'echo-category-title-edit-thank' => 'Agradecemento',
	'notification-thanks-diff-link' => 'a súa edición',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|agradeceu}} $2 en "[[$3]]".',
	'notification-thanks-flyout' => '[[User:$1|$1]] {{GENDER:$1|agradeceu}} $2 en "<b>$3</b>".',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeceu}} a súa edición en {{SITENAME}}',
	'notification-thanks-email-body' => '{{GENDER:$1|O editor|A editora}} $1 agradeceu a súa edición en "$2".

Ollar a súa edición:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|agradeceu}} a súa edición en "$2".',
	'log-name-thanks' => 'Rexistro de agradecementos',
	'log-description-thanks' => 'A continuación hai unha lista dos usuarios que recibiron agradecementos doutros usuarios.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|deu as grazas a}} $3',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'thanks-desc' => 'הוספת קישורי "תודה" לדפי היסטוריה והשוואה',
	'thanks-thank' => 'תודה',
	'thanks-thanked' => '{{GENDER:$1|הודה|הודתה}}',
	'thanks-error-undefined' => 'פעולת תודה נכשלה. נא לנסות שוב.',
	'thanks-error-invalidrevision' => 'מזהה גרסה אינו תקין.',
	'thanks-error-ratelimited' => 'עברת את מגבלת הקצב שלך. נא להמתין ולנסות שוב.',
	'thanks-thank-tooltip' => 'שליחת הודעת תודה למשתמש הזה',
	'echo-pref-subscription-edit-thank' => 'מודה לי על עריכה שלי',
	'echo-category-title-edit-thank' => 'תודות',
	'notification-thanks-diff-link' => 'עריכה שלך',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|הודה|הודתה}} לך על $2 בדף [[$3]].',
	'notification-thanks-flyout' => '[[User:$1|$1]] {{GENDER:$1|הודה|הודתה}} לך על $2 בדף <b>$3</b>.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|הודה|הודתה}} לך על עריכה שלך באתר {{SITENAME}}',
	'notification-thanks-email-body' => '{{GENDER:$1|משתמש|משתמשת}} אתר {{SITENAME}} $1 {{GENDER:$1|הודה|הודתה}} לך על עריכה שלך בדף $2.

הצגת העריכה שלך:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|הודה|הודתה}} לך על עריכה שלך בדף $2.',
	'log-name-thanks' => 'יומן תודות',
	'log-description-thanks' => 'להלן רשימת משתמשים שאנשים אחרים הודו להם.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|הודה|הודתה}} ל{{GRAMMAR:תחילית|$3}}',
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
	'notification-thanks' => 'Ni [[User:$1|$1]] ket {{GENDER:$1|agyaman}} kenka para iti $2 iti [[$3]].',
	'notification-thanks-flyout' => 'Ni [[User:$1|$1]] ket {{GENDER:$1|agyaman}} kenka para iti $2 iti <b>$3</b>.',
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
	'echo-pref-subscription-edit-thank' => 'Mi ringrazia per una mia modifica',
	'echo-category-title-edit-thank' => 'Ringraziamenti',
	'notification-thanks-diff-link' => 'la tua modifica',
	'notification-thanks' => '[[User:$1|$1]] ti {{GENDER:$1|ha ringraziato}} per $2 su [[$3]].',
	'notification-thanks-flyout' => '[[User:$1|$1]] ti {{GENDER:$1|ha ringraziato}} per $2 su <b>$3</b>.',
	'notification-thanks-email-subject' => '$1 ti {{GENDER:$1|ha ringraziato}} per la tua modifica su {{SITENAME}}.',
	'notification-thanks-email-body' => "L'utente $1 di {{SITENAME}} ti {{GENDER:$1|ha ringraziato}} per la tua modifica su $2.

Vedi la tua modifica:

$3

$4",
	'notification-thanks-email-batch-body' => '$1 ti {{GENDER:$1|ha ringraziato}} per la tua modifica su $2.',
	'log-name-thanks' => 'Ringraziamenti',
	'log-description-thanks' => 'Questi eventi tracciano quando un utente ringrazia un altro utente', # Fuzzy
	'logentry-thanks-thank' => '$1 {{GENDER:$2|ha ringraziato}} $3',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Shirayuki
 */
$messages['ja'] = array(
	'thanks-desc' => '履歴ページおよび差分ページに、感謝するリンクを追加する',
	'thanks-thank' => '感謝',
	'thanks-thanked' => '{{GENDER:$1|感謝しました}}',
	'thanks-error-undefined' => '感謝の操作に失敗しました。もう一度やり直してください。',
	'thanks-error-invalidrevision' => '版 ID が無効です。',
	'thanks-error-ratelimited' => '速度制限を超えました。しばらくしてからもう一度やり直してください。',
	'thanks-thank-tooltip' => 'この利用者に感謝の通知を送信する',
	'echo-pref-subscription-edit-thank' => '自分の編集に誰かが感謝したとき',
	'echo-pref-tooltip-edit-thank' => '自分の編集に誰かが感謝を示したら通知する。',
	'echo-category-title-edit-thank' => '感謝',
	'notification-thanks-diff-link' => 'あなたの編集',
	'notification-thanks' => '[[User:$1|$1]] が [[$3]] での$2に{{GENDER:$1|感謝しました}}',
	'notification-thanks-flyout' => '[[User:$1|$1]] が <b>$3</b> での$2に{{GENDER:$1|感謝しました}}',
	'notification-thanks-email-subject' => '$1 が{{SITENAME}}でのあなたの編集に{{GENDER:$1|感謝しました}}',
	'notification-thanks-email-body' => '{{SITENAME}}の利用者 $1 が $2 でのあなたの編集に{{GENDER:$1|感謝しました}}。

あなたの編集はこちら:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 が $2 でのあなたの編集に{{GENDER:$1|感謝しました}}',
	'log-name-thanks' => '感謝記録',
	'log-description-thanks' => '以下に、他の利用者から感謝を示された利用者を列挙します。',
	'logentry-thanks-thank' => '$1 が $3 に{{GENDER:$2|感謝しました}}',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'thanks-thank' => 'merci',
	'thanks-error-invalidrevision' => 'Versiounsnummer (ID) ass net valabel.',
	'thanks-thank-tooltip' => "Dësem Benotzer e 'Merci' sschécken",
	'echo-pref-subscription-edit-thank' => "'Mercie' fir meng Ännerung",
	'echo-category-title-edit-thank' => 'Merci',
	'notification-thanks-diff-link' => 'Är Ännerung',
	'log-name-thanks' => 'Logbuch vum Merci-soen',
	'log-description-thanks' => "Dëst Logbuch protokolléiert wa Benotzer anere Benotzer 'Merci' soen", # Fuzzy
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
	'thanks-thank-tooltip' => 'Испратете му благодарност (во порака) на корисников',
	'echo-pref-subscription-edit-thank' => 'Ќе ми се заблагодари за мое уредување',
	'echo-category-title-edit-thank' => 'Благодарам',
	'notification-thanks-diff-link' => 'вашето уредување',
	'notification-thanks' => '[[User:$1|$1]] ви {{GENDER:$1|благодари}} за $2 на [[$3]].',
	'notification-thanks-flyout' => '[[User:$1|$1]] ви {{GENDER:$1|благодари}} за $2 на <b>$3</b>.',
	'notification-thanks-email-subject' => '$1 ви {{GENDER:$1|благодари}} за вашето уредување на {{SITENAME}}',
	'notification-thanks-email-body' => 'Корисникот $1 на {{SITENAME}} {{GENDER:$1|ви благодари}} за вашето уредување на $2.

Уредување можете да го погледате тука:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|Ви заблагодари}} за вашето уредување на $2.',
	'log-name-thanks' => 'Дневник на благодарности',
	'log-description-thanks' => 'Следи список на корисници на кои други им искажале благодарност.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|му се заблагодари на|ѝ се заблагодари на|се заблагодари на}} $3',
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
	'echo-pref-subscription-edit-thank' => 'Berterima kasih pada saya atas suntingan saya',
	'echo-category-title-edit-thank' => 'Terima kasih',
	'notification-thanks-diff-link' => 'suntingan anda',
	'notification-thanks' => '[[User:$1|$1]] telah {{GENDER:$1|berterima kasih}} kepada anda atas $2 di [[$3]].',
	'notification-thanks-flyout' => '[[User:$1|$1]] telah {{GENDER:$1|berterima kasih}} kepada anda atas $2 di <b>$3</b>.',
	'notification-thanks-email-subject' => '$1 telah {{GENDER:$1|berterima kasih}} kepada anda atas suntingan anda di {{SITENAME}}',
	'notification-thanks-email-body' => 'Pengguna {{SITENAME}}, $1 telah {{GENDER:$1|berterima kasih}} kepada anda atas suntingan anda di $2.

Lihat suntingan anda:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 telah {{GENDER:$1|berterima kasih}} kepada anda atas suntingan anda di $2.',
	'log-name-thanks' => 'Log ucapan terima kasih',
	'log-description-thanks' => 'Yang berikut adalah senarai pengguna yang menerima ucapan terima kasih daripada pengguna lain.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|berterima kasih}} kepada $3',
);

/** Dutch (Nederlands)
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
	'echo-pref-subscription-edit-thank' => 'Bedankt u voor uw bewerking',
	'echo-pref-tooltip-edit-thank' => 'U een melding zenden als iemand u bedankt voor een bewerking die u hebt gemaakt.',
	'echo-category-title-edit-thank' => 'Bedankt',
	'notification-thanks-diff-link' => 'uw bewerking',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|heeft}} u bedankt voor $2 op [[$3]].',
	'notification-thanks-flyout' => '[[User:$1|$1]] {{GENDER:$1|heeft}} u bedankt voor $2 op <b>$3</b>.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|heeft}} u bedankt voor uw bewerking op  {{SITENAME}}',
	'notification-thanks-email-body' => 'Gebruiker $1 van {{SITENAME}} {{GENDER:$1|heeft}} u bedankt voor uw bewerking aan$2.

Bekijk uw bewerking:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|heeft}} u bedankt voor uw bewerking op $2.',
	'log-name-thanks' => 'Logboek voor bedankjes',
	'log-description-thanks' => 'Hieronder wordt een lijst weergegeven met gebruikers die door andere gebruikers zijn bedankt.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|heeft}} $3 bedankt',
);

/** Polish (polski)
 * @author Ty221
 */
$messages['pl'] = array(
	'log-name-thanks' => 'Log podziękowania',
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

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'thanks-thank' => 'grazie',
	'thanks-thanked' => '{{GENDER:$1|ringraziate}}',
	'thanks-error-undefined' => 'Azione de ringraziamende fallite. Pe piacere pruéve arrete.',
	'thanks-error-invalidrevision' => "ID d'a revisione non g'è valide.",
	'echo-category-title-edit-thank' => 'Grazie!',
	'notification-thanks-diff-link' => 'le cangiaminde tune',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Милан Јелисавчић
 */
$messages['sr-ec'] = array(
	'thanks-thank' => 'захвали се',
	'thanks-thank-tooltip' => 'Пошаљите захвалницу овом кориснику',
	'echo-category-title-edit-thank' => 'Захвалнице',
	'notification-thanks-diff-link' => 'вашој измени',
	'notification-thanks' => '[[User:$1|$1]] вам се {{GENDER:$1|захваљује}} на $2 странице [[$3]].',
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
	'notification-thanks' => '{{GENDER:$1|Pinasalamatan}} ka ni [[User:$1|$1]] para sa $2 na naroon sa [[$3]].',
	'notification-thanks-flyout' => '{{GENDER:$1|Pinasalamatan}} ka ni [[User:$1|$1]] para sa $2 na naroon sa <b>$3</b>.',
	'notification-thanks-email-subject' => '{{GENDER:$1|Pinasalamatan}} ka ni $1 para sa iyong pamamatnugot doon sa {{SITENAME}}',
	'notification-thanks-email-body' => 'Ang tagagamit ng {{SITENAME}} na si $1 ay {{GENDER:$1|nagpapasalamat}} sa iyo para sa pamamatnugot mo roon sa $2.

Tanawin ang binago mo:

$3

$4',
	'notification-thanks-email-batch-body' => '{{GENDER:$1|Pinasalamatan}} ka ni $1 para sa iyong binago roon sa $2.',
);

/** Ukrainian (українська)
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
	'thanks-thank-tooltip' => 'Надіслати сповіщення вдячності до користувача',
	'echo-pref-subscription-edit-thank' => 'Дякує мені за мої редагування',
	'echo-category-title-edit-thank' => 'вдячність',
	'notification-thanks-diff-link' => 'Ваше редагування',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|подякував|подякувала}} Вам за $2 на [[$3]].',
	'notification-thanks-flyout' => '[[User:$1|$1]] {{GENDER:$1|подякував|подякувала}} Вам за $2 на <b>$3</b>.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|подякував|подякувала}} Вам за Ваше редагування на {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|подякував|подякувала}} Вам за Ваше редагування на $2.',
	'log-name-thanks' => 'Журнал вдячностей',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|подякував|подякувала}} $3',
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
	'echo-pref-subscription-edit-thank' => 'Gửi lời cám ơn cho tôi vì một sửa đổi của tôi',
	'echo-category-title-edit-thank' => 'Cám ơn',
	'notification-thanks-diff-link' => 'sửa đổi của bạn',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1}}cám ơn bạn vì $2 tại [[$3]].',
	'notification-thanks-flyout' => '[[User:$1|$1]] {{GENDER:$1}}cám ơn bạn vì $2 tại <b>$3</b>.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1}}cám ơn bạn vì sửa đổi của bạn tại {{SITENAME}}',
	'notification-thanks-email-body' => 'Người dùng $1 tại {{SITENAME}} {{GENDER:$1}}cám ơn bạn vì sửa đổi gần đây của bạn tại $2.

Xem sửa đổi của bạn:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1}}cám ơn bạn vì sửa đổi của bạn tại $2.',
	'log-name-thanks' => 'Nhật trình cám ơn',
	'log-description-thanks' => 'Dưới đây có danh sách những người dùng được người khác gửi lời cám ơn.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2}}đã cám ơn $3',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Yfdyh000
 * @author Zhuyifei1999
 */
$messages['zh-hans'] = array(
	'thanks-desc' => '添加感谢链接到历史记录和差异查看',
	'thanks-thank' => '感谢',
	'thanks-thanked' => '已感谢', # Fuzzy
	'thanks-error-undefined' => '感谢操作失败。请再试一次。',
	'thanks-error-invalidrevision' => '修订ID无效。',
	'thanks-error-ratelimited' => '您已超过您的速率限制。请等一段时间再试。',
	'thanks-thank-tooltip' => '发送一条感谢你通知给此用户',
	'echo-pref-subscription-edit-thank' => '感谢我的编辑',
	'echo-category-title-edit-thank' => '感谢',
	'notification-thanks-diff-link' => '您的编辑',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|感谢}}你的$2在[[$3]].',
	'notification-thanks-flyout' => '[[User:$1|$1]] {{GENDER:$1|感谢}} 您的$2在<b>$3</b> 。',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|感谢}} 您的编辑在{{SITENAME}}',
	'notification-thanks-email-body' => '{{SITENAME}} 用户 $1  {{GENDER:$1| 感谢}} 您的编辑$2 。

查看您的编辑：

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|感谢}} 您的编辑在$2',
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
	'echo-category-title-edit-thank' => '感謝',
	'notification-thanks-diff-link' => '您的編輯',
	'log-name-thanks' => '感謝日誌',
	'log-description-thanks' => '用戶鳴謝以下的用戶。',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|感謝}} $3',
);
