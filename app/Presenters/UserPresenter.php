<?php namespace App\Presenters;

use WhiteFrame\Helloquent\Presenter;

/**
 * Class UserPresenter
 * @package App\Presenters
 */
class UserPresenter extends Presenter
{
	/**
	 * Present the user email with the a link
	 */
	public function email()
	{
		return '<a href="mailto:' . $this->entity->email . '">' . $this->entity->email . '</a>';
	}
}