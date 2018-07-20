<?php

namespace WPDesk\PluginBuilder\Plugin;

interface Hookable {

	/**
	 * Add hookable object.
	 *
	 * @param Hookable $hookable_object Hookable object to add.
	 */
	public function add_hookable( $hookable_object );

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

	/**
	 * Init hooks (actions and filters).
	 *
	 * @return null
	 */
	public function hooks();

}

