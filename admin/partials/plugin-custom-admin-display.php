<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @since      1.0.0
 *
 * @package    CustomAdmin
 * @subpackage CustomAdmin/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
	<h1 class="wp-heading-inline">Custom Admin</h1>
	<form>
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><label for="lorem">Lorem Ipsum</label></th>
					<td><input name="lorem" id="lorem" value="" class="regular-text" type="text"></td>
				</tr>
				<tr>
					<th scope="row"><label for="aenean_dictum">Aenean dictum</label></th>
					<td><input name="aenean_dictum" id="aenean_dictum" aria-describedby="tagline-description" value="" class="regular-text" type="text">
					<p class="description">Aenean dictum, nulla ultrices mattis rhoncus, massa turpis.</p></td>
				</tr>
			</tbody>
		</table>
	</form>
</div>