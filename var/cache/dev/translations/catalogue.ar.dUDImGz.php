<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ar', array (
  'validators' => 
  array (
    'This value should be false.' => 'هذه القيمة يجب أن تكون خاطئة.',
    'This value should be true.' => 'هذه القيمة يجب أن تكون حقيقية.',
    'This value should be of type {{ type }}.' => 'هذه القيمة يجب ان تكون من نوع {{ type }}.',
    'This value should be blank.' => 'هذه القيمة يجب ان تكون فارغة.',
    'The value you selected is not a valid choice.' => 'القيمة المختارة ليست خيارا صحيحا.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيارات على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيارات على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.',
    'One or more of the given values is invalid.' => 'واحد أو أكثر من القيم المعطاه خاطئ.',
    'This field was not expected.' => 'لم يكن من المتوقع هذا المجال.',
    'This field is missing.' => 'هذا المجال مفقود.',
    'This value is not a valid date.' => 'هذه القيمة ليست تاريخا صالحا.',
    'This value is not a valid datetime.' => 'هذه القيمة ليست تاريخا و وقتا صالحا.',
    'This value is not a valid email address.' => 'هذه القيمة ليست عنوان بريد إلكتروني صحيح.',
    'The file could not be found.' => 'لا يمكن العثور على الملف.',
    'The file is not readable.' => 'الملف غير قابل للقراءة.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'الملف كبير جدا ({{ size }} {{ suffix }}).اقصى مساحه مسموح بها ({{ limit }} {{ suffix }}).',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'نوع الملف غير صحيح ({{ type }}). الانواع المسموح بها هى {{ types }}.',
    'This value should be {{ limit }} or less.' => 'هذه القيمة يجب ان تكون {{ limit }} او اقل.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حروف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.',
    'This value should be {{ limit }} or more.' => 'هذه القيمة يجب ان تكون {{ limit }} او اكثر.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حروف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.',
    'This value should not be blank.' => 'هذه القيمة يجب الا تكون فارغة.',
    'This value should not be null.' => 'هذه القيمة يجب الا تكون فارغة.',
    'This value should be null.' => 'هذه القيمة يجب ان تكون فارغة.',
    'This value is not valid.' => 'هذه القيمة غير صحيحة.',
    'This value is not a valid time.' => 'هذه القيمة ليست وقت صحيح.',
    'This value is not a valid URL.' => 'هذه القيمة ليست رابط الكترونى صحيح.',
    'The two values should be equal.' => 'القيمتان يجب ان تكونا متساويتان.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'الملف كبير جدا. اقصى مساحه مسموح بها {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'الملف كبير جدا.',
    'The file could not be uploaded.' => 'لم استطع استقبال الملف.',
    'This value should be a valid number.' => 'هذه القيمة يجب ان تكون رقم.',
    'This file is not a valid image.' => 'هذا الملف ليس صورة صحيحة.',
    'This is not a valid IP address.' => 'هذه القيمة ليست عنوان رقمى صحيح.',
    'This value is not a valid language.' => 'هذه القيمة ليست لغة صحيحة.',
    'This value is not a valid locale.' => 'هذه القيمة ليست موقع صحيح.',
    'This value is not a valid country.' => 'هذه القيمة ليست بلدا صالحا.',
    'This value is already used.' => 'هذه القيمة مستخدمة بالفعل.',
    'The size of the image could not be detected.' => 'لم استطع معرفة حجم الصورة.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'عرض الصورة كبير جدا ({{ width }}px). اقصى عرض مسموح به هو{{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'عرض الصورة صغير جدا ({{ width }}px). اقل عرض مسموح به هو{{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'طول الصورة كبير جدا ({{ height }}px). اقصى طول مسموح به هو{{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'طول الصورة صغير جدا ({{ height }}px). اقل طول مسموح به هو{{ min_height }}px.',
    'This value should be the user\'s current password.' => 'هذه القيمة يجب ان تكون كلمة سر المستخدم الحالية.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حروف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.',
    'The file was only partially uploaded.' => 'تم استقبال جزء من الملف فقط.',
    'No file was uploaded.' => 'لم يتم ارسال اى ملف.',
    'No temporary folder was configured in php.ini.' => 'لم يتم تهيئة حافظة مؤقتة فى ملف php.ini.',
    'Cannot write temporary file to disk.' => 'لم استطع كتابة الملف المؤقت.',
    'A PHP extension caused the upload to fail.' => 'احد اضافات PHP تسببت فى فشل استقبال الملف.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عناصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عناصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عناصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.',
    'Invalid card number.' => 'رقم البطاقه غير صحيح.',
    'Unsupported card type or invalid card number.' => 'نوع البطاقه غير مدعوم او الرقم غير صحيح.',
    'This is not a valid International Bank Account Number (IBAN).' => 'الرقم IBAN (رقم الحساب المصرفي الدولي) الذي تم إدخاله غير صالح.',
    'This value is not a valid ISBN-10.' => 'هذه القيمة ليست ISBN-10 صالحة.',
    'This value is not a valid ISBN-13.' => 'هذه القيمة ليست ISBN-13 صالحة.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'هذه القيمة ليست ISBN-10 صالحة ولا ISBN-13 صالحة.',
    'This value is not a valid ISSN.' => 'هذه القيمة ليست ISSN صالحة.',
    'This value is not a valid currency.' => 'العُملة غير صحيحة.',
    'This value should be equal to {{ compared_value }}.' => 'القيمة يجب ان تساوي {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'القيمة يجب ان تكون اعلي من {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'القيمة يجب ان تكون مساوية او اعلي من {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'القيمة يجب ان تطابق {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'القيمة يجب ان تكون اقل من {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'القيمة يجب ان تساوي او تقل عن {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'القيمة يجب ان لا تساوي {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'القيمة يجب ان لا تطابق {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'نسبة العرض على الارتفاع للصورة كبيرة جدا ({{ ratio }}). الحد الأقصى للنسبة المسموح به هو {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'نسبة العرض على الارتفاع للصورة صغيرة جدا ({{ ratio }}). الحد الأدنى للنسبة المسموح به هو {{ max_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'الصورة مربعة ({{ width }}x{{ height }}px). الصور المربعة غير مسموح بها.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'الصورة في وضع أفقي ({{ width }}x{{ height }}px). الصور في وضع أفقي غير مسموح بها.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'الصورة في وضع عمودي ({{ width }}x{{ height }}px). الصور في وضع عمودي غير مسموح بها.',
    'An empty file is not allowed.' => 'ملف فارغ غير مسموح به.',
    'The host could not be resolved.' => 'يتعذر الإتصال بالنطاق.',
    'This value does not match the expected {{ charset }} charset.' => 'هذه القيمة غير متطابقة مع صيغة التحويل {{ charset }}.',
    'This form should not contain extra fields.' => 'هذا النموذج يجب الا يحتوى على اى حقول اضافية.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'مساحة الملف المرسل كبيرة. من فضلك حاول ارسال ملف اصغر.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'قيمة رمز الموقع غير صحيحة. من فضلك اعد ارسال النموذج.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'حدث خطأ اثناء الدخول.',
    'Authentication credentials could not be found.' => 'لم استطع العثور على معلومات الدخول.',
    'Authentication request could not be processed due to a system problem.' => 'لم يكتمل طلب الدخول نتيجه عطل فى النظام.',
    'Invalid credentials.' => 'معلومات الدخول خاطئة.',
    'Cookie has already been used by someone else.' => 'ملفات تعريف الارتباط(cookies) تم استخدامها من قبل شخص اخر.',
    'Not privileged to request the resource.' => 'ليست لديك الصلاحيات الكافية لهذا الطلب.',
    'Invalid CSRF token.' => 'رمز الموقع غير صحيح.',
    'No authentication provider found to support the authentication token.' => 'لا يوجد معرف للدخول يدعم الرمز المستخدم للدخول.',
    'No session available, it either timed out or cookies are not enabled.' => 'لا يوجد صلة بينك و بين الموقع اما انها انتهت او ان متصفحك لا يدعم خاصية ملفات تعريف الارتباط (cookies).',
    'No token could be found.' => 'لم استطع العثور على الرمز.',
    'Username could not be found.' => 'لم استطع العثور على اسم الدخول.',
    'Account has expired.' => 'انتهت صلاحية الحساب.',
    'Credentials have expired.' => 'انتهت صلاحية معلومات الدخول.',
    'Account is disabled.' => 'الحساب موقوف.',
    'Account is locked.' => 'الحساب مغلق.',
  ),
));

$catalogueDe = new MessageCatalogue('de', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dieser Wert sollte false sein.',
    'This value should be true.' => 'Dieser Wert sollte true sein.',
    'This value should be of type {{ type }}.' => 'Dieser Wert sollte vom Typ {{ type }} sein.',
    'This value should be blank.' => 'Dieser Wert sollte leer sein.',
    'The value you selected is not a valid choice.' => 'Sie haben einen ungültigen Wert ausgewählt.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Sie müssen mindestens {{ limit }} Möglichkeit wählen.|Sie müssen mindestens {{ limit }} Möglichkeiten wählen.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Sie dürfen höchstens {{ limit }} Möglichkeit wählen.|Sie dürfen höchstens {{ limit }} Möglichkeiten wählen.',
    'One or more of the given values is invalid.' => 'Einer oder mehrere der angegebenen Werte sind ungültig.',
    'This field was not expected.' => 'Dieses Feld wurde nicht erwartet.',
    'This field is missing.' => 'Dieses Feld fehlt.',
    'This value is not a valid date.' => 'Dieser Wert entspricht keiner gültigen Datumsangabe.',
    'This value is not a valid datetime.' => 'Dieser Wert entspricht keiner gültigen Datums- und Zeitangabe.',
    'This value is not a valid email address.' => 'Dieser Wert ist keine gültige E-Mail-Adresse.',
    'The file could not be found.' => 'Die Datei wurde nicht gefunden.',
    'The file is not readable.' => 'Die Datei ist nicht lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß ({{ size }} {{ suffix }}). Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Der Dateityp ist ungültig ({{ type }}). Erlaubte Dateitypen sind {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dieser Wert sollte kleiner oder gleich {{ limit }} sein.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.',
    'This value should be {{ limit }} or more.' => 'Dieser Wert sollte größer oder gleich {{ limit }} sein.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.',
    'This value should not be blank.' => 'Dieser Wert sollte nicht leer sein.',
    'This value should not be null.' => 'Dieser Wert sollte nicht null sein.',
    'This value should be null.' => 'Dieser Wert sollte null sein.',
    'This value is not valid.' => 'Dieser Wert ist nicht gültig.',
    'This value is not a valid time.' => 'Dieser Wert entspricht keiner gültigen Zeitangabe.',
    'This value is not a valid URL.' => 'Dieser Wert ist keine gültige URL.',
    'The two values should be equal.' => 'Die beiden Werte sollten identisch sein.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß. Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die Datei ist zu groß.',
    'The file could not be uploaded.' => 'Die Datei konnte nicht hochgeladen werden.',
    'This value should be a valid number.' => 'Dieser Wert sollte eine gültige Zahl sein.',
    'This file is not a valid image.' => 'Diese Datei ist kein gültiges Bild.',
    'This is not a valid IP address.' => 'Dies ist keine gültige IP-Adresse.',
    'This value is not a valid language.' => 'Dieser Wert entspricht keiner gültigen Sprache.',
    'This value is not a valid locale.' => 'Dieser Wert entspricht keinem gültigen Gebietsschema.',
    'This value is not a valid country.' => 'Dieser Wert entspricht keinem gültigen Land.',
    'This value is already used.' => 'Dieser Wert wird bereits verwendet.',
    'The size of the image could not be detected.' => 'Die Größe des Bildes konnte nicht ermittelt werden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die Bildbreite ist zu groß ({{ width }}px). Die maximal zulässige Breite beträgt {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die Bildbreite ist zu gering ({{ width }}px). Die erwartete Mindestbreite beträgt {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die Bildhöhe ist zu groß ({{ height }}px). Die maximal zulässige Höhe beträgt {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die Bildhöhe ist zu gering ({{ height }}px). Die erwartete Mindesthöhe beträgt {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dieser Wert sollte dem aktuellen Benutzerpasswort entsprechen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dieser Wert sollte genau {{ limit }} Zeichen lang sein.|Dieser Wert sollte genau {{ limit }} Zeichen lang sein.',
    'The file was only partially uploaded.' => 'Die Datei wurde nur teilweise hochgeladen.',
    'No file was uploaded.' => 'Es wurde keine Datei hochgeladen.',
    'No temporary folder was configured in php.ini.' => 'Es wurde kein temporärer Ordner in der php.ini konfiguriert oder der temporäre Ordner existiert nicht.',
    'Cannot write temporary file to disk.' => 'Kann die temporäre Datei nicht speichern.',
    'A PHP extension caused the upload to fail.' => 'Eine PHP-Erweiterung verhinderte den Upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Diese Sammlung sollte genau {{ limit }} Element beinhalten.|Diese Sammlung sollte genau {{ limit }} Elemente beinhalten.',
    'Invalid card number.' => 'Ungültige Kartennummer.',
    'Unsupported card type or invalid card number.' => 'Nicht unterstützer Kartentyp oder ungültige Kartennummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dieser Wert ist keine gültige internationale Bankkontonummer (IBAN).',
    'This value is not a valid ISBN-10.' => 'Dieser Wert entspricht keiner gültigen ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Dieser Wert entspricht keiner gültigen ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Dieser Wert ist weder eine gültige ISBN-10 noch eine gültige ISBN-13.',
    'This value is not a valid ISSN.' => 'Dieser Wert ist keine gültige ISSN.',
    'This value is not a valid currency.' => 'Dieser Wert ist keine gültige Währung.',
    'This value should be equal to {{ compared_value }}.' => 'Dieser Wert sollte gleich {{ compared_value }} sein.',
    'This value should be greater than {{ compared_value }}.' => 'Dieser Wert sollte größer als {{ compared_value }} sein.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dieser Wert sollte größer oder gleich {{ compared_value }} sein.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dieser Wert sollte kleiner als {{ compared_value }} sein.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dieser Wert sollte kleiner oder gleich {{ compared_value }} sein.',
    'This value should not be equal to {{ compared_value }}.' => 'Dieser Wert sollte nicht {{ compared_value }} sein.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte nicht identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu groß ({{ ratio }}). Der erlaubte Maximalwert ist {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu klein ({{ ratio }}). Der erwartete Minimalwert ist {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Das Bild ist quadratisch ({{ width }}x{{ height }}px). Quadratische Bilder sind nicht erlaubt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Das Bild ist im Querformat ({{ width }}x{{ height }}px). Bilder im Querformat sind nicht erlaubt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Das Bild ist im Hochformat ({{ width }}x{{ height }}px). Bilder im Hochformat sind nicht erlaubt.',
    'An empty file is not allowed.' => 'Eine leere Datei ist nicht erlaubt.',
    'The host could not be resolved.' => 'Der Hostname konnte nicht aufgelöst werden.',
    'This value does not match the expected {{ charset }} charset.' => 'Dieser Wert entspricht nicht dem erwarteten Zeichensatz {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dieser Wert ist kein gültiger BIC.',
    'Error' => 'Fehler',
    'This is not a valid UUID.' => 'Dies ist keine gültige UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Dieser Wert sollte ein Vielfaches von {{ compared_value }} sein.',
    'This form should not contain extra fields.' => 'Dieses Formular sollte keine zusätzlichen Felder enthalten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Die hochgeladene Datei ist zu groß. Versuchen Sie bitte eine kleinere Datei hochzuladen.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Der CSRF-Token ist ungültig. Versuchen Sie bitte das Formular erneut zu senden.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Es ist ein Fehler bei der Authentifikation aufgetreten.',
    'Authentication credentials could not be found.' => 'Es konnten keine Zugangsdaten gefunden werden.',
    'Authentication request could not be processed due to a system problem.' => 'Die Authentifikation konnte wegen eines Systemproblems nicht bearbeitet werden.',
    'Invalid credentials.' => 'Fehlerhafte Zugangsdaten.',
    'Cookie has already been used by someone else.' => 'Cookie wurde bereits von jemand anderem verwendet.',
    'Not privileged to request the resource.' => 'Keine Rechte, um die Ressource anzufragen.',
    'Invalid CSRF token.' => 'Ungültiges CSRF-Token.',
    'No authentication provider found to support the authentication token.' => 'Es wurde kein Authentifizierungs-Provider gefunden, der das Authentifizierungs-Token unterstützt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keine Session verfügbar, entweder ist diese abgelaufen oder Cookies sind nicht aktiviert.',
    'No token could be found.' => 'Es wurde kein Token gefunden.',
    'Username could not be found.' => 'Der Benutzername wurde nicht gefunden.',
    'Account has expired.' => 'Der Account ist abgelaufen.',
    'Credentials have expired.' => 'Die Zugangsdaten sind abgelaufen.',
    'Account is disabled.' => 'Der Account ist deaktiviert.',
    'Account is locked.' => 'Der Account ist gesperrt.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueDe);

return $catalogue;
