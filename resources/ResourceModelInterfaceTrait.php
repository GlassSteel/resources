<?php
namespace glasteel;

trait ResourceModelInterfaceTrait
{
	/*
	protected (string) $name
	*/

	//INSTANCE FUNCTIONS

	public function getInstanceName(){
		return $this->name;
	}//getInstanceName()

	//CLASS META FUNCTIONS

	public static function getResourceSlug(){
		return self::$pbt;
	}//getResourceSlug()

	public static function getResourceNicename(){
		$base = get_called_class();
		$parts = explode('\\', $base);
		$last = array_pop($parts);
		return $last;
	}//getResourceNicename()

}//trait ResourceModelInterfaceTrait