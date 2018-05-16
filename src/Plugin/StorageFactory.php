<?php

namespace WPDesk\PluginBuilder\Plugin;

class StorageFactory {

	/**
	 * @return PluginStorage
	 */
	public function create_storage() {
		return new PluginStorage();
	}
}

