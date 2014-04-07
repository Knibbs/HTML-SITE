<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" itemscope itemtype="http://schema.org/WebPage" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" itemscope itemtype="http://schema.org/WebPage" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" itemscope itemtype="http://schema.org/WebPage" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<html class="no-js" itemscope itemtype="http://schema.org/WebPage" lang="en">
<head>
<?php // Insert Webfont Link Here ?>
<link rel="stylesheet" href="/site/css/base.css" />
<link rel="stylesheet" href="/site/css/typography.css" />
<link rel="stylesheet" href="/site/css/style.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" /><?php // Hiding Safari User Interface */?>

<link rel="canonical" href="" />
		
<?php /* Social Media/Open Graph Tags 
global $c;
$KnibbsTitle = $c->getCollectionName();
$KnibbsDescription = $c->getAttribute('meta_description');
$thumb = $c->getAttribute('thumbnail');
if(is_object($thumb)){
$fID = $thumb->getFileID();
$thumbpath = BASE_URL.File::getRelativePathFromID($fID);
}
?>
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo htmlspecialchars($KnibbsTitle, ENT_COMPAT, APP_CHARSET); ?>" />
<meta property="og:url" content="<?= $canonicalURL ?>" />
<?php if($KnibbsDescription){ echo '<meta property="og:description" content="'.htmlspecialchars($KnibbsDescription, ENT_COMPAT, APP_CHARSET).'" />'; } ?>
<meta property="og:site_name" content="<?php echo SITE; ?>" />
<?php if($thumbpath){ echo '<meta property="og:image" content="'.$thumbpath.'" />'; } ?>

<?php // Twitter Card data ?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($KnibbsTitle, ENT_COMPAT, APP_CHARSET); ?>">
<?php if($KnibbsDescription){ echo '<meta name="twitter:description" content="'.htmlspecialchars($KnibbsDescription, ENT_COMPAT, APP_CHARSET).'" />'; } ?><?php if($thumbpath){ echo '<meta name="twitter:image:src" content="'.$thumbpath.'" />'; } ?>
<?php 	// <meta name="twitter:site" content="@publisher_handle">
// <meta name="twitter:creator" content="@author_handle"> ?>

<?php // Schema.org markup for Google+ ?>
<meta itemprop="name" content="<?php echo htmlspecialchars($KnibbsTitle, ENT_COMPAT, APP_CHARSET); ?>">
<?php if($KnibbsDescription){ echo '<meta itemprop="description" content="'.htmlspecialchars($KnibbsDescription, ENT_COMPAT, APP_CHARSET).'" />'; } ?>
<?php if($thumbpath){ echo '<meta itemprop="image" content="'.$thumbpath.'" />'; } ?>

<?php /* Schema.org markup for Google+ 
<!-- Google Authorship and Publisher Markup
<link rel="author" href="https://plus.google.com/[Google+_Profile]/posts"/>
<link rel="publisher" href=”https://plus.google.com/[Google+_Page_Profile]"/> */ ?>

<?php // Grab Modernizer CDN, with a protocol relative URL; fall back to local if offline */?>
<script>
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js';s.parentNode.insertBefore(g,s)}(document,'script'));</script>	
</head>
<body>
<div class="knibbs-outer">
<div class="knibbs-inner">
<div class="page-wrap">
<div class="mc">