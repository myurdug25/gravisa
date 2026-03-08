<?php
/**
 * Sayfa <head> içeriği: SEO başlık, meta description, meta keywords (admin’den yönetilen)
 * Kullanım: $pageId ayarlanmış olmalı (örn. 'index', 'iletisim')
 */
if (empty($pageId)) $pageId = 'index';
$seo = getSeoForPage($pageId);
$pageTitle = $seo['title'];
$pageDescription = $seo['description'];
$pageKeywords = $seo['keywords'];
$siteSettings = getSettings();
?>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?= htmlspecialchars($pageDescription) ?>" />
<?php if (!empty($pageKeywords)): ?>
<meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>" />
<?php endif; ?>
<title><?= htmlspecialchars($pageTitle) ?></title>
<script>window.__siteSettings=<?= json_encode([
  'contact_email'=>$siteSettings['contact_email']??'',
  'servis_email'=>$siteSettings['servis_email']??'',
  'whatsapp_number'=>$siteSettings['whatsapp_number']??'',
  'phone_display'=>$siteSettings['phone_display']??'',
  'address'=>$siteSettings['address']??''
], JSON_UNESCAPED_UNICODE) ?>;</script>
