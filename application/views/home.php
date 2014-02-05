<div class="my-account">
<?php if ( !$this->facebook->logged_in() ): ?>
	<a href="<?php echo site_url('account/login')?>">Login</a>
	<fb:facepile></fb:facepile>
<?php else:?>
	<img class="avatar" src="<?php echo facebook_picture('me')?>" />
	<?php $user = $this->facebook->user();?>
	<h2><?php echo $user->name?> ( <a href="<?php echo site_url('account/logout')?>">Logout</a> )</h2>
	<fb:like></fb:like>
	<?php $result = $this->facebook->call('get', 'me', array('metadata' => 1));?>
	<pre>
		<?php var_dump($result);?>
	</pre>
<?php endif;?>
</div>
<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js" type="text/javascript"></script>
<script type="text/javascript">
	FB.init({appId: '<?php echo facebook_app_id()?>', status: true, cookie: true, xfbml: true});
	FB.Event.subscribe('auth.login', function(response) {
		window.location.reload();
	});
</script>