<?php

namespace WPDesk\PluginBuilder\Plugin;

trait HookableParent {

	/**
	 * Hookable objects.
	 *
	 * @var array[Hookable]
	 */
	private $hookable_objects = array();

	/**
	 * Add hookable object.
	 *
	 * @param Hookable|HookablePluginDependant $hookable_object Hookable object.
	 */
	public function add_hookable( $hookable_object ) {
		if ( $hookable_object instanceof HookablePluginDependant ) {
			$hookable_object->set_plugin( $this );
		}
		$this->hookable_objects[] = $hookable_object;
	}

	/**
	 * Run hooks method on all hookable objects.
	 */
	protected function hooks_no_hookable_objects() {
		/** @var Hookable $hookable_object $hookable_object */
		foreach ( $this->hookable_objects as $hookable_object ) {
			$hookable_object->hooks();
		}
	}


}