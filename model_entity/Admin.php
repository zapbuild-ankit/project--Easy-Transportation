<?php

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class Admin extends Entity {
	protected $_accessible = [
		'name'     => true,
		'username' => true,
		'password' => true,

	];
	// ...

	protected function _setPassword(string $password):?string {
		if (strlen($password) > 0) {
			return (new DefaultPasswordHasher)->hash($password);
		}
	}

}