<?php
/**
 * Internationalization file for the Thanks extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English (English)
 * @author Shirayuki
 */
$messages['en'] = array(
	'thanks-desc' => 'Adds thank links to history and diff views',
	'thanks-thank' => 'thank',
	'thanks-thanked' => '{{GENDER:$1|thanked}}',
	'thanks-button-thank' => '{{GENDER:$1|Thank}}',
	'thanks-button-thanked' => '{{GENDER:$1|Thanked}}',
	'thanks-error-undefined' => 'Thank action failed. Please try again.',
	'thanks-error-invalidrevision' => 'Revision ID is not valid.',
	'thanks-error-ratelimited' => "{{GENDER:$1|You}}'ve exceeded your rate limit. Please wait some time and try again.",
	'thanks-thank-tooltip' => '{{GENDER:$1|Send}} a thank you notification to this {{GENDER:$2|user}}',
	'thanks-confirmation' => 'Do you want to {{GENDER:$1|thank}} $2 for this edit?',
	'thanks-thanked-notice' => '$1 was notified that you liked {{GENDER:$2|his|her|their}} edit.',
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
	'log-show-hide-thanks' => '$1 thanks log',
);

/** Message documentation (Message documentation)
 * @author Amire80
 * @author Pxos
 * @author Raymond
 * @author Shirayuki
 * @author Siebrand
 */
$messages['qqq'] = array(
	'thanks-desc' => '{{desc|name=Thanks|url=http://www.mediawiki.org/wiki/Extension:Thanks}}',
	'thanks-thank' => '{{Doc-actionlink}}
A link to thank another user. This appears next to messages such as {{msg-mw|editundo}} and {{msg-mw|rollbacklink}} and should be translated in a similar fashion.
{{Identical|Thank}}',
	'thanks-thanked' => "This message immediately replaces the message {{msg-mw|Thanks-thank}} after it's pressed. It means that the thanking operation has been completed.

It can be translated as \"''thanked''\" in \"You thanked the user\" or \"The user has just been ''thanked''\" - whatever is appropriate to your language.

Parameters:
* \$1 - the current user, for GENDER support",
	'thanks-button-thank' => 'Text of a button to thank another user. Same as {{msg-mw|Thanks-thank}}, but the context is in a button.
{{Identical|Thank}}',
	'thanks-button-thanked' => "This message immediately replaces the message {{msg-mw|Thanks-button-thank}} after it's pressed. It means that the thanking operation has been completed.

Same as {{msg-mw|Thanks-thanked}}, but the context is in a button.

Parameters:
* $1 - the current user, for GENDER support",
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
	'thanks-thanked-notice' => '{{doc-singularthey}}
Pop-up message that is displayed after a user has thanked another user for their edit.

Parameters:
* $1 - the username of the user that was thanked
* $2 - the gender of the user that was thanked',
	'echo-pref-subscription-edit-thank' => 'Option for getting notifications when someone thanks the user for their edit.

This is the conclusion of the sentence begun by the header: {{msg-mw|Prefs-echosubscriptions}}.',
	'echo-pref-tooltip-edit-thank' => 'This is a short description of the edit-thank notification category.',
	'echo-category-title-edit-thank' => 'This is a short title for the notification category.

Used as <code>$1</code> in {{msg-mw|Echo-dismiss-message}} and as <code>$2</code> in {{msg-mw|Echo-email-batch-category-header}}
{{Identical|Thank}}',
	'notification-thanks-diff-link' => "The text of a link to the user's edit.

Used for <code>$2</code> in {{msg-mw|Notification-thanks}}. Should have capitalization appropriate for the middle of a sentence.

This is an object in a sentence so it should be in object case in languages where there is a special object form for words.",
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
	'log-show-hide-thanks' => 'Shown on [[Special:Log]] as a link to show/hide thanks log entries. (Hidden by default)
* $1 - one of {{msg-mw|Show}} or {{msg-mw|Hide}}
{{Related|Log-show-hide}}',
);

/** Arabic (العربية)
 * @author Asaifm
 * @author ترجمان05
 * @author زكريا
 * @author مشعل الحربي
 */
$messages['ar'] = array(
	'thanks-desc' => 'تضيف روابط للشكر على صفحات التاريخ والفرق',
	'thanks-thank' => 'شكر',
	'thanks-thanked' => '{{GENDER:$1|تم إرسال الشكر}}',
	'thanks-button-thank' => '{{GENDER:$1|شكر}}',
	'thanks-button-thanked' => '{{GENDER:$1|تم إرسال الشكر}}',
	'thanks-error-undefined' => 'فشل إرسال الشكر، الرجاء المحاولة مجددًا.',
	'thanks-error-invalidrevision' => 'معرّف المراجعة غير صحيح.',
	'thanks-error-ratelimited' => 'لقد {{GENDER:$1|تجاوزت}} حد التقييم، الرجاء الانتظار لبعض الوقت ثم المحاولة مجددًا.',
	'thanks-thank-tooltip' => '{{GENDER:$1|أرسل|أرسلي}} إشعار شكر ل{{GENDER:$2|هذا المستخدم|هذه المستخدمة}}',
	'thanks-confirmation' => 'هل {{GENDER:$1|تريد|تريدين}} شكر $2 على هذا التعديل?',
	'thanks-thanked-notice' => 'تم إشعار $1 بأن {{GENDER:$2|تعديله|تعديلها|تعديلهم}} أعجبك.',
	'echo-pref-subscription-edit-thank' => 'شكري على تعديلي',
	'echo-pref-tooltip-edit-thank' => 'أشعرني عندما يشكرني أحد ما على تعديل قمت به.',
	'echo-category-title-edit-thank' => 'شكر',
	'notification-thanks-diff-link' => 'تعديلك',
	'notification-thanks' => '{{GENDER:$1|شكرك|شكرتك}} [[User:$1|$1]] على $2 في [[:$3]].',
	'notification-thanks-flyout2' => '{{GENDER:$1|شكرك|شكرتك}} [[User:$1|$1]] على تعديلك في $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|شكرك|شكرتك}} على تعديلك في {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|شكرك|شكرتك}} على تعديلك في $2.',
	'notification-link-text-respond-to-user' => 'الرد على المستخدم',
	'log-name-thanks' => 'سجل الشكر',
	'log-description-thanks' => 'بالأسفل قائمة مستخدمين تلقوا شكرًا من مستخدمين آخرين.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|شكر|شكرت}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 سجل الشكر',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'thanks-desc' => "Amiesta enllaces d'agradecimientu a les vistes d'historial y diferencies",
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => '{{GENDER:$1|agradecíu|agradecida}}',
	'thanks-button-thank' => 'Agradecer', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|Agradecíu|Agradecida}}',
	'thanks-error-undefined' => "Falló l'aición d'agradecimientu. Por favor, vuelva a probar.",
	'thanks-error-invalidrevision' => 'La ID de la revisión nun ye válida.',
	'thanks-error-ratelimited' => 'Pasó la llende de repeticiones. Espere un tiempu y vuelva a intentalo.',
	'thanks-thank-tooltip' => "{{GENDER:$1|Unviar}} una nota d'agradecimientu a {{GENDER:$2|esti usuariu|esta usuaria}}",
	'thanks-confirmation' => '¿Ta {{GENDER:$1|seguru|segura}} de que quier agradecer a $2 la so edición?', # Fuzzy
	'thanks-thanked-notice' => "$1 recibió l'avisu de que-y gustó {{GENDER:$2|la so}} edición.", # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Agradecimientos pola mio edición',
	'echo-pref-tooltip-edit-thank' => 'Avisame cuando alguién me de les gracies por una edición de mio.',
	'echo-category-title-edit-thank' => 'Gracies',
	'notification-thanks-diff-link' => 'la so edición',
	'notification-thanks' => '[[User:$1|$1]] ta {{GENDER:$1|agradecíu|agradecida}} por $2 en [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|agradeció}} la so edición de $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeció}} la so edición en {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|agradeció}} la so edición en $2.',
	'notification-link-text-respond-to-user' => 'Contestar al usuariu',
	'log-name-thanks' => "Rexistru d'agradecimientos",
	'log-description-thanks' => "Mas abaxo ta la llista d'usuarios a los qu'otros usuarios dieron les gracies.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|dio les gracies a}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => "$1 rexistru d'agradecimientos",
);

/** Azerbaijani (azərbaycanca)
 * @author Interfase
 * @author Khan27
 */
$messages['az'] = array(
	'thanks-desc' => 'Tarixə minətdarlıq keçidləri əlavə edir və versiyaların müqayisəsi',
	'thanks-thank' => 'təşəkkür',
	'thanks-button-thank' => '{{GENDER:$1|Təşəkkür}}',
);

/** Belarusian (беларуская)
 * @author Чаховіч Уладзіслаў
 */
$messages['be'] = array(
	'thanks-desc' => 'Дадае падзячныя спасылкі на гісторыю і параўнанне версій',
	'thanks-thank' => 'дзякуй',
	'thanks-thanked' => '{{GENDER:$1|падзякаваў|падзякавала}}',
	'thanks-button-thank' => '{{GENDER:$1|Дзякуй}}',
	'thanks-error-undefined' => 'На атрымалася падзякаваць. Паспрабуйце зноў.',
	'thanks-error-invalidrevision' => 'Некарэктны нумар версіі.',
	'thanks-error-ratelimited' => 'Вы перавысілі абмежаванне хуткасці выканання такіх дзеянняў. Калі ласка, пачакайце некаторы час і паспрабуйце зноў.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Адправіць}} {{GENDER:$2|гэтаму ўдзельніку|гэтай удзельніцы}} паведамленне з падзякай',
	'thanks-confirmation' => 'Жадаеце {{GENDER:$1|падзякаваць}} $2 за гэту праўку?',
	'thanks-thanked-notice' => '$1 {{GENDER:$2|быў абвешчаны|была абвешчана|былі абвешчаны}}, што вам спадабалася {{GENDER:$2|яго|яе|іх}} праўка.',
	'echo-pref-subscription-edit-thank' => 'Дзякуй мне за маю праўку',
	'echo-pref-tooltip-edit-thank' => 'Паведамляць мне, калі хтосьці дзякуе мяне за зробленую мной праўку.',
	'echo-category-title-edit-thank' => 'Дзякуй',
	'notification-thanks-diff-link' => 'вашу праўку',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|падзякаваў|падзякавала}} вас за $2 на старонцы «[[:$3]]».',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|падзякаваў|падзякавала}} вас за вашу праўку на старонцы «$2».',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|падзякаваў|падзякавала}} вас за вашу праўку на сайце «{{SITENAME}}».',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|падзякаваў|падзякавала}} вас за вашу праўку на старонцы «$2».',
	'notification-link-text-respond-to-user' => 'Адказаць удзельніку',
	'log-name-thanks' => 'Часопіс падазяк',
	'log-description-thanks' => 'Ніжэй прыведзены спіс удзельнікаў, якія атрымалі падзякі ад іншых удзельнікаў.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|падзякаваў|падзякавала}} {{GENDER:$4|удзельніка|ўдзельніцу}} $3',
	'log-show-hide-thanks' => '$1 журнал падзяк',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Renessaince
 */
$messages['be-tarask'] = array(
	'thanks-desc' => 'Дадае спасылкі з падзякамі у гісторыю і параўнаньне вэрсыяў',
	'thanks-thank' => 'дзякуй',
	'thanks-thanked' => '{{GENDER:$1|падзякаваў|падзякавала}}',
	'thanks-button-thank' => 'Дзякуй', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|Падзякаваў|Падзякавала}}',
	'thanks-error-undefined' => 'Не атрымалася падзякаваць. Паспрабуйце яшчэ раз.',
	'thanks-error-invalidrevision' => 'Няслушны ідэнтыфікатар вэрсіі',
	'thanks-error-ratelimited' => 'Вы перавысілі абмежаваньне хуткасьці выкананьня. Пачакайце крыху і паўтарыце спробу.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Адаслаць}} {{GENDER:$2|гэтаму карыстальніку|гэтай карыстальніцы}} падзяку',
	'thanks-confirmation' => 'Вы насамрэч хочаце {{GENDER:$1|падзякаваць}} $2 за гэтую праўку?', # Fuzzy
	'thanks-thanked-notice' => '$1 {{GENDER:$2|атрымаў|атрымала|атрымалі}} паведамленьне пра вашае ўпадабаньне {{GENDER:$2|ягонай|ейнай|іхняй}} праўкі.', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Дзякуе мне за маю праўку',
	'echo-pref-tooltip-edit-thank' => 'Паведаміць мне, калі нехта дзякуе за мае праўкі.',
	'echo-category-title-edit-thank' => 'Дзякуй',
	'notification-thanks-diff-link' => 'вашае рэдагаваньне',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|падзякаваў|падзякавала}} Вам за $2 на [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|падзякаваў|падзякавала}} Вам за Вашую праўку на $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|падзякаваў|падзякавала}} Вам за Вашую праўку на {{SITENAME}}.',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|падзякаваў|падзякавала}} Вам за Вашую праўку на $2.',
	'notification-link-text-respond-to-user' => 'Адказаць удзельніку',
	'log-name-thanks' => 'Журнал падзякаў',
	'log-description-thanks' => 'Ніжэй знаходзіцца сьпіс удзельнікаў, якія атрымалі падзякі.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|падзякаваў|падзякавала}} {{GENDER:$4|удзельніка|удзельніцу}} $3',
	'log-show-hide-thanks' => 'Журнал падзякаў $1',
);

/** Bulgarian (български)
 * @author DCLXVI
 * @author Termininja
 */
$messages['bg'] = array(
	'echo-pref-tooltip-edit-thank' => 'Уведомяване, когато някой изкаже благодарност за редакция, която съм направил.',
	'echo-category-title-edit-thank' => 'Благодарност',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|изразява благодарност}} за редакциите ви в {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|изказа благодарност}} за редакцията, която сте направили в $2.',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 * @author Bellayet
 * @author Nasir8891
 */
$messages['bn'] = array(
	'thanks-desc' => 'ইতিহাস পাতায় ধন্যবাদ লিংক সংযোজন',
	'thanks-thank' => 'ধন্যবাদ',
	'thanks-thanked' => '{{GENDER:$1|ধন্যবাদ জানিয়েছেন}}',
	'thanks-button-thank' => '{{GENDER:$1|ধন্যবাদ}}',
	'thanks-button-thanked' => '{{GENDER:$1|ধন্যবাদ জানিয়েছেন}}',
	'thanks-error-undefined' => 'ধন্যবাদ পদক্ষেপ ব্যর্থ। অনুগ্রহ করে আবার চেষ্টা করুন।',
	'thanks-error-invalidrevision' => 'সংশোধনের আইডি বৈধ নয়।',
	'thanks-error-ratelimited' => 'আপনি রেট করার সর্বোচ্চ সীমা অতিক্রম করেছেন। অনুগ্রহ করে অপেক্ষা করুন এবং পুনরায় চেষ্টা করুন।', # Fuzzy
	'thanks-thank-tooltip' => 'এই {{GENDER:$2|ব্যবহারকারীকে}} ধন্যবাদ নোটিফিকেশন {{GENDER:$1|পাঠান}}',
	'thanks-confirmation' => 'আপনি কি এই সম্পাদনার জন্য $2কে {{GENDER:$1|ধন্যবাদ}} জানাতে চান?',
	'thanks-thanked-notice' => '$1-কে জাননো হয়েছে যে আপনি {{GENDER:$2|তার|তার|তাদের}} সম্পাদনা পছন্দ করেছেন।',
	'echo-pref-subscription-edit-thank' => 'আমার সম্পাদনার জন্য আমার ধন্যবাদসমূহ',
	'echo-pref-tooltip-edit-thank' => 'আমার কোনো সম্পাদনার জন্য কেউ আমাকে ধন্যবাদ দিলে তা আমাকে জানাও',
	'echo-category-title-edit-thank' => 'ধন্যবাদসমূহ',
	'notification-thanks-diff-link' => 'আপনার সম্পাদনা',
	'notification-thanks' => '[[User:$1|$1]] আপনাকে [[:$3]] পাতায় $2 এর জন্য {{GENDER:$1|ধন্যবাদ}} জানিয়েছেন।',
	'notification-thanks-flyout2' => '$2 পাতায় সম্পাদনার জন্য [[User:$1|$1]]  আপনাকে {{GENDER:$1|ধন্যবাদ}} জানিয়েছেন।',
	'notification-thanks-email-subject' => '{{SITENAME}} সম্পাদনার জন্য $1 আপনাকে {{GENDER:$1|ধন্যবাদ}} জানিয়েছেন।',
	'notification-thanks-email-batch-body' => '$2-এ সম্পাদনার জন্য $1 আপনাকে {{GENDER:$1|ধন্যবাদ}} জানিয়েছেন।',
	'notification-link-text-respond-to-user' => 'ব্যবহারকারীর প্রতিক্রিয়া',
	'log-name-thanks' => 'ধন্যবাদ লগ',
	'log-description-thanks' => 'নিচে ব্যবহারকারীদের একটি তালিকা রয়েছে যারা অন্য ব্যবহারকারী হতে ধন্যবাদ পেয়েছেন।',
	'logentry-thanks-thank' => '$1 {{GENDER:$4|$3}}কে {{GENDER:$2|ধন্যবাদ জানিয়েছেন}}',
	'log-show-hide-thanks' => 'ধন্যবাদ লগ $1',
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'thanks-thank' => 'trugarez',
	'thanks-thanked' => '{{GENDER:$1|trugarekaet}}',
	'thanks-button-thank' => '{{GENDER:$1|Trugarez}}',
	'thanks-button-thanked' => '{{GENDER:$1|Trugarekaet}}',
	'echo-category-title-edit-thank' => 'Trugarez',
	'notification-thanks-diff-link' => 'ho kemm',
	'notification-link-text-respond-to-user' => "Respont d'an implijer",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|en deus|he deus}} trugarekaet {{GENDER:$4|$3}}',
);

/** Bosnian (bosanski)
 * @author DzWiki
 * @author Edinwiki
 */
$messages['bs'] = array(
	'thanks-desc' => 'Dodaje mogućnost zahvaljivanja u pregledu historije i pregledu razlike između izmjena',
	'thanks-thank' => 'zahvali se',
	'thanks-thanked' => '{{GENDER:$1|zahvalio se|zahvalila se}}',
	'thanks-error-undefined' => 'Nije bilo moguće zahvaliti se. Pokušajte ponovo.',
	'thanks-error-invalidrevision' => 'Revizioni ID nije validan.',
	'thanks-error-ratelimited' => 'Prekoračili ste vaše ograničenje za ocijenjivanje. Sačekajte jedno vrijeme i zatim pokušajte ponovo.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Pošalji}} zahvalnicu {{GENDER:$2|ovom korisniku|оvoj korisnici}}',
	'thanks-confirmation' => 'Da li ste sigurni da se hoćete {{GENDER:$1|zahvaliti}} korisniku $2 za ovu izmjenu?', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Neko mi se zahvali za moju izmjenu',
	'echo-pref-tooltip-edit-thank' => 'Obavijesti me ako mi se neko zahvali za moju izmjenu.',
	'echo-category-title-edit-thank' => 'Zahvale',
	'notification-thanks-diff-link' => 'vašoj izmjeni',
	'notification-thanks' => '[[User:$1|$1]] vam se {{GENDER:$1|zajvaljuje}} na $2 stranice [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] vam se {{GENDER:$1|zahvaljuje}} na vašoj izmjeni na stranici $2.',
	'notification-thanks-email-subject' => '$1 vam se {{GENDER:$1|zahvaljuje}} na vašoj izmjeni na {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 vam se {{GENDER:$1|zahvaljuje}} na vašoj izmjeni na stranici $2.',
	'notification-link-text-respond-to-user' => 'Odgovori korisniku',
	'log-name-thanks' => 'Zapis zahvalnica',
	'log-description-thanks' => 'Ispod se nalazi spisak korisnika kojima su se drugi korisnici zahvalili.',
	'logentry-thanks-thank' => '$1 se {{GENDER:$2|zahvaljuje}} korisniku {{GENDER:$4|$3}}',
);

/** Catalan (català)
 * @author QuimGil
 * @author Vriullop
 */
$messages['ca'] = array(
	'thanks-desc' => "Afegeix enllaços d'agraïment a les pàgines d'historial i diferències de revisions.",
	'thanks-thank' => 'agraeix',
	'thanks-thanked' => '{{GENDER:$1|agraït}}',
	'thanks-button-thank' => '{{GENDER:$1|Agraeix}}',
	'thanks-button-thanked' => '{{GENDER:$1|Agraït|Agraïda}}',
	'thanks-error-undefined' => "L'agraïment ha fallat. Si us plau torneu a intentar-ho.",
	'thanks-error-invalidrevision' => "L'identificador de revisió no és vàlid.",
	'thanks-error-ratelimited' => "{{GENDER:$1|Heu}} excedit el límit d'agraïments. Si us plau espereu una mica abans de tornar-hi.",
	'thanks-thank-tooltip' => "{{GENDER:$1|Envia}} una notificació d'agraïment a {{GENDER:$2|aquest usuari|aquesta usuària}}.",
	'thanks-confirmation' => 'Voleu {{GENDER:$1|agrair}} $2 per aquesta edició?',
	'thanks-thanked-notice' => '$1 ha rebut el vostre agraïment per {{GENDER:$2|el seu|la seva}} edició.',
	'echo-pref-subscription-edit-thank' => 'Agraeix la meva edició',
	'echo-pref-tooltip-edit-thank' => "Notifica'm quan algú agraeix una edició que he fet.",
	'echo-category-title-edit-thank' => 'Agraïments',
	'notification-thanks-diff-link' => "l'edició",
	'notification-thanks' => '[[User:$1|$1]] us {{GENDER:$1|ha agraït}} $2 a [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|agraeix}} la vostra edició a $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agraeix}} la vostra edició a {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|agraeix}} la teva edició a $2.',
	'notification-link-text-respond-to-user' => "Respondre a l'usuari",
	'log-name-thanks' => "Registre d'agraïments",
	'log-description-thanks' => "A continuació teniu una llista d'usuaris agraïts per part d'altres usuaris.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|ha agraït}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => "$1 el registre d'agraïments",
);

/** Min Dong Chinese (Mìng-dĕ̤ng-ngṳ̄)
 * @author Yejianfei
 */
$messages['cdo'] = array(
	'thanks-desc' => '添加感謝鏈接遘歷史再區分觀點',
	'thanks-thank' => '感謝',
	'thanks-thanked' => '{{GENDER:$1|感謝}}',
	'thanks-button-thank' => '{{GENDER:$1|感謝}}',
	'thanks-button-thanked' => '{{GENDER:$1|感謝}}',
	'thanks-error-undefined' => '感謝行動失敗了。起動再試蜀回。',
	'thanks-error-invalidrevision' => '校訂編號𣍐合法。',
	'thanks-error-ratelimited' => '{{GENDER:$1|汝}}已經超出汝其比率限制。起動等仂固再試蜀試。',
	'thanks-thank-tooltip' => '{{GENDER:$1|發出}}蜀萆感謝通知遘茲蜀萆{{GENDER:$2|用戶}}',
	'thanks-confirmation' => '汝有想{{GENDER:$1|感謝}}$2其茲蜀萆編輯無？',
	'thanks-thanked-notice' => '$1已經接著汝喜歡{{GENDER:$2|伊其}}編辑其通知。',
	'echo-pref-subscription-edit-thank' => '感謝我其修改',
	'echo-pref-tooltip-edit-thank' => '有儂因為我其編輯感謝我辰候通知我。',
	'echo-category-title-edit-thank' => '謝謝',
	'notification-thanks-diff-link' => '汝其編輯',
	'notification-thanks' => '[[User:$1|$1]]{{GENDER:$1|感謝}}汝敆[[:$3]]其$2。',
	'notification-thanks-flyout2' => '[[User:$1|$1]]因為汝敆$2上其編輯{{GENDER:$1|感謝}}汝。',
	'notification-thanks-email-subject' => '$1因為汝敆{{SITENAME}}上其編輯{{GENDER:$1|感謝}}汝',
	'notification-thanks-email-batch-body' => '$1因為汝敆$2上其編輯{{GENDER:$1|感謝}}汝。',
	'notification-link-text-respond-to-user' => '回覆遘用戶',
	'log-name-thanks' => '感謝日誌',
	'log-description-thanks' => '下底是乞其他用戶感謝過其用戶其蜀萆單單。',
	'logentry-thanks-thank' => '$1{{GENDER:$2|感謝}}{{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1感謝日誌',
);

/** Sorani Kurdish (کوردی)
 * @author Calak
 */
$messages['ckb'] = array(
	'thanks-desc' => 'بەستەرەکانی سپاس بە مێژوو و نیشاندانی جیاوزاییەکان زیاد دەکا',
	'thanks-thank' => 'سپاس',
	'thanks-thanked' => '{{GENDER:$1|سپاس کرا}}',
	'thanks-error-undefined' => 'سپاسکردن سەرکەوتوو نەبوو. تکایە دیسان ھەوڵ بدەوە.',
	'thanks-error-invalidrevision' => 'پێداچوونەوەی پێناسە نادروستە.',
	'thanks-error-ratelimited' => 'تۆ زیاتر لە سنووری خێرایی چووی. تکایە ھەندێک ڕاوەستە و دیسان ھەوڵ بدەوە.',
	'thanks-thank-tooltip' => 'ئاگادارییەکی سپاس بۆ ئەم {{GENDER:$2|بەکارھێنەرە}} {{GENDER:$1|بنێرە}}',
	'thanks-confirmation' => 'دڵنیای دەتەوەێ سپاسی $2 {{GENDER:$1|بکەی}} بۆ ئەم دەستکارییە؟', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'بۆ دەستکارییەکم سپاسم بکە',
	'echo-pref-tooltip-edit-thank' => 'کاتێک یەکێک بۆ دەستکارییەکی من کردوومە سپاسم دەکا، ئاگادارم بکە.',
	'echo-category-title-edit-thank' => 'سپاس',
	'notification-thanks-diff-link' => 'دەستکارییەکەت',
	'notification-thanks' => '[[User:$1|$1]] سپاسی {{GENDER:$1|کردی}} بۆ $2 لە [[:$3]]دا.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] سپاسی {{GENDER:$1|کردی}} بۆ دەستکارییەکەت لە $2دا.',
	'notification-thanks-email-subject' => '$1 سپاسی {{GENDER:$1|کردی}} بۆ دەستکارییەکەت لە {{SITENAME}}دا.',
	'notification-thanks-email-batch-body' => '$1 سپاسی {{GENDER:$1|کردی}} بۆ دەستکارییەکەت لە $2دا.',
	'notification-link-text-respond-to-user' => 'وەڵام بۆ بەکارھێنەر',
	'log-name-thanks' => 'لۆگی سپاس',
	'log-description-thanks' => 'ژێرەوە پێرستێکی لەو بەکارھێنەرانەن کە لە لایەن بەکارھێنەرانی ترەوە سپاسیان لێ کراوە.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|سپاس کرد}} لە {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => 'لۆگی سپاس $1',
);

/** Czech (česky)
 * @author Littledogboy
 * @author Mormegil
 */
$messages['cs'] = array(
	'thanks-desc' => 'Přidává do historie a zobrazení rozdílů odkazy pro poděkování',
	'thanks-thank' => 'poděkovat',
	'thanks-thanked' => '{{GENDER:$1|poděkováno}}',
	'thanks-button-thank' => 'Poděkovat', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|Poděkováno}}',
	'thanks-error-undefined' => 'Poděkování se nezdařilo. Zkuste to prosím znovu.',
	'thanks-error-invalidrevision' => 'ID revize je neplatné.',
	'thanks-error-ratelimited' => 'Překročili jste rychlostní limit. Počkejte prosím chvíli a zkuste to znovu.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Poslat}} {{GENDER:$2|tomuto uživateli|této uživatelce}} poděkování',
	'thanks-confirmation' => 'Jste si {{GENDER:$1|jist|jista|jisti}}, že chcete za tuto editaci uživateli $2 poděkovat?', # Fuzzy
	'thanks-thanked-notice' => '{{GENDER:$2|Uživateli|Uživatelce|Uživateli}} $1 bylo sděleno, že se vám {{GENDER:$2|jeho|její|jeho}} editace líbila.', # Fuzzy
	'echo-pref-subscription-edit-thank' => '…mi někdo poděkuje za editaci',
	'echo-pref-tooltip-edit-thank' => 'Upozorněte mě, když mi někdo poděkuje za editaci.',
	'echo-category-title-edit-thank' => 'poděkování',
	'notification-thanks-diff-link' => 'vaši úpravu',
	'notification-thanks' => '[[User:$1|$1]] vám {{GENDER:$1|poděkoval|poděkovala}} za $2 stránky [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] vám {{GENDER:$1|poděkoval|poděkovala}} za editaci stránky $2.',
	'notification-thanks-email-subject' => '$1 vám {{GENDER:$1|poděkoval|poděkovala}} za vaši editaci na {{grammar:6sg|{{SITENAME}}}}',
	'notification-thanks-email-batch-body' => '$1 vám {{GENDER:$1|poděkoval|poděkovala}} za vaši úpravu stránky $2.',
	'notification-link-text-respond-to-user' => 'Odpovědět uživateli',
	'log-name-thanks' => 'Kniha poděkování',
	'log-description-thanks' => 'Níže je seznam uživatelů, kterým ostatní uživatelé poděkovali.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|poděkoval|poděkovala}} {{GENDER:$4|uživateli|uživatelce}} $3',
	'log-show-hide-thanks' => '$1 knihu poděkování',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'thanks-desc' => "Yn ychwanegu cysylltau diolch i'r golygon hanes a diff",
	'thanks-thank' => 'diolch',
	'thanks-thanked' => '{{GENDER:$1|diolchwyd}}',
	'thanks-button-thank' => '{{GENDER:$1|Diolcher}}',
	'thanks-button-thanked' => '{{GENDER:$1|Diolchwyd}}',
	'thanks-error-undefined' => 'Methodd y weithred o ddiolch. Ceisiwch eto.',
	'thanks-error-invalidrevision' => 'Nid yw ID y diwygiad yn ddilys.',
	'thanks-error-ratelimited' => "{{GENDER:$1|Rydych}} wedi gwneud mwy o weithredoedd y funud na'r nifer a ganiateir. Arhoswch ennyd ac yna ceisiwch eto.",
	'thanks-thank-tooltip' => "{{GENDER:$1|Anfon}} hysbyseb o ddiolch i'r {{GENDER:$2|defnyddiwr}} hwn",
	'thanks-confirmation' => 'Ydych chi am {{GENDER:$1|ddiolch}} i $2 am y golygiad hwn?',
	'thanks-thanked-notice' => "Hysbyswyd $1 eich bod yn hoff o'i {{GENDER:$2|adolygiad|hadolygiad|adolygiad}}.",
	'echo-pref-subscription-edit-thank' => 'Fy niolch am fy ngolygiad',
	'echo-pref-tooltip-edit-thank' => "Hysbyser fi pan fo rhywun yn fy niolch am un o'm golygiadau.",
	'echo-category-title-edit-thank' => 'Diolch',
	'notification-thanks-diff-link' => 'eich golygiad',
	'notification-thanks' => '{{GENDER:$1|Rhoddodd}} [[User:$1|$1]] ddiolch i chi am $2 ar [[:$3]].',
	'notification-thanks-flyout2' => '{{GENDER:$1|Rhoddodd}} [[User:$1|$1]] ddiolch i chi am $2.',
	'notification-thanks-email-subject' => '{{GENDER:$1|Rhoddodd}} $1 ddiolch i chi am eich golygiad ar {{SITENAME}}.',
	'notification-thanks-email-batch-body' => '{{GENDER:$1|Rhoddodd}} $1 ddiolch i chi am eich golygiad ar $2.',
	'notification-link-text-respond-to-user' => 'Ateb y defnyddiwr',
	'log-name-thanks' => 'Lòg diolchiadau',
	'log-description-thanks' => 'Dyma restr o ddefnyddwyr y rhoddwyd diolch iddynt gan ddefnyddwyr eraill.',
	'logentry-thanks-thank' => '{{GENDER:$2|Rhoddodd}} $1 ddiolch i {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 y lòg diolchiadau',
);

/** Danish (dansk)
 * @author Christian List
 * @author Palnatoke
 */
$messages['da'] = array(
	'thanks-desc' => 'Tilføjer takke-links til historik og forskelsvisninger',
	'thanks-thank' => 'tak',
	'thanks-thanked' => '{{GENDER:$1|takkede}}',
	'thanks-button-thank' => '{{GENDER:$1|Tak}}',
	'thanks-button-thanked' => '{{GENDER:$1|Takkede}}',
	'thanks-error-undefined' => 'Takke-handlingen mislykkedes. Prøv venligst igen.',
	'thanks-error-invalidrevision' => 'Versions-ID er ikke gyldigt.',
	'thanks-error-ratelimited' => 'Du har overskredet din frekvensgrænse. Vent et stykke tid og prøv igen.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Send}} en takkemeddelelse til denne  {{GENDER:$2| bruger}}',
	'thanks-confirmation' => 'Vil du {{GENDER:$1|takke}} $2 for denne redigering?',
	'echo-pref-subscription-edit-thank' => 'Takker mig for min redigering',
	'echo-pref-tooltip-edit-thank' => 'Giv mig besked, når nogen takker mig for en redigering jeg har lavet.',
	'echo-category-title-edit-thank' => 'Tak!',
	'notification-thanks-diff-link' => 'din redigering',
	'notification-thanks' => '[[User:$1|$1]]  {{GENDER:$1| takkede}} dig for $2 på [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|takkede}} dig for din redigering på $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|takkede}} dig for din redigering på {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|takkede}} dig for din redigering på $2.',
	'notification-link-text-respond-to-user' => 'Svar til bruger',
	'log-name-thanks' => 'Takke-log',
	'log-description-thanks' => 'Nedenfor er en liste over brugere, som er blevet takket af andre brugere.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|takkede}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 takke-log',
);

/** German (Deutsch)
 * @author MF-Warburg
 * @author Metalhead64
 */
$messages['de'] = array(
	'thanks-desc' => 'Ergänzt „Danke schön“-Links zur Versionsgeschichte und zu Versionsunterschieden',
	'thanks-thank' => 'danken',
	'thanks-thanked' => '{{GENDER:$1|bereits bedankt}}',
	'thanks-button-thank' => '{{GENDER:$1|Danken}}',
	'thanks-button-thanked' => '{{GENDER:$1|Bedankt}}',
	'thanks-error-undefined' => '„Danke schön“ fehlgeschlagen. Bitte erneut versuchen.',
	'thanks-error-invalidrevision' => 'Die Versionskennung ist ungültig.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Du}} hast dein Aktionslimit überschritten. Bitte warte einige Zeit und versuche es erneut.',
	'thanks-thank-tooltip' => '{{GENDER:$2|Diesem Benutzer|Dieser Benutzerin}} ein „Danke schön“ {{GENDER:$1|senden}}',
	'thanks-confirmation' => 'Möchtest du $2 für diese Bearbeitung {{GENDER:$1|danken}}?',
	'thanks-thanked-notice' => '$1 wurde benachrichtigt, dass du {{GENDER:$2|seine|ihre|ihre}} Bearbeitung magst.',
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
	'log-show-hide-thanks' => 'Dankeschön-Logbuch $1',
);

/** Greek (Ελληνικά)
 * @author Geraki
 */
$messages['el'] = array(
	'thanks-desc' => 'Προσθήκη συνδέσμων για ευχαριστήρια στις εμφανίσεις ιστορικού και διαφορών',
	'thanks-thank' => 'ευχαριστία',
	'thanks-thanked' => '{{GENDER:$1|δέχθηκε ευχαριστίες}}',
	'thanks-button-thank' => 'Ευχαριστώ', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|δέχθηκε ευχαριστίες}}',
	'thanks-error-undefined' => 'Η ενέργεια ευχαριστίας απέτυχε. Παρακαλούμε δοκιμάστε ξανά.',
	'thanks-error-invalidrevision' => 'Το ID αναθεώρησης δεν είναι έγκυρο.',
	'thanks-error-ratelimited' => 'Έχετε υπερβεί το όριό σας. Παρακαλούμε περιμένετε κάποιο χρονικό διάστημα και προσπαθήστε ξανά.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Έστειλε}} μια ειδοποίηση ευχαριστίας σε {{GENDER:$2|αυτόν τον χρήστη|αυτή την χρήστη}}',
	'thanks-confirmation' => 'Είσαι {{GENDER:$1|σίγουρος|σίγουρη}} ότι θέλεις να ευχαριστήσεις {{GENDER:$2|τον|την}} $2 για αυτή την επεξεργασία;', # Fuzzy
	'thanks-thanked-notice' => '{{GENDER:$2|Ο|Η}} $1 ενημερώθηκε ότι σου άρεσε η επεξεργασία {{GENDER:$2|του|της}}.', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Με ευχαριστεί για την επεξεργασία μου',
	'echo-pref-tooltip-edit-thank' => 'Να ειδοποιούμαι όταν κάποιος με ευχαριστεί για μια επεξεργασία που έκανα.',
	'echo-category-title-edit-thank' => 'Ευχαριστίες',
	'notification-thanks-diff-link' => 'την επεξεργασία σου',
	'notification-thanks' => '{{GENDER:$1|Ο|Η}} [[User:$1|$1]] σε ευχαρίστησε για $2 στο [[:$3]].',
	'notification-thanks-flyout2' => '{{GENDER:$1|Ο|Η}} [[User:$1|$1]] σε ευχαρίστησε για την επεξεργασία σου στη $2.',
	'notification-thanks-email-subject' => '{{GENDER:$1|Ο|Η}} $1 σε ευχαρίστησε για την επεξεργασία σου στο {{SITENAME}}.',
	'notification-thanks-email-batch-body' => '{{GENDER:$1|Ο|Η}} $1 σε ευχαρίστησε για την επεξεργασία σου στο $2.',
	'notification-link-text-respond-to-user' => 'Απάντηση στο χρήστη',
	'log-name-thanks' => 'Καταγραφή ευχαριστηρίων',
	'log-description-thanks' => 'Παρακάτω είναι μια λίστα των χρηστών που ευχαριστήθηκαν από άλλους χρήστες.',
	'logentry-thanks-thank' => '{{GENDER:$2|Ο|Η}} $1 ευχαρίστησε {{GENDER:$4|τον|την}} $3',
	'log-show-hide-thanks' => '$1 καταγραφής ευχαριστηρίων',
);

/** Esperanto (Esperanto)
 * @author KuboF
 */
$messages['eo'] = array(
	'thanks-desc' => 'Aldoni danko-ligilon al historio kaj diferenco-montro.',
	'thanks-thank' => 'danki',
	'thanks-thanked' => '{{GENDER:$1|dankita}}',
	'thanks-button-thank' => 'Danki', # Fuzzy
	'thanks-error-invalidrevision' => 'Identigilo de revizio estas nevalida.',
	'thanks-confirmation' => 'Ĉu vi certas ke vi volas  {{GENDER:$1|danki}} al $2 pro tiu ĉi redakto?', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Danki al mi pro miaj redaktoj',
	'echo-pref-tooltip-edit-thank' => 'Sciigu min kiam iu dankas al mi pro mia redakto.',
	'echo-category-title-edit-thank' => 'Dankoj',
	'notification-thanks-diff-link' => 'via redakto',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|dankis}} al vi pro $2 en [[:$3]].',
	'notification-link-text-respond-to-user' => 'Respondi al uzanto',
	'log-name-thanks' => 'Protokolo de dankoj',
	'log-description-thanks' => 'Sube estas listo de uzantoj al kiuj aliaj uzantoj dankis.',
	'log-show-hide-thanks' => '$1 protokolon de dankoj',
);

/** Spanish (español)
 * @author Alan
 * @author Fitoschido
 * @author Hahc21
 * @author Julian leonardo paez
 * @author PoLuX124
 */
$messages['es'] = array(
	'thanks-desc' => 'Añade enlaces para agradecer desde el historial y las diferencias entre ediciones',
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => '{{GENDER:$1|agradeció}}',
	'thanks-button-thank' => '{{GENDER:$1|Gracias}}',
	'thanks-button-thanked' => 'agradecid{{GENDER:$1|o|a}}',
	'thanks-error-undefined' => 'La acción de agradecimiento falló. Inténtalo de nuevo.',
	'thanks-error-invalidrevision' => 'El id. de revisión no es válido.',
	'thanks-error-ratelimited' => 'Has excedido tu límite. Por favor, espera un tiempo e intenta de nuevo.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Enviar}} una notificación de agradecimiento a {{GENDER:$2|este|esta|este}} {{GENDER:$2|usuario|usuaria|usuario}}',
	'thanks-confirmation' => '¿Quieres agradecer a $2 por esta edición?', # Fuzzy
	'thanks-thanked-notice' => '$1 fue notificad{{GENDER:$2|o|a|o}} de que te ha gustado su edición.',
	'echo-pref-subscription-edit-thank' => 'Agradecerme por mi edición',
	'echo-pref-tooltip-edit-thank' => 'Notificarme cuando alguien me agradezca por una edición que haya realizado.',
	'echo-category-title-edit-thank' => 'Gracias',
	'notification-thanks-diff-link' => 'tu edición',
	'notification-thanks' => '[[User:$1|$1]] te ha agradecido por $2 en [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] te ha agradecido por tu edición en $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeció}} tu edición en {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 te ha agradecido por tu edición en $2.',
	'notification-link-text-respond-to-user' => 'Responder al usuario',
	'log-name-thanks' => 'Registro de agradecimientos',
	'log-description-thanks' => 'A continuación, una lista de usuarios que han sido agradecidos por otros usuarios.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|agradeció}} a {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 registro de agradecimientos',
);

/** Estonian (eesti)
 * @author Kyng
 * @author Pikne
 */
$messages['et'] = array(
	'thanks-desc' => 'Lisab ajalugudesse ja erinevuse vaadete juurde tänulingid.',
	'thanks-thank' => 'täna',
	'thanks-thanked' => '{{GENDER:$1|tänatud}}',
	'thanks-button-thank' => '{{GENDER:$1|Täna}}',
	'thanks-button-thanked' => '{{GENDER:$1|Tänatud}}',
	'thanks-error-undefined' => 'Tänamine ebaõnnestus. Palun proovi uuesti.',
	'thanks-error-invalidrevision' => 'Redaktsiooni identifikaator ei sobi.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Oled}} ületanud piirangumäära. Palun oota natuke ja proovi uuesti.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Saada}} sellele {{GENDER:$2|kasutajale}} tänuteavitus',
	'thanks-confirmation' => 'Kas tahad kasutajat $2 selle muudatuse eest {{GENDER:$1|tänada}}?',
	'thanks-thanked-notice' => 'Kasutajale $1 on edasi öeldud, et sulle meeldis {{GENDER:$2|tema}} muudatus.',
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
	'log-show-hide-thanks' => '$1 tänulogi',
);

/** Persian (فارسی)
 * @author A.R.Rostamzade
 * @author Dalba
 * @author Ebraminio
 * @author Ladsgroup
 * @author Omidh
 * @author Reza1615
 * @author ZxxZxxZ
 * @author درفش کاویانی
 */
$messages['fa'] = array(
	'thanks-desc' => 'گزینهٔ «تشکر» را به تاریخچه و نمایش تفاوت‌ها می‌افزاید.',
	'thanks-thank' => 'تشکر',
	'thanks-thanked' => '{{GENDER:$1|تشکر شد}}',
	'thanks-button-thank' => '{{GENDER:$1|تشکر}}',
	'thanks-button-thanked' => '{{GENDER:$1|تشکر شد}}',
	'thanks-error-undefined' => 'عمل تشکر ناموفق بود. لطفاً دوباره امتحان کنید.',
	'thanks-error-invalidrevision' => 'شناسهٔ نسخه معتبر نیست.',
	'thanks-error-ratelimited' => '{{GENDER:$1|شما}} از محدودهٔ سرعت مجاز فراتر رفته‌اید. لطفاً کمی صبر کنید و دوباره امتحان کنید.',
	'thanks-thank-tooltip' => '{{GENDER:$1|فرستادن}} پیام تشکر به این {{GENDER:$2|کاربر}}',
	'thanks-confirmation' => 'آیا می‌خواهید برای این ویرایش از $2 {{GENDER:$1|تشکر کنید}}؟',
	'thanks-thanked-notice' => 'به $1 اطلاع داده شد که شما از ویرایش {{GENDER:$2|او}} تشکر کرده‌اید.',
	'echo-pref-subscription-edit-thank' => 'برای ویرایش‌هایم از من سپاسگزاری کن',
	'echo-pref-tooltip-edit-thank' => 'وقتی کسی از ویرایش‌های من تشکر می‌کند مرا آگاه کن.',
	'echo-category-title-edit-thank' => 'تشکرها',
	'notification-thanks-diff-link' => 'ویرایشتان',
	'notification-thanks' => '[[User:$1|$1]] از شما بابت $2 در [[:$3]] {{GENDER:$1|تشکر کرد}}.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] از ویرایش شما در $2 {{GENDER:$1|تشکر کرد}}.',
	'notification-thanks-email-subject' => '$1 از شما بابت ویرایشتان در {{SITENAME}} {{GENDER:$1|تشکر کرد}}',
	'notification-thanks-email-batch-body' => '$1 از شما بابت ویرایشتان در $2 {{GENDER:$1|تشکر کرد}}.',
	'notification-link-text-respond-to-user' => 'پاسخ به کاربر',
	'log-name-thanks' => 'سیاههٔ تشکرها',
	'log-description-thanks' => 'این فهرستی است از کاربرانی که کاربران دیگر از آن‌ها تشکر کرده‌اند.',
	'logentry-thanks-thank' => '$1 از {{GENDER:$4|$3}} {{GENDER:$2|تشکر کرد}}',
	'log-show-hide-thanks' => '$1 سیاههٔ تشکرها',
);

/** Finnish (suomi)
 * @author Crt
 * @author Pxos
 * @author Samoasambia
 * @author Silvonen
 */
$messages['fi'] = array(
	'thanks-desc' => 'Lisää kiitä-linkit muokkaushistoriaan ja versioiden erot näyttävälle sivulle',
	'thanks-thank' => 'kiitä',
	'thanks-thanked' => '{{GENDER:$1|kiitetty}}',
	'thanks-button-thank' => '{{GENDER:$1|Kiitä}}',
	'thanks-button-thanked' => '{{GENDER:$1|Kiitetty}}',
	'thanks-error-undefined' => 'Kiittäminen epäonnistui. Yritä uudelleen.',
	'thanks-error-invalidrevision' => 'Version tunniste ei kelpaa.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Olet}} ylittänyt toimintorajasi. Odota hetki ja yritä uudelleen.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Lähetä}} kiitoksesi tälle {{GENDER:$2|käyttäjälle}}',
	'thanks-confirmation' => 'Haluatko {{GENDER:$1|kiittää}} käyttäjää $2 tästä muokkauksesta?',
	'thanks-thanked-notice' => 'Käyttäjälle $1 ilmoitettiin, että tykkäsit {{GENDER:$2|hänen}} muokkauksestaan.',
	'echo-pref-subscription-edit-thank' => 'Minulle annetut kiitokset tekemistäni muokkauksista',
	'echo-pref-tooltip-edit-thank' => 'Ilmoita minulle, kun joku kiittää minua tekemästäni muokkauksesta.',
	'echo-category-title-edit-thank' => 'Kiitokset',
	'notification-thanks-diff-link' => 'muokkauksestasi',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|kiitti}} sinua $2 sivulla [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|kiitti}} sinua muokkauksestasi sivulla $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|kiitti}} sinua muokkauksestasi sivustolla {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|kiitti}} sinua muokkauksestasi sivulla $2.',
	'notification-link-text-respond-to-user' => 'Vastaa käyttäjälle',
	'log-name-thanks' => 'Kiitosloki',
	'log-description-thanks' => 'Alla on luettelo niistä käyttäjistä, jotka ovat saaneet kiitoksia toisilta käyttäjiltä.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|kiitti}} käyttäjää {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 kiitosloki',
);

/** French (français)
 * @author Arkanosis
 * @author Automatik
 * @author Boniface
 * @author Gomoko
 * @author Jean-Frédéric
 * @author Ltrlg
 * @author Metroitendo
 */
$messages['fr'] = array(
	'thanks-desc' => 'Ajoute des liens de remerciement aux vues historique et de différence',
	'thanks-thank' => 'remercier',
	'thanks-thanked' => '{{GENDER:$1|remercié|remerciée}}',
	'thanks-button-thank' => '{{GENDER:$1|Merci}}',
	'thanks-button-thanked' => '{{GENDER:$1|Remercié}}',
	'thanks-error-undefined' => 'Échec de l’action de remerciement. Veuillez réessayer.',
	'thanks-error-invalidrevision' => 'L’ID de révision n’est pas valide.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Vous}} avez dépassé votre limite de débit. Veuillez attendre un peu et réessayer.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Envoyer}} une notification de remerciement à {{GENDER:$2|cet utilisateur|cette utilisatrice}}',
	'thanks-confirmation' => 'Voulez-vous {{GENDER:$1|remercier}} $2 pour cette modification ?',
	'thanks-thanked-notice' => '$1 a été notifié que vous avez aimé {{GENDER:$2|sa}} modification.',
	'echo-pref-subscription-edit-thank' => 'Me remercier pour ma modification',
	'echo-pref-tooltip-edit-thank' => 'Me prévenir quand quelqu’un me remercie pour une modification que j’ai faite.',
	'echo-category-title-edit-thank' => 'Merci',
	'notification-thanks-diff-link' => 'votre modification',
	'notification-thanks' => '[[User:$1|$1]] vous {{GENDER:$1|a remercié}} pour $2 sur [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] vous {{GENDER:$1|a remercié}} pour votre modification sur $2.',
	'notification-thanks-email-subject' => '$1 vous {{GENDER:$1|a remercié}} pour votre modification sur {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 vous {{GENDER:$1|a remercié}} pour votre modification sur $2.',
	'notification-link-text-respond-to-user' => 'Répondre à l’utilisateur',
	'log-name-thanks' => 'Journal des remerciements',
	'log-description-thanks' => "Ci-dessous se trouve une liste d'utilisateurs qui ont été remerciés par d'autres.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|a remercié}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 le journal des remerciements',
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
	'thanks-thank-tooltip' => '{{Gender:$1|Schüür}} {{Gender:$2|didiar brüker}} en "soonk".',
	'thanks-confirmation' => 'Wel dü $2 würelk {{GENDER:$1|en soonk schüür}} för didiar bidrach?', # Fuzzy
	'echo-pref-subscription-edit-thank' => '"Soonk" saien för man bidrach',
	'echo-pref-tooltip-edit-thank' => 'Du mi bööd, wan mi hoker en "soonk" schüürt för man bidrach.',
	'echo-category-title-edit-thank' => 'Föl soonk',
	'notification-thanks-diff-link' => 'dan bidrach',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|soonket}} di för $2 üüb [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|soonket}} di för dan bidrach üüb $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|soonket}} di för dan bidrach üüb {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|soonket}} di för dan bidrach üüb $2.',
	'notification-link-text-respond-to-user' => 'Di brüker swaare',
	'log-name-thanks' => 'Soonk-logbuk',
	'log-description-thanks' => 'Oner stäänt en list faan brükern, diar faan ööder brükern soonk saad wurden as.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|besoonket}} ham bi {{Gender:$4|$3}}',
	'log-show-hide-thanks' => 'Föl-soonk-logbuk $1',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'thanks-desc' => 'Engade ligazóns de agradecemento no historial e na vista de diferenzas',
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => '{{GENDER:$1|agradecido|agradecida}}',
	'thanks-button-thank' => '{{GENDER:$1|Agradecer}}',
	'thanks-button-thanked' => '{{GENDER:$1|Agradecido|Agradecida}}',
	'thanks-error-undefined' => 'Houbo un erro ao realizar o agradecemento. Inténteo de novo.',
	'thanks-error-invalidrevision' => 'O ID da revisión non é válido.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Superou}} o seu límite de velocidade. Agarde uns minutos e inténteo de novo.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Envía}} unha notificación de agradecemento a {{GENDER:$2|este usuario|esta usuaria}}',
	'thanks-confirmation' => 'Quere {{GENDER:$1|agradecer}} a $2 a súa edición?',
	'thanks-thanked-notice' => '$1 recibiu un aviso de que a vostede lle gustou {{GENDER:$2|a súa}} edición.',
	'echo-pref-subscription-edit-thank' => 'Me agradeza unha edición feita por min',
	'echo-pref-tooltip-edit-thank' => 'Notificádeme cando alguén me agradeza unha edición feita por min.',
	'echo-category-title-edit-thank' => 'Agradecemento',
	'notification-thanks-diff-link' => 'a súa edición',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|agradeceu}} $2 en "[[:$3]]".',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|agradeceu}} a súa edición en "$2".',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeceu}} a súa edición en {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|agradeceu}} a súa edición en "$2".',
	'notification-link-text-respond-to-user' => 'Responder ao usuario',
	'log-name-thanks' => 'Rexistro de agradecementos',
	'log-description-thanks' => 'A continuación hai unha lista dos usuarios que recibiron agradecementos doutros usuarios.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|deu as grazas a}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 o rexistro de agradecementos',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Guycn1
 * @author Rotemliss
 */
$messages['he'] = array(
	'thanks-desc' => 'הוספת קישורי "תודה" לדפי היסטוריה והשוואה',
	'thanks-thank' => 'תודה',
	'thanks-thanked' => '{{GENDER:$1|הודֵיתָ|הודֵיתְ}}',
	'thanks-button-thank' => '{{GENDER:$1|תודה}}',
	'thanks-button-thanked' => '{{GENDER:$1|הודֵיתָ|הודֵיתְ}}',
	'thanks-error-undefined' => 'פעולת תודה נכשלה. נא לנסות שוב.',
	'thanks-error-invalidrevision' => 'מזהה גרסה אינו תקין.',
	'thanks-error-ratelimited' => '{{GENDER:$1|עברת}} את מגבלת הקצב שלך. נא להמתין ולנסות שוב.',
	'thanks-thank-tooltip' => '{{GENDER:$1|שלח|שלחי}} הודעת תודה {{GENDER:$2|למשתמש הזה|למשתמשת הזו}}',
	'thanks-confirmation' => 'האם {{GENDER:$1|אתה|את}} רוצה להודות ל{{GRAMMAR:תחילית|$2}} על העריכה הזאת?',
	'thanks-thanked-notice' => 'ל{{GRAMMAR:תחילית|$1}} נאמר שאהבת את העריכה {{GENDER:$2|שלו|שלה|שלו}}.',
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
	'logentry-thanks-thank' => '$1 {{GENDER:$2|הודה|הודתה}} ל{{GRAMMAR:תחילית|{{GENDER:$4|$3}}}}',
	'log-show-hide-thanks' => '$1 יומן תודות',
);

/** Hindi (हिन्दी)
 * @author Shubhamkanodia
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'thanks-desc' => 'इतिहास और बदलाव दृश्य में धन्यवाद कड़ियाँ जोड़ें।',
	'thanks-thank' => 'धन्यवाद दें',
	'thanks-thanked' => '{{GENDER:$1|धन्यवाद दिया}}',
	'thanks-button-thank' => 'धन्यवाद', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|धन्यवाद दिया}}',
	'thanks-error-undefined' => 'धन्यवाद देने का कार्य विफल रहा। कृपया पुनः प्रयास करें।',
	'thanks-error-invalidrevision' => 'अवतरण आई॰डी मान्य नहीं है।',
	'thanks-error-ratelimited' => 'आप अपनी दर सीमा पार कर चुके हैं। कृपया थोड़ी देर बाद पुनः प्रयास करें।',
	'thanks-thank-tooltip' => 'इस {{GENDER:$2|सदस्य}} को धन्यवाद अधिसूचना {{GENDER:$1|भेजें}}।',
	'thanks-confirmation' => 'क्या आप इस सम्पादन के लिए $2 को {{GENDER:$1|धन्यवाद}} देना चाहते हैं?', # Fuzzy
	'thanks-thanked-notice' => '$1 को बताया गया कि आपको {{GENDER:$2|उनका}} सम्पादन अच्छा लगा।', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'मेरे सम्पादन के लिए मुझे धन्यवाद दे।',
	'echo-pref-tooltip-edit-thank' => 'जब कोई मेरे सम्पादन के लिये मुझे धन्यवाद कहे, मुझे सूचित करें।',
	'echo-category-title-edit-thank' => 'धन्यवाद',
	'notification-thanks-diff-link' => 'आपके सम्पादन',
	'notification-thanks' => '[[User:$1|$1]] ने आपको $2 के लिये [[:$3]] पर {{GENDER:$1|धन्यवाद कहा है}}।',
	'notification-thanks-flyout2' => '[[User:$1|$1]] ने आपको $2 पर आपके सम्पादन के लिए{{GENDER:$1|धन्यवाद कहा है}}।',
	'notification-thanks-email-subject' => '$1 ने आपको {{SITENAME}} पर आपके सम्पादन के लिये आपको {{GENDER:$1|धन्यवाद कहा है}}।',
	'notification-thanks-email-batch-body' => '$1 ने $2 पर आपके सम्पादन के लिये आपको {{GENDER:$1|धन्यवाद कहा है}}।',
	'notification-link-text-respond-to-user' => 'सदस्य को जवाब दें',
	'log-name-thanks' => 'धन्यवाद लॉग',
	'log-description-thanks' => 'अन्य सदस्यों द्वारा धन्यवाद पाने वाले सदस्यों की सूची निम्न है।',
	'logentry-thanks-thank' => '$1 ने {{GENDER:$4|$3}} को {{GENDER:$2|धन्यवाद कहा है}}',
	'log-show-hide-thanks' => '$1 धन्यवाद लॉग',
);

/** Croatian (hrvatski)
 * @author Roberta F.
 */
$messages['hr'] = array(
	'thanks-thank' => 'zahvala',
	'thanks-thanked' => '{{GENDER:$1|zahvala je objavljena}}',
	'thanks-button-thanked' => '{{GENDER:$1|Zahvala je objavljena|Zahvala je objavljena}}',
	'echo-category-title-edit-thank' => 'Hvala',
	'notification-thanks-diff-link' => 'vaše uređivanje',
	'notification-thanks' => '[[User:$1|$1]] vam je {{GENDER:$1|zahvalio|zahvalila}} za $2 na stranici «[[:$3]]».',
	'notification-thanks-flyout2' => '[[User:$1|$1]] Vam je {{GENDER:$1|zahvalio|zahvalila}} za Vašu izmjenu na stranici «$2».',
	'notification-thanks-email-subject' => '$1 Vam {{GENDER:$1|zahvaljuje|zahvaljuje}} za uređivanje na {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 Vam je {{GENDER:$1|zahvalio|zahvalila}} za uređivanje na »$2«.',
	'notification-link-text-respond-to-user' => 'Odgovor suradniku',
	'log-name-thanks' => 'Evidencija zahvala',
	'log-description-thanks' => 'Slijedi popis suradnika koji su drugim suradnicima objavili zahvalu.',
	'logentry-thanks-thank' => '$1 je {{GENDER:$2|zahvalio|zahvalila}} {{GENDER:$4|suradniku|suradnici}} {{GENDER:$4|$3}}',
);

/** Hungarian (magyar)
 * @author Samat
 * @author Southparkfan
 * @author Teemeah
 * @author William915
 */
$messages['hu'] = array(
	'thanks-desc' => 'Köszönőlinket helyez el a laptörténetben és a diffváltozatokban',
	'thanks-thank' => 'köszönet',
	'thanks-thanked' => '{{GENDER:$1|Megköszönve}}',
	'thanks-error-undefined' => 'A megköszönés sikertelen. Kérlek, próbáld meg újra!',
	'thanks-error-invalidrevision' => 'A lapváltozat azonosítója érvénytelen.',
	'thanks-error-ratelimited' => 'Túllépted a meghatározott limitet. Kérlek várj egy kicsit és próbáld újra.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Küldj}} köszönetet ennek a {{GENDER:$2|szerkesztőnek}}',
	'thanks-confirmation' => 'Biztos, hogy {{GENDER:$1|meg akarod köszönni}} $2 szerkesztését?',
	'thanks-thanked-notice' => '$1 was notified that you liked {{GENDER:$2|his|her|their}} edit.',
	'echo-pref-subscription-edit-thank' => 'Megköszöni a szerkesztésem',
	'echo-pref-tooltip-edit-thank' => 'Értesítést kérek, ha valaki megköszöni egy szerkesztésemet.',
	'echo-category-title-edit-thank' => 'köszönet',
	'notification-thanks-diff-link' => 'a szerkesztésed',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|megköszönte}} a $2 szerkesztésed a(z) [[:$3]] szócikkben.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|megköszönte}} a szerkesztésed a(z) $2 szócikkben.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|megköszönte}} a(z) {{SITENAME}} oldalon tett szerkesztésedet.',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|megköszönte}} a(z) $2 lapon tett szerkesztésedet.',
	'notification-link-text-respond-to-user' => 'Válaszolok a szerkesztőnek.',
	'log-name-thanks' => 'Köszönési napló',
	'log-description-thanks' => 'Az alábbi szerkesztők köszönetet mondtak egy másik szerkesztőnek.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|köszönetet mondott}} {{GENDER:$4|$3}} szerkesztőnek.',
	'log-show-hide-thanks' => 'Köszönetnapló $1',
);

/** Indonesian (Bahasa Indonesia)
 * @author Iwan Novirion
 * @author William Surya Permana
 */
$messages['id'] = array(
	'thanks-desc' => 'Menambahkan pranala terima kasih pada tampilan riwayat suntingan dan perbedaan revisi',
	'thanks-thank' => 'berterima kasih',
	'thanks-thanked' => '{{GENDER:$1|sudah berterima kasih}}',
	'thanks-button-thank' => '{{GENDER:$1|Berterima kasih}}',
	'thanks-button-thanked' => '{{GENDER:$1|Sudah berterima kasih}}',
	'thanks-error-undefined' => 'Tindakan berterima kasih gagal. Silakan coba lagi.',
	'thanks-error-invalidrevision' => 'ID revisi tidak sah.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Anda}} telah melampaui batas Anda. Silakan tunggu beberapa saat dan coba lagi.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Kirim}} sebuah pemberitahuan terima kasih kepada {{GENDER:$2|pengguna}} ini',
	'thanks-confirmation' => 'Apakah Anda ingin {{GENDER:$1|berterima kasih}} kepada $2 atas suntingan ini?',
	'thanks-thanked-notice' => '$1 telah diberitahu bahwa Anda menyukai {{GENDER:$2|suntingannya|suntingannya|suntingan mereka}}.',
	'echo-pref-subscription-edit-thank' => 'Berterima kasih kepada saya atas suntingan saya',
	'echo-pref-tooltip-edit-thank' => 'Beritahu saya saat seseorang berterima kasih kepada saya atas suntingan yang saya buat.',
	'echo-category-title-edit-thank' => 'Terima kasih',
	'notification-thanks-diff-link' => 'suntingan Anda',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|berterima kasih}} kepada Anda atas $2 di [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|berterima kasih}} kepada Anda atas suntingan Anda di $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|berterima kasih}} kepada Anda atas suntingan Anda di {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|berterima kasih}} kepada Anda atas suntingan Anda di $2.',
	'notification-link-text-respond-to-user' => 'Tanggapi pengguna',
	'log-name-thanks' => 'Log terima kasih',
	'log-description-thanks' => 'Di bawah ini adalah daftar pengguna yang menerima terima kasih dari pengguna lain.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|berterima kasih}} kepada {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 log terima kasih',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'thanks-desc' => 'Agnayon kadagiti silpo ti panagyaman kadagiti panagkita ti pakasaritaan ken sabali',
	'thanks-thank' => 'yamanan',
	'thanks-thanked' => '{{GENDER:$1|nayamanan}}',
	'thanks-button-thank' => 'Yamanan', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|Nayamanan}}',
	'thanks-error-undefined' => 'Napaay ti tignay a panagyaman. Pangngaasi a padasen manen.',
	'thanks-error-invalidrevision' => 'Saan nga umiso to ID ti panagbaliw.',
	'thanks-error-ratelimited' => 'Nalabesamon ti patingga ti gatadmo. Pangngaasi nga agurayka bassit ken padasem manen.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Agipatulod}} ti pakaammo a panagyaman iti daytoy nga {{GENDER:$2|agar-aramat}}',
	'thanks-confirmation' => 'Siguradoka kadi a kayatmo ti {{GENDER:$1|agyaman}} kenni $2 para iti daytoy nga inurnos?', # Fuzzy
	'thanks-thanked-notice' => 'Naibaga idi kenni $1 a kinayatmo {{GENDER:$2|ti|dagiti}} inurnosda.', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Pagyamanennak para iti inurnosko',
	'echo-pref-tooltip-edit-thank' => 'Pakaammuannak no adda agyaman kaniak para iti maysa nga inaramidko nga inurnos.',
	'echo-category-title-edit-thank' => 'Agyamanak',
	'notification-thanks-diff-link' => 'ti inurnosmo',
	'notification-thanks' => 'Ni [[User:$1|$1]] ket {{GENDER:$1|agyaman}} kenka para iti $2 iti [[:$3]].',
	'notification-thanks-flyout2' => 'Ni [[User:$1|$1]] ket {{GENDER:$1|nagyaman}} kenka para iti inurnosmo iti $2.',
	'notification-thanks-email-subject' => 'Ni $1 ket {{GENDER:$1|agyaman}} kenka para it inurnosmo idiay {{SITENAME}}',
	'notification-thanks-email-batch-body' => 'Ni $1 ket {{GENDER:$1|agyaman}} kenka para iti inurnosmo idiay $2.',
	'notification-link-text-respond-to-user' => 'Sumungbat iti agar-aramat',
	'log-name-thanks' => 'Listaan kadagiti panagyaman',
	'log-description-thanks' => 'Dita baba ket listaan dagiti agar-aramat a nayamanan babaen dagiti dadduma nga agar-aramat.',
	'logentry-thanks-thank' => 'Ni $1 ket {{GENDER:$2|nagyaman}} kenni {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 ti listaan dagiti panagyaman',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'thanks-desc' => 'Aggiunge un collegamento per ringraziare nella cronologia e nelle differenze fra versioni',
	'thanks-thank' => 'ringrazia',
	'thanks-thanked' => '{{GENDER:$1|ringraziato|ringraziata|ringraziato/a}}',
	'thanks-button-thank' => '{{GENDER:$1|Ringrazia}}',
	'thanks-button-thanked' => '{{GENDER:$1|Ringraziato|Ringraziata|Ringraziato/a}}',
	'thanks-error-undefined' => 'Errore durante ringraziamento. Riprova ancora.',
	'thanks-error-invalidrevision' => 'ID versione non è valido.',
	'thanks-error-ratelimited' => "Hai superato il limite massimo di ringraziamenti. Aspetta un po' di tempo e riprova.", # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Invia}} una notifica di ringraziamento a {{GENDER:$2|questo|questa}} utente',
	'thanks-confirmation' => 'Vuoi {{GENDER:$1|ringraziare}} $2 per questa modifica?',
	'thanks-thanked-notice' => 'È stato notificato a $1 che ti piace {{GENDER:$2|la sua}} modifica.',
	'echo-pref-subscription-edit-thank' => 'Mi ringrazia per una mia modifica',
	'echo-pref-tooltip-edit-thank' => 'Avvisami quando qualcuno mi ringrazia per una modifica che ho fatto.',
	'echo-category-title-edit-thank' => 'Ringraziamenti',
	'notification-thanks-diff-link' => 'la tua modifica',
	'notification-thanks' => '[[User:$1|$1]] ti {{GENDER:$1|ha ringraziato}} per $2 su [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] ti {{GENDER:$1|ha ringraziato}} per la tua modifica su $2.',
	'notification-thanks-email-subject' => '$1 ti {{GENDER:$1|ha ringraziato}} per la tua modifica su {{SITENAME}}.',
	'notification-thanks-email-batch-body' => '$1 ti {{GENDER:$1|ha ringraziato}} per la tua modifica su $2.',
	'notification-link-text-respond-to-user' => "Rispondi all'utente",
	'log-name-thanks' => 'Ringraziamenti',
	'log-description-thanks' => 'Di seguito è riportato un elenco di utenti ringraziati da altri utenti.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|ha ringraziato}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 registro dei ringraziamenti',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Penn Station
 * @author Shirayuki
 */
$messages['ja'] = array(
	'thanks-desc' => '履歴ページおよび差分ページに、感謝を示すリンクを追加する',
	'thanks-thank' => '感謝',
	'thanks-thanked' => '{{GENDER:$1|感謝を示しました}}',
	'thanks-button-thank' => '{{GENDER:$1|感謝}}',
	'thanks-button-thanked' => '{{GENDER:$1|感謝を示しました}}',
	'thanks-error-undefined' => '感謝の操作に失敗しました。もう一度やり直してください。',
	'thanks-error-invalidrevision' => '版 ID が無効です。',
	'thanks-error-ratelimited' => '{{GENDER:$1|}}速度制限を超えました。しばらくしてからもう一度やり直してください。',
	'thanks-thank-tooltip' => 'この{{GENDER:$2|利用者}}に感謝の通知を{{GENDER:$1|送信する}}',
	'thanks-confirmation' => '$2 のこの編集に対して{{GENDER:$1|感謝を示しますか}}?',
	'thanks-thanked-notice' => 'あなたが $1 の編集に感謝を示したことを{{GENDER:$2|本人}}に通知しました。',
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
	'log-show-hide-thanks' => '感謝記録を$1',
);

/** Kazakh (Cyrillic script) (қазақша (кирил)‎)
 * @author Arystanbek
 */
$messages['kk-cyrl'] = array(
	'thanks-desc' => 'Тарих және нұсқалар айырмасында <<рахмет>> сілтемелерін қосу',
	'thanks-thank' => 'рахмет',
	'thanks-thanked' => '{{GENDER:$1|рахмет айтты}}',
	'thanks-button-thank' => '{{GENDER:$1|Рахметіңізді білдіру}}',
	'thanks-button-thanked' => '{{GENDER:$1|Рахмет білдірілді}}',
	'thanks-error-undefined' => 'Рахмет айту әрекеті орындалмады. Тағы қайталап көріңіз.',
	'thanks-error-invalidrevision' => 'ID нұсқа жарамсыз.',
	'thanks-error-ratelimited' => 'Сіз шекті жылдамдықтан асырдыңыз. Біраз уақыт күте тұрып қайталап көріңіз.', # Fuzzy
	'thanks-thank-tooltip' => 'Бұл {{GENDER:$2|қатысушыға}} рахмет айту хабарландыруын {{GENDER:$1|жіберу}}',
	'thanks-confirmation' => 'Бұл өңдеме үшін $2 деген қатысушыға {{GENDER:$1|рахметіңізді}} білдіргіңіз келе ме?',
	'echo-pref-subscription-edit-thank' => 'Менің өңдемем үшін маған рахмет айту',
	'echo-pref-tooltip-edit-thank' => 'Мен жасаған өңдеме үшін кейбіреу рахмет айтқанда маған хабарландыр.',
	'echo-category-title-edit-thank' => 'Рахмет',
	'notification-thanks-diff-link' => 'сіздің өңдемеңізге',
	'notification-thanks' => '[[User:$1|$1]] [[:$3]] бетіндегі $2  {{GENDER:$1|рахметін}} білдірді.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] $2 бетіндегі өңдемеңізге {{GENDER:$1|рахметін}} білдірді.',
	'notification-thanks-email-subject' => '$1 {{SITENAME}} сайтындағы өңдемеңіз үшін сізге {{GENDER:$1|рахметін}} білдірді.',
	'notification-thanks-email-batch-body' => '$1 $2 бетіндегі өңдемеңіз үшін сізге {{GENDER:$1|рахметін}} білдірді.',
	'notification-link-text-respond-to-user' => 'Қатысушыға жауап қайтару',
	'log-name-thanks' => 'Рахмет айту журналы',
	'log-description-thanks' => 'Төменде басқа қатысушылардан рахмет айтылған қатысушылар тізімі берілген.',
	'logentry-thanks-thank' => '$1 {{GENDER:$4|$3}} деген қатысушыға {{GENDER:$2|рахметін}} білдірді.',
	'log-show-hide-thanks' => 'рахметін білдіру журналы $1',
);

/** Kannada (ಕನ್ನಡ)
 * @author Pavanaja
 */
$messages['kn'] = array(
	'thanks-thank' => 'ಧನ್ಯವಾದ ಹೇಳಿ',
	'thanks-error-undefined' => 'ಧನ್ಯವಾದ ಪ್ರಕ್ರಿಯ ನಡೆಯಲಿಲ್ಲ. ಪುನಃ ಪ್ರಯತ್ನಿಸಿ',
	'echo-category-title-edit-thank' => 'ಧನ್ಯವಾದಗಳು',
	'notification-thanks-diff-link' => 'ನಿಮ್ಮ ಸಂಪಾದನೆ',
);

/** Korean (한국어)
 * @author Hym411
 * @author 관인생략
 * @author 아라
 */
$messages['ko'] = array(
	'thanks-desc' => '역사와 차이 보기에 감사 링크를 추가합니다',
	'thanks-thank' => '감사',
	'thanks-thanked' => '{{GENDER:$1|감사합니다}}',
	'thanks-button-thank' => '감사', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|감사를 표합니다}}',
	'thanks-error-undefined' => '감사 표시 작업을 실패했습니다. 다시 시도하세요.',
	'thanks-error-invalidrevision' => '판 ID가 올바르지 않습니다.',
	'thanks-error-ratelimited' => '속도 제한을 초과했습니다. 잠시 기다리고 나서 다시 시도하세요.',
	'thanks-thank-tooltip' => '이 {{GENDER:$2|사용자}}에게 감사의 알림을 {{GENDER:$1|보냅니다}}',
	'thanks-confirmation' => '이 편집에 대해 $2님에게 {{GENDER:$1|감사}}를 표하겠습니까?', # Fuzzy
	'thanks-thanked-notice' => '$1님이 당신이 {{GENDER:$2|그|그녀|그들}}의 편집에 감사했다는 것을 들었습니다.', # Fuzzy
	'echo-pref-subscription-edit-thank' => '내 편집에 대해 다른 사용자가 감사를 표했습니다',
	'echo-pref-tooltip-edit-thank' => '내게 내 편집에 대해 누군가가 감사를 표했을 때 알립니다.',
	'echo-category-title-edit-thank' => '감사',
	'notification-thanks-diff-link' => '내 편집',
	'notification-thanks' => '[[User:$1|$1]]님이 [[:$3]]에 대한 $2에 {{GENDER:$1|감사를 표했습니다}}.',
	'notification-thanks-flyout2' => '[[User:$1|$1]]님이 $2에 대한 내 편집에 {{GENDER:$1|감사를 표했습니다}}.',
	'notification-thanks-email-subject' => '$1님이 {{SITENAME}}에 대한 내 편집에 {{GENDER:$1|감사를 표했습니다}}',
	'notification-thanks-email-batch-body' => '$1님이 $2에 대한 내 편집에 {{GENDER:$1|감사를 표했습니다}}.',
	'notification-link-text-respond-to-user' => '사용자에게 응답',
	'log-name-thanks' => '감사 기록',
	'log-description-thanks' => '아래에는 다른 사용자가 감사를 표한 사용자의 목록입니다.',
	'logentry-thanks-thank' => '$1 사용자가 {{GENDER:$4|$3}}님에게 {{GENDER:$2|감사를 표했습니다}}',
	'log-show-hide-thanks' => '감사 기록을 $1',
);

/** Kyrgyz (Кыргызча)
 * @author Викиней
 */
$messages['ky'] = array(
	'notification-thanks-diff-link' => 'сиздин оңдооңуз',
);

/** Latin (Latina)
 * @author Autokrator
 * @author UV
 */
$messages['la'] = array(
	'thanks-thank' => 'gratias agere',
	'thanks-thanked' => '{{GENDER:$1|gratiae actae sunt}}',
	'thanks-button-thank' => '{{GENDER:$1|Gratias agere}}',
	'thanks-button-thanked' => '{{GENDER:$1|Gratiae actae sunt}}',
	'thanks-error-undefined' => 'Gratias agere non contigit.',
	'thanks-error-invalidrevision' => 'ID emendationis falsa est.',
	'thanks-error-ratelimited' => 'Excessisti concessum numerum aestimationum.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Mitte}} nuntium gratiarum habendarum ad istum {{GENDER:$2|usorem}}',
	'thanks-confirmation' => 'Visne gratiam agere {{GENDER:$1|usori}} $2 huius recensionis?',
	'thanks-thanked-notice' => '$1 nuntiatum est recensionem {{GENDER:$2|eius}} tibi placuisse.',
	'echo-pref-subscription-edit-thank' => 'Gratias egit recensionis meae causa',
	'echo-pref-tooltip-edit-thank' => 'Me certiorem facere si quis mihi gratias egerit',
	'echo-category-title-edit-thank' => 'Gratias agere',
	'notification-thanks-diff-link' => 'recensione tua',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|gratias egit}} tibi pro $2 in pagina [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|gratias egit}} tibi recensionis in pagina $2 factae causa.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|gratias egit}} recensionis apud {{grammar:accusative|{{SITENAME}}}} factae causa',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|gratias egit}} recensionis tuae in $2 factae causa.',
	'notification-link-text-respond-to-user' => 'Usori respondere',
	'log-name-thanks' => 'Index gratiarum',
	'log-description-thanks' => 'Infra est index usorum quibus gratiae ab aliis usoribus actae sunt.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|gratias egit}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 indicem gratiarum',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'thanks-desc' => "Setzt 'Merci'Linken bäi den Historique a bäi Versiounsënnerscheeder derbäi",
	'thanks-thank' => 'merci',
	'thanks-button-thank' => '{{GENDER:$1|Merci soen}}',
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
	'log-show-hide-thanks' => "Logbuch vum 'Merci' $1",
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'thanks-desc' => 'Pievieno pateicības saiti vēstures un atšķirību skatiem',
	'thanks-thank' => 'pateikties',
	'thanks-thanked' => '{{GENDER:$1|pateicās}}',
	'thanks-error-undefined' => 'Pateicības darbība neizdevās. Lūdzu, mēģiniet vēlreiz.',
	'thanks-error-invalidrevision' => 'Versijas ID ir nederīgs.',
	'thanks-error-ratelimited' => 'Jūsu ierobežojums ir pārsniegts. Lūdzu, uzgaidiet un mēģiniet vēlreiz.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Nosūtīt}} pateicības ziņojumu {{GENDER:$2|šim  lietotājam|šai lietotājai}}',
	'thanks-confirmation' => 'Vai tiešām jūs vēlaties {{GENDER:$1|pateikties}} $2 par šo labojumu?', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Pateicība par manu labojumu',
	'echo-pref-tooltip-edit-thank' => 'Paziņot man, kad kāds man izsaka pateicību par labojumu.',
	'echo-category-title-edit-thank' => 'Paldies',
	'notification-thanks-diff-link' => 'jūsu labojums',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|pateicās}} jums par $2 [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|pateicās}} jums par jūsu labojumu $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|pateicās}} jums par jūsu labojumu {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|pateicās}} jums par jūsu labojumu $2.',
	'notification-link-text-respond-to-user' => 'Atbildēt lietotājam',
	'log-name-thanks' => 'Pateicību žurnāls',
	'log-description-thanks' => 'Zemāk ir saraksts ar lietotājiem, kuriem citi lietotāji ir pateikušies.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|pateicās}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 pateicību žurnāls',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'thanks-desc' => 'Додава врски за заблагодарувања во историјата и прегледот на разликите',
	'thanks-thank' => 'заблагодари се',
	'thanks-thanked' => '{{GENDER:$1|заблагодарено}}',
	'thanks-button-thank' => '{{GENDER:$1|Заблагодари се}}',
	'thanks-button-thanked' => '{{GENDER:$1|Заблагодарено}}',
	'thanks-error-undefined' => 'Заблагодарувањето не успеа. Обидете се повторно.',
	'thanks-error-invalidrevision' => 'Ревизијата има неважечка назнака.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Ја надминавте}} границата на заблагодарувања. Почекајте некое време, па обидете се подоцна',
	'thanks-thank-tooltip' => '{{GENDER:$1|Испратете}} му благодарност (во порака) на {{GENDER:$2|корисников}}',
	'thanks-confirmation' => 'Дали сте сигурни дека сакате да {{GENDER:$1|му се заблагодарите|да ѝ се заблагодарите}} на $2 за уредувањево?',
	'thanks-thanked-notice' => '$1 {{GENDER:$2|е известен дека ви се допаѓа неговото уредување|е известена дека ви се допаѓа нејзиното уредување|доби известување дека ви се допаѓа уредувањето што го направи}}.',
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
	'log-show-hide-thanks' => '$1 го дневникот на благодарења',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'thanks-desc' => 'നാൾവഴിയിലും വ്യത്യാസങ്ങളിലും കൃതജ്ഞത രേഖപ്പെടുത്തുവാനുള്ള കണ്ണികൾ കൂട്ടിച്ചേർക്കുക',
	'thanks-thank' => 'നന്ദി രേഖപ്പെടുത്തുക',
	'thanks-thanked' => '{{GENDER:$1|നന്ദി രേഖപ്പെടുത്തി}}',
	'thanks-button-thank' => '{{GENDER:$1|നന്ദി രേഖപ്പെടുത്തുക}}',
	'thanks-button-thanked' => '{{GENDER:$1|നന്ദി രേഖപ്പെടുത്തി}}',
	'thanks-error-undefined' => 'നന്ദി രേഖപ്പെടുത്തൽ പരാജയപ്പെട്ടു. ദയവായി വീണ്ടും ശ്രമിക്കുക.',
	'thanks-error-invalidrevision' => 'നാൾപ്പതിപ്പിന്റെ ഐ.ഡി. അസാധുവാണ്.',
	'thanks-error-ratelimited' => '{{GENDER:$1|താങ്കളുടെ}} നിരക്കിന്റെ പരിധി അധികരിച്ചിരിക്കുന്നു. ദയവായി അല്പസമയം കാത്തിരുന്ന ശേഷം വീണ്ടും ശ്രമിക്കുക.',
	'thanks-thank-tooltip' => 'ഈ {{GENDER:$2|ഉപയോക്താവിന്}} താങ്കളുടെ കൃതജ്ഞത അറിയിപ്പ് {{GENDER:$1|അയയ്ക്കുക}}',
	'thanks-confirmation' => 'ഈ തിരുത്തലിന് $2 എന്ന ഉപയോക്താവിന് {{GENDER:$1|നന്ദി രേഖപ്പെടുത്തണം}} എന്ന് താങ്കൾക്കുറപ്പാണോ?',
	'thanks-thanked-notice' => '$1 എന്ന ഉപയോക്താവിനെ, താങ്കൾക്ക്  {{GENDER:$2|അദ്ദേഹത്തിന്റെ|അവരുടെ|അവരുടെ}} തിരുത്ത് ഇഷ്ടപ്പെട്ടുവെന്ന് അറിയിച്ചു.',
	'echo-pref-subscription-edit-thank' => 'എന്റെ തിരുത്തിന് എനിക്ക് കൃതജ്ഞത രേഖപ്പെടുത്തുക',
	'echo-pref-tooltip-edit-thank' => 'ഞാൻ ചെയ്ത തിരുത്തിന് ആരെങ്കിലും നന്ദി രേഖപ്പെടുത്തിയാൽ എന്നെ അറിയിക്കുക.',
	'echo-category-title-edit-thank' => 'നന്ദി',
	'notification-thanks-diff-link' => 'താങ്കളുടെ തിരുത്ത്',
	'notification-thanks' => '[[:$3]] എന്ന താളിൽ താങ്കൾ ചെയ്ത  $2 എന്ന തിരുത്തിന് [[User:$1|$1]] {{GENDER:$1|നന്ദി രേഖപ്പെടുത്തി}}',
	'notification-thanks-flyout2' => '$2 എന്ന താളിൽ താങ്കൾ ചെയ്ത തിരുത്തിന് [[User:$1|$1]] {{GENDER:$1|നന്ദി രേഖപ്പെടുത്തി}}',
	'notification-thanks-email-subject' => '{{SITENAME}} സംരംഭത്തിൽ താങ്കൾ ചെയ്ത തിരുത്തിന് $1 {{GENDER:$1|നന്ദി രേഖപ്പെടുത്തി}}',
	'notification-thanks-email-batch-body' => '$2 എന്ന താളിൽ താങ്കൾ ചെയ്ത തിരുത്തിന് $1 {{GENDER:$1|നന്ദി രേഖപ്പെടുത്തി}}',
	'notification-link-text-respond-to-user' => 'ഉപയോക്താവിനെ ബന്ധപ്പെടുക',
	'log-name-thanks' => 'കൃതജ്ഞതാരേഖ',
	'log-description-thanks' => 'മറ്റ് ഉപയോക്താക്കളുടെ കൃതജ്ഞത ലഭിച്ച ഉപയോക്താക്കളുടെ പട്ടിക താഴെ കാണാം.',
	'logentry-thanks-thank' => '{{GENDER:$4|$3}} എന്ന ഉപയോക്താവിന് $1 {{GENDER:$2|നന്ദി രേഖപ്പെടുത്തി}}',
	'log-show-hide-thanks' => 'കൃതജ്ഞതാരേഖ $1',
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
	'thanks-thank-tooltip' => 'Hantar ucapan terima kasih kepada pengguna ini', # Fuzzy
	'thanks-confirmation' => 'Adakah anda betul-betul ingin {{GENDER:$1|berterima kasih}} kepada $2 atas suntingan ini?', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Berterima kasih pada saya atas suntingan saya',
	'echo-pref-tooltip-edit-thank' => 'Beritahu saya apabila seseorang berterima kasih kepada saya atas suntingan saya.',
	'echo-category-title-edit-thank' => 'Terima kasih',
	'notification-thanks-diff-link' => 'suntingan anda',
	'notification-thanks' => '[[User:$1|$1]] telah {{GENDER:$1|berterima kasih}} kepada anda atas $2 di [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|berterima kasih}} kepada anda kerana menyunting $2.',
	'notification-thanks-email-subject' => '$1 telah {{GENDER:$1|berterima kasih}} kepada anda atas suntingan anda di {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 telah {{GENDER:$1|berterima kasih}} kepada anda atas suntingan anda di $2.',
	'notification-link-text-respond-to-user' => 'Balas pengguna',
	'log-name-thanks' => 'Log ucapan terima kasih',
	'log-description-thanks' => 'Yang berikut adalah senarai pengguna yang menerima ucapan terima kasih daripada pengguna lain.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|berterima kasih}} kepada $3', # Fuzzy
);

/** Maltese (Malti)
 * @author Leli Forte
 */
$messages['mt'] = array(
	'thanks-desc' => "Iżżid ħoloq ta' ringrazzjament fil-kronoloġija u fid-differenzi bejn il-verżjonijiet",
	'thanks-thank' => 'irringrazzja',
	'thanks-thanked' => '{{GENDER:$1|irringrazzjat|irringrazzjata}}',
	'thanks-button-thank' => '{{GENDER:$1|Irringrazzja}}',
	'thanks-button-thanked' => '{{GENDER:$1|Irringrazzjat|Irringrazzjata}}',
	'thanks-error-undefined' => "Ir-ringrazzjament ma ħadimx. Erġa' pprova.",
	'thanks-error-invalidrevision' => 'L-ID tar-reviżjoni mhuwiex validu.',
	'thanks-error-ratelimited' => "Qbiżt il-limitu massimu tar-ringrazzjamenti. Jekk jogħġbok stenna ftit u erġa' pprova.", # Fuzzy
	'thanks-thank-tooltip' => "{{GENDER:$1|Ibagħt}} notifika ta' ringrazzjament lil {{GENDER:$2|dan|din}} l-utent",
	'thanks-confirmation' => "Trid {{GENDER:$1|tirringrazzja}} 'l $2 għal din il-modifika?",
	'thanks-thanked-notice' => '$1 {{GENDER:$2|ġie mgħarraf|ġiet mgħarrfa|ġew mgħarrfin}} li għoġbitek il-modifika {{GENDER:$2|tiegħu|tagħha|tagħhom}}.',
	'echo-pref-subscription-edit-thank' => 'Jirringrazzjani għall-modifika li għamilt',
	'echo-pref-tooltip-edit-thank' => 'Għarrafni meta xi ħadd jirringrazzjani għal xi modifika li nkun għamilt.',
	'echo-category-title-edit-thank' => 'Ringrazzjamenti',
	'notification-thanks-diff-link' => 'il-modifika tiegħek',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|irringrazzjak|irringrazzjatek}} għal $2 fuq [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|irringrazzjak|irringrazzjatek}} għall-modifika li għamilt fuq $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|irringrazzjak|irringrazzjatek}} għall-modifika li għamilt fuq {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|irringrazzjak|irringrazjatek}} għall-modifika li għamilt fuq $2.',
	'notification-link-text-respond-to-user' => 'Wieġeb l-utent',
	'log-name-thanks' => "Reġistru ta' ringrazzjamenti",
	'log-description-thanks' => "Taħt hawn lista ta' utenti irringrazzjati minn utenti oħra.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|irringrazzja|irringrazzjat}} lil {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => "$1 reġistru ta' ringrazzjamenti",
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Danmichaelo
 * @author Jeblad
 * @author Njardarlogar
 */
$messages['nb'] = array(
	'thanks-desc' => 'Legg til takkelenker på historikk og endringer',
	'thanks-thank' => 'takk',
	'thanks-thanked' => '{{GENDER:$1|takket}}',
	'thanks-button-thank' => '{{GENDER:$1|Takk}}',
	'thanks-button-thanked' => '{{GENDER:$1|Takket}}',
	'thanks-error-undefined' => 'Takkehandling feilet. Forsøk igjen.',
	'thanks-error-invalidrevision' => 'Revisjons-ID er ikke gyldig.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Du}} har overskredet frekvensbegrensingen din. Vent litt og prøv igjen.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Send}} en takkemelding til denne {{GENDER:$2|brukeren}}',
	'thanks-confirmation' => 'Vil du {{GENDER:$1|takke}} $2 for denne redigeringen?',
	'thanks-thanked-notice' => '$1 får høre at du satte pris på {{GENDER:$2|redigeringen hans|redigeringen hennes|redigeringen}}.',
	'echo-pref-subscription-edit-thank' => 'Takker meg for redigeringen min',
	'echo-pref-tooltip-edit-thank' => 'Varsle meg når noen takker meg for en redgering jeg har gjort.',
	'echo-category-title-edit-thank' => 'Takk',
	'notification-thanks-diff-link' => 'redigeringen din',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|takket}} deg for $2 på [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|takket}} deg for redigeringen din på $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|takket}} deg for redigeringen din på {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|takket}} deg for redigeringen din på $2.',
	'notification-link-text-respond-to-user' => 'Svar til bruker',
	'log-name-thanks' => 'Takkelogg',
	'log-description-thanks' => 'Under er en liste av brukere som er takket av andre brukere.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|takket}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 takkelogg',
);

/** Low Saxon (Netherlands) (Nedersaksies)
 * @author Servien
 */
$messages['nds-nl'] = array(
	'thanks-desc' => 't Zet de "Bedankt"-verwiezing op de geschiedenisse en verschillenweergaven',
	'thanks-thank' => 'bedanken',
	'thanks-thanked' => '{{GENDER:$1|is bedankt}}',
	'thanks-button-thank' => 'Bedanken', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|Is bedankt}}',
	'thanks-error-undefined' => 'Bedanken is mislokt. Probeer t weer.',
	'thanks-error-invalidrevision' => 't Versienummer is niet geldig.',
	'thanks-error-ratelimited' => "Je hebben joew limiet veur bedankjes overschrejen. Wacht effen veurda'j veurdan gaon.",
	'thanks-thank-tooltip' => '{{GENDER:$1|Stuur}} n melding mit n bedankjen naor disse {{GENDER:$2|gebruker}}',
	'thanks-confirmation' => "Bi'j der wisse van da'j $2 {{GENDER:$1|bedanken}} willen veur disse bewarking?", # Fuzzy
	'thanks-thanked-notice' => '$1 hef te heuren ekregen dat jie {{GENDER:$2|zien|heur|zien/heur}} bewarking mooi vienen.', # Fuzzy
	'echo-pref-subscription-edit-thank' => "Bedank m'n veur mien bewarking",
	'echo-pref-tooltip-edit-thank' => "Stuur m'n n melding as der ene mien bedankt veur n bewarking die'k an-ebröcht hebbe.",
	'echo-category-title-edit-thank' => 'Bedankt',
	'notification-thanks-diff-link' => 'joew bewarking',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|hef}} joe bedankt veur $2 op [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|hef}} joe bedankt veur joew bewarking op $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|hef}} joe bedankt veur joew bewarking op {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|hef}} joe bedankt veur joew bewarking op $2.',
	'notification-link-text-respond-to-user' => 'Gebruker beantwoorden',
	'log-name-thanks' => 'Bedankjeslogboek',
	'log-description-thanks' => "Hieronder zie'j n lieste mit gebrukers die deur aandere gebrukers bedankt bin.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|hef}} {{GENDER:$4|$3}} bedankt',
	'log-show-hide-thanks' => 'bedankjeslogboek $1',
);

/** Dutch (Nederlands)
 * @author Hansmuller
 * @author JurgenNL
 * @author Konovalov
 * @author SPQRobin
 * @author Siebrand
 * @author Sjoerddebruin
 * @author Southparkfan
 */
$messages['nl'] = array(
	'thanks-desc' => 'Voegt "Bedankt"-koppelingen toe aan geschiedenis en verschillenweergaves',
	'thanks-thank' => 'bedanken',
	'thanks-thanked' => '{{GENDER:$1|is bedankt}}',
	'thanks-button-thank' => '{{GENDER:$1|Bedanken}}',
	'thanks-button-thanked' => '{{GENDER:$1|Bedankt}}',
	'thanks-error-undefined' => 'Bedanken is mislukt. Probeer het opnieuw.',
	'thanks-error-invalidrevision' => 'Het versienummer is niet geldig.',
	'thanks-error-ratelimited' => 'U hebt uw limiet voor bedankjes overschreden. Wacht even en probeer het dan opnieuw.', # Fuzzy
	'thanks-thank-tooltip' => 'Deze {{GENDER:$2|gebruiker}} een bedankje {{GENDER:$1|sturen}}',
	'thanks-confirmation' => 'Wilt u $2 {{GENDER:$1|bedanken}} voor deze bewerking?',
	'thanks-thanked-notice' => '$1 heeft bericht gekregen dat u {{GENDER:$2|zijn|haar|zijn/haar}} bewerking leuk vindt.',
	'echo-pref-subscription-edit-thank' => 'als iemand u bedankt voor een bewerking',
	'echo-pref-tooltip-edit-thank' => 'U een melding zenden als iemand u bedankt voor een bewerking die u hebt gemaakt.',
	'echo-category-title-edit-thank' => 'Bedankt',
	'notification-thanks-diff-link' => 'uw bewerking',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|heeft}} u bedankt voor $2 op [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|heeft}} u bedankt voor uw bewerking op $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|heeft}} u bedankt voor uw bewerking op  {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|heeft}} u bedankt voor uw bewerking op $2.',
	'notification-link-text-respond-to-user' => 'Op gebruiker reageren',
	'log-name-thanks' => 'Bedankjeslogboek',
	'log-description-thanks' => 'Hieronder wordt een lijst weergegeven met gebruikers die door andere gebruikers zijn bedankt.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|heeft}} {{GENDER:$4|$3}} bedankt',
	'log-show-hide-thanks' => 'bedankjeslogboek $1',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'thanks-desc' => 'Legg til takkelenkjer til historikk og skilnadsvising',
	'thanks-thank' => 'takk',
	'thanks-thanked' => '{{GENDER:$1|takka}}',
	'thanks-button-thank' => 'Takk', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|Takka}}',
	'thanks-error-undefined' => 'Takkehandlinga gjekk ikkje. Freist om att.',
	'thanks-error-invalidrevision' => 'Versjons-ID-en er ikkje gild',
	'thanks-error-ratelimited' => 'Du har overskride frekvensgrensa di. Vent litt og freist om att.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Send}} ei takkemelding til {{GENDER:$2|brukaren}}',
	'thanks-confirmation' => 'Er du viss på at du ynskjer å {{GENDER:$1|takka}} $2 for denne endringa?', # Fuzzy
	'thanks-thanked-notice' => '$1 vart fortald at du lika endringa {{GENDER:$2|hans|hennar|hans/hennar}}.', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Takkar meg for endringa mi',
	'echo-pref-tooltip-edit-thank' => 'Meld meg når nokon takkar meg for ei endring eg har gjort.',
	'echo-category-title-edit-thank' => 'Takk',
	'notification-thanks-diff-link' => 'endringa di',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|takka}} deg for $2 på [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|takka}} deg for endringa di på $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|takka}} deg for endringa di på {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|takka}} deg for endringa di på $2.',
	'notification-link-text-respond-to-user' => 'Svar brukar',
	'log-name-thanks' => 'Takkelogg',
	'log-description-thanks' => 'Under er ei liste over brukarar som har vorte takka av andre brukarar.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|takka}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 takkelogg',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'thanks-desc' => 'Apond de ligams de mercejament a las vistas istoric e de diferéncia',
	'thanks-thank' => 'mercé',
	'thanks-thanked' => '{{GENDER:$1|mercejat|mercejada}}',
	'echo-category-title-edit-thank' => 'Mercé',
	'notification-thanks-diff-link' => 'vòstra modificacion',
	'log-name-thanks' => 'Entrada mercejaments',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|a mercejat}} {{GENDER:$4|$3}}',
);

/** Punjabi (ਪੰਜਾਬੀ)
 * @author Babanwalia
 * @author Satdeep gill
 */
$messages['pa'] = array(
	'thanks-desc' => 'ਇਤਿਹਾਸ ਵਿੱਚ ਧੰਨਵਾਦੀ ਲਿੰਕ ਅਤੇ ਵੱਖਰੇ ਵਿਚਾਰ ਜੋੜਦਾ ਹੈ',
	'thanks-thank' => 'ਧੰਨਵਾਦ',
	'thanks-thanked' => '{{GENDER:$1|ਧੰਨਵਾਦ ਕੀਤਾ ਗਿਆ}}',
	'thanks-button-thank' => 'ਧੰਨਵਾਦ', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|ਧੰਨਵਾਦ ਕੀਤਾ ਗਿਆ}}',
	'thanks-error-undefined' => 'ਧੰਨਵਾਦ ਕਾਰਜ ਫੇਲ ਹੋਇਆ। ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰੋ ਜੀ।',
	'thanks-error-invalidrevision' => 'ਸੁਧਾਈ ਪਛਾਣ ਉਚਿਤ ਨਹੀਂ ਹੈ।',
	'thanks-error-ratelimited' => 'ਤੁਸੀਂ ਗਤੀ ਹੱਦ ਪਾਰ ਕਰ ਗਏ ਹੋ। ਕਿਰਪਾ ਕਰਕੇ ਕੁਝ ਸਮਾਂ ਇੰਤਜ਼ਾਰ ਕਰੇ ਅਤੇ ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰੋ।',
	'thanks-thank-tooltip' => 'ਇਸ {{GENDER:$2|ਵਰਤੋਂਕਾਰ}} ਨੂੰ ਇੱਕ ਧੰਨਵਾਦੀ ਸੂਚਨਾ {{GENDER:$1|ਭੇਜੋ}}',
	'thanks-confirmation' => 'ਕੀ ਤੁਸੀਂ ਪੱਕਾ $2 ਦਾ ਇਸ ਸੋਧ ਲਈ {{GENDER:$1|ਧੰਨਵਾਦ}} ਕਰਨਾ ਚਾਹੁੰਦੇ ਹੋ?', # Fuzzy
	'thanks-thanked-notice' => '$1 ਨੂੰ ਦੱਸ ਦਿੱਤਾ ਗਿਆ ਕਿ ਤੁਹਾਨੂੰ {{GENDER:$2|ਉਹਨਾਂ ਦੀ}} ਸੋਧ ਪਸੰਦ ਆਈ।', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'ਮੇਰੀ ਸੋਧ ਲਈ ਮੈਨੂੰ ਧੰਨਵਾਦ',
	'echo-pref-tooltip-edit-thank' => 'ਜਦੋਂ ਕੋਈ ਮੇਰੀ ਸੋਧ ਦਾ ਧੰਨਵਾਦ ਕਰਦਾ ਹੈ ਤਾਂ ਮੈਨੂੰ ਇਤਲਾਹ ਦਿਓ',
	'echo-category-title-edit-thank' => 'ਧੰਨਵਾਦ',
	'notification-thanks-diff-link' => 'ਤੁਹਾਡੀ ਸੋਧ',
	'notification-thanks' => '[[User:$1|$1]] ਨੇ [[:$3]] ਉੱਤੇ $2 ਲਈ ਤੁਹਾਡਾ {{GENDER:$1|ਧੰਨਵਾਦ ਕੀਤਾ}}।',
	'notification-thanks-flyout2' => '[[User:$1|$1]] $2 ਉੱਤੇ ਤੁਹਾਡੀ ਸੋਧ ਲਈ ਤੁਹਾਡਾ {{GENDER:$1|ਧੰਨਵਾਦ ਕੀਤਾ}}।',
	'notification-thanks-email-subject' => '$1 ਨੇ {{SITENAME}} ਉੱਤੇ ਤੁਹਾਡੀ ਸੋਧ ਲਈ ਤੁਹਾਡਾ {{GENDER:$1|ਧੰਨਵਾਦ ਕੀਤਾ}}',
	'notification-thanks-email-batch-body' => '$1 ਨੇ $2 ਉੱਤੇ ਤੁਹਾਡੀ ਸੋਧ ਲਈ ਤੁਹਾਡਾ {{GENDER:$1|ਧੰਨਵਾਦ ਕੀਤਾ}}।',
	'notification-link-text-respond-to-user' => 'ਵਰਤੋਂਕਾਰ ਨੂੰ ਜੁਆਬ ਦਿਓ',
	'log-name-thanks' => 'ਮਿਹਰਬਾਨੀਆਂ ਦਾ ਇੰਦਰਾਜ',
	'log-description-thanks' => 'ਹੇਠਾਂ ਦੂਸਰੇ ਵਰਤੋਂਕਾਰਾਂ ਦੁਆਰਾ ਧੰਨਵਾਦ ਕੀਤੇ ਵਰਤੋਂਕਾਰਾਂ ਦੀ ਇੱਕ ਸੂਚੀ ਹੈ।',
	'logentry-thanks-thank' => '$1 ਨੇ {{GENDER:$4|$3}} ਦਾ {{GENDER:$2|ਧੰਨਵਾਦ ਕੀਤਾ ਹੈ}}',
	'log-show-hide-thanks' => '$1 ਧੰਨਵਾਦੀ ਸੂਚੀ',
);

/** Polish (polski)
 * @author Chrumps
 * @author Matma Rex
 * @author Tar Lócesilion
 * @author Ty221
 * @author WTM
 */
$messages['pl'] = array(
	'thanks-desc' => 'Dodaje do stron historii i różnicy pomiędzy wersjami link umożliwiający podziękowanie',
	'thanks-thank' => 'podziękuj',
	'thanks-thanked' => '{{GENDER:$1|podziękowałeś|podziękowałaś}}',
	'thanks-button-thank' => '{{GENDER:$1|Podziękuj}}',
	'thanks-button-thanked' => '{{GENDER:$1|Podziękowałeś|Podziękowałaś}}',
	'thanks-error-undefined' => 'Operacja podziękowania nie powiodła się. Proszę spróbować ponownie.',
	'thanks-error-invalidrevision' => 'Nieprawidłowy identyfikator wersji.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Przekroczyłeś|Przekroczyłaś}} limit podziękowań. Poczekaj chwilę i spróbuj ponownie.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Wyślij}} podziękowanie do {{GENDER:$2|tego użytkownika|tej użytkowniczki}}',
	'thanks-confirmation' => 'Czy chcesz {{GENDER:$1|podziękować}} $2 za tę edycję?',
	'echo-pref-subscription-edit-thank' => 'podziękuje mi za edycję, którą wykonałem',
	'echo-pref-tooltip-edit-thank' => 'Powiadom mnie, kiedy ktoś podziękuje mi za edycję, którą wykonałem.',
	'echo-category-title-edit-thank' => 'Podziękowania',
	'notification-thanks-diff-link' => 'edycję',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|podziękował|podziękowała}} Ci za $2 na stronie [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|podziękował|podziękowała}} Ci za edycję na stronie $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|podziękował|podziękowała}} Ci za edycję w {{GRAMMAR:MS.lp|{{SITENAME}}}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|podziękował|podziękowała}} Ci za edycję na stronie $2.',
	'notification-link-text-respond-to-user' => 'Odpowiedz',
	'log-name-thanks' => 'Rejestr podziękowań',
	'log-description-thanks' => 'Poniżej znajduje się lista użytkowników, którym podziękowali inni użytkownicy.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|podziękował|podziękowała}} {{GENDER:$4|użytkownikowi|użytkowniczce}} $3',
	'log-show-hide-thanks' => '$1 rejestr podziękowań',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'thanks-desc' => 'د پېښليک او توپيرونو کتنو کې د مننې تړنې ورگډوي',
	'thanks-thank' => 'مننه',
	'thanks-thanked' => '{{GENDER:$1|منندوی شو}}',
	'thanks-button-thank' => 'مننه', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|منندوی شو}}',
	'thanks-error-undefined' => 'د مننې چاره پاتې راغله. بيا مو هڅه وکړۍ.',
	'thanks-error-invalidrevision' => 'د کره کتنې پېژند سم نه دی.',
	'thanks-error-ratelimited' => 'تاسې د خپل ټاکلي بريد نه واوښتلئ. مهرباني وکړۍ لږ څه تم شۍ او بيا يې وآزمويۍ.',
	'thanks-thank-tooltip' => 'دې {{GENDER:$2|کارن}} ته د مننې يو پيغام {{GENDER:$1|ورلېږل}}',
	'thanks-confirmation' => 'آيا په رښتيا له $2 څخه د دې سمون په خاطر {{GENDER:$1|مننه کول غواړې}}؟', # Fuzzy
	'thanks-thanked-notice' => '$1 ته ووييل شول چې تاسې د {{GENDER:$2|هغه|هغې|هغوی}} سمونونه خوښ کړل.', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'زه د سمون پخاطر زما منندوی شه',
	'echo-pref-tooltip-edit-thank' => 'خبر مې کړه کله چې يو څوک زما د يو سمون په خاطر له ما څخه مننه کوي.',
	'echo-category-title-edit-thank' => 'مننه',
	'notification-thanks-diff-link' => 'ستاسې سمون',
	'notification-thanks' => '[[User:$1|$1]] له تاسې څخه په [[:$3]] باندې د $2 پخاطر {{GENDER:$1|مننه وکړه}}.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] له تاسې څخه په $2 باندې ستاسې د سمون پخاطر {{GENDER:$1|مننه وکړه}}.',
	'notification-thanks-email-subject' => '$1 په {{SITENAME}} باندې ستاسې د سمون په خاطر {{GENDER:$1|مننه وکړه}}',
	'notification-thanks-email-batch-body' => '$1 په $2 باندې ستاسې د سمون په خاطر {{GENDER:$1|مننه وکړه}}.',
	'notification-link-text-respond-to-user' => 'کارن ته ځواب',
	'log-name-thanks' => 'د مننې يادښت',
	'log-description-thanks' => 'دا لاندې د هغو کارنانو يو لړليک دی چې نور کارنان ترې منندوی دي.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|منندوی شو}} له {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => 'د مننې يادښت $1',
);

/** Portuguese (português)
 * @author GoEThe
 * @author Helder.wiki
 * @author Malafaya
 * @author OTAVIO1981
 * @author Oona
 * @author Opraco
 * @author Vitorvicentevalente
 */
$messages['pt'] = array(
	'thanks-desc' => 'Adiciona ligações para agradecimentos quando na página do histórico ou em diffs',
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => '{{GENDER:$1|agradecimento enviado}}',
	'thanks-button-thank' => 'Agradecer', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|Agradecimento enviado}}',
	'thanks-error-undefined' => 'Acção de agradecimento falhou. Por favor, tente novamente.',
	'thanks-error-invalidrevision' => 'O ID de revisão não é válido.',
	'thanks-error-ratelimited' => 'Excedeu o limite de velocidade. Por favor, espere algum tempo e tente novamente.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Envie}} um agradecimento para {{GENDER:$2|este utilizador|esta utilizadora}}',
	'thanks-confirmation' => 'Tem a certeza que deseja {{GENDER:$1|agradecer}}  a $2 por esta edição?', # Fuzzy
	'thanks-thanked-notice' => '$1 foi {{GENDER:$2|informado|informada|informado(a)}} que você gostou da sua edição.', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Agradece-me pela minha edição',
	'echo-pref-tooltip-edit-thank' => 'Notificar-me quando alguém me agradecer por uma edição que eu fiz.',
	'echo-category-title-edit-thank' => 'Agradecimentos',
	'notification-thanks-diff-link' => 'a sua edição',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|agradeceu-lhe}} pela $2 em [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|agradeceu-lhe}} pela sua edição em $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeceu-lhe}} pela sua edição em {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|agradeceu-lhe}} pela sua edição em $2.',
	'notification-link-text-respond-to-user' => 'Responder ao utilizador',
	'log-name-thanks' => 'Registo de agradecimentos',
	'log-description-thanks' => 'Abaixo está uma lista de utilizadores que receberam agradecimentos de outros utilizadores.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|agradeceu}} a {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 registo de agradecimentos',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Dianakc
 * @author HenriqueCrang
 * @author OTAVIO1981
 * @author Opraco
 * @author Teles
 */
$messages['pt-br'] = array(
	'thanks-desc' => 'Adiciona link de agradecimento às páginas de histórico e de diferença entre edições',
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => '{{GENDER:$1|agradecido|agradecida}}',
	'thanks-error-undefined' => 'O agradecer falhou. Por favor tente de novo.',
	'thanks-error-invalidrevision' => 'ID de revisão inválido.',
	'thanks-error-ratelimited' => 'Você excedeu seu limite. Por favor aguarde um pouco e tente novamente.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Envie}} uma nota de agradecimento para este {{GENDER:$2|usuário}}',
	'thanks-confirmation' => 'Você tem certeza que deseja {{GENDER:$1|agradecer}}  a $2 por esta edição?', # Fuzzy
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

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'thanks-desc' => 'Adaugă legături pentru mulțumiri în istoric și în caseta „Diferență între versiuni”',
	'thanks-thank' => 'mulțumire',
	'thanks-thanked' => '{{GENDER:$1|ați mulțumit}}',
	'thanks-button-thank' => '{{GENDER:$1|Mulțumesc}}',
	'thanks-button-thanked' => '{{GENDER:$1|Ați mulțumit}}',
	'thanks-error-undefined' => 'Încercarea de a mulțumi a eșuat. Încercați din nou.',
	'thanks-error-invalidrevision' => 'Codul versiunii nu este valid.',
	'thanks-error-ratelimited' => '{{GENDER:$1|V}}-ați depășit limita de evaluare. Așteptați un timp și reîncercați.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Trimite}} o notificare de mulțumire {{GENDER:$2|acestui utilizator|acestei utilizatoare}}',
	'thanks-confirmation' => 'Doriți {{GENDER:$1|să mulțumiți}} utilizatorului $2 pentru această modificare?',
	'thanks-thanked-notice' => '$1 a fost {{GENDER:$2|notificat|notificată|notificat}} că i-ați apreciat modificarea.',
	'echo-pref-subscription-edit-thank' => 'Mi se mulțumește pentru modificarea mea',
	'echo-pref-tooltip-edit-thank' => 'Notifică-mă când cineva îmi mulțumește pentru o modificare pe care am efectuat-o.',
	'echo-category-title-edit-thank' => 'Mulțumiri',
	'notification-thanks-diff-link' => 'modificarea dumneavoastră',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|v-a mulțumit}} pentru $2 asupra paginii [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|v-a mulțumit}} pentru modificarea dumnevoastră asupra paginii $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|v-a mulțumit}} pentru modificarea dumneavoastră de la {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|v-a mulțumit}} pentru modificarea dumneavoastră asupra paginii $2.',
	'notification-link-text-respond-to-user' => 'Răspuns către utilizator',
	'log-name-thanks' => 'Jurnal mulțumiri',
	'log-description-thanks' => 'Mai jos se află o listă a utilizatorilor cărora li s-a mulțumit de către alți utilizatori.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|i-a mulțumit}} {{GENDER:$4|utilizatorului $3|utilizatoarei $3}}',
	'log-show-hide-thanks' => '$1 jurnalul de mulțumiri',
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
	'thanks-thank-tooltip' => "{{GENDER:$1|Manne}} 'na notifiche de rengraziamende a stu {{GENDER:$2|utende}}",
	'thanks-confirmation' => 'Sì secure ca vuè ccu {{GENDER:$1|rengrazie}} $2 pe stu cangiamende?', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Ringraziame pu cangiamende mije',
	'echo-pref-tooltip-edit-thank' => "Notificame quanne quacchedune me ringrazie pe 'nu cangiamende ca agghie fatte.",
	'echo-category-title-edit-thank' => 'Grazie!',
	'notification-thanks-diff-link' => 'le cangiaminde tune',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|te rengrazie}} pe $2 sus a [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|te rengrazie}} pu cangiamende tune sus a $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|te rengrazie}} pu cangiamende tune sus a {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|te rengrazie}} pu cangiamende tune sus a $2.',
	'notification-link-text-respond-to-user' => "Respunne a l'utende",
	'log-name-thanks' => 'Archivije de le rengraziaminde',
	'log-description-thanks' => "Sotte stè 'n'elenghe de utinde ca onne rengraziate otre utinde.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|ave ringraziate}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 archivije de le rengraziaminde',
);

/** Russian (русский)
 * @author Kaganer
 * @author Lockal
 * @author Okras
 * @author Чаховіч Уладзіслаў
 */
$messages['ru'] = array(
	'thanks-desc' => 'Добавляет благодарственные ссылки на историю и сравнение версий',
	'thanks-thank' => 'спасибо',
	'thanks-thanked' => '{{GENDER:$1|поблагодарил|поблагодарила}}',
	'thanks-button-thank' => '{{GENDER:$1|Спасибо}}',
	'thanks-button-thanked' => '{{GENDER:$1|Был поблагодарён|Была поблагодарена}}',
	'thanks-error-undefined' => 'Попытка поблагодарить не удалась. Попробуйте снова.',
	'thanks-error-invalidrevision' => 'Некорректный номер версии.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Вы}} превысили ограничение скорости выполнения таких действий. Пожалуйста, подождите некоторое время и попробуйте снова.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Отправить}} {{GENDER:$2|этому участнику|этой участнице}} благодарственное сообщение',
	'thanks-confirmation' => 'Хотите {{GENDER:$1|поблагодарить}} $2 за эту правку?',
	'thanks-thanked-notice' => '$1 {{GENDER:$2|был оповещён|была оповещена|были оповещены}}, что вам понравилось {{GENDER:$2|его|её|их}} правка.',
	'echo-pref-subscription-edit-thank' => 'Спасибо мне за мою правку',
	'echo-pref-tooltip-edit-thank' => 'Сообщать мне, когда кто-то благодарит меня за сделанную мной правку.',
	'echo-category-title-edit-thank' => 'Спасибо',
	'notification-thanks-diff-link' => 'вашу правку',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|поблагодарил|поблагодарила}} вас за $2 на странице «[[:$3]]».',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|поблагодарил|поблагодарила}} вас за вашу правку на странице «$2».',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|поблагодарил|поблагодарила}} вас за вашу правку на сайте «{{SITENAME}}».',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|поблагодарил|поблагодарила}} вас за вашу правку на странице «$2».',
	'notification-link-text-respond-to-user' => 'Ответить участнику',
	'log-name-thanks' => 'Журнал благодарностей',
	'log-description-thanks' => 'Ниже находится список участников, получивших благодарности от других участников.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|поблагодарил|поблагодарила}} {{GENDER:$4|участника|участницу}} $3',
	'log-show-hide-thanks' => '$1 журнал благодарностей',
);

/** Slovak (slovenčina)
 * @author Sudo77(new)
 */
$messages['sk'] = array(
	'thanks-desc' => 'Pridáva odkazy na poďakovanie do histórie a zobrazenia rozdielov',
	'thanks-thank' => 'poďakovať',
	'thanks-thanked' => '{{GENDER:$1|poďakoval}}',
	'thanks-button-thank' => '{{GENDER:$1|Ďakujem}}',
	'thanks-button-thanked' => '{{GENDER:$1|Poďakoval}}',
	'thanks-error-undefined' => 'Poďakovanie sa nepodarilo. Skúste to prosím znova.',
	'thanks-error-invalidrevision' => 'ID revízie je neplatné.',
	'thanks-error-ratelimited' => 'Prekročili ste rýchlostný limit. Prosím počkajte chvíľu a skúste to znova.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Poslať}} {{GENDER:$2|tomuto redaktorovi|tejto redaktorke}} poďakovanie',
	'thanks-confirmation' => 'Chcete sa {{GENDER:$1|poďakovať}} $2 za túto úpravu?',
	'thanks-thanked-notice' => '$1 bol upozornený, že sa vám páčila  {{GENDER:$2| jeho|jej|ich}} úprava.',
	'echo-pref-subscription-edit-thank' => 'poďakuje mi niekto za moje úpravy',
	'echo-pref-tooltip-edit-thank' => 'Upozornite ma, ak mi niekto poďakuje za moju úpravu.',
	'echo-category-title-edit-thank' => 'poďakovanie',
	'notification-thanks-diff-link' => 'vašu úpravu',
	'notification-thanks' => '[[User:$1|$1]] vám {{GENDER:$1|poďkoval|poďakovala}} za $2 stránky [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] vám {{GENDER:$1|poďakoval|poďakovala}} za úpravu stránky $2.',
	'notification-thanks-email-subject' => '$1 vám {{GENDER:$1|poďakoval|poďakovala}} za vašu úpravu na {{grammar:6sg|{{SITENAME}}}}',
	'notification-thanks-email-batch-body' => '$1 vám {{GENDER:$1|poďakoval|poďakovala}} za úpravu stránky $2.',
	'notification-link-text-respond-to-user' => 'Reagovať na redaktora',
	'log-name-thanks' => 'Kniha poďakovaní',
	'log-description-thanks' => 'Nižšie je uvedený zoznam redaktorov, ktorým ostatný redaktori poďakovali.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|poďakoval|poďakovala}} {{GENDER:$4|redaktorovi|redaktorke}} $3',
	'log-show-hide-thanks' => '$1 knihu poďakovaní',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 * @author Eleassar
 * @author Matej1234
 * @author Yerpo
 */
$messages['sl'] = array(
	'thanks-desc' => 'K prikazom zgodovine in razlik doda povezavo za zahvalo.',
	'thanks-thank' => 'zahvala',
	'thanks-thanked' => '{{GENDER:$1|zahvala je objavljena}}',
	'thanks-button-thank' => '{{GENDER:$1|Zahvala}}',
	'thanks-button-thanked' => '{{GENDER:$1|Zahvala je objavljena|Zahvala je objavljena}}',
	'thanks-error-undefined' => 'Zahvala ni uspela. Prosimo, poskusite znova.',
	'thanks-error-invalidrevision' => 'ID-številka redakcije ni veljavna.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Presegli}} ste omejitev hitrosti. Prosimo, počakajte nekaj časa in nato poskusite znova.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Pošljite}} {{GENDER:$2|temu uporabniku|tej uporabnici}} zahvalo',
	'thanks-confirmation' => 'Ali se želite uporabniku $2 {{GENDER:$1|zahvaliti}} za to urejanje?',
	'thanks-thanked-notice' => '$1 ste sporočili, da vam je bilo {{GENDER:$2|njegovo|njeno}} urejanje všeč.',
	'echo-pref-subscription-edit-thank' => 'Se mi zahvali za urejanje',
	'echo-pref-tooltip-edit-thank' => 'Obvesti me, kadar se mi kdo zahvali za katero od mojih urejanj.',
	'echo-category-title-edit-thank' => 'Zahvala',
	'notification-thanks-diff-link' => 'vaše urejanje',
	'notification-thanks' => '[[User:$1|$1]] se vam je {{GENDER:$1|zahvalil|zahvalila}} za $2 strani »[[:$3]]«.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] se vam je {{GENDER:$1|zahvalil|zahvalila}} za urejanje strani »$2«.',
	'notification-thanks-email-subject' => '$1 se vam je {{GENDER:$1|zahvalil|zahvalila}} za urejanje {{GRAMMAR:rodilnik|{{SITENAME}}}}',
	'notification-thanks-email-batch-body' => '$1 se vam je {{GENDER:$1|zahvalil|zahvalila}} za urejanje strani »$2«.',
	'notification-link-text-respond-to-user' => 'Odgovor uporabniku',
	'log-name-thanks' => 'Dnevnik zahval',
	'log-description-thanks' => 'Prikazan je dnevnik uporabnikov, ki se jim je kdo zahvalil.',
	'logentry-thanks-thank' => '$1 se je {{GENDER:$2|zahvalil|zahvalila}} {{GENDER:$4|uporabniku|uporabnici}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 dnevnik zahval',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 * @author Милан Јелисавчић
 */
$messages['sr-ec'] = array(
	'thanks-desc' => 'Додаје могућност захваљивања у прегледу историје и прегледу разлика између измена',
	'thanks-thank' => 'захвали се',
	'thanks-thanked' => '{{GENDER:$1|захвалио се|захвалила се}}',
	'thanks-error-undefined' => 'Захваљивање није успело. Покушајте поново.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Пошаљите}} захвалницу {{GENDER:$2|овом кориснику|овој корисници}}',
	'thanks-confirmation' => 'Да ли сте сигурни да желите да се {{GENDER:$1|захвалите}} кориснику $2 за ову измену?', # Fuzzy
	'echo-pref-tooltip-edit-thank' => 'Обавештава вас када вам се неко захвали за измену коју сте начинили.',
	'echo-category-title-edit-thank' => 'Захвалнице',
	'notification-thanks-diff-link' => 'вашој измени',
	'notification-thanks' => '[[User:$1|$1]] вам се {{GENDER:$1|захваљује}} на $2 странице [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] вам се {{GENDER:$1|захваљује}} за вашу измену на страници $2.',
	'notification-thanks-email-subject' => '$1 вам се {{GENDER:$1|захваљује}} за вашу измену на {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 вам се {{GENDER:$1|захваљује}} за вашу измену на страници $2.',
	'notification-link-text-respond-to-user' => 'Одговори кориснику',
	'log-name-thanks' => 'Дневник захвалница',
	'log-description-thanks' => 'Испод се налази списак корисника којима су се други корисници захвалили.',
	'logentry-thanks-thank' => '$1 се {{GENDER:$2|захваљује}} кориснику {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 дневник захваљивања',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Jopparn
 * @author Skalman
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'thanks-desc' => 'Lägger till tacklänkar till historik och skillnadsjämförelser',
	'thanks-thank' => 'tacka',
	'thanks-thanked' => '{{GENDER:$1|tackade}}',
	'thanks-button-thank' => '{{GENDER:$1|Tacka}}',
	'thanks-button-thanked' => '{{GENDER:$1|Tackat}}',
	'thanks-error-undefined' => 'Tackåtgärden misslyckades. Var god försök igen.',
	'thanks-error-invalidrevision' => 'Versions-ID är inte giltigt.',
	'thanks-error-ratelimited' => 'Du har överskridit din frekvensgräns. Var god vänta en stund och försök igen', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Skicka}} ett tackmeddelande till denna {{GENDER:$2|användare}}',
	'thanks-confirmation' => 'Vill du {{GENDER:$1|tacka}} $2 för denna redigering?',
	'thanks-thanked-notice' => '$1 meddelades att du gillade {{GENDER:$2|hans|hennes|dennes}} redigering.',
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
	'logentry-thanks-thank' => '$1 {{GENDER:$2|tackade}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 tacklogg',
);

/** Tamil (தமிழ்)
 * @author Jayarathina
 */
$messages['ta'] = array(
	'thanks-desc' => 'திருத்த வரலாறு மற்றும் திருத்தங்களுக்கிடையேயான வேறுபாட்டு பக்கங்களில் நன்றி இணைப்பிடுக',
	'thanks-button-thank' => 'நன்றி!', # Fuzzy
	'thanks-error-undefined' => 'நன்றி தெரிவிப்பது தோல்வியடைந்தது. மீண்டும் முயற்சிக்கவும்.',
	'thanks-error-invalidrevision' => 'திருத்த எண் தவறானது.',
	'echo-pref-subscription-edit-thank' => 'என் தொகுப்புக்கு எனக்கு நன்றி கூறுகிறார்',
	'echo-pref-tooltip-edit-thank' => 'நான் செய்த ஒரு தொகுப்புக்கு எனக்கு யாரேனும் நன்றி சொன்னால் எனக்கு தெரிவி.',
	'echo-category-title-edit-thank' => 'நன்றி!',
	'notification-thanks-diff-link' => 'உங்கள் தொகுப்பு',
	'notification-thanks' => 'நீங்கள் $2 [[:$3]]இல் செய்த தொகுப்புக்கு [[User:$1|$1]] நன்றி தெரிவித்தார்.',
	'notification-thanks-flyout2' => 'நீங்கள் $2இல் செய்த தொகுப்புக்கு [[User:$1|$1]] நன்றி தெரிவித்தார்.',
	'notification-thanks-email-subject' => 'நீங்கள் {{SITENAME}}இல் செய்த தொகுப்புக்கு $1 நன்றி தெரிவித்தார்.',
	'notification-thanks-email-batch-body' => 'நீங்கள் $2இல் செய்த தொகுப்புக்கு $1 நன்றி தெரிவித்தார்.',
	'notification-link-text-respond-to-user' => 'பயனருக்கு பதிலளிக்க',
	'log-name-thanks' => 'நன்றிகள் பதிவு',
	'log-description-thanks' => 'பிற பயனர்களால் நன்றி தெரிவிக்கப்பட்ட பயனர்களின் பட்டியல் கீழே உள்ளது.',
	'logentry-thanks-thank' => '$1, $4க்கு நன்றி தெரிவித்தார்.', # Fuzzy
	'log-show-hide-thanks' => '$1 நன்றிகள் பதிவு',
);

/** Telugu (తెలుగు)
 * @author Arjunaraoc
 * @author Veeven
 * @author Visdaviva
 * @author రహ్మానుద్దీన్
 */
$messages['te'] = array(
	'thanks-desc' => 'చరిత్ర మరియు తేడా వీక్షణాలకు ధన్యవాద లంకెలను జత చేస్తుంది',
	'thanks-thank' => 'కృతజ్ఞత తెలుపు',
	'thanks-thanked' => '{{GENDER:$1|అభినందించారు}}',
	'thanks-error-undefined' => 'కృతజ్ఞతల చర్య విఫలమైంది. దయచేసి మళ్ళీ ప్రయత్నించండి.',
	'thanks-error-invalidrevision' => 'కూర్పుల ID చెల్లదు',
	'thanks-error-ratelimited' => 'మీరు మీ రేట్ హద్దును దాటారు. దయచేసి కాసేపాగి తిరిగి ప్రయత్నించండి.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$2|వాడుకరి}}కి ఒక ధన్యవాద సూచన {{GENDER:$1|పంపండి}}',
	'thanks-confirmation' => '$2 కి ఈ మార్పుకై {{GENDER:$1|కృతజ్ఞతలు}} తెలపాలనుకుంటున్నారా?', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'నా మార్పుకు ధన్యవాదాలు',
	'echo-pref-tooltip-edit-thank' => 'నేను చేసిన మార్పుకు ఎవరైనా ధన్యవాదాలు చెపితే నాకు తెలియజేయి',
	'echo-category-title-edit-thank' => 'ధన్యవాదాలు',
	'notification-thanks-diff-link' => 'మీ మార్పు',
	'notification-thanks' => '[[వాడుకరి:$1|$1]] ఇక్కడ [[:$3]] మీరు $2 కు {{GENDER:$1|ధన్యవాదాలు పంపారు}}.', # Fuzzy
	'notification-thanks-flyout2' => '$2 పై మీరు చేసిన మార్పు కై మీకు [[User:$1|$1]]  {{GENDER:$1|ధన్యవాదాలు పంపారు}}.',
	'notification-thanks-email-subject' => '{{SITENAME}} పై మీరు చేసిన మార్పుకు  $1  {{GENDER:$1|ధన్యవాదాలు పంపారు}}',
	'notification-thanks-email-batch-body' => '$2 పై మీ మార్పుకు $1 మీకు {{GENDER:$1|ధన్యవాదాలు పంపారు}}.',
	'notification-link-text-respond-to-user' => 'వాడుకరికి ప్రతిస్పందించండి',
	'log-name-thanks' => 'ధన్యవాదాల చిట్టా',
	'log-description-thanks' => 'క్రింది వాడుకరులు ఇతర వాడుకరుల నుండి ధన్యవాదాలు పొందారు.',
	'logentry-thanks-thank' => '$1  {{GENDER:$4|$3}} కు {{GENDER:$2|ధన్యవాదాలు పంపారు}}',
	'log-show-hide-thanks' => '$1 ధన్యవాదాల చిట్టా',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 * @author Sky Harbor
 */
$messages['tl'] = array(
	'thanks-desc' => 'Nagdaragdag ng mga kawing ng pasasalamat sa pagtanaw ng kasaysayan at pagkakaiba',
	'thanks-thank' => 'pasalamatan',
	'thanks-thanked' => '{{GENDER:$1|pinasalamatan na}}',
	'thanks-button-thank' => 'Pasalamatan', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|Pinasalamatan na}}',
	'thanks-error-undefined' => 'Nabigo ang kilos ng pagpapasalamat.  Mangyaring subukan muli.',
	'thanks-error-invalidrevision' => 'Walang saysay ang ID ng rebisyon.',
	'thanks-error-ratelimited' => 'Nilampasan mo ang iyong hangganan ng antas. Mangyaring maghintay ng ilang sandali at subukan muli.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Magpadala}} ng isang pabatid ng pasasalamat sa {{GENDER:$2|tagagamit}} na ito',
	'thanks-confirmation' => 'Nais mo bang {{GENDER:$1|pasalamatan}} si $2 para sa pagbabagong ito?', # Fuzzy
	'thanks-thanked-notice' => 'Sinabihan si $1 na ginusto mo ang {{GENDER:$2|kaniyang|kanilang}} pagbabago.', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Pinasalamatan ako para sa aking pagbabago',
	'echo-pref-tooltip-edit-thank' => 'Ipabatid sa akin kapag may nagpasalamat sa akin para sa isang pagbabagong naigawa ko.',
	'echo-category-title-edit-thank' => 'Pasasalamat',
	'notification-thanks-diff-link' => 'ang pagbabago mo',
	'notification-thanks' => '{{GENDER:$1|Pinasalamatan}} ka ni [[User:$1|$1]] para sa $2 sa [[:$3]].',
	'notification-thanks-flyout2' => '{{GENDER:$1|Pinasalamatan}} ka ni [[User:$1|$1]] para sa pagbabago mo sa $2.',
	'notification-thanks-email-subject' => '{{GENDER:$1|Pinasalamatan}} ka ni $1 para sa pagbabago mo sa {{SITENAME}}',
	'notification-thanks-email-batch-body' => '{{GENDER:$1|Pinasalamatan}} ka ni $1 para sa pagbabago mo sa $2.',
	'notification-link-text-respond-to-user' => 'Tumugon sa tagagamit',
	'log-name-thanks' => 'Tala ng pasasalamat',
	'log-description-thanks' => 'Nasa ibaba ang isang tala ng mga tagagamit na pinasalamatan ng ibang tagagamit.',
	'logentry-thanks-thank' => '{{GENDER:$2|Pinasalamatan}} ni $1 si {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 ang tala ng pasasalamat',
);

/** Turkish (Türkçe)
 * @author Incelemeelemani
 * @author Rapsar
 */
$messages['tr'] = array(
	'thanks-desc' => 'Tarih ve fark görünümüne teşekkür bağlantısı ekler',
	'thanks-thank' => 'teşekkür et',
	'thanks-thanked' => '{{GENDER:$1|teşekkür edildi}}',
	'thanks-button-thank' => '{{GENDER:$1|Teşekkür et}}',
	'thanks-button-thanked' => '{{GENDER:$1|Teşekkür}}',
	'thanks-error-undefined' => 'Teşekkür iletilemedi. Lütfen tekrar deneyin.',
	'thanks-error-invalidrevision' => 'Revizyon numarası geçerli değil.',
	'thanks-error-ratelimited' => 'Gönderme limitini aştınız. Lütfen bekleyin ve tekrar deneyin.', # Fuzzy
	'thanks-thank-tooltip' => 'Bu {{GENDER:$2|kullanıcıya}} {{GENDER:$1|teşekkürlerini}} ilet',
	'thanks-confirmation' => 'Bu değişikliğinden ötürü $2 adlı kullanıcıya {{GENDER:$1|teşekkür}} etmek istiyor musunuz?',
	'thanks-thanked-notice' => '$1 kullanıcısına {{GENDER:$2|onu|onu|onları}} beğendiğiniz iletildi.',
	'echo-pref-subscription-edit-thank' => 'Katkım için bana teşekkür edildi',
	'echo-pref-tooltip-edit-thank' => 'Yaptığım katkılar için yapılan teşekkürleri bana bildir.',
	'echo-category-title-edit-thank' => 'Teşekkürler',
	'notification-thanks-diff-link' => 'düzenlemeniz',
	'notification-thanks' => '[[User:$1|$1]], [[:$3]] sayfasındaki $2 değişikliğiniz için size {{GENDER:$1|teşekkür}} etti.',
	'notification-thanks-flyout2' => '[[User:$1|$1]], $2 sayfasındaki değişikliğiniz için size {{GENDER:$1|teşekkür}} etti.',
	'notification-thanks-email-subject' => '$1 {{SITENAME}} değişikliği için {{GENDER:$1|teşekkür}} ediyor',
	'notification-thanks-email-batch-body' => '$1, $2 sayfasındaki değişikliğiniz için size {{GENDER:$1|teşekkür etti}}.',
	'notification-link-text-respond-to-user' => 'Kullanıcıyı yanıtla',
	'log-name-thanks' => 'Teşekkürler kayıtları',
	'log-description-thanks' => 'Diğer teşekkür eden kullanıcılar aşağıda listelenmektedir.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|teşekkür}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 teşekkür kayıtları',
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
	'thanks-button-thank' => '{{GENDER:$1|Подякувати}}',
	'thanks-button-thanked' => '{{GENDER:$1|Подякував|Подякувала}}',
	'thanks-error-undefined' => 'Не вдалось подякувати. Спробуйте знову.',
	'thanks-error-invalidrevision' => 'Неправильний ідентифікатор версії.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Ви}} перевищили свій ліміт частоти. Будь ласка, зачекайте деякий час, і спробуйте знову.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Надіслати}} сповіщення вдячності {{GENDER:$2|цьому користувачу|цій користувачці}}',
	'thanks-confirmation' => 'Ви хочете {{GENDER:$1|подякувати}} $2 за цю зміну?',
	'thanks-thanked-notice' => '$1 повідомив, що вам сподобалися  {{GENDER:$2|його|її|їхні}} зміни.',
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
	'logentry-thanks-thank' => '$1 {{GENDER:$2|подякував|подякувала}} {{GENDER:$4|користувачу|користувачці}} $3',
	'log-show-hide-thanks' => 'журнал подяк $1',
);

/** Urdu (اردو)
 * @author Noor2020
 */
$messages['ur'] = array(
	'thanks-thanked' => '{{GENDER:$1|کا شکریہ ادا کیا}}',
);

/** vèneto (vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'thanks-thank' => 'ringrassia',
	'thanks-thanked' => '{{GENDER:$1|ringrassià}}',
	'thanks-button-thank' => 'Ringrassia', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|Ringrassià}}',
	'thanks-error-undefined' => 'Eror durante el ringrassiamento. Próa da novo.',
	'thanks-error-invalidrevision' => "L'ID de la version no'l xe mia valido.",
	'thanks-error-ratelimited' => 'Te ghè superà el limite massimo de ringrassiamenti. Speta un fià e ripróa.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Màndeghe}} na notifica de ringrassiamento a {{GENDER:$2|sto|sta}} utente qua',
	'thanks-confirmation' => 'Sito sicuro che te vol {{GENDER:$1|ringrassiar}} $2 par sta modifica?', # Fuzzy
	'thanks-thanked-notice' => 'Te ghè dito a $1 che te piase {{GENDER:$2|la so}} modifica.', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'I me ringrassia par na me modifica',
	'echo-pref-tooltip-edit-thank' => 'Avìseme co che qualcheduni me ringrassia par na modifica che gò fato.',
	'echo-category-title-edit-thank' => 'Ringrassiamenti',
	'notification-thanks-diff-link' => 'la to modifica',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|el|la}} te gà ringrassià par $2 su [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|el|la}} te gà ringrassià par la to modifica su $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|el|la}} te gà ringrassià par la to modifica su {{SITENAME}}.',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|el|la}} te gà ringrassià par la to modifica su $2.',
	'notification-link-text-respond-to-user' => "Rispóndighe a l'utente",
	'log-name-thanks' => 'Registro dei ringrassiamenti',
	'log-description-thanks' => 'Sta qua xe na lista dei utenti ringrassià da altri utenti.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|el|la}} gà ringrassià {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 registro dei ringrassiamenti',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Prenn
 */
$messages['vi'] = array(
	'thanks-desc' => 'Thêm liên kết cảm ơn vào các trang lịch sử và khác biệt',
	'thanks-thank' => 'cảm ơn',
	'thanks-thanked' => '{{GENDER:$1}}đã cảm ơn',
	'thanks-button-thank' => 'Cảm ơn', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1}}Đã cảm ơn',
	'thanks-error-undefined' => 'Cảm ơn thất bại. Xin vui lòng thử lại.',
	'thanks-error-invalidrevision' => 'Số phiên bản không hợp lệ.',
	'thanks-error-ratelimited' => 'Bạn đã vượt quá giới hạn tốc độ. Xin vui lòng thử lại lát nữa.',
	'thanks-thank-tooltip' => '{{GENDER:$1}}Gửi thông báo cảm ơn cho {{GENDER:$2}}người dùng này',
	'thanks-confirmation' => 'Bạn có chắc chắn muốn {{GENDER:$1}}cảm ơn $2 vì sửa đổi này?', # Fuzzy
	'thanks-thanked-notice' => 'Đã cho $1 biết rằng bạn thích sửa đổi của {{GENDER:$2}}họ.', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Cảm ơn tôi vì một sửa đổi của tôi',
	'echo-pref-tooltip-edit-thank' => 'Báo cho tôi biết khi nào người ta cảm ơn tôi vì một sửa đổi của tôi.',
	'echo-category-title-edit-thank' => 'Cảm ơn',
	'notification-thanks-diff-link' => 'sửa đổi của bạn',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1}}cảm ơn bạn vì $2 tại [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1}}cảm ơn bạn vì sửa đổi của bạn tại $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1}}cảm ơn bạn vì sửa đổi của bạn tại {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1}}cảm ơn bạn vì sửa đổi của bạn tại $2.',
	'notification-link-text-respond-to-user' => 'Trả lời cho người dùng',
	'log-name-thanks' => 'Nhật trình cảm ơn',
	'log-description-thanks' => 'Dưới đây có danh sách những người dùng được người khác cảm ơn.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2}}đã cảm ơn {{GENDER:$4}}$3',
	'log-show-hide-thanks' => '$1 nhật trình cảm ơn',
);

/** Volapük (Volapük)
 * @author Malafaya
 */
$messages['vo'] = array(
	'thanks-thank' => 'danön',
	'thanks-thanked' => '{{GENDER:$1|pedanon}}',
	'thanks-button-thank' => 'Danön', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|Pedanon}}',
	'thanks-thank-tooltip' => '{{GENDER:$1|Sedön}} nunädi dana {{GENDER:$2|gebane}} at',
	'echo-pref-subscription-edit-thank' => 'Danon obi pro redakam oba',
	'echo-category-title-edit-thank' => 'Dans',
	'notification-thanks-diff-link' => 'redakam olik',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|edanon}} oli pro $2 su [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|edanon}} oli pro redakam olik su $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|edanon}} oli pro redakam olik su {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|edanon}} oli pro redakam olik su $2.',
	'notification-link-text-respond-to-user' => 'Gespikön gebane',
	'log-name-thanks' => 'Jenotalised danas',
	'log-description-thanks' => 'Dono binon lised gebanas fa gebans votik pedanöls.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|edanon}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 jenotalisedi danas',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'logentry-thanks-thank' => '$1 {{GENDER:$2|האט געדאנקט}} {{GENDER:$4|$3}}',
);

/** Cantonese (粵語)
 * @author William915
 */
$messages['yue'] = array(
	'thanks-thank' => '多謝',
	'thanks-thanked' => '{{GENDER:$1|多謝咗}}',
	'thanks-button-thank' => '多謝', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|多謝咗}}',
	'thanks-error-undefined' => '多謝失敗，麻煩再試多次。',
	'thanks-error-invalidrevision' => '錯嘅版本號',
	'echo-category-title-edit-thank' => '人哋嘅多謝',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Chiefwei
 * @author Fantasticfears
 * @author Hzy980512
 * @author Liuxinyu970226
 * @author Qiyue2001
 * @author Xiaomingyan
 * @author Yfdyh000
 * @author Zhuyifei1999
 */
$messages['zh-hans'] = array(
	'thanks-desc' => '添加感谢链接至历史和差异视图',
	'thanks-thank' => '感谢',
	'thanks-thanked' => '{{GENDER:$1|已感谢}}',
	'thanks-button-thank' => '{{GENDER:$1|感谢}}',
	'thanks-button-thanked' => '{{GENDER:$1|已感谢}}',
	'thanks-error-undefined' => '感谢操作失败，请重试。',
	'thanks-error-invalidrevision' => '版本ID无效。',
	'thanks-error-ratelimited' => '{{GENDER:$1|您}}的编辑可能已经超频。请等待一段时间后重试。',
	'thanks-thank-tooltip' => '{{GENDER:$1|发送}}感谢通知给该{{GENDER:$2|用户}}',
	'thanks-confirmation' => '您确定要{{GENDER:$1|感谢}}$2的这个编辑吗？',
	'thanks-thanked-notice' => '$1已被告知你感谢{{GENDER:$2|他|她|他/她}}的编辑。',
	'echo-pref-subscription-edit-thank' => '对我的编辑的感谢',
	'echo-pref-tooltip-edit-thank' => '当有人感谢我的编辑时通知我。',
	'echo-category-title-edit-thank' => '感谢',
	'notification-thanks-diff-link' => '编辑',
	'notification-thanks' => '[[User:$1|$1]]{{GENDER:$1|感谢}}你对[[:$3]]的$2。',
	'notification-thanks-flyout2' => '[[User:$1|$1]]{{GENDER:$1|感谢}}你对$2的编辑。',
	'notification-thanks-email-subject' => '$1{{GENDER:$1|感谢}}你在{{SITENAME}}的编辑',
	'notification-thanks-email-batch-body' => '$1{{GENDER:$1|感谢}}你对$2的编辑。',
	'notification-link-text-respond-to-user' => '回应用户',
	'log-name-thanks' => '感谢日志',
	'log-description-thanks' => '下面是得到其他用户感谢的用户的列表。',
	'logentry-thanks-thank' => '$1{{GENDER:$2|感谢}}{{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1感谢日志',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Ch.Andrew
 * @author Fantasticfears
 * @author Simon Shek
 * @author Waihorace
 */
$messages['zh-hant'] = array(
	'thanks-desc' => '在歷史記錄與檢視差異頁面當中加入感謝連結',
	'thanks-thank' => '感謝',
	'thanks-thanked' => '{{GENDER:$1|已感謝}}',
	'thanks-button-thank' => '{{GENDER:$1|感謝}}',
	'thanks-button-thanked' => '{{GENDER:$1|已感謝}}',
	'thanks-error-undefined' => '感謝的操作失敗。請再試一次。',
	'thanks-error-invalidrevision' => '修訂 ID 無效。',
	'thanks-error-ratelimited' => '您的使用頻率超限，請稍後再試。', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|發送}}一則感謝的通知給此位{{GENDER:$2|使用者}}',
	'thanks-confirmation' => '您確定要對$2的此次編輯表示{{GENDER:$1|感謝}}嗎？',
	'thanks-thanked-notice' => '$1得知了您喜歡{{GENDER:$2|他的|她的|他們的}}編輯。',
	'echo-pref-subscription-edit-thank' => '對於我的編輯所表示的感謝',
	'echo-pref-tooltip-edit-thank' => '有人感謝我所做的編輯時，請通知我。',
	'echo-category-title-edit-thank' => '感謝',
	'notification-thanks-diff-link' => '編輯',
	'notification-thanks' => '[[User:$1|$1]]對於您在[[:$3]]頁面的$2編輯表示{{GENDER:$1|感謝}}。',
	'notification-thanks-flyout2' => '[[User:$1|$1]]對於您在$2頁面的編輯表示{{GENDER:$1|感謝}}。',
	'notification-thanks-email-subject' => '$1對於您在{{SITENAME}}的編輯表示{{GENDER:$1|感謝}}',
	'notification-thanks-email-batch-body' => '$1對於您在$2頁面的編輯表示{{GENDER:$1|感謝}}。',
	'notification-link-text-respond-to-user' => '回應使用者',
	'log-name-thanks' => '感謝日誌',
	'log-description-thanks' => '以下是得到其他人表示感謝的使用者列表。',
	'logentry-thanks-thank' => '$1向{{GENDER:$4|$3}}表示{{GENDER:$2|感謝}}',
	'log-show-hide-thanks' => '$1感謝日誌',
);
