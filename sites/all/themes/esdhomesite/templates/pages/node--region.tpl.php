<?php print render($content['field_hero']); ?>

<div class="row">
	<div class="small-12 columns">
		<?php print render($content['field_overview_text']); ?>
	</div>
</div>

<?php if (isset($content['field_big_number_breaker'])): ?>
	<?php print render($content['field_big_number_breaker']); ?>
<?php endif; ?>

<div class="row">
	<div class="small-12 columns">
		<?php print render($content['field_key_facts_text']); ?>
	</div>
</div>