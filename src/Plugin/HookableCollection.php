<?php

namespace WPDesk\PluginBuilder\Plugin;

interface HookableCollection extends Hookable {

	/**
	 * Add hookable object.
	 *
	 * @param Hookable|HookablePluginDependant $hookable_object Hookable object.
	 */
	public function add_hookable( Hookable $hookable_object );

}

