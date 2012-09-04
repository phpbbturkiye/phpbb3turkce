<?php
/** 
*
* acp_styles [Turkish]
*
* @package language
* @version $Id: styles.php,v 1.38 2007/06/11 12:39:50 kellanved Exp $ 
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

$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'	=> 'Görüntü setleri, mesaj panosundaki tüm butonların klasörünü içerir ve mesaj panosu tarafından kullanılan stil olmayan diğer özel görüntülerden oluşur. Burada var olan görüntü setlerini düzenleyebilir, dışarı aktarabilir ya da silebilirsiniz. Ayrıca görüntüleri içeri alabilir ya da yeni setleri aktif edebilirsiniz.',
	'ACP_STYLES_EXPLAIN'	=> 'Buradan mesaj panonuzda mevcut olan stilleri yönetebilirsiniz. Bir stil şablonu tema ve görüntü setinden oluşur. İsterseniz var olan stilleri değiştirebilir, silebilir, pasif edebilir, tekrar aktif edebilir, oluşturabilir ya da yeni stiller ekleyebilirsiniz. Önizleme özelliğiyle bir stilin nasıl göründüğünü görebilirsiniz. Geçerli varsayılan stil (*) yıldız işaretiyle gösterilir. Her bir stili kullanan kullanıcıların sayısı listelenir, kullanıcı stili gözardı edilerek kullanılan stiller burada gösterilmez.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Bir şablon seti tüm biçimlendirmelerden oluşur ve mesaj panosu görünümünün oluşturulması için kullanılır. Burada var olan şablon setlerini düzenleyebilir, silebilir, dışarı aktarabilir, içeri alabilir ve setleri görüntüleyebilirsiniz. BBcode oluşturmak için kullanılan şablon kodlarını modifiye edebilirsiniz.',
	'ACP_THEMES_EXPLAIN'	=> 'Buradan tema oluşturabilir, kurabilir, düzenleyebilir, silebilir ve dışarı aktarabilirsiniz. Bir tema, renklerin ve görüntülerin kombinasyonundan oluşur. Temalar, mesaj panonuzun temel görünümünü tanımlamak için şablonlara uygulanır. Seçeneklerin sırası phpBB yüklemenize ve sunucunuzun ayarlarına bağlı olarak açılacaktır, daha fazla bilgi için kılavuza bakın. Not: Yeni temalar oluşturulacağı zaman var olan bir temanın temeli isteğe bağlı olarak kullanılır.',
	'ADD_IMAGESET'			=> 'Görüntü seti oluştur',
	'ADD_IMAGESET_EXPLAIN'	=> 'Buradan yeni bir görüntü seti oluşturabilirsiniz. Dosya izinlerinize ve sunucu ayarlarınıza bağlı olarak buradan ek seçeneklere sahip olabilirsiniz. Örneğin bu görüntü seti daha önce var olan bir görüntü setinin temelini alabilir. Ayrıca bir görüntü seti arşivini yükleme veya çıkartma (store dizininden) yapabilirsiniz. Eğer bir arşivden yükleme veya çıkartma yapıyorsanız, görüntü seti kendi adını isteğe bağlı olarak arşiv adından alabilir (bunu yapması için görüntü seti adını boş bırakın).',
	'ADD_STYLE'				=> 'Stil oluştur',
	'ADD_STYLE_EXPLAIN'		=> 'Buradan yeni bir stil oluşturabilirsiniz. Dosya izinlerinize ve sunucu ayarlarınıza bağlı olarak buradan ek seçeneklere sahip olabilirsiniz. Örneğin bu stil daha önce var olan bir stilin temelini alabilir. Ayrıca bir stil arşivini yükleme veya çıkartma (store dizininden) yapabilirsiniz. Eğer bir arşivden yükleme veya çıkartma yapıyorsanız stil adı otomatik olarak belirlenecektir.',
	'ADD_TEMPLATE'			=> 'Şablon oluştur',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Buradan yeni bir şablon ekleyebilirsiniz. Dosya izinlerinize ve sunucu ayarlarınıza bağlı olarak buradan ek seçeneklere sahip olabilirsiniz. Örneğin bu şablon daha önce var olan bir şablonun temelini alabilir. Ayrıca bir şablon arşivini yükleme veya çıkartma (store dizininden) yapabilirsiniz. Eğer bir arşivden yükleme veya çıkartma yapıyorsanız, şablon kendi adını isteğe bağlı olarak arşiv adından alabilir (bunu yapması için şablon adını boş bırakın).',
	'ADD_THEME'				=> 'Tema oluştur',
	'ADD_THEME_EXPLAIN'		=> 'Buradan yeni bir tema ekleyebilirsiniz. Dosya izinlerinize ve sunucu ayarlarınıza bağlı olarak buradan ek seçeneklere sahip olabilirsiniz. Örneğin bu tema daha önce var olan bir temanın temelini alabilir. Ayrıca bir tema arşivini yükleme veya çıkartma (store dizininden) yapabilirsiniz. Eğer bir arşivden yükleme veya çıkartma yapıyorsanız, tema kendi adını isteğe bağlı olarak arşiv adından alabilir (bunu yapması için tema adını boş bırakın).',
	'ARCHIVE_FORMAT'		=> 'Arşiv dosya tipi',
	'AUTOMATIC_EXPLAIN'      => 'Otomatik belirleme girişimi için boş bırakın.',

	'BACKGROUND'			=> 'Arka Plan',
	'BACKGROUND_COLOUR'		=> 'Arka Plan rengi',
	'BACKGROUND_IMAGE'		=> 'Arka Plan görüntüsü',
	'BACKGROUND_REPEAT'		=> 'Arka Plan tekrarı',
	'BOLD'					=> 'Kalın Yazı',

	'CACHE'						=> 'Önbellek',
	'CACHE_CACHED'				=> 'Önbelleğe alındı',
	'CACHE_FILENAME'			=> 'Şablon dosyası',
	'CACHE_FILESIZE'			=> 'Dosya boyutu',
	'CACHE_MODIFIED'			=> 'Düzenlendi',
	'CONFIRM_IMAGESET_REFRESH'	=> 'Tüm görüntü seti verilerini yenilemek istediğinize emin misiniz? Görüntü seti biçimlendirme dosyasındaki ayarlar, görüntü seti düzenleyicisi kullanılarak yapılan tüm değişikliklerin üzerine yazacaktır.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Şablon dosyalarınızın tüm önbelleklenen sürümlerini temizlemek istediğinize emin misiniz?',
	'CONFIRM_TEMPLATE_REFRESH'	=> 'Dosya sisteminizdeki şablon dosyalarının içerikleri ile veritabanındaki tüm şablon verilerini yenilemek istediğinize emin misiniz? Bu, şablon düzenleyicisi kullanılarak yapılan tüm değişikliklerin ve aynı zamanda veritabanında kayıtlı şablonun üzerine yazacaktır.',
	'CONFIRM_THEME_REFRESH'		=> 'Dosya sisteminizdeki tema dosyalarının içerikleri ile veritabanındaki tüm tema verilerini yenilemek istediğinize emin misiniz? Bu, tema düzenleyicisi kullanılarak yapılan tüm değişikliklerin ve aynı zamanda veritabanında kayıtlı temanın üzerine yazacaktır.',
	'COPYRIGHT'					=> 'Telif Hakkı',
	'CREATE_IMAGESET'			=> 'Yeni görüntü seti oluştur',
	'CREATE_STYLE'				=> 'Yeni stil oluştur',
	'CREATE_TEMPLATE'			=> 'Yeni şablon seti oluştur',
	'CREATE_THEME'				=> 'Yeni tema oluştur',
	'CURRENT_IMAGE'				=> 'Şu anki resim',

	'DEACTIVATE_DEFAULT'		=> 'Varsayılan stili pasif yapamazsınız.',
	'DELETE_FROM_FS'			=> 'Dosya sisteminden sil',
	'DELETE_IMAGESET'			=> 'Görüntü setini sil',
	'DELETE_IMAGESET_EXPLAIN'   => 'Buradan seçilen görüntü setlerini veritabanından kaldırabilirsiniz. Not: Bu geri dönüşü olmayan bir işlemdir. Gelecekte de kullanılabilmesi için ilk önce setinizi dışarı aktarmanız önerilir.',
	'DELETE_STYLE'            => 'Stili sil',
	'DELETE_STYLE_EXPLAIN'      => 'Buradan seçilen stili kaldırabilirsiniz. Stilleri silerken dikkatli olun, çünkü geri alma özelliği yoktur.',
	'DELETE_TEMPLATE'         => 'Şablonu sil',
	'DELETE_TEMPLATE_EXPLAIN'   => 'Buradan seçilen şablon setini veritabanından kaldırabilirsiniz. Not: Bu geri dönüşü olmayan bir işlemdir. Gelecekte de kullanılabilmesi için ilk önce setinizi dışarı aktarmanız önerilir.',
	'DELETE_THEME'            => 'Temayı sil',
	'DELETE_THEME_EXPLAIN'      => 'Buradan seçilen temayı veritabanından kaldırabilirsiniz. Not: Bu geri dönüşü olmayan bir işlemdir. Gelecekte de kullanılabilmesi için ilk önce temanızı dışarı aktarmanız önerilir.',
	'DETAILS'					=> 'Detaylar',
	'DIMENSIONS_EXPLAIN'		=> 'Burada Evet seçilirse, genişlik/yükseklik parametreleri dahil olacaktır.',

	'EDIT_DETAILS_IMAGESET'				=> 'Görüntü seti detayları',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Burada belirli görüntü seti detaylarını düzenleyebilirsiniz, örneğin kendi ismini..',
	'EDIT_DETAILS_STYLE'				=> 'Stili düzenle',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Aşağıdaki formu kullanarak var olan stili düzenleyebilir modifiye edebilirsiniz.Stilin kendisini tanımlayan şablon kombinasyonlarını, temayı ve görüntü setini burada değiştirebilirsiniz. Ayrıca istenilen bir stili varsayılan yapabilirsiniz.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Şablon detaylarını düzenle',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Buradan bazı şablon bilgilerini, mesela şablon adını düzenleyebilirsiniz. Ayrıca dosya sisteminden stil tabakasının veritabanına karşılıklı olarak depolanacağı yolu seçebilirsiniz. Bu seçenek PHP ayarlarınıza ve web sunucusu tarafından tema ayarlarınızın üzerine yazılabileceğine bağlıdır.',
	'EDIT_DETAILS_THEME'				=> 'Tema detaylarını düzenle',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Buradan bazı tema bilgilerini, mesela tema adını düzenleyebilirsiniz. Ayrıca dosya sisteminden stil tabakasının veritabanına karşılıklı olarak depolanacağı yolu seçebilirsiniz. Bu seçenek PHP ayarlarınıza ve web sunucusu tarafından tema ayarlarınızın üzerine yazılabileceğine bağlıdır.',
	'EDIT_IMAGESET'						=> 'Görüntü setini düzenle',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Burada bireysel görüntüleri düzenleyebilirsiniz, bu görüntüler görüntü setini tanımlar. Ayrıca görüntünün boyutlarınıda burada belirleyebileceksiniz. Boyutlamlar isteğe bağlı bir ayarlamadır, bunların kullanılması ile rendering işlemini bazı browserlar sorunsuz yapabilmektedir. Bu boyutlandırma kullanılmazsa, azda olsa veritabanı kayıtlarını azaltmış olacaksınız.',
	'EDIT_TEMPLATE'						=> 'Şablonu düzenle',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Burada şablon setini direkt olarak düzenleyebilirsiniz. Lütfen şunu hatırlamalısınız ki bu düzenlemeler geri alınamaz ve sadece bir kez kaydedilir. Şayet PHP şablon dosyalarını sizin stil klasörüne yazabilirse, tüm değişiklikler burada direkt olarak o dosyalara yazılır. Şayet PHP bu dosyalara yazmayı başaramazsa, bu dosyalar veritabanına kopyalanacak ve tüm değişiklikler veritabanına yansıtılacaktır. Şablon setini düzenlerken dikkatli olmalısınız, yedek değişken terimlerini ve şartlı yapıları {XXXX} ile kapatmayı unutmayın.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Şablon dosyasının üzerine kayıt yapılamaz. Yani şablon seti, değişikliklerinizi içeren veritabanının içinde saklanmıştır.',
	'EDIT_THEME'						=> 'Temayı düzenle',
	'EDIT_THEME_EXPLAIN'				=> 'Buradan seçilen temayı düzenleyebilirsiniz, renkleri, resimleri, vb. değişiklikleri yapabilirsiniz.',
	'EDIT_THEME_STORED_DB'				=> 'Stil tabakası dosyasının üzerine kayıt yapılamaz. Yani stil tabakası, değişikliklerinizi içeren veritabanının içinde saklanmıştır.',
	'EDIT_THEME_STORE_PARSED'			=> 'Tema, stil tabakası kullanmayı gerekli tutuyor. Bu sadece, eğer stil tabakası veritabanında saklanmış ise mümkün olabilir.',
	'EDITOR_DISABLED'               => 'Şablon düzenleyicisi kapatıldı.',
	'EXPORT'							=> 'Dışarı Aktar',

	'FOREGROUND'			=> 'Ön plan',
	'FONT_COLOUR'			=> 'Font rengi',
	'FONT_FACE'				=> 'Font görünümü',
	'FONT_FACE_EXPLAIN'		=> 'Birden fazla fontu virgül kullanarak belirleyebilirsiniz. Eğer kullanıcı kurulu ilk fonta sahip değilse, diğer çalışan ilk font seçilecektir.',
	'FONT_SIZE'				=> 'Font büyüklüğü',

	'GLOBAL_IMAGES'			=> 'Global',

	'HIDE_CSS'				=> 'Ham Css sakla',

	'IMAGE_WIDTH'				=> 'Görüntü genişliği',
	'IMAGE_HEIGHT'				=> 'Görüntü yüksekliği',
	'IMAGE'						=> 'Görüntü',
	'IMAGE_NAME'				=> 'Görüntü ismi',
	'IMAGE_PARAMETER'			=> 'Parametre',
	'IMAGE_VALUE'				=> 'Değer',
	'IMAGESET_ADDED'			=> 'Yeni görüntü seti dosya sistemine eklendi',
	'IMAGESET_ADDED_DB'			=> 'Yeni görüntü seti veritabanına eklendi',
	'IMAGESET_DELETED'			=> 'Görüntü seti başarıyla silindi',
	'IMAGESET_DELETED_FS'		=> 'Görüntü seti veritabanından silindi fakat bazı dosyalar, dosya sisteminde kalmış olabilir',
	'IMAGESET_DETAILS_UPDATED'	=> 'Görüntü seti detayları başarıyla güncellendi',
	'IMAGESET_ERR_ARCHIVE'		=> 'Lütfen bir arşiv methodu seçin',
	'IMAGESET_ERR_COPY_LONG'	=> 'Telif Hakkı 60 karakterden fazla olmamalıdır',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Görüntü seti adı sadece alfanümerik karakterler, -, +, _ ve boşluk işaretlerini içermelidir',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Bu isimde bir görüntü seti zaten var',
	'IMAGESET_ERR_NAME_LONG'	=> 'Görüntü seti adı 30 karakterden fazla olamaz',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Belirlediğiniz arşiv geçerli bir görüntü seti içermiyor.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Bu görüntü seti için bir ad belirlemelisiniz',
	'IMAGESET_EXPORT'			=> 'Görüntü setini dışarı aktar',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Burada bir arşivdeki şeklin içindeki görüntü setini dışarı aktarabilirsiniz. Bu arşivde, diğer bir mesaj panosuna kurulmak için gerekli olan tüm görüntü setleri olacaktır. Siz burada bu dosyayı direkt olarak indirebilirsiniz ya da daha sonra indirmek, ftp adresine göndermek için kendi saklama klasörünüze bu dosyayı yerleştirebilirsiniz.',
	'IMAGESET_EXPORTED'			=> 'Görüntü seti başarıyla dışarı aktarıldı ve %s içine kaydedildi',
	'IMAGESET_NAME'				=> 'Görüntü seti adı',
	'IMAGESET_REFRESHED'		=> 'Görüntü seti başarıyla yenilendi',
	'IMAGESET_UPDATED'			=> 'Görüntü seti başarıyla güncellendi',
	'ITALIC'					=> 'İtalik yazı',

	'IMG_CAT_BUTTONS'		=> 'Belirlenmiş butonlar',
	'IMG_CAT_CUSTOM'		=> 'Özel Görüntüler',
	'IMG_CAT_FOLDERS'		=> 'Başlık ikonları',
	'IMG_CAT_FORUMS'		=> 'Forum ikonları',
	'IMG_CAT_ICONS'			=> 'Genel ikonlar',
	'IMG_CAT_LOGOS'			=> 'Logolar',
	'IMG_CAT_POLLS'			=> 'Anketlerin görüntüleri',
	'IMG_CAT_UI'			=> 'Genel kullanıcı arabirimi elementleri',
	'IMG_CAT_USER'			=> 'Ek Görüntüler',

	'IMG_SITE_LOGO'			=> 'Ana logo',
	'IMG_UPLOAD_BAR'		=> 'Durum çubuğunu yükle',
	'IMG_POLL_LEFT'			=> 'Anket sol bitişi',
	'IMG_POLL_CENTER'		=> 'Anket merkezi',
	'IMG_POLL_RIGHT'		=> 'Anket sağ bitişi',
	'IMG_ICON_FRIEND'		=> 'Arkadaş olarak ekle',
	'IMG_ICON_FOE'			=> 'Engellenen olarak ekle',

	'IMG_FORUM_LINK'			=> 'Forum bağlantısı',
	'IMG_FORUM_READ'			=> 'Forum',
	'IMG_FORUM_READ_LOCKED'		=> 'Kilitli forum',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Altforum',
	'IMG_FORUM_UNREAD'         => 'Forum okunmamış mesajlar',
	'IMG_FORUM_UNREAD_LOCKED'   => 'Forum kilitli okunmamış mesajlar',
	'IMG_FORUM_UNREAD_SUBFORUM'   => 'Altforum okunmamış mesajlar',
	'IMG_SUBFORUM_READ'         => 'Forum içerisindeki altforum',
	'IMG_SUBFORUM_UNREAD'      => 'Forum içerisindeki altforum okunmamış mesajlar',

	'IMG_TOPIC_MOVED'			=> 'Başlık taşındı',

	'IMG_TOPIC_READ'				=> 'Başlık',
	'IMG_TOPIC_READ_MINE'			=> 'Başlık gönderildiğinde',
	'IMG_TOPIC_READ_HOT'			=> 'Başlık popüler',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Popüler başlığa gönderildiğinde',
	'IMG_TOPIC_READ_LOCKED'			=> 'Başlık kilitlendi',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Kilitli başlığa gönderildiğinde',

	'IMG_TOPIC_UNREAD'            => 'Başlık okunmamış mesajlar',
	'IMG_TOPIC_UNREAD_MINE'         => 'Başlık mesaj gönderildiğinde okunmamış',
	'IMG_TOPIC_UNREAD_HOT'         => 'Başlık popüler okunmamış mesajlar',
	'IMG_TOPIC_UNREAD_HOT_MINE'      => 'Başlık okunmamış popüler mesaj gönderildiğinde',
	'IMG_TOPIC_UNREAD_LOCKED'      => 'Başlık okunmamış kitli',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'   => 'Başlık okunmamış mesaj gönderildiğinde kilitli',

	'IMG_STICKY_READ'            => 'Sabit başlık',
	'IMG_STICKY_READ_MINE'         => 'Sabit başlık mesaj gönderildiğinde',
	'IMG_STICKY_READ_LOCKED'      => 'Sabit başlık kilitli',
	'IMG_STICKY_READ_LOCKED_MINE'   => 'Sabit başlık kilitliyken mesaj gönderildiğinde',
	'IMG_STICKY_UNREAD'            => 'Sabit başlık okunmamış mesajlar',
	'IMG_STICKY_UNREAD_MINE'      => 'Sabit başlık mesaj gönderildiğinde okunmamış',
	'IMG_STICKY_UNREAD_LOCKED'      => 'Sabit başlık kilitliyken okunmamış mesajlar',
	'IMG_STICKY_UNREAD_LOCKED_MINE'   => 'Sabit başlık kilitliyken okunmamış mesaj gönderildiğinde',

	'IMG_ANNOUNCE_READ'               => 'Duyuru',
	'IMG_ANNOUNCE_READ_MINE'         => 'Duyuru mesaj gönderildiğinde',
	'IMG_ANNOUNCE_READ_LOCKED'         => 'Duyuru kilitli',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'      => 'Duyuru kilitliyken mesaj gönderildiğinde',
	'IMG_ANNOUNCE_UNREAD'            => 'Duyuru okunmamış mesajlar',
	'IMG_ANNOUNCE_UNREAD_MINE'         => 'Duyuru mesaj gönderildiğinde okunmamış',
	'IMG_ANNOUNCE_UNREAD_LOCKED'      => 'Duyuru kilitliyken okunmamış mesajlar',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'   => 'Duyuru kilitliyken okunmamış mesaj gönderildiğinde',

	'IMG_GLOBAL_READ'               => 'Global',
	'IMG_GLOBAL_READ_MINE'            => 'Global mesaj gönderildiğinde',
	'IMG_GLOBAL_READ_LOCKED'         => 'Global kilitli',
	'IMG_GLOBAL_READ_LOCKED_MINE'      => 'Global kilitliyken mesaj gönderildiğinde',
	'IMG_GLOBAL_UNREAD'               => 'Global okunmamış mesajlar',
	'IMG_GLOBAL_UNREAD_MINE'         => 'Global mesaj gönderildiğinde okunmamış',
	'IMG_GLOBAL_UNREAD_LOCKED'         => 'Global kilitliyken okunmamış mesajlar',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'      => 'Global kilitliyken okunmamış mesaj gönderildiğinde',

	'IMG_PM_READ'		=> 'Okunmuş özel mesajlar',
	'IMG_PM_UNREAD'		=> 'Okunmamış özel mesajlar',

 	'IMG_ICON_BACK_TOP'		=> 'Üst',
 	
	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'E-posta gönder',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Mesaj gönder',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Web sitesi',

	'IMG_ICON_POST_DELETE'			=> 'Mesajı sil',
	'IMG_ICON_POST_EDIT'			=> 'Mesajı Düzenle',
	'IMG_ICON_POST_INFO'			=> 'Mesaj detaylarını göster',
	'IMG_ICON_POST_QUOTE'			=> 'Mesaj alıntısı',
	'IMG_ICON_POST_REPORT'			=> 'Mesaj raporlama',
	'IMG_ICON_POST_TARGET'			=> 'Küçük mesaj',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Yeni küçük mesaj',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Eklenti',
	'IMG_ICON_TOPIC_LATEST'			=> 'Son mesaj',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Son okunmamış mesaj',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Mesaj raporlandı',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Mesaj onaylanmadı',

	'IMG_ICON_USER_ONLINE'		=> 'Kullanıcı çevrimiçi',
	'IMG_ICON_USER_OFFLINE'		=> 'Kullanıcı çevrimdışı',
	'IMG_ICON_USER_PROFILE'		=> 'Profili göster',
	'IMG_ICON_USER_SEARCH'		=> 'Mesajları ara',
	'IMG_ICON_USER_WARN'		=> 'Kullanıcı ayarı',

	'IMG_BUTTON_PM_FORWARD'		=> 'Özel mesajı gönder',
	'IMG_BUTTON_PM_NEW'			=> 'Yeni özel mesaj',
	'IMG_BUTTON_PM_REPLY'		=> 'Özel mesajı yanıtla',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Başlık kilitli',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Yeni başlık',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Başlığı yanıtla',

	'IMG_USER_ICON1'		=> 'Kullanıcı tanımlı görüntü 1',
	'IMG_USER_ICON2'		=> 'Kullanıcı tanımlı görüntü 2',
	'IMG_USER_ICON3'		=> 'Kullanıcı tanımlı görüntü 3',
	'IMG_USER_ICON4'		=> 'Kullanıcı tanımlı görüntü 4',
	'IMG_USER_ICON5'		=> 'Kullanıcı tanımlı görüntü 5',
	'IMG_USER_ICON6'		=> 'Kullanıcı tanımlı görüntü 6',
	'IMG_USER_ICON7'		=> 'Kullanıcı tanımlı görüntü 7',
	'IMG_USER_ICON8'		=> 'Kullanıcı tanımlı görüntü 8',
	'IMG_USER_ICON9'		=> 'Kullanıcı tanımlı görüntü 9',
	'IMG_USER_ICON10'		=> 'Kullanıcı tanımlı görüntü 10',
	
	'INACTIVE_STYLES'			=> 'Aktif olmayan stiller',
	'INCLUDE_DIMENSIONS'		=> 'Boyutları dahil et',
	'INCLUDE_IMAGESET'			=> 'Görüntü setini dahil et',
	'INCLUDE_TEMPLATE'			=> 'Şablonu dahil et',
	'INCLUDE_THEME'				=> 'Temayı dahil et',
	'INHERITING_FROM'         => 'Şuradan kalıt al',
	'INSTALL_IMAGESET'			=> 'Görüntü seti yükle',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Burada seçili görüntü setini kurabilirsiniz. Belirli detayları düzenleyebilir ve isterseniz kurulum varsayılan değerlerini kullanabilirsiniz.',
	'INSTALL_STYLE'				=> 'Stil yükle',
	'INSTALL_STYLE_EXPLAIN'		=> 'Burada yeni bir stili kurabilirsiniz. Şayet konu ilgili stil elementleri kurulmuş ise bunların üzerine bir kayıt yapılmayacaktır. Bazı stiller, halihazırda kurulmuş stil elementlerine ihtiyaç duyar. Şayet bu tip bir stil kuruyorsanız ve gerekli elementlere sahip değilseniz, bu konuda bilgilendirileceksiniz.',
	'INSTALL_TEMPLATE'			=> 'Şablon yükle',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Burada yeni bir şablon seti kurabilirsiniz. Sunucu ayarlarınıza bağlı olarak, birkaç tane daha seçenekle karşılaşabilirsiniz.',
	'INSTALL_THEME'				=> 'Tema yükle',
	'INSTALL_THEME_EXPLAIN'		=> 'Burada seçtiğiniz temayı kurabilirsiniz. Belirli detayları düzenleyebilir ve isterseniz kurulum varsayılan değerlerini kullanabilirsiniz.',
	'INSTALLED_IMAGESET'		=> 'Kurulmuş görüntü setleri',
	'INSTALLED_STYLE'			=> 'Kurulmuş stiller',
	'INSTALLED_TEMPLATE'		=> 'Kurulmuş şablonlar',
	'INSTALLED_THEME'			=> 'Kurulmuş temalar',
	
	'KEEP_IMAGESET'				=> '“%s” görüntü setini tut',
	'KEEP_TEMPLATE'				=> '“%s” şablonunu tut',
	'KEEP_THEME'				=> '“%s” temasını tut',	

	'LINE_SPACING'				=> 'Satır boşluğu',
	'LOCALISED_IMAGES'			=> 'Yerelleşmiş',
	'LOCATION_DISABLED_EXPLAIN'   => 'Bu ayar için kalıt alınmmıştır ve değiştirilemez.',

	'NO_CLASS'					=> 'Stil tabakasında bir sınıf bulunamadı.',
	'NO_IMAGESET'				=> 'Dosya sistemi üzerinde görüntü seti bulunamadı.',
	'NO_IMAGE'					=> 'Resim yok',
	'NO_IMAGE_ERROR'			=> 'Dosya sistemi üzerinde resim bulunamadı.',
	'NO_STYLE'					=> 'Dosya sistemi üzerinde stil bulunamadı.',
	'NO_TEMPLATE'				=> 'Dosya sistemi üzerinde şablon bulunamadı.',
	'NO_THEME'					=> 'Dosya sistemi üzerinde tema bulunamadı.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Hiç bir kaldırılmış görüntü şablonu tespit edilmedi.',
	'NO_UNINSTALLED_STYLE'		=> 'Hiç bir kaldırılmış stil tespit edilmedi.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Hiç bir kaldırılmış şablon tespit edilmedi.',
	'NO_UNINSTALLED_THEME'		=> 'Hiç bir kaldırılmış tema tespit edilmedi.',
	'NO_UNIT'					=> 'Hiçbiri',

	'ONLY_IMAGESET'			=> 'Bu kalan son görüntü seti, bu son görüntü setini silemezsiniz.',
	'ONLY_STYLE'			=> 'Bu kalan son stil, bu son stili silemezsiniz.',
	'ONLY_TEMPLATE'			=> 'Bu kalan son şablon seti, bu son şablon setini silemezsiniz.',
	'ONLY_THEME'			=> 'Bu kalan son tema, bu son temayı silemezsiniz.',
	'OPTIONAL_BASIS'		=> 'İsteğe bağlı temel',

	'REFRESH'					=> 'Yenile',
	'REPEAT_NO'					=> 'Hiçbiri',
	'REPEAT_X'					=> 'Sadece yatay olarak',
	'REPEAT_Y'					=> 'Sadece dikey olarak',
	'REPEAT_ALL'				=> 'Her iki yön',
	'REPLACE_IMAGESET'			=> 'Görüntü takımlarını buradakiyle değiştir',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Bu görüntü seti, kullandığınız bir stilin yerini alacak.',
	'REPLACE_STYLE'				=> 'Stili buradakiyle değiştirin',
	'REPLACE_STYLE_EXPLAIN'		=> 'Bu stil, kullanıcınızın kullandığı bir stili silip, yerini alacak.',
	'REPLACE_TEMPLATE'			=> 'Şablonu buradakiyle değiştir',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Bu şablon kullandığınız bir stilin yerini alacak.',
	'REPLACE_THEME'				=> 'Temayı buradakiyle değiştir',
	'REPLACE_THEME_EXPLAIN'		=> 'Bu tema kullandığınız bir stilin yerini alacak.',
	'REPLACE_WITH_OPTION'		=> '“%s” ile değiştir',	
	'REQUIRES_IMAGESET'			=> 'Bu stilin kurulması için %s görüntü seti gereklidir.',
	'REQUIRES_TEMPLATE'			=> 'Bu stilin kurulması için %s şablonu gereklidir.',
	'REQUIRES_THEME'			=> 'Bu stilin kurulması için %s teması gereklidir.',

	'SELECT_IMAGE'				=> 'Görüntü seç',
	'SELECT_TEMPLATE'			=> 'Şablon dosyası seç',
	'SELECT_THEME'				=> 'Tema dosyası seç',
	'SELECTED_IMAGE'			=> 'Seçilen resim',
	'SELECTED_IMAGESET'			=> 'Seçilen görüntü seti',
	'SELECTED_TEMPLATE'			=> 'Seçilen şablon',
	'SELECTED_TEMPLATE_FILE'	=> 'Seçilen şablon dosyası',
	'SELECTED_THEME'			=> 'Seçilen tema',
	'SELECTED_THEME_FILE'			=> 'Seçilen tema dosyası',
	'STORE_DATABASE'			=> 'Veritabanı',
	'STORE_FILESYSTEM'			=> 'Dosya Sistemi',
	'STYLE_ACTIVATE'			=> 'Aktif et',
	'STYLE_ACTIVE'				=> 'Aktif',
	'STYLE_ADDED'				=> 'Stil başarıyla eklendi',
	'STYLE_DEACTIVATE'			=> 'Pasif et',
	'STYLE_DEFAULT'				=> 'Varsayılan stil yap',
	'STYLE_DELETED'				=> 'Stil başarıyla silindi',
	'STYLE_DETAILS_UPDATED'		=> 'Stil başarıyla düzenlendi',
	'STYLE_ERR_ARCHIVE'			=> 'Lütfen bir arşiv methodu seçin',
	'STYLE_ERR_COPY_LONG'		=> 'Telif Hakkı 60 karakterden fazla olmamalıdır',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'En azından bir stil elemanı seçmelisiniz.',
	'STYLE_ERR_NAME_CHARS'		=> 'Stil ismi sadece alphanumeric karakterler, -, +, _ ve boşluk işaretlerini içermelidir',
	'STYLE_ERR_NAME_EXIST'		=> 'Seçtiğiniz stil ismi şu anda başka bir stilin ismidir',
	'STYLE_ERR_NAME_LONG'		=> 'Stil ismi 30 karakterden fazla olmamalıdır',
	'STYLE_ERR_NO_IDS'			=> 'Bu stil için, bir şablon, tema ve görüntü seti seçmek zorundasınız.',
	'STYLE_ERR_NOT_STYLE'		=> 'Yüklenen ya da alınmış dosya geçerli bir arşiv stili içermemektedir.',
	'STYLE_ERR_STYLE_NAME'		=> 'Bu stil için bir ad belirlemelisiniz',
	'STYLE_EXPORT'				=> 'Stili dışarı aktar',
	'STYLE_EXPORT_EXPLAIN'		=> 'Bu kısımda form içindeki bir stil arşivinin dışarı aktarılmasını gerçekleştirebilirsiniz. Bir stil, tüm elemanlarını içermeyebilir ama en az bir elemanı olmalıdır. Örnek verecek olursak, şayet yeni bir tema oluşturduğumuzu düşünürsek ve görüntü seti, kullandığınız bir şablonsa; temayı kolayca dışarı aktarabilirsiniz. İsterseniz bu dosyayı direkt olarak indirebilirsiniz ya da daha sonra indirmek için, FTP adresine göndermek için kendi saklama klasörünüze bu dosyayı yerleştirebilirsiniz.',
	'STYLE_EXPORTED'			=> 'Stil başarıyla dışarı aktarıldı ve %s içine saklandı',
	'STYLE_IMAGESET'			=> 'Görüntü Seti',
	'STYLE_NAME'				=> 'Stil ismi',
	'STYLE_TEMPLATE'			=> 'Şablon',
	'STYLE_THEME'				=> 'Tema',
	'STYLE_USED_BY'				=> 'Kullananlar (robotlar dahil)',

	'TEMPLATE_ADDED'			=> 'Şablon seti eklendi ve dosya sisteminde depolandı',
	'TEMPLATE_ADDED_DB'			=> 'Şablon seti eklendi ve veritabanında depolandı',
	'TEMPLATE_CACHE'			=> 'Şablon önbelleği',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Varsayılan olarak phpBB kendi şablonlarının versiyonunu önbelleğine alır. Bu sayfanın görüntülenmesi sırasında sunucu yükleme zamanını azaltır ve sayfa oluşturma zamanı daha hızlı gerçekleşir. Bu kısımda her dosya için önbellek durumunu görebilirsiniz ve bireysel dosyaları ya da önbellek girdilerini silebilirsiniz.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Şablon önbelleği başarıyla temizlendi',
	'TEMPLATE_CACHE_EMPTY'		=> 'Önbelleğe alınmış şablon yok.',
	'TEMPLATE_DELETED'			=> 'Şablon seti başarıyla silindi',
	'TEMPLATE_DELETE_DEPENDENT'   => 'Bir ya da birden fazla şablon seti şuradan kalıt alındığı için şablon seti silinemez:',
	'TEMPLATE_DELETED_FS'		=> 'Şablon veritabanından silindi fakat şablon dosyaları hala dosya sisteminiz içinde mevcut',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Şablon detayları başarıyla güncellendi',
	'TEMPLATE_EDITOR'			=> 'Ham CSS şablon düzenleyicisi',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Şablon düzenleyici yüksekliği',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Lütfen bir arşiv methodu seçin',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Önbellek klasörü açılamayan şablon dosyalarının önbellek versiyonunun depolanması için kullanılır.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Telif hakkı 60 karakterden fazla olmamalıdır',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Şablon ismi sadece alfanümerik karakterler, -, +, _ ve boşluk karakterlerini içermelidir',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Seçtiğiniz şablon ismi şu anda var olan başka bir şablonun ismidir',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Şablon ismi 30 karakterden fazla olmamalıdır',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Belirlediğiniz arşiv geçerli bir şablon içermemektedir.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'Yeni şablon seti %s şablonunun kurulmuş olmasını ve kendisinden kalıt alınmamasını gerekli tutuyor. ',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Bu şablon için bir isim belirtmelisiniz',
	'TEMPLATE_EXPORT'			=> 'Şablonları dışarı aktar',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Burada arşiv formunun içindeki şablonları dışarı aktarabilirsiniz. Bu arşiv, mesaj panosuna bir temanın kurulması için gerekli olan tüm dosyaları içerir. Siz burada bu dosyayı direkt olarak indirebilirsiniz ya da daha sonra indirmek için, ftp adresine göndermek için kendi saklama klasörünüze bu dosyayı yerleştirebilirsiniz.',
	'TEMPLATE_EXPORTED'			=> 'Şablonlar başarıyla dışarı aktarıldı ve %s içine saklandı',
	'TEMPLATE_FILE'				=> 'Şablon dosyası',
	'TEMPLATE_FILE_UPDATED'		=> 'Şablon dosyası başarıyla güncellendi',
	'TEMPLATE_INHERITS'         => 'Bu şablon %s şablonundan kalıt alacak şekilde ayarlanmıştır ve bu yüzden kendisi süper şablon olduğundan farklı bir depolama ayarına sahip değildir.',
	'TEMPLATE_LOCATION'			=> 'Şablonların saklandığı yer',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Görüntüler herzaman dosya sisteminde saklanır.',
	'TEMPLATE_NAME'				=> 'Şablon ismi',
	'TEMPLATE_FILE_NOT_WRITABLE'=> '%s isimli şablon dosyasına yazılamıyor. Lütfen klasör ve dosya izinlerini kontrol edin.',
	'TEMPLATE_REFRESHED'		=> 'Şablon başarıyla yenilendi',

	'THEME_ADDED'				=> 'Yeni Tema dosya sistemine eklendi',
	'THEME_ADDED_DB'			=> 'Yeni Tema veritabanına eklendi',
	'THEME_CLASS_ADDED'			=> 'Özel Sınıf başarıyla eklendi',
	'THEME_DELETED'				=> 'Tema başarıyla silindi',
	'THEME_DELETED_FS'			=> 'Tema veritabanından silindi fakat tema dosyaları hala dosya sisteminiz içinde mevcut',
	'THEME_DETAILS_UPDATED'		=> 'Tema detayları başarıyla güncellendi',
	'THEME_EDITOR'				=> 'Tema düzenleyicisi',
	'THEME_EDITOR_HEIGHT'		=> 'Tema düzenleyici yüksekliği',
	'THEME_ERR_ARCHIVE'			=> 'Lütfen bir arşiv methodu seçin',
	'THEME_ERR_CLASS_CHARS'		=> 'Sadece alfanümerik karakterler ., :, -, _ ve # işaretleri sınıf isimlerinde geçerlidir.',
	'THEME_ERR_COPY_LONG'		=> 'Telif Hakkı 60 karakterden fazla olmamalıdır',
	'THEME_ERR_NAME_CHARS'		=> 'Tema ismi sadece alfanümerik karakterler, -, +, _ ve boşluk içerebilir.',
	'THEME_ERR_NAME_EXIST'		=> 'Seçtiğiniz tema ismi şu anda başka bir temanın ismidir',
	'THEME_ERR_NAME_LONG'		=> 'Tema ismi 30 karakterden fazla olmamalıdır',
	'THEME_ERR_NOT_THEME'		=> 'Belirlediğiniz arşiv geçerli bir tema içermemektedir.',
	'THEME_ERR_REFRESH_FS'		=> 'Bu tema dosya sisteminde saklanmıştır ve yenilenmesine gerek yoktur',
	'THEME_ERR_STYLE_NAME'		=> 'Bu tema için bir ad belirlemelisiniz',
	'THEME_FILE'             => 'Tema dosyası',
	'THEME_EXPORT'				=> 'Temayı dışarı aktar',
	'THEME_EXPORT_EXPLAIN'		=> 'Bu bölümde, arşiv biçiminin içindeki bir temayı dışarı aktarabilirsiniz. Bu arşivde diğer bir mesaj panosuna kurulmak için gerekli olan tüm veriler olacaktır. Siz burada bu dosyayı direkt olarak indirebilirsiniz ya da daha sonra indirmek, ftp adresine göndermek için kendi saklama klasörünüze bu dosyayı yerleştirebilirsiniz.',
	'THEME_EXPORTED'			=> 'Tema başarıyla dışarı aktarıldı ve %s içine saklandı',
	'THEME_LOCATION'			=> 'Stillerin depolandığı yer',
	'THEME_LOCATION_EXPLAIN'	=> 'Görüntüler her zaman dosya sisteminde depolanır.',
	'THEME_NAME'				=> 'Tema adı',
	'THEME_REFRESHED'			=> 'Tema başarıyla yenilendi',
	'THEME_UPDATED'				=> 'Tema başarıyla güncellendi',

	'UNDERLINE'				=> 'Altı çizili',
	'UNINSTALLED_IMAGESET'	=> 'Kaldırılmış görüntü setleri',
	'UNINSTALLED_STYLE'		=> 'Kaldırılmış stiller',
	'UNINSTALLED_TEMPLATE'	=> 'Kaldırılmış şablonlar',
	'UNINSTALLED_THEME'		=> 'Kaldırılmış temalar',
	'UNSET'					=> 'Tanımlanmamış',

));

?>