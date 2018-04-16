<?php

namespace WPDesk\PluginBuilder\Builder;

use WPDesk\PluginBuilder\Plugin\AbstractPlugin;

class AbstractBuilder
{
    const FILTER_PLUGIN_CLASS = 'wpdesk_plugin_class';
	const HOOK_BEFORE_PLUGIN_INIT = 'wpdesk_before_plugin_init';
	const HOOK_AFTER_PLUGIN_INIT = 'wpdesk_before_afterinit';

	protected static $instances = [];

	/**
	 * @param string $class
	 * @param AbstractPlugin $object
	 */
	protected function addToStorage($class, $object) {
		if (isset(self::$instances[$class])) {
			throw new Exception\ClassAlreadyExists("Class {$class} already exists");
		}
		self::$instances[$class] = $object;
	}

	/**
	 * @param string $class
	 *
	 * @return AbstractPlugin
	 */
	protected function getFromStorage($class) {
		if (isset(self::$instances[$class])) {
			return self::$instances[$class];
		} else {
			throw new Exception\ClassNotExists("Class {$class} not exists in storage");
		}
	}
}