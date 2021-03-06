## WhiteFrame Framework Boilerplate

This project is a starting point showing the usage of the full power of the [WhiteFrame/Helloquent](https://github.com/white-frame/helloquent) Model and the [WhiteFrame/Http](https://github.com/white-frame/http) Controller. In a few lines you have a full example of a User management project : 

* **Action** : listing, creating, editing and deleting eloquent models.
* **Flash message** : Simple action confirmation based on [Laracast/Flash](https://github.com/laracasts/flash) (not included in the project)
* **RESTful URL** : Built-in Resource Controller with REST Urls.
* **API-Ready** : Built-in Resource Controller handle multiple output format including `JSON` AND `JSONP` responses.

#### Important Elements

* [Routes](https://github.com/white-frame/boilerplate/blob/master/app/Http/routes.php#L7) : Linking a `UserController`into the `users` endpoint.
* [UserController](https://github.com/white-frame/boilerplate/blob/master/app/Http/Controllers/UserController.php) : This controller extends `WhiteFrame\Http\Controller\Resource\Controller` features for automatically handling all actions except `update` witch require a special logic with the password input. You need to specify the `$views` folder for loading `index`, `create`, `edit`, `show` views.
* [User](https://github.com/white-frame/boilerplate/blob/master/app/User.php) : The User Model with the [Helloquent configuration](https://github.com/white-frame/boilerplate/blob/master/app/User.php#L19-L23)
 * [UserPresenter](https://github.com/white-frame/boilerplate/blob/master/app/Presenters/UserPresenter.php) : Allows you to customize atributes presentation with `$user->present()->email` into your views.
 * [UserRepository](https://github.com/white-frame/boilerplate/blob/master/app/Repositories/UserRepository.php) : Bring the repository pattern into your application.
 * **TODO** [UserTransformer](https://github.com/white-frame/boilerplate/tree/master/app/Transformers/UserTransformer.php) : Allows you to transform your object into arrays for API displaying.
