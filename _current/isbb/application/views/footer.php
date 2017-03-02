	<?=$menu['sitemap']?>
	<div id="footer">
		<?=$menu['footer']?>
		<?=copyright(array('copyright' => 'copyright', 'by' => 'by Institut Systemische Beratung Berlin'));?>
	</div>	
</div>
<? echo js('default'); ?>
<script type="text/javascript">
	;var _gaq = [['_setAccount', 'UA-33528934-1'], ['_trackPageview']];
	setTimeout(function() {
		(function(d, t, a) {
	 		var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
	 		g[a] = a;
	 		g.src = '<?=( isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http' )?>://www.google-analytics.com/ga.js';
	 		s.parentNode.insertBefore(g, s);
		}(document, 'script', 'async'));
	}, 0);
</script>
</body>
</html>
