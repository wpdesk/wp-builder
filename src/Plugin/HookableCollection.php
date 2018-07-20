<?php

namespace WPDesk\PluginBuilder\Plugin;

interface HookableCollection extends Hookable {

	/**
	 * Add hookable object.
	 *
	 * @param Hookable $hookable_object Hookable object to add.
	 */
	public function add_hookable( $hookable_object );

}

