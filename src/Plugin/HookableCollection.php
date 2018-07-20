<?php

namespace WPDesk\PluginBuilder\Plugin;

interface HookableCollection {

	/**
	 * Add hookable object.
	 *
	 * @param Hookable $hookable_object Hookable object to add.
	 */
	public function add_hookable( $hookable_object );


	/**
	 * Init hooks (actions and filters).
	 *
	 * @return null
	 */
	public function hooks();

}

