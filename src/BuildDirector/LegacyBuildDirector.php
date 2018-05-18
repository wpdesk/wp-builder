<?php

namespace WPDesk\PluginBuilder\BuildDirector;

use WPDesk\PluginBuilder\Builder\AbstractBuilder;
use WPDesk\PluginBuilder\Plugin\AbstractPlugin;

class LegacyBuildDirector {

	/** @var AbstractBuilder */
	private $builder;

	public function __construct(AbstractBuilder $builder) {
		$this->builder = $builder;
	}

	/**
	 * Builds plugin
	 */
	public function buildPlugin() {
		$this->builder->build_plugin();
		$this->builder->init_plugin();
		$this->builder->store_plugin();
	}

	/**
	 * Returns built plugin
	 *
	 * @return AbstractPlugin
	 */
	public function getPlugin() {
		return $this->builder->get_plugin();
	}
}