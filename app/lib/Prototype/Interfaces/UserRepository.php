<?php

namespace Prototype\Interfaces;

interface UserRepository extends BaseRepositoryInterface {

	public function changeAppCloseStatus($id);

	public function resetPassword($id);

	public function updateProfile();

	public function forgotPassword();

}