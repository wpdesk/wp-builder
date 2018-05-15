<?php

namespace WPDesk\PluginBuilder\Builder;

use WPDesk\PluginBuilder\Plugin\AbstractPlugin;

class InfoBuilder extends AbstractBuilder {
	const FILTER_PLUGIN_CLASS = 'wp_builder_plugin_class';
	const HOOK_BEFORE_PLUGIN_INIT = 'wp_builder_before_plugin_init';
	const HOOK_AFTER_PLUGIN_INIT = 'wp_builder_before_init';

	/**
	 * Builds instance of plugin
	 *
	 * @param \WPDesk_Plugin_Info $info
	 * @return AbstractPlugin
	 *
	 * @return AbstractPlugin
	 */
	public function build_from_info( \WPDesk_Buildable $info ) {
		$class_name = apply_filters( self::FILTER_PLUGIN_CLASS, $info->get_class_name() );

		/** @var AbstractPlugin $plugin */
		$plugin = new $class_name( $info );
		$this->addToStorage( $info->get_class_name(), $plugin );

		do_action( self::HOOK_BEFORE_PLUGIN_INIT, $plugin );
		$plugin->init();
		do_action( self::HOOK_AFTER_PLUGIN_INIT, $plugin );

		return $plugin;
	}

	/**
	 * @param string $class
	 *
	 * @return AbstractPlugin
	 */
	public function get_plugin_instance( $class ) {
		return $this->getFromStorage( $class );
	}
}