<?php
//HtmlHelper.php

class HtmlHelper {

	// generate image tag with options

	public function img($img, $options = null) {

		$imgTag = '<img class="' . $options['class'] . '" src="' . SITE_ROOT . '/webroot/images/' . $img . '" alt="' . $options['alt'] . '">';

		return $imgTag;

	}
}