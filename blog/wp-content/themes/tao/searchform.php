<form method="get" class="search-form" action="<?php echo home_url(); ?>">
    <fieldset>
    	<?php $value = __( 'Search...', 'onioneye' ); ?>
    	<input type="text" class="search-field" name="s" id="s"  value="<?php echo $value; ?>" onfocus="if (this.value == '<?php echo $value; ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php echo $value; ?>';}" />
	</fieldset>
</form><!-- /.search-form -->

