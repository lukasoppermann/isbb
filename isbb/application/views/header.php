<?=doctype('html5')."\n"; ?>
<html>
<head>
<?	
echo favicon('media/layout/favicon.ico','media/layout/favicon.png');
echo meta();
echo css('print, screen', TRUE);
echo title(variable($title).' | '.$page_name);
echo "\n";
if($this->navigation->current() === '33') {
	echo "<meta name='robots' content='noindex, nofollow' />";
}
else
{
	echo "<meta name='robots' content='index, follow' />";
}
?>
</head>
<body<?=variable($body_id).variable($body_class); ?>>
<div id="page_wrapper">
	<div id="header">
		<?=$menu['main']?>
		<?=$menu['meta']?>
	</div>
	<?=(isset($head_img) ? $head_img : "<div id='head_img'></div>"); ?>
