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
	'log-name-thanks' => 'Thanks log',
	'log-description-thanks' => 'These events track when users thank other users',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|thanked}} $3',
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 * @author Siebrand
 */
$messages['qqq'] = array(
	'thanks-desc' => '{{desc|name=Thanks|url=http://www.mediawiki.org/wiki/Extension:Thanks}}',
	'thanks-thank' => 'Link to thank another user. This is a verb.',
	'thanks-thanked' => 'Message that replaces the link to thank another user after they have been thanked (Echo-thank). This is short for "the user that created this revision has been thanked for it".',
	'thanks-error-undefined' => 'Error message that is displayed when the thank action fails.
{{Identical|Please try again}}',
	'thanks-error-invalidrevision' => 'Error message that is displayed when the revision ID is not valid',
	'thanks-error-ratelimited' => 'Error message that is displayed when user exceeds rate limit',
	'thanks-thank-tooltip' => 'Tooltip that appears when a user hovers over the "thank" link',
	'echo-pref-subscription-edit-thank' => 'Option for getting notifications when someone thanks the user for their edit.

This is the conclusion of the sentence begun by the header: {{msg-mw|Prefs-echosubscriptions}}.',
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
	'thanks-thanked' => 'poděkováno',
	'thanks-error-undefined' => 'Poděkování se nezdařilo. Zkuste to prosím znovu.',
	'thanks-error-invalidrevision' => 'ID revize je neplatné.',
	'thanks-error-ratelimited' => 'Překročili jste rychlostní limit. Počkejte prosím chvíli a zkuste to znovu.',
	'thanks-thank-tooltip' => 'Poslat tomuto uživateli poděkování',
	'echo-pref-subscription-edit-thank' => '…mi někdo poděkuje za editaci',
	'echo-category-title-edit-thank' => 'Poděkování',
	'notification-thanks-diff-link' => 'vaši úpravu',
	'notification-thanks' => '[[User:$1|$1]] vám {{GENDER:$1|poděkoval|poděkovala}} za $2 stránky [[$3]].',
	'notification-thanks-flyout' => '$1 vám {{GENDER:$1|poděkoval|poděkovala}} za $2 stránky $3.',
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
	'log-name-thanks' => 'Dankes-Logbuch',
	'log-description-thanks' => 'Dieses Logbuch protokolliert Danksagungen an andere Benutzer.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|dankte}} $3',
);

/** Finnish (suomi)
 * @author Silvonen
 */
$messages['fi'] = array(
	'thanks-thank' => 'kiitä',
	'thanks-thanked' => 'kiitetty',
	'log-name-thanks' => 'Kiitosloki',
);

/** French (français)
 * @author Boniface
 * @author Gomoko
 * @author Metroitendo
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
	'log-name-thanks' => 'Entrée remerciements',
	'log-description-thanks' => 'Ces entrées permettent de savoir quand un utilisateur en remercie un autre',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|remercie}} $3',
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
	'log-name-thanks' => 'Rexistro de agradecementos',
	'log-description-thanks' => 'Este rexistro leva conta dos agradecementos feitos aos usuarios',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|deu as grazas a}} $3',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'thanks-thank' => 'ringrazia',
	'thanks-thanked' => 'ringraziato',
	'thanks-error-invalidrevision' => 'ID versione non è valido.',
	'thanks-thank-tooltip' => 'Invia una notifica di ringraziamento a questo utente',
	'echo-pref-subscription-edit-thank' => 'Mi ringrazia per una mia modifica',
	'echo-category-title-edit-thank' => 'Grazie',
	'notification-thanks-diff-link' => 'la tua modifica',
	'notification-thanks' => '[[User:$1|$1]] ti {{GENDER:$1|ha ringraziato}} per $2 su [[$3]].',
	'notification-thanks-flyout' => '$1 ti {{GENDER:$1|ha ringraziato}} per $2 su $3.',
	'notification-thanks-email-subject' => '$1 ti {{GENDER:$1|ha ringraziato}} per la tua modifica su {{SITENAME}}.',
	'notification-thanks-email-body' => "L'utente $1 di {{SITENAME}} ti {{GENDER:$1|ha ringraziato}} per la tua modifica su $2.

Vedi la tua modifica:

$3

$4",
	'notification-thanks-email-batch-body' => '$1 ti {{GENDER:$1|ha ringraziato}} per la tua modifica su $2.',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Shirayuki
 */
$messages['ja'] = array(
	'thanks-desc' => '履歴ページおよび差分ページに、感謝するリンクを追加する',
	'thanks-thank' => '感謝',
	'thanks-thanked' => '感謝しました',
	'thanks-error-undefined' => '感謝の操作に失敗しました。もう一度やり直してください。',
	'thanks-error-invalidrevision' => '版 ID が無効です。',
	'thanks-error-ratelimited' => '速度制限を超えました。しばらくしてからもう一度やり直してください。',
	'thanks-thank-tooltip' => 'この利用者に感謝の通知を送信する',
	'echo-pref-subscription-edit-thank' => '自分の編集に誰かが感謝したとき',
	'echo-category-title-edit-thank' => '感謝',
	'notification-thanks-diff-link' => 'あなたの編集',
	'notification-thanks' => '[[User:$1|$1]] が [[$3]] での$2に{{GENDER:$1|感謝しました}}',
	'notification-thanks-flyout' => '$1 が $3 での$2に{{GENDER:$1|感謝しました}}',
	'notification-thanks-email-subject' => '$1 が{{SITENAME}}でのあなたの編集に{{GENDER:$1|感謝しました}}',
	'notification-thanks-email-body' => '{{SITENAME}}の利用者 $1 が $2 でのあなたの編集に{{GENDER:$1|感謝しました}}。

あなたの編集はこちら:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 が $2 でのあなたの編集に{{GENDER:$1|感謝しました}}',
	'log-name-thanks' => '感謝記録',
	'logentry-thanks-thank' => '$1 が $3 に{{GENDER:$2|感謝しました}}',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'thanks-desc' => 'Додава врски за заблагодарувања во историјата и прегледот на разликите',
	'thanks-thank' => 'заблагодари се',
	'thanks-thanked' => 'заблагодарено',
	'thanks-error-undefined' => 'Заблагодарувањето не успеа. Обидете се повторно.',
	'thanks-error-invalidrevision' => 'Ревизијата има неважечка назнака.',
	'thanks-error-ratelimited' => 'Ја надминавте границата на заблагодарувања. Почекајте некое време, па обидете се подоцна',
	'thanks-thank-tooltip' => 'Испратете му благодарност (во порака) на корисников',
	'echo-pref-subscription-edit-thank' => 'Ќе ми се заблагодари за мое уредување',
	'echo-category-title-edit-thank' => 'Благодарам',
	'notification-thanks-diff-link' => 'вашето уредување',
	'notification-thanks' => '[[User:$1|$1]] ви {{GENDER:$1|благодари}} за $2 на [[$3]].',
	'notification-thanks-flyout' => '$1 ви {{GENDER:$1|благодари}} за $2 на $3.',
	'notification-thanks-email-subject' => '$1 ви {{GENDER:$1|благодари}} за вашето уредување на {{SITENAME}}',
	'notification-thanks-email-body' => 'Корисникот $1 на {{SITENAME}} {{GENDER:$1|ви благодари}} за вашето уредување на $2.

Уредување можете да го погледате тука:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|Ви заблагодари}} за вашето уредување на $2.',
	'log-name-thanks' => 'Дневник на благодарности',
	'log-description-thanks' => 'Дневников ги следи благодарниците што си ги испраќаат корисниците',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|му се заблагодари на|ѝ се заблагодари на|се заблагодари на}} $3',
);

/** Dutch (Nederlands)
 * @author Konovalov
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'thanks-desc' => 'Voegt "Bedankt"-koppelingen toe aan geschiedenis en verschillenweergaves',
	'thanks-thank' => 'bedanken',
	'thanks-thanked' => 'is bedankt',
	'thanks-error-undefined' => 'Bedanken is mislukt. Probeer het opnieuw.',
	'thanks-error-invalidrevision' => 'Het versienummer is niet geldig.',
	'thanks-error-ratelimited' => 'U hebt uw limiet voor bedankjes overschreden. Wacht even en probeer het dan opnieuw.',
	'thanks-thank-tooltip' => 'Deze gebruiker bedanken',
	'echo-pref-subscription-edit-thank' => 'Bedankt u voor uw bewerking',
	'echo-category-title-edit-thank' => 'Bedankt',
	'notification-thanks-diff-link' => 'uw bewerking',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|heeft}} u bedankt voor $2 op [[$3]].',
	'notification-thanks-flyout' => '$1 {{GENDER:$1|heeft}} u bedankt voor $2 op $3.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|heeft}} u bedankt voor uw bewerking op  {{SITENAME}}',
	'notification-thanks-email-body' => 'Gebruiker $1 van {{SITENAME}} {{GENDER:$1|heeft}} u bedankt voor uw bewerking aan$2.

Bekijk uw bewerking:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|heeft}} u bedankt voor uw bewerking op $2.',
	'log-name-thanks' => 'Logboek voor bedankjes',
	'log-description-thanks' => 'Deze gebeurtenissen zijn een overzicht van gebruikers die andere gebruikers bedanken.',
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
	'thanks-thanked' => 'منندوی شو',
	'thanks-error-undefined' => 'د مننې چاره پاتې راغله. بيا مو هڅه وکړۍ.',
	'thanks-error-invalidrevision' => 'د کره کتنې پېژند سم نه دی.',
	'thanks-thank-tooltip' => 'دې کارن ته د مننې يو پيغام ورلېږل',
	'echo-pref-subscription-edit-thank' => 'زه د سمون پخاطر زما منندوی شه',
	'echo-category-title-edit-thank' => 'مننه',
	'notification-thanks-diff-link' => 'ستاسې سمون',
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
	'thanks-thanked' => 'napasalamatan na',
	'thanks-error-undefined' => 'Nabigo ang galaw ng pagpapasalamat. Paki subukan ulit.',
	'thanks-error-invalidrevision' => 'Hindi katanggap-tanggap ang ID ng rebisyon.',
	'thanks-error-ratelimited' => 'Lumampas ka na sa iyong hangganang antas. Paki maghintay ng ilang panahon at sumubok ulit.',
	'thanks-thank-tooltip' => 'Magpadala ng isang pabatid ng pasasalamat sa tagagamit na ito',
	'echo-pref-subscription-edit-thank' => 'Pinasalamatan ako dahil sa aking pamamatnugot',
	'echo-category-title-edit-thank' => 'Salamat',
	'notification-thanks-diff-link' => 'ang binago mo',
	'notification-thanks' => '{{GENDER:$1|Pinasalamatan}} ka ni [[User:$1|$1]] para sa $2 na naroon sa [[$3]].',
	'notification-thanks-flyout' => '{{GENDER:$1|Pinasalamatan}} ka ni $1 para sa $2 na naroon sa $3.',
	'notification-thanks-email-subject' => '{{GENDER:$1|Pinasalamatan}} ka ni $1 para sa iyong pamamatnugot doon sa {{SITENAME}}',
	'notification-thanks-email-body' => 'Ang tagagamit ng {{SITENAME}} na si $1 ay {{GENDER:$1|nagpapasalamat}} sa iyo para sa pamamatnugot mo roon sa $2.

Tanawin ang binago mo:

$3

$4',
	'notification-thanks-email-batch-body' => '{{GENDER:$1|Pinasalamatan}} ka ni $1 para sa iyong binago roon sa $2.',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'thanks-desc' => 'Thêm liên kết cám ơn vào các trang lịch sử và khác biệt',
	'thanks-thank' => 'cám ơn',
	'thanks-thanked' => 'đã cám ơn',
	'thanks-error-undefined' => 'Thất bại cám ơn. Xin vui lòng thử lại.',
	'thanks-error-invalidrevision' => 'Số phiên bản không hợp lệ.',
	'thanks-error-ratelimited' => 'Bạn đã vượt quá giới hạn tốc độ. Xin vui lòng thử lại lát nữa.',
	'thanks-thank-tooltip' => 'Gửi thông báo cám ơn cho người dùng này',
	'echo-pref-subscription-edit-thank' => 'Gửi lời cám ơn cho tôi vì một sửa đổi của tôi',
	'echo-category-title-edit-thank' => 'Cám ơn',
	'notification-thanks-diff-link' => 'sửa đổi của bạn',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1}}cám ơn bạn vì $2 tại [[$3]].',
	'notification-thanks-flyout' => '$1 {{GENDER:$1}}cám ơn bạn vì $2 tại $3.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1}}cám ơn bạn vì sửa đổi của bạn tại {{SITENAME}}',
	'notification-thanks-email-body' => 'Người dùng $1 tại {{SITENAME}} {{GENDER:$1}}cám ơn bạn vì sửa đổi gần đây của bạn tại $2.

Xem sửa đổi của bạn:

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1}}cám ơn bạn vì sửa đổi của bạn tại $2.',
	'log-name-thanks' => 'Nhật trình cám ơn',
	'log-description-thanks' => 'Các sự kiện này cho biết khi nào một người dùng cám ơn những người khác',
	'logentry-thanks-thank' => '$1 {{GENDER:$2}}đã cám ơn $3',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Yfdyh000
 * @author Zhuyifei1999
 */
$messages['zh-hans'] = array(
	'thanks-desc' => '添加感谢链接到历史记录和差异查看',
	'thanks-thank' => '感谢',
	'thanks-thanked' => '已感谢',
	'thanks-error-undefined' => '感谢操作失败。请再试一次。',
	'thanks-error-invalidrevision' => '修订ID无效。',
	'thanks-error-ratelimited' => '您已超过您的速率限制。请等一段时间再试。',
	'thanks-thank-tooltip' => '发送一条感谢你通知给此用户',
	'echo-pref-subscription-edit-thank' => '感谢我的编辑',
	'echo-category-title-edit-thank' => '感谢',
	'notification-thanks-diff-link' => '您的编辑',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|感谢}}你的$2在[[$3]].',
	'notification-thanks-flyout' => '$1 {{GENDER:$1|感谢}} 您的$2在$3 。',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|感谢}} 您的编辑在{{SITENAME}}',
	'notification-thanks-email-body' => '{{SITENAME}} 用户 $1  {{GENDER:$1| 感谢}} 您的编辑$2 。

查看您的编辑：

$3

$4',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|感谢}} 您的编辑在$2',
);
