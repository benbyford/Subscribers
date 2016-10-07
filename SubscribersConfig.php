<?php

class SubscribersConfig extends ModuleConfig {

	/*
	* Admin settings
	*/
	public function getDefaults() {
		return array(
			"user-role" => "subscriber"
		);
	}
	public function getInputfields() {

		$inputfields = parent::getInputfields();

		$f = $this->modules->get('InputfieldText');
		$f->name = 'user-role';
		$f->label = 'User Role';
		$f->value = 'user-role';
		$inputfields->add($f);

		return $inputfields;
	}
}
