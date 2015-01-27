<?php
/** 
*
* ucp [Turkish]
*
* @package language
* @version $Id: ucp.php,v 1.124 2007/06/14 15:03:52 kellanved Exp $ 
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> '"%1$s" (diğer anlamda "biz", "tarafımız", "bizim", "%1$s", "%2$s") tarafından çoğaltılan, yasal olarak sınırlı olan alttaki koşulları kabul etmiş sayılıyorsunuz. Eğer yasal olarak sınırlı olan alttaki koşulların tümünü kabul etmiyorsanız o zaman lütfen "%1$s" mesaj panosuna giriş yapmayın ve/veya kullanmayın. Biz bu koşulları herhangi bir zamanda değiştirebiliriz ve sizi bilgilendirebiliriz, buna rağmen kendiniz düzenli olarak bu koşulları tekrar gözden geçirerek  "%1$s" mesaj panosunu kullanmaya devam edebilirsiniz, yasal olarak sınırlı olan bu koşulların güncellenmesi ve/veya düzenlenmesi durumunda meydana gelebilecek değişiklikleri de kabul etmiş sayılırsınız.<br />
	<br />
	Forumlarımız phpBB (diğer anlamda "onlar", "onlara", "onların", "phpBB yazılımı", "www.phpbb.com", "phpBB Grubu", "phpBB Takımları") tarafından güçlendirilmiştir -ki bu da "<a href="http://opensource.org/licenses/gpl-license.php">General Public License</a>" (diğer anlamda "GPL") altında bir forum yazılımı olarak yayınlanmıştır ve bu yazılımı <a href="https://www.phpbb.com/">www.phpbb.com</a> adresinden indirebilirsiniz. phpBB yazılımı sadece internet tabanlı tartışmaları kolaylaştırmak içindir, phpBB Grubu müsaade edilebilir içerik ve/veya davranış olarak izin verdiğimiz ve/veya izin vermediğimiz şeylerden sorumlu değildir. phpBB hakkında daha fazla bilgi için, lütfen bu adrese bakın: <a href="https://www.phpbb.com/">https://www.phpbb.com/</a>.<br />
	<br />
	Küfürlü, müstehcen, kaba, iftira niteliğinde, nefret dolu, tehdit edici, sekse yönelik veya ülkenizin kanunlarını çiğneyici içerikler göndermemeyi kabul ediyorsunuz, "%1$s" mesaj panosu hangi ülkede barındırılıyorsa o ülkenin kanunları veya Uluslararası kanunlar geçerlidir. Bunları dikkate almamanız durumunda hemen ve süresizce mesaj panosundan yasaklanırsınız ve eğer tarafımızca gerekli görülürse İnternet Servis Sağlayıcınız da haberdar edilir. Bütün mesajların IP adresi bu koşulların uygulanmasına yardımcı olmak için kaydedilmektedir. "%1$s" mesaj panosunda uygun gördüğümüz durumlarda ve zamanlarda herhangi bir başlığı silme, değiştirme, taşıma veya kapatma hakkımızın olduğunu kabul ediyorsunuz. Bir kullanıcı olarak her girdiğiniz bilginin veritabanında saklanacağını kabul ediyorsunuz. Her ne kadar bu bilgiler sizin bilginiz dışında üçüncü şahıslara verilmeyecek olsa da, herhangi bir hack saldırısı sonucunda bu bilgiler dağılırsa bundan "%1$s" veya phpBB kesinlikle sorumlu değildir.
	',

	'PRIVACY_POLICY'		=> 'Bu sözleşmedeki açıklamalar "%1$s" mesaj panosu ile bağlı grupların (diğer anlamda "biz", "bizler", "bizim", "%1$s", "%2$s") ve phpBB (diğer anlamda "onlar", "onlara", "onların", "phpBB yazılımı", "www.phpbb.com", "phpBB Grubu", "phpBB Takımları") yazılımının, ayrıca tarafınızdan kullanılan oturum boyunca toplanan bazı bilgilerin (diğer anlamda "sizin bilgileriniz") nasıl kullanılacağını içermektedir.<br />
	<br />
	Bilgileriniz iki konu altında toplanır. İlki, "%1$s" mesaj panosunu dolaşırken phpBB yazılımı belirli sayıda çerezler oluşturacaktır, bu küçük metin dosyaları bilgisayarınızda web tarayıcınızın temporary files klasörüne indirilir. İlk iki çerezler sadece bir kullanıcı kimliği (diğer anlamda "user-id") ve bir misafir oturum kimliği (diğer anlamda "session-id") içerir, bu size phpBB yazılımı tarafından otomatik olarak atanır. Üçüncü çerez ise "%1$s" mesaj panosundaki başlıkları dolaşabilmeniz için oluşturulur ve okumuş olduğunuz başlıkların depolanması için kullanılır, böylece kullanıcı yetenekleriniz hızlanacaktır.<br />
	<br />
	Ayrıca "%1$s" mesaj panosunu dolaşırken phpBB yazılımı için harici çerezler oluşturabiliriz, buna rağmen bu belgenin kapsamında görünenler dışında sadece phpBB yazılımı tarafından oluşturulan sayfalar kastedilmektedir. İkinci konu ise tarafınızdan bize gönderilen bilgileri topluyoruz. Bu olabilir, ve bunlarla sınırlı değildir: bir misafir kullanıcının gönderdiği mesajlar (diğer anlamda "ziyaretçi mesajları"), "%1$s" mesaj panosuna yapılan kayıtlar (diğer anlamda "hesabınız") ve kayıt olup giriş yaptıktan sonra tarafınızdan gönderilen mesajlar (diğer anlamda "mesajlarınız").<br />
	<br />
	Hesabınızda tanınmanız amacıyla sade bir içerikte isminiz (diğer anlamda "kullanıcı adınız"), hesabınıza giriş yapabilmek için kullanacağınız bir kişisel şifre (diğer anlamda "şifreniz") ve bir kişisel, geçerli e-posta adresiniz (diğer anlamda "e-mail adresiniz") olacaktır. "%1$s" mesaj panosunda hesabınıza ait bilgileriniz hostumuzun barındığı ülkedeki kanunlar kapsamında veri-koruma yöntemiyle korunmaktadır. Kayıt işlemi sırasında "%1$s" tarafından istenen kullanıcı adınız, şifreniz ve e-posta adresinizin dışında neyin gerekli ya da isteğe bağlı olacağı “%1$s” mesaj panosunun takdirine bağlıdır. Bütün bunlara karşı, hesabınızdaki hangi bilgilerin herkes tarafından görüntülenebileceğini seçme hakkına sahipsiniz. Ayrıca, hesabınız ile, phpBB yazılımından otomatik e-postalar oluşturup gönderme veya alma hakkına sahipsiniz.<br />
	<br />
	Şifreniz güvenlik açısından (bir hash yöntemiyle) yeniden şifrelenmiştir. Bununla birlikte, farklı web sitelerinde aynı şifreyi kullanmamanız önerilir. Şifreniz "%1$s" mesaj panosundaki hesabınıza erişim için gerekmektedir, ayrıca lütfen şifrenizi dikkatli koruyun ve hiç bir surette "%1$s" ile bağlantılı bir kimseye, phpBB veya bir diğer 3. parti kişi veya sitelere, şifreniz için soru sormayın. Hesabınız için şifrenizi unutmanız durumunda, phpBB yazılımı tarafından sağlanan "Şifremi unuttum" özelliğini kullanabilirsiniz. Bu işlem size kullanıcı adınızı ve e-posta adresinizi soracak, daha sonra phpBB yazılımı hesabınız için istenen yeni bir şifre oluşturacaktır.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Hesabınız şimdi aktif edildi. Kayıt olduğunuz için teşekkür ederiz.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Hesap şimdi aktif edildi.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Hesabınız şimdi başarıyla yeniden aktif edildi.',
	'ACCOUNT_ADDED'					=> 'Kayıt olduğunuz için teşekkür ederiz, hesabınız oluşturuldu. Kullanıcı adı ve şifreniz ile şimdi giriş yapabilirsiniz.',
	'ACCOUNT_COPPA'					=> 'Hesabınız oluşturuldu fakat onaylanmadı, lütfen detaylar için e-posta adresinizi kontrol edin.',
 	'ACCOUNT_EMAIL_CHANGED'			=> 'Hesabınız güncellendi. Fakat, bu mesaj panosu e-posta değişikliklerinde yeniden hesap aktivasyonu istiyor. Belirttiğiniz yeni e-posta adresine bir aktivasyon şifresi gönderildi. Lütfen daha fazla bilgi için e-posta kutunuzu kontrol edin.',
 	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Hesabınız güncellendi. Fakat, bu mesaj panosu e-posta değişikliklerinde yöneticiler tarafından yapılması gereken yeniden hesap aktivasyonu istiyor. Yöneticilere bir e-posta gönderildi ve onlar size hesabınız yeniden aktif edildiğinde bilgi vereceklerdir.',
	'ACCOUNT_INACTIVE'				=> 'Hesabınız oluşturuldu. Fakat, bu mesaj panosu hesap aktivasyonu istemektedir, belirlediğiniz e-posta adresine bir aktivasyon şifresi gönderildi. Lütfen daha fazla bilgi için e-posta adresinizi kontrol edin.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Hesabınız oluşturuldu. Fakat, bu mesaj panosu yönetici grubu tarafından yapılması gereken hesap aktivasyonu istemektedir. Onlara şu an bir e-posta gönderildi ve hesabınız aktif edildiği zaman bilgilendirileceksiniz.',
	'ACTIVATION_EMAIL_SENT'			=> 'Aktivasyon e-postası, e-posta adresinize gönderildi.',
	'ACTIVATION_EMAIL_SENT_ADMIN'   => 'Aktivasyon e-postası, yöneticilerin e-posta adreslerine gönderildi.',
	'ADD'							=> 'Ekle',
	'ADD_BCC'						=> 'Ekle [BCC]',
	'ADD_FOES'						=> 'Yeni engellenenler ekle',
	'ADD_FOES_EXPLAIN'				=> 'Her bir satıra ayrı ayrı farklı kullanıcı adları girebilirsiniz.',
	'ADD_FOLDER'					=> 'Klasör ekle',
	'ADD_FRIENDS'					=> 'Yeni arkadaşlar ekle',
	'ADD_FRIENDS_EXPLAIN'				=> 'Her bir satıra ayrı ayrı farklı kullanıcı adları girebilirsiniz.',
	'ADD_NEW_RULE'					=> 'Yeni kural ekle',
	'ADD_RULE'						=> 'Kural ekle',
	'ADD_TO'						=> 'Ekle [Kime]',
	'ADD_USERS_UCP_EXPLAIN'			=> 'Buradan gruba yeni kullanıcılar ekleyebilirsiniz. Seçili kullanıcı için bu grubun yeni varsayılan grup olup olmayacağını belirleyebilirsiniz. Lütfen her kullanıcı adını ayrı bir satıra girin.',
	'ADMIN_EMAIL'					=> 'Yöneticiler bana bilgi amaçlı e-posta gönderebilir',
	'AGREE'							=> 'Bu koşulları kabul ediyorum',
	'ALLOW_PM'						=> 'Kullanıcıların size özel mesaj göndermelerine izin ver',
	'ALLOW_PM_EXPLAIN'				=> 'Not: Yöneticiler ve moderatörler her zaman size özel mesaj gönderebilirler.',
	'ALREADY_ACTIVATED'				=> 'Hesabınız zaten aktif edildi.',
	'ATTACHMENTS_EXPLAIN'			=> 'Bu mesaj panosundaki mesajlara eklediğiniz eklentilerin bir listesidir.',
	'ATTACHMENTS_DELETED'			=> 'Eklentiler başarıyla silindi',
	'ATTACHMENT_DELETED'			=> 'Eklenti başarıyla silindi',
	'AVATAR_CATEGORY'				=> 'Kategori',
	'AVATAR_EXPLAIN'				=> 'En yüksek boyutlar; genişlik: %1$d piksel, yükseklik: %2$d piksel, dosya boyutu: %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Avatar işlevselliği şimdilik kapatıldı.',
	'AVATAR_GALLERY'				=> 'Yerel galeri',
	'AVATAR_GENERAL_UPLOAD_ERROR'		=> 'Avatar şuraya yüklenemiyor: %s.',
	'AVATAR_NOT_ALLOWED'			=> 'Avatarınız görüntülenemiyor çünkü avatarlara izin verilmiyor.',
	'AVATAR_PAGE'					=> 'Sayfa',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'Şu anki avatarınız görüntülenemiyor çünkü avatarınızın türüne izin verilmiyor.',

	'BACK_TO_DRAFTS'			=> 'Kaydedilen taslaklara dön',
	'BACK_TO_LOGIN'				=> 'Giriş ekranına dön',
	'BIRTHDAY'					=> 'Doğum günü',
	'BIRTHDAY_EXPLAIN'			=> 'Doğum gününüzün olduğu yılı ayarladığınız zaman yaşınız listelenecektir.',
	'BOARD_DATE_FORMAT'			=> 'Zaman formatı',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'PHP <a href="http://www.php.net/date" onclick="this.target=\'_blank\';" title="Yeni bir pencerede açılır">date()</a> fonksiyonu ile aynı sözdizimi kullanılır.',
	'BOARD_DST'					=> 'Yaz Saati/<abbr title="Gün Işığından Tasarruf Zamanı">GITZ</abbr> uygulamasını kullan',
	'BOARD_LANGUAGE'			=> 'Dil',
	'BOARD_STYLE'				=> 'Mesaj panosu stili',
	'BOARD_TIMEZONE'			=> 'Zaman dilimi',
	'BOOKMARKS'					=> 'Sık kullanılanlar',
	'BOOKMARKS_EXPLAIN'			=> 'İleride görüntülemek için başlıkları sık kullanılanlara ekleyebilirsiniz. Sık kullanılan başlıkları silmek için yanlarındaki kutucuğu işaretleyin ve <em>İşaretlileri sık kullanılanlardan sil</em> butonuna tıklayın.',
	'BOOKMARKS_DISABLED'		=> 'Bu mesaj panosunda sık kullanılanlar özelliği kapatıldı.',
	'BOOKMARKS_REMOVED'			=> 'Sık kullanılanlar başarıyla silindi.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Bu mesajı daha fazla düzenleyemez veya silemezsiniz.',
	'CANNOT_MOVE_TO_SAME_FOLDER'	=> 'Silmek istediğiniz klasöre mesajlar taşınamaz.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Giden kutusundan mesajlar taşınamaz.',
	'CANNOT_RENAME_FOLDER'		=> 'Bu klasör yeniden adlandırılamıyor.',
	'CANNOT_REMOVE_FOLDER'		=> 'Bu klasör silinemiyor.',
	'CHANGE_DEFAULT_GROUP'		=> 'Varsayılan grubu değiştir',
	'CHANGE_PASSWORD'			=> 'Şifreyi değiştir',
	'CLICK_GOTO_FOLDER'			=> '%1$s“%3$s” adlı klasörünüze gidin%2$s',	
	'CLICK_RETURN_FOLDER'		=> '%1$s“%3$s” adlı klasörünüze dönün%2$s',
	'CONFIRMATION'				=> 'Kayıt doğrulaması',
	'CONFIRM_CHANGES'			=> 'Değişiklikleri doğrula',
	'CONFIRM_EMAIL'				=> 'E-posta adresini doğrula',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Sadece e-posta adresinizi değiştireceğiniz zaman bunu belirtmelisiniz.',
	'CONFIRM_EXPLAIN'			=> 'Otomatik kayıtları önlemek için mesaj panosu yöneticisi bir onay kodu girmenizi istiyor. Alttaki resmin içerisinde gösterilen kodu görmelisiniz. Eğer kodu bozuk görüyor veya okuyamıyorsanız lütfen %sMesaj Panosu Yöneticisi%s ile iletişime geçin.',
	'VC_REFRESH'            => 'Onay kodunu yenile',
	'VC_REFRESH_EXPLAIN'      => 'Eğer kodu okuyamıyorsanız butona tıklayarak yeni bir tane isteyebilirsiniz.',
	
	'CONFIRM_PASSWORD'			=> 'Şifreyi doğrula',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Sadece üstteki şifrenizi değiştirdiğiniz zaman şifrenizi doğrulamanız gerekmektedir.',
	'COPPA_BIRTHDAY'			=> 'Kayıt işlemine devam edebilmek için lütfen ne zaman doğduğunuzu belirtin.',
	'COPPA_COMPLIANCE'			=> 'COPPA anlaşması',
	'COPPA_EXPLAIN'				=> 'Not: Gönder bağlantısına tıkladığınız zaman hesabınız oluşturulacaktır. Fakat kaydınız anne, baba veya velinize onaylatana kadar aktif olmayacaktır. Gerekli detayların kopyasını nereye göndereceğiniz konusunda bir e-posta alacaksınız.',
	'CREATE_FOLDER'				=> 'Klasör ekle…',
	'CURRENT_IMAGE'				=> 'Şu anki resim',
	'CURRENT_PASSWORD'			=> 'Şu anki şifre',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Eğer e-posta adresinizi ya da kullanıcı adınızı değiştirmek istiyorsanız, şu anki şifrenizi girmelisiniz.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => 'Şifrenizi, e-posta adresinizi, ya da kullanıcı adınızı değiştirmek için şu anki şifrenizi girmelisiniz.',
	'CUR_PASSWORD_EMPTY'		=> 'Şu anki şifrenizi girmediniz.',
	'CUR_PASSWORD_ERROR'		=> 'Girilen şu anki şifre hatalı.',
	'CUSTOM_DATEFORMAT'			=> 'Özel…',

	'DEFAULT_ACTION'			=> 'Varsayılan eylem',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Eğer yukarıdakilerin hiç biri uygulanmazsa bu eylem başlatılacaktır.',
	'DEFAULT_ADD_SIG'			=> 'Varsayılan olarak imzamı ekle',
	'DEFAULT_BBCODE'			=> 'Varsayılan olarak BBCodeları aktif et',
	'DEFAULT_NOTIFY'			=> 'Varsayılan olarak yeni cevaplar geldiğinde beni haberdar et',
	'DEFAULT_SMILIES'			=> 'Varsayılan olarak ifadeleri aktif et',
	'DEFINED_RULES'				=> 'Belirlenen kurallar',
	'DELETED_TOPIC'				=> 'Başlık silindi.',
	'DELETE_ATTACHMENT'			=> 'Eklentiyi sil',
	'DELETE_ATTACHMENTS'		=> 'Eklentileri sil',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Bu eklentiyi silmek istediğinize emin misiniz?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Bu eklentileri silmek istediğinize emin misiniz?',
	'DELETE_AVATAR'				=> 'Resmi sil',
	'DELETE_COOKIES_CONFIRM'	=> 'Bu mesaj panosu tarafından ayarlanan tüm çerezleri silmek istediğinize emin misiniz?',
	'DELETE_MARKED_PM'			=> 'İşaretli mesajları sil',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Tüm işaretlenen mesajları silmek istediğinize emin misiniz?',
	'DELETE_OLDEST_MESSAGES'	=> 'Eski mesajları sil',
	'DELETE_MESSAGE'			=> 'Mesajı sil',
	'DELETE_MESSAGE_CONFIRM'	=> 'Bu özel mesajı silmek istediğinize emin misiniz?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Kaldırılan klasör içerisindeki tüm mesajları sil',
	'DELETE_RULE'				=> 'Kuralı sil',
	'DELETE_RULE_CONFIRM'		=> 'Bu kuralı silmek istediğinize emin misiniz?',
	'DEMOTE_SELECTED'			=> 'Seçilenin rütbesini düşür',
	'DISABLE_CENSORS'			=> 'Kelime sansürlemeyi aç',
	'DISPLAY_GALLERY'			=> 'Galeriyi göster',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Girilen e-posta alan adı\'nın MX kaydı geçerli değil.',
	'DOWNLOADS'					=> 'İndirmeler',
	'DRAFTS_DELETED'			=> 'Seçilen tüm taslaklar başarıyla silindi.',
	'DRAFTS_EXPLAIN'			=> 'Buradan kayıtlı taslaklarınızı görüntüleyebilir, düzenleyebilir ve silebilirsiniz.',
	'DRAFT_UPDATED'				=> 'Taslak başarıyla güncellendi.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Buradan taslağınızı düzenleyebilirsiniz. Taslaklar eklenti ve anket bilgileri içermez.',
	'EMAIL_BANNED_EMAIL'		=> 'Girdiğiniz e-posta adresinin kullanım izni yok.',
	'EMAIL_REMIND'				=> 'Bu, hesabınız ile ilişkilendirilmiş e-posta adresi olmalıdır. Eğer bunu kullanıcı kontrol paneliniz yardımıyla değiştirmediyseniz o zaman bu e-posta adresi, hesabınız ile kayıt olduğunuz e-posta adresinizdir.',
	'EMAIL_TAKEN_EMAIL'			=> 'Girilen e-posta adresi zaten kullanılıyor.',
	'EMPTY_DRAFT'				=> 'Ayarlarınızı değiştirmek için bir mesaj girmelisiniz.',
	'EMPTY_DRAFT_TITLE'			=> 'Bir taslak başlığı girmelisiniz.',
	'EXPORT_AS_XML'				=> 'XML olarak çıkar',
	'EXPORT_AS_CSV'				=> 'CSV olarak çıkar',
	'EXPORT_AS_CSV_EXCEL'			=> 'CSV (Excel) olarak çıkar',
	'EXPORT_AS_TXT'				=> 'TXT olarak çıkar',
	'EXPORT_AS_MSG'				=> 'MSG olarak çıkar',
	'EXPORT_FOLDER'				=> 'Bu görüntüleneni dışarı çıkar',

	'FIELD_REQUIRED'			=> '“%s” alanı tamamlanmış olmalıdır.',
	'FIELD_TOO_SHORT'			=> '“%1$s” alanı çok kısa, en az %2$d karakter isteniyor.',
	'FIELD_TOO_LONG'			=> '“%1$s” çok uzun, en fazla %2$d karaktere izin veriliyor.',
	'FIELD_TOO_SMALL'			=> '“%1$s” değeri çok küçük, en az %2$d değeri isteniyor.',
	'FIELD_TOO_LARGE'			=> '“%1$s” değeri çok büyük, en fazla %2$d değerine izin veriliyor.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> '“%s” alanındaki karakterler geçersiz, sadece sayılara izin veriliyor.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> '“%s” alanındaki karakterler geçersiz, sadece alfanümerik karakterlere izin veriliyor.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> '“%s” alanındaki karakterler geçersiz, sadece alfanümerik, boşluk veya -+_[] karakterlerine izin veriliyor.',
	'FIELD_INVALID_DATE'			=> '“%s” alanındaki tarih geçersiz.',
	'FIELD_INVALID_VALUE'				=> '“%s” alanındaki değer geçersiz.',	

	'FOE_MESSAGE'				=> 'Engellenenden mesaj',
	'FOES_EXPLAIN'				=> 'Engellenen kullanıcılar varsayılan olarak yoksayılacaktır. Bu kullanıcılar tarafından gönderilen mesajlar tam olarak görüntülenmeyecektir. Engellenenlerden gelen özel mesajlara izin verilmeyecektir. Not: Moderatör veya yöneticileri yoksayamazsınız.',
	'FOES_UPDATED'				=> 'Engellenenler listeniz başarıyla güncellendi.',
	'FOLDER_ADDED'				=> 'Klasör başarıyla eklendi.',
	'FOLDER_MESSAGE_STATUS'			=> '%2$d mesajdan %1$d tanesi saklandı',
	'FOLDER_NAME_EMPTY'			=> 'Bu klasör için bir isim girmelisiniz.',	
	'FOLDER_NAME_EXIST'			=> '<strong>%s</strong> isimli klasör zaten var.',
	'FOLDER_OPTIONS'			=> 'Klasör seçenekleri',
	'FOLDER_RENAMED'			=> 'Klasör başarıyla yeniden adlandırıldı.',
	'FOLDER_REMOVED'			=> 'Klasör başarıyla silindi.',
	'FOLDER_STATUS_MSG'			=> 'Klasör %1$d%% dolu (%3$d mesajdan %2$d tanesi saklandı)',
	'FORWARD_PM'				=> 'ÖM İlet',
	'FORCE_PASSWORD_EXPLAIN'		=> 'Mesaj panosunu dolaşmaya devam etmeden önce şifrenizi değiştirmeniz gerekmektedir.',
	'FRIEND_MESSAGE'			=> 'Arkadaştan mesaj',
	'FRIENDS'				=> 'Arkadaşlar',
	'FRIENDS_EXPLAIN'			=> 'Arkadaşlar, üyelere kolay erişim sağlayıp sık sık iletişim kurmaya olanak sağlar. Eğer tema uygun desteği veriyorsa bir arkadaş tarafından oluşturulan mesajlar detaylı veya belirgin olarak görünebilir.',
	'FRIENDS_OFFLINE'			=> 'Çevrimdışı',
	'FRIENDS_ONLINE'			=> 'Çevrimiçi',
	'FRIENDS_UPDATED'			=> 'Arkadaş listeniz başarıyla güncellendi.',
	'FULL_FOLDER_OPTION_CHANGED'		=> 'Bir klasör dolu olduğu zaman yapılacak eylem başarıyla değiştirildi.',
	'FWD_ORIGINAL_MESSAGE'			=> '-------- Orijinal Mesaj --------',
	'FWD_SUBJECT'				=> 'Konu: %s',
	'FWD_DATE'				=> 'Tarih: %s',
	'FWD_FROM'				=> 'Kimden: %s',
	'FWD_TO'				=> 'Kime: %s',

	'GLOBAL_ANNOUNCEMENT'			=> 'Global duyuru',

	'HIDE_ONLINE'				=> 'Çevrimiçi durumumu gizle',
	'HIDE_ONLINE_EXPLAIN'      => 'Bu ayarı değiştirirseniz mesaj panosuna yapacağınız sonraki ziyaretinize kadar etkisi olmayacaktır.',
	'HOLD_NEW_MESSAGES'			=> 'Yeni mesajları kabul etme (Yeni mesajlar alan kullanılır oluncaya kadar tutulacaktır)',
	'HOLD_NEW_MESSAGES_SHORT'		=> 'Yeni mesajlar tutulacaktır',

	'IF_FOLDER_FULL'			=> 'Eğer klasör doluysa',
	'IMPORTANT_NEWS'			=> 'Önemli duyurular',
	'INVALID_USER_BIRTHDAY'         => 'Girilen doğum günü geçerli bir tarih değil.',
	'INVALID_CHARS_USERNAME'	=> 'Kullanıcı adı yasaklı karakterler içeriyor.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Şifre, istenilen karakterleri içermiyor.',
	'ITEMS_REQUIRED'			=> '* ögeleri ile işaretlenen profil alanları gerekli tutulduğu için bunları doldurmak zorundasınız.',

	'JOIN_SELECTED'				=> 'Seçilene katıl',

	'LANGUAGE'				=> 'Dil',
	'LINK_REMOTE_AVATAR'			=> 'Uzak siteden bağlantı ver',
	'LINK_REMOTE_AVATAR_EXPLAIN'		=> 'Avatar resmini içeren bağlantı vermek istediğiniz URL adresini girin.',
	'LINK_REMOTE_SIZE'			=> 'Avatar boyutları',
	'LINK_REMOTE_SIZE_EXPLAIN'		=> 'Avatarın genişlik ve yüksekliğini belirtin, otomatik doğrulama denemesi için boş bırakın.',
	'LOGIN_EXPLAIN_UCP'			=> 'Kullanıcı Kontrol Paneline erişebilmek için lütfen giriş yapın.',
	'LOGIN_REDIRECT'			=> 'Başarıyla giriş yaptınız.',
	'LOGOUT_FAILED'       => 'Çıkış yapamadınız, oturumunuz ile uyumlu istek yok. Eğer problemlerle karşılaşmaya devam ederseniz lütfen mesaj panosu yöneticisi ile iletişime geçin.',
	'LOGOUT_REDIRECT'			=> 'Başarıyla çıkış yaptınız.',

	'MARK_IMPORTANT'			=> 'Önemli olarak işaretle/işareti kaldır',
	'MARKED_MESSAGE'			=> 'İşaretli mesaj',
	'MAX_FOLDER_REACHED'			=> 'Kullanıcıya izin verilen en yüksek klasör belirleme sayısı aşıldı.',
	'MESSAGE_BY_AUTHOR'			=> 'tarafından',
	'MESSAGE_COLOURS'			=> 'Mesaj renkleri',
	'MESSAGE_DELETED'			=> 'Mesaj başarıyla silindi.',
	'MESSAGE_EDITED'				=> 'Mesaj başarıyla düzenlendi.',
	'MESSAGE_HISTORY'				=> 'Mesaj geçmişi',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Bu mesaj, yazarı tarafından silindi.',
	'MESSAGE_SENT_ON'			=> 'tarih',
	'MESSAGE_STORED'			=> 'Bu mesaj başarıyla gönderildi.',
	'MESSAGE_TO'				=> 'Kime',
	'MESSAGES_DELETED'			=> 'Mesajlar başarıyla silindi',
	'MOVE_DELETED_MESSAGES_TO'	=> 'Silinen klasördeki mesajları şuraya taşı',
	'MOVE_DOWN'					=> 'Aşağı taşı',
	'MOVE_MARKED_TO_FOLDER'		=> 'İşaretlileri %s klasörüne taşı',
	'MOVE_PM_ERROR'					=> 'Mesajlar yeni klasöre taşınırken bir hata oluştu, %2$d mesajdan sadece %1$d tanesi taşındı.',
	'MOVE_TO_FOLDER'			=> 'Klasöre taşı',
	'MOVE_UP'					=> 'Yukarı taşı',

	'NEW_EMAIL_CONFIRM_EMPTY'		=> 'Doğrulamak için bir e-posta adresi girmediniz.',
	'NEW_EMAIL_ERROR'			=> 'Girdiğiniz e-posta adresi diğeriyle uyuşmuyor.',
	'NEW_FOLDER_NAME'			=> 'Yeni klasör adı',
	'NEW_PASSWORD'				=> 'Yeni şifre',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'Doğrulamak için bir şifre girmediniz.',	
	'NEW_PASSWORD_ERROR'		=> 'Girdiğiniz şifre diğeriyle uyuşmuyor.',
	'NOTIFY_METHOD'				=> 'Bildiri metodu',
	'NOTIFY_METHOD_BOTH'		=> 'Her ikisi',
	'NOTIFY_METHOD_EMAIL'		=> 'Sadece e-posta',
	'NOTIFY_METHOD_EXPLAIN'		=> 'Bu mesaj panosu ile gönderilecek mesajlar için metot.',
	'NOTIFY_METHOD_IM'			=> 'Sadece Jabber',
	'NOTIFY_ON_PM'				=> 'Yeni özel mesaj geldiğinde beni haberdar et',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Misafir kullanıcıyı arkadaşlar listenize ekleyemezsiniz.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'Arkadaş listenize botları ekleyemezsiniz.',
	'NOT_ADDED_FRIENDS_FOES'	=> 'Engellenenler listenizde olanları arkadaşlar listenize ekleyemezsiniz.',
	'NOT_ADDED_FRIENDS_SELF'	=> 'Kendinizi arkadaşlar listesine ekleyemezsiniz.',
	'NOT_ADDED_FOES_MOD_ADMIN'	=> 'Yöneticileri ve moderatörleri engellenenler listenize ekleyemezsiniz.',
	'NOT_ADDED_FOES_ANONYMOUS'	=> 'Misafir kullanıcıyı engellenenler listenize ekleyemezsiniz.',
	'NOT_ADDED_FOES_BOTS'			=> 'Engellenenler listenize botları ekleyemezsiniz.',
	'NOT_ADDED_FOES_FRIENDS'	=> 'Arkadaşlar listenizde olanları engellenenler listenize ekleyemezsiniz.',
	'NOT_ADDED_FOES_SELF'		=> 'Kendinizi engellenenler listesine ekleyemezsiniz.',
	'NOT_AGREE'					=> 'Bu koşulları kabul etmiyorum',
	'NOT_ENOUGH_SPACE_FOLDER'	=> '“%s” adındaki gidecek klasör dolu görünüyor. İstenilen eylem gerçekleştirilemiyor.',
	'NOT_MOVED_MESSAGE'			=> 'Şu anda 1 yeni özel mesajınız tutuluyor, çünkü klasör dolu.',
	'NOT_MOVED_MESSAGES'		=> 'Şu anda %d yeni özel mesajınız tutuluyor, çünkü klasör dolu.',
	'NO_ACTION_MODE'			=> 'Hiç bir mesaj eylemi belirtilmedi',
	'NO_AUTHOR'					=> 'Bu mesaj için hiç bir yazar belirtilmedi',
	'NO_AVATAR_CATEGORY'		=> 'Yok',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Özel mesajları silme yetkiniz yok.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Özel mesajları düzenleme yetkiniz yok.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Özel mesajları iletme yetkiniz yok.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Gruplara özel mesaj gönderme yetkiniz yok.',
	'NO_AUTH_PASSWORD_REMINDER'      => 'Yeni bir şifre istemek için yetkiniz yok.',
	'NO_AUTH_READ_HOLD_MESSAGE'      => 'Tutulan özel mesajları okumak için yetkiniz yok.',
	'NO_AUTH_READ_MESSAGE'         => 'Özel mesajları okumak için yetkiniz yok.',
	'NO_AUTH_READ_REMOVED_MESSAGE'   => 'Bu mesajı okuyamazsınız çünkü mesaj, yazarı tarafından silindi.',
	'NO_AUTH_SEND_MESSAGE'         => 'Özel mesaj göndermek için yetkiniz yok.',
	'NO_AUTH_SIGNATURE'				=> 'Bir imza belirleme yetkiniz yok.',

	'NO_BCC_RECIPIENT'			=> 'Yok',
	'NO_BOOKMARKS'				=> 'Sık kullanılan hiç bir başlık yok.',
	'NO_BOOKMARKS_SELECTED'		=> 'Hiç bir sık kullanılan başlık seçilmedi.',
	'NO_EDIT_READ_MESSAGE'		=> 'Özel mesaj düzenlenemiyor çünkü mesaj daha önce okundu.',
	'NO_EMAIL_USER'				=> 'Girilen e-posta/kullanıcı adı bilgisi bulunamıyor.',
	'NO_FOES'					=> 'Şu an belirlenmiş engellenenler yok',
	'NO_FRIENDS'				=> 'Şu an belirlenmiş arkadaşlar yok',
	'NO_FRIENDS_OFFLINE'		=> 'Çevrimdışı arkadaşlar yok',
	'NO_FRIENDS_ONLINE'			=> 'Çevrimiçi arkadaşlar yok',
	'NO_GROUP_SELECTED'			=> 'Hiç grup belirtilmedi.',
	'NO_IMPORTANT_NEWS'			=> 'Mevcut önemli duyurular yok.',
	'NO_MESSAGE'				=> 'Özel mesaj bulunamadı.',
	'NO_NEW_FOLDER_NAME'			=> 'Yeni bir dosya adı belirleyin.',
	'NO_NEWER_PM'				=> 'Yeni mesaj yok.',
	'NO_OLDER_PM'				=> 'Eski mesaj yok.',
	'NO_PASSWORD_SUPPLIED'		=> 'Bir şifre olmadan giriş yapamazsınız.',
	'NO_RECIPIENT'				=> 'Alıcı belirtilmedi.',
	'NO_RULES_DEFINED'			=> 'Kural belirtilmedi.',
	'NO_SAVED_DRAFTS'			=> 'Kayıtlı taslak yok.',
	'NO_TO_RECIPIENT'			=> 'Yok',
	'NO_WATCHED_FORUMS'			=> 'Herhangi bir foruma abone olmadınız.',
	'NO_WATCHED_SELECTED'      => 'Abone olunan herhangi bir başlık ya da forum seçmediniz.',
	'NO_WATCHED_TOPICS'			=> 'Herhangi bir başlığa abone olmadınız.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Şifre %1$d ve %2$d karakter arası uzunlukta olmalı, karışık durumda harfler ve sayılar içermelidir.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Şifre %1$d ve %2$d karakter arasında olmalıdır.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Şifre %1$d ve %2$d karakter arası uzunlukta olmalı ve karışık durumda harfler içermelidir.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Şifre %1$d ve %2$d karakter arası uzunlukta olmalı, karışık durumda harfler, sayılar ve simgeler içermelidir.',
	'PASSWORD'					=> 'Şifre',
	'PASSWORD_ACTIVATED'		=> 'Yeni şifreniz aktif edildi.',
	'PASSWORD_UPDATED'			=> 'Yeni şifreniz kayıtlı e-posta adresinize gönderildi.',
	'PERMISSIONS_RESTORED'		=> 'Orijinal izinlere başarıyla dönüldü.',
	'PERMISSIONS_TRANSFERRED'	=> 'İzinler başarıyla şuradan transfer edildi: <strong>%s</strong>, şimdi bu kullanıcının izinleri ile mesaj panosunu dolaşabilirsiniz.<br />Not: Yönetici izinleri transfer edilmedi. Herhangi bir zamanda izinlerinize geri dönebilirsiniz.',
	'PM_DISABLED'				=> 'Bu mesaj panosunda özel mesajlaşma kapatıldı.',
	'PM_FROM'					=> 'Kimden',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Bu mesaj kayıtlı olmayan bir kullanıcı tarafından gönderildi.',
	'PM_ICON'					=> 'ÖM ikonu',
	'PM_INBOX'					=> 'Gelen kutusu',
	'PM_NO_USERS'				=> 'Eklenmesi için talep edilen kullanıcılar mevcut değil.',
	'PM_OUTBOX'					=> 'Giden kutusu',
	'PM_SENTBOX'				=> 'Gönderilen mesajlar',
	'PM_SUBJECT'				=> 'Mesaj başlığı',
	'PM_TO'						=> 'Kime',
	'PM_USERS_REMOVED_NO_PM'	=> 'Bazı kullanıcılar özel mesaj alımını kapattıkları için eklenemedi.',
	'POPUP_ON_PM'				=> 'Yeni özel mesaj geldiğinde küçük pencere aç',
	'POST_EDIT_PM'				=> 'Mesajı düzenle',
	'POST_FORWARD_PM'			=> 'Mesajı ilet',
	'POST_NEW_PM'				=> 'Mesaj oluştur',
	'POST_PM_LOCKED'			=> 'Özel mesajlaşma kilitlendi.',
	'POST_PM_POST'				=> 'Mesajı alıntı yap',
	'POST_QUOTE_PM'				=> 'Mesajı alıntı yap',
	'POST_REPLY_PM'				=> 'Mesaja cevap ver',
	'PRINT_PM'					=> 'Yazıcı görüntüsü',
	'PREFERENCES_UPDATED'		=> 'Tercihleriniz güncellendi.',
	'PROFILE_INFO_NOTICE'		=> 'Not: Bu bilgiler diğer üyeler tarafından görüntülenebilir. Bazı kişisel bilgilerinizi eklerken dikkatli olun. Doldurulması zorunlu bazı alanlar * ile işaretlenmiştir.',
	'PROFILE_UPDATED'			=> 'Profiliniz güncellendi.',

	'RECIPIENT'					=> 'Alıcı',
	'RECIPIENTS'				=> 'Alıcılar',
	'REGISTRATION'				=> 'Kayıt',
	'RELEASE_MESSAGES'			=> '%sTüm tutulan mesajları bırak%s… Eğer yeterli miktarda alan mevcutsa bu mesajlar uygun klasörlerin içerisine yeniden sıralanacaktır.',
	'REMOVE_ADDRESS'			=> 'Adresi sil',
	'REMOVE_SELECTED_BOOKMARKS'	=> 'Seçilenleri sık kullanılanlardan sil',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM' => 'Tüm seçilenleri sık kullanılanlardan silmek istediğinize emin misiniz?',
	'REMOVE_BOOKMARK_MARKED'	=> 'İşaretlileri sık kullanılanlardan sil',
	'REMOVE_FOLDER'				=> 'Klasörü sil',
	'REMOVE_FOLDER_CONFIRM'		=> 'Bu klasörü silmek istediğinize emin misiniz?',
	'RENAME'					=> 'Yeniden adlandır',
	'RENAME_FOLDER'				=> 'Klasörü yeniden adlandır',
	'REPLIED_MESSAGE'			=> 'Mesaja cevap verildi',
	'REPLY_TO_ALL'						=> 'Gönderene ve tüm alıcılara cevap ver.',
	'REPORT_PM'							=> 'Özel mesajı bildir',
	'RESIGN_SELECTED'					=> 'Seçileni bırak',
	'RETURN_FOLDER'				=> '%1$sÖnceki klasöre dön%2$s',
	'RETURN_UCP'				=> '%sKullanıcı Kontrol Paneline dön%s',
	'RULE_ADDED'				=> 'Kural başarıyla eklendi.',
	'RULE_ALREADY_DEFINED'		=> 'Bu kural önceden zaten belirlendi.',
	'RULE_DELETED'				=> 'Kural başarıyla silindi.',
	'RULE_LIMIT_REACHED'				=> 'Daha fazla ÖM kuralı ekleyemezsiniz. Kuralların en yüksek sayısına ulaştınız.',
	'RULE_NOT_DEFINED'			=> 'Kural doğru şekilde belirlenmedi.',
	'RULE_REMOVED_MESSAGE'				=> 'Özel mesaj süzgecine göre zamanı gelen bir özel mesaj silindi.',
	'RULE_REMOVED_MESSAGES'				=> 'Özel mesaj süzgecine göre zamanı gelen %d özel mesaj silindi.',

	'SAME_PASSWORD_ERROR'		=> 'Girdiğiniz yeni şifre şu anki şifreniz ile aynı.',
	'SEARCH_YOUR_POSTS'			=> 'Kendi mesajlarınız',
	'SEND_PASSWORD'				=> 'Şifre gönder',
	'SENT_AT'					=> 'Gönderildi',			// Used before dates in private messages
	'SHOW_EMAIL'				=> 'Kullanıcılar e-posta yoluyla benimle iletişime geçebilir',
	'SIGNATURE_EXPLAIN'			=> 'Bu oluşturduğunuz mesajlara eklenebilecek bir yazı bloğudur. %d karakterlik limiti vardır.',
	'SIGNATURE_PREVIEW'			=> 'İmzanız mesajlarınızda bunun gibi görüntülenecek',
	'SIGNATURE_TOO_LONG'		=> 'İmzanız çok uzun.',
	'SORT'						=> 'Sırala',
	'SORT_COMMENT'				=> 'Dosya yorumu',
	'SORT_DOWNLOADS'			=> 'İndirmeler',
	'SORT_EXTENSION'			=> 'Uzantı',
	'SORT_FILENAME'				=> 'Dosya adı',
	'SORT_POST_TIME'			=> 'Mesaj Zamanı',
	'SORT_SIZE'					=> 'Dosya boyutu',

	'TIMEZONE'					=> 'Zaman dilimi',
	'TO'						=> 'Kime',
	'TOO_MANY_RECIPIENTS'      => 'Çok fazla alıcıya bir özel mesaj göndermeyi denediniz.',
	'TOO_MANY_REGISTERS'		=> 'Bu oturum için en fazla kayıt girişimi sayısını aştınız. Lütfen daha sonra tekrar deneyin.',

	'UCP'						=> 'Kullanıcı Kontrol Paneli',
	'UCP_ACTIVATE'				=> 'Hesabı aktifleştir',
	'UCP_ADMIN_ACTIVATE'		=> 'Not: Hesabınız aktif edebilmek için doğru bir e-posta adresi girmelisiniz. Yöneticiler hesabınızı inceleyecekler ve eğer onaylarlarsa belirttiğiniz adrese bir e-posta alacaksınız.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Eklentiler',
	'UCP_COPPA_BEFORE'			=> '%s tarihinden önce',
	'UCP_COPPA_ON_AFTER'		=> '%s tarihinde veya daha sonra',
	'UCP_EMAIL_ACTIVATE'		=> 'Not: Hesabınızı aktif edebilmek için doğru bir e-posta adresi girmelisiniz. Belirttiğiniz adrese bir e-posta alacaksınız ve içeriğinde bir aktivasyon bağlantısı bulunacaktır.',
	'UCP_ICQ'					=> 'ICQ numarası',
	'UCP_JABBER'				=> 'Jabber adresi',

	'UCP_MAIN'					=> 'Genel',
	'UCP_MAIN_ATTACHMENTS'		=> 'Eklentileri yönet',
	'UCP_MAIN_BOOKMARKS'		=> 'Sık kullanılanları yönet',
	'UCP_MAIN_DRAFTS'			=> 'Kayıtlı taslakları yönet',
	'UCP_MAIN_FRONT'			=> 'Ön sayfa',
	'UCP_MAIN_SUBSCRIBED'		=> 'Abonelikleri yönet',

	'UCP_MSNM'					=> 'WL/MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'Hiç dosya göndermediniz.',

	'UCP_PREFS'					=> 'Mesaj panosu tercihleri',
	'UCP_PREFS_PERSONAL'		=> 'Kişisel ayarlar',
	'UCP_PREFS_POST'			=> 'Mesajların gönderilişi',
	'UCP_PREFS_VIEW'			=> 'Mesajların görünüşü',
	
	'UCP_PM'					=> 'Özel mesajlar',
	'UCP_PM_COMPOSE'			=> 'Mesaj oluştur',
	'UCP_PM_DRAFTS'				=> 'ÖM taslakları\'nı yönet',
	'UCP_PM_OPTIONS'			=> 'Kurallar, klasörler &amp; ayarlar',
	'UCP_PM_POPUP'				=> 'Özel mesajlar',
	'UCP_PM_POPUP_TITLE'			=> 'Özel mesaj açılır penceresi',
	'UCP_PM_UNREAD'				=> 'Okunmayan mesajlar',
	'UCP_PM_VIEW'				=> 'Mesajları görüntüle',

	'UCP_PROFILE'				=> 'Profil',
	'UCP_PROFILE_AVATAR'		=> 'Avatarınız',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Profiliniz',
	'UCP_PROFILE_REG_DETAILS'	=> 'Kayıt bilgileri',
	'UCP_PROFILE_SIGNATURE'		=> 'İmzanız',

	'UCP_USERGROUPS'			=> 'Kullanıcı grupları',
	'UCP_USERGROUPS_MEMBER'		=> 'Üyelikler',
	'UCP_USERGROUPS_MANAGE'		=> 'Grupları yönet',

	'UCP_REGISTER_DISABLE'			=> 'Yeni bir hesap oluşturmak şu anda mümkün değil.',
	'UCP_REMIND'					=> 'Şifre gönder',
	'UCP_RESEND'					=> 'Aktivasyon e-postası gönder',
	'UCP_WELCOME'					=> 'Kullanıcı Kontrol Paneline hoşgeldiniz. Bu ekrandan profilinizi görüntüleme ve güncelleme yapabilir, tercihlerinizi düzenleyebilir, başlıklar ve forumlara abonelikleri görüntüleyebilirsiniz ya da düzenleyebilirsiniz. Ayrıca diğer kullanıcılara (eğer izin veriliyorsa) mesaj gönderebilirsiniz. Lütfen devam etmeden önce herhangi bir duyuru olup olmadığını kontrol edin.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Arkadaşlar &amp; Engellenenler',
	'UCP_ZEBRA_FOES'				=> 'Engellenenleri yönet',
	'UCP_ZEBRA_FRIENDS'				=> 'Arkadaşları yönet',
	'UNDISCLOSED_RECIPIENT'			=> 'Gizli Alıcı',
	'UNKNOWN_FOLDER'				=> 'Bilinmeyen klasör',
	'UNWATCH_MARKED'				=> 'İşaretlileri takip etmeyi bırak',
	'UPLOAD_AVATAR_FILE'			=> 'Bilgisayarından yükle',
	'UPLOAD_AVATAR_URL'				=> 'Bir URL adresinden yükle',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Resmin olduğu sitenin URL adresini girin. Resim bu mesaj panosuna kopyalanacaktır.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Kullanıcı adı %1$d ve %2$d karakter arasındaki uzunlukta olmalıdır ve sadece alfanümerik karakterler kullanılmalıdır.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Kullanıcı adı %1$d ve %2$d karakter arasındaki uzunlukta olmalıdır ve alfanümerik, boşluk veya -+_[] karakterleri kullanılmalıdır.',
	'USERNAME_ASCII_EXPLAIN'		=> 'Kullanıcı adı %1$d ve %2$d karakter arasındaki uzunlukta olmalıdır ve ayrıca özel semboller olmadan sadece ASCII karakterler kullanılmalıdır.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Kullanıcı adı %1$d ve %2$d karakter arasındaki uzunlukta olmalıdır ve sadece harf ya da sayı karakterleri kullanılmalıdır.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Kullanıcı adı %1$d ve %2$d karakter arasındaki uzunlukta olmalıdır ve harf, sayı, boşluk veya -+_[] karakterleri kullanılmalıdır.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Uzunluk %1$d ve %2$d karakter arasında olmalıdır.',
	'USERNAME_TAKEN_USERNAME'		=> 'Girdiğiniz kullanıcı adı zaten kullanılıyor, lütfen alternatif bir tane seçin.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Girdiğiniz kullanıcı adı izinli değil ya da izin verilmeyen bir kelime içeriyor. Lütfen farklı bir ad seçin.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Belirttiğiniz kullanıcı adları bulunamadı veya bu kullanıcılar aktif değil.',

	'VIEW_AVATARS'				=> 'Avatarları göster',
	'VIEW_EDIT'					=> 'Görüntüle/Düzenle',
	'VIEW_FLASH'				=> 'Flash animasyonlarını göster',
	'VIEW_IMAGES'				=> 'Mesajlar içindeki resimleri göster',
	'VIEW_NEXT_HISTORY'			=> 'Bu tarihten sonraki ÖM',
	'VIEW_NEXT_PM'				=> 'Sonraki ÖM',
	'VIEW_PM'					=> 'Mesajı görüntüle',
	'VIEW_PM_INFO'				=> 'Mesaj detayları',
	'VIEW_PM_MESSAGE'			=> '1 mesaj',
	'VIEW_PM_MESSAGES'			=> '%d mesaj',
	'VIEW_PREVIOUS_HISTORY'		=> 'Bu tarihten önceki ÖM',
	'VIEW_PREVIOUS_PM'			=> 'Önceki ÖM',
	'VIEW_SIGS'					=> 'İmzayı göster',
	'VIEW_SMILIES'				=> 'İfadeleri resimli olarak göster',
	'VIEW_TOPICS_DAYS'			=> 'Önceki günlerden başlayarak başlıkları göster',
	'VIEW_TOPICS_DIR'			=> 'Yön sırasıyla başlık göster',
	'VIEW_TOPICS_KEY'			=> 'Başlıkları şu sıralamaya göre göster',
	'VIEW_POSTS_DAYS'			=> 'Önceki günlerden başlayarak mesajları göster',
	'VIEW_POSTS_DIR'			=> 'Yön sırasıyla mesaj göster',
	'VIEW_POSTS_KEY'			=> 'Mesajları şu sıralamaya göre göster',

	'WATCHED_EXPLAIN'			=> 'Alttaki liste abone olduğunuz başlıkların ve forumların bir listesidir. Bunlardan birinde yeni mesajlar olduğunda haberdar edileceksiniz. Forum veya başlıktan aboneliğinizi iptal etmek için işaretleyin ve <em>İşaretlileri takip etmeyi bırak</em> butonuna tıklayın.',
	'WATCHED_FORUMS'			=> 'Takip edilen forumlar',
	'WATCHED_TOPICS'			=> 'Takip edilen başlıklar',
	'WRONG_ACTIVATION'			=> 'Belirttiğiniz aktivasyon şifresi veritabanında bulunamadı.',

	'YOUR_DETAILS'				=> 'Faaliyetiniz',
	'YOUR_FOES'					=> 'Engelledikleriniz',
	'YOUR_FOES_EXPLAIN'			=> 'Silinecek kullanıcı adlarını seçin ve gönder butonuna tıklayın.',
	'YOUR_FRIENDS'				=> 'Arkadaşlarınız',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Silinecek kullanıcı adlarını seçin ve gönder butonuna tıklayın.',
	'YOUR_WARNINGS'				=> 'Uyarı seviyeniz',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Klasör içerisine yerleştir',
		'MARK_AS_READ'		=> 'Okunmuş olarak işaretle',
		'MARK_AS_IMPORTANT'	=> 'Mesajı işaretle',
		'DELETE_MESSAGE'	=> 'Mesajı sil'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Konu',
		'SENDER'	=> 'Gönderen',
		'MESSAGE'	=> 'Mesaj',
		'STATUS'	=> 'Mesaj durumu',
		'TO'		=> 'Kime'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'şuna benziyorsa',
		'IS_NOT_LIKE'	=> 'şuna benzemiyorsa',
		'IS'			=> 'şu ise',
		'IS_NOT'		=> 'şu değilse',
		'BEGINS_WITH'	=> 'şununla başlıyorsa',
		'ENDS_WITH'		=> 'şununla bitiyorsa',
		'IS_FRIEND'		=> 'arkadaşsa',
		'IS_FOE'		=> 'engellenense',
		'IS_USER'		=> 'kullanıcıysa',
		'IS_GROUP'		=> 'kullanıcı grubundaysa',
		'ANSWERED'		=> 'cevaplandıysa',
		'FORWARDED'		=> 'iletildiyse',
		'TO_GROUP'		=> 'varsayılan kullanıcı grubuma',
		'TO_ME'			=> 'bana'
	),


	'GROUPS_EXPLAIN'		=> 'Kullanıcı grupları, kullanıcıları daha iyi yönetebilmek için mesaj panosu yöneticilerine olanak sağlar. Varsayılan olarak belirli bir gruba yerleştirileceksiniz, bu sizin varsayılan grubunuzdur. Bu grupta diğer kullanıcılara nasıl görüneceğiniz belirlenir, örneğin kullanıcı adı renginiz, avatarınız, rütbeniz v.b. Yöneticiler size güvenirse ya da isterlerse varsayılan grubunuzu değiştirmenize izin verebilirler. Ayrıca diğer gruplara yerleştirilebilirsiniz veya katılma izniniz olabilir. Bazı gruplar içeriği görüntüleyebilmeniz için veya diğer alanlarda yeteneklerinizi arttırmak için size ilave izinler verebilirler.',
	'GROUP_LEADER'		=> 'Liderlikler',
	'GROUP_MEMBER'		=> 'Üyelikler',
	'GROUP_PENDING'		=> 'Askıdaki üyelikler',
	'GROUP_NONMEMBER'	=> 'Üyelikler yok',
	'GROUP_DETAILS'		=> 'Grup detayları',

	'NO_LEADER'		=> 'Grup liderliği yok',
	'NO_MEMBER'		=> 'Grup üyeliği yok',
	'NO_PENDING'	=> 'Askıda üyelik yok',
	'NO_NONMEMBER'	=> 'Üyesi olmayan gruplar yok',
));

?>