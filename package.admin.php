<?php

namespace ionmvc\packages;

use ionmvc\classes\config;
use ionmvc\classes\path;
use ionmvc\classes\router;

class admin extends \ionmvc\classes\package {

	const version = '1.0.0';

	public function setup() {
		$uri = config::get('admin.uri');
		if ( $uri !== 'admin' ) {
			router::rewrite("{$uri}(:all)",'admin$1');
		}
		//register paths
		path::add([
			"{$this->info['path_alias']}-asset"       => "{{$this->info['path_alias']}}/assets",
			"{$this->info['path_alias']}-asset-css"   => "{{$this->info['path_alias']}-asset}/css",
			"{$this->info['path_alias']}-asset-font"  => "{{$this->info['path_alias']}-asset}/fonts",
			"{$this->info['path_alias']}-asset-js"    => "{{$this->info['path_alias']}-asset}/javascript",
			"{$this->info['path_alias']}-asset-image" => "{{$this->info['path_alias']}-asset}/images",
			"{$this->info['path_alias']}-view"        => "{{$this->info['path_alias']}}/views"
		]);
		//register groups
		path::group('css',"{$this->info['path_alias']}-asset-css");
		path::group('font',"{$this->info['path_alias']}-asset-font");
		path::group('js',"{$this->info['path_alias']}-asset-js");
		path::group('image',"{$this->info['path_alias']}-asset-image");
		path::group('view',"{$this->info['path_alias']}-view");
	}

	public static function package_info() {
		return [
			'author'      => 'Kyle Keith',
			'version'     => self::version,
			'description' => 'Admin area',
			'require' => [
				'asset' => ['1.0.0','>=']
			],
			'priority' => 2
		];
	}

}

?>