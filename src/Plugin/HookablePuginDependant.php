<?php

namespace WPDesk\PluginBuilder\Plugin;

interface HookablePluginDependant extends Hookable {

	/**
	 * Set Plugin.
	 *
	 * @param AbstractPlugin $plugin Plugin.
	 *
	 * @return null
	 */
	public function set_plugin( $plugin );

	/**
	 * Get plugin.
	 *
	 * @return AbstractPlugin.
	 */
	public function get_plugin();

}

