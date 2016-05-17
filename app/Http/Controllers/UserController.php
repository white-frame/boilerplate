<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WhiteFrame\Http\Controller\Resource\Controller;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
	protected $entity = 'App\User';

	public function update(Request $request, $id)
	{
		// Get attributes, only if password is non empty
		if(!$request->has('password')) {
			$attributes = $request->except(['password']);
		}
		else {
			$attributes = $request->all();
		}

		// Save model using attributes
		$this->getModel()->getRepository()->update($id, $attributes);

		// Return response
		return $this->response()
			->success("L'élément a été modifiée avec succès.")
			->redirect($this->getModel()->endpoint());
	}
}