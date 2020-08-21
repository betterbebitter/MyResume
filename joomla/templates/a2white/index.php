<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'framework.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<script type="text/javascript">
jQuery(function ($) {   
$("<select />").appendTo("#menu");
$("<option />", {
"selected": "selected",
"value"   : "",
"text"    : "Menu"
}).appendTo("#menu select");
$("#menu a").each(function() {
var el = $(this);
$("<option />", {
"value"   : el.attr("href"),
"text"    : el.text()
}).appendTo("#menu select");
});
$("#menu select").change(function() {
window.location = $(this).find("option:selected").val();
});
});
</script>
</head>

<body class="<?php echo $this->params->get('font'); ?> <?php echo $this->params->get('color'); ?>">
<div id="header">
<div id="container">
<div id="logo">
<img src="<?php echo $this->baseurl ?>/<?php echo "$logo"; ?>" alt="<?php echo $sitename; ?> Logo" />
</div>
<?php if($this->countModules('header')) : ?>
<div id="head">
<jdoc:include type="modules" name="header" style="none" />
</div>
<?php endif; ?>
</div>
</div>
<?php if($this->countModules('menu') or $this->countModules('search')) : ?>
<div id="navigation">
<div id="container">
<?php if($this->countModules('menu')) : ?>
<div id="menu">
<jdoc:include type="modules" name="menu" style="none" />
</div>
<?php endif; ?>
<?php if($this->countModules('search')) : ?>
<div id="search">
<jdoc:include type="modules" name="search" style="none" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('banner')) : ?>
<div id="banner">
<jdoc:include type="modules" name="banner" style="none" />
</div>
<?php endif; ?>
<?php if($this->countModules('breadcrumb')) : ?>
<div id="breadcrumb">
<div id="container">
<jdoc:include type="modules" name="breadcrumb" style="none" />
</div>
</div>
<?php endif; ?>
<div id="spacer"></div>
<div id="clearbreak">
<div id="container">
<?php if($this->countModules('left')) : ?>
<div id="left<?php echo getLayout($left,$right); ?>" class="layout">
<jdoc:include type="modules" name="left" style="modtitle" />
</div>
<?php endif; ?>
<div id="content<?php echo getLayout($left,$right); ?>">
<?php if($this->countModules('user1') or $this->countModules('user2') or $this->countModules('user3')) : ?>
<div id="user">
<div class="user user-<?php echo $modauser; ?>">
<?php if($this->countModules('user1')) : ?>
<div class="column-1">
<jdoc:include type="modules" name="user1" style="modtitle" />
</div>
<?php endif; ?>
<?php if($this->countModules('user2')) : ?>
<div class="column-2">
<jdoc:include type="modules" name="user2" style="modtitle" />
</div>
<?php endif; ?>
<?php if($this->countModules('user3')) : ?>
<div class="column-3">
<jdoc:include type="modules" name="user3" style="modtitle" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('user4') or $this->countModules('user5') or $this->countModules('user6')) : ?>
<div id="user">
<div class="user user-<?php echo $modbuser; ?>">
<?php if($this->countModules('user4')) : ?>
<div class="column-1">
<jdoc:include type="modules" name="user4" style="modtitle" />
</div>
<?php endif; ?>
<?php if($this->countModules('user5')) : ?>
<div class="column-2">
<jdoc:include type="modules" name="user5" style="modtitle" />
</div>
<?php endif; ?>
<?php if($this->countModules('user6')) : ?>
<div class="column-3">
<jdoc:include type="modules" name="user6" style="modtitle" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<div id="clearbreak">
<jdoc:include type="message" />
<jdoc:include type="component" />
</div>
<?php if($this->countModules('user7') or $this->countModules('user8') or $this->countModules('user9')) : ?>
<div id="user">
<div class="user user-<?php echo $modcuser; ?>">
<?php if($this->countModules('user7')) : ?>
<div class="column-1">
<jdoc:include type="modules" name="user7" style="modtitle" />
</div>
<?php endif; ?>
<?php if($this->countModules('user8')) : ?>
<div class="column-2">
<jdoc:include type="modules" name="user8" style="modtitle" />
</div>
<?php endif; ?>
<?php if($this->countModules('user9')) : ?>
<div class="column-3">
<jdoc:include type="modules" name="user9" style="modtitle" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
</div>
<?php if($this->countModules('right')) : ?>
<div id="right<?php echo getLayout($left,$right); ?>" class="layout">
<jdoc:include type="modules" name="right" style="modtitle" />
</div>
<?php endif; ?>
</div>
</div>
<?php if($this->countModules('bottom1') or $this->countModules('bottom2') or $this->countModules('bottom3') or $this->countModules('bottom4') or $this->countModules('bottom5')) : ?>
<div id="bottom">
<div id="container" class="bottom bottom-<?php echo $modbottom; ?>">
<?php if($this->countModules('bottom1')) : ?>
<div class="column-1">
<jdoc:include type="modules" name="bottom1" style="modtitle" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom2')) : ?>
<div class="column-2">
<jdoc:include type="modules" name="bottom2" style="modtitle" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom3')) : ?>
<div class="column-3">
<jdoc:include type="modules" name="bottom3" style="modtitle" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom4')) : ?>
<div class="column-4">
<jdoc:include type="modules" name="bottom4" style="modtitle" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom5')) : ?>
<div class="column-5">
<jdoc:include type="modules" name="bottom5" style="modtitle" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('footer1') or $this->countModules('footer2') or $this->countModules('footer3') or $this->countModules('footer4') or $this->countModules('footer5')) : ?>
<div id="footer">
<div id="container" class="footer footer-<?php echo $modfooter; ?>">
<?php if($this->countModules('footer1')) : ?>
<div class="column-1">
<jdoc:include type="modules" name="footer1" style="modtitle" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer2')) : ?>
<div class="column-2">
<jdoc:include type="modules" name="footer2" style="modtitle" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer3')) : ?>
<div class="column-3">
<jdoc:include type="modules" name="footer3" style="modtitle" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer4')) : ?>
<div class="column-4">
<jdoc:include type="modules" name="footer4" style="modtitle" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer5')) : ?>
<div class="column-5">
<jdoc:include type="modules" name="footer5" style="modtitle" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<div id="copyright">
<div id="container">
<div id="copy">
Copyright &copy; <?php echo date("Y"); ?> <?php echo $sitename; ?>. All Right Reserved. 
By <a href="http://www.madetemplates.com" target="_blank">Made Templates</a>.
</div>
</div>
</div>
<?php if($this->countModules('debug')) : ?>
<jdoc:include type="modules" name="debug" style="none" />
<?php endif; ?>
</body>
</html>