<?php


use Afro\Forms\ProfileForm;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProfilesController extends \BaseController {

	protected $profileForm;

	function __construct(ProfileForm $profileForm)
	{
		$this->profileForm = $profileForm;

		$this->beforeFilter('currentUser', ['only' => ['edit', 'update']]);
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		try
		{
			$user = User::with('profile')->whereUsername($username)->firstOrFail();

		}
		catch(ModelNotFoundException $e)
		{
			return Redirect::home();
		}

		


		return View::make('profiles.show')->withUser($user);
	}

		/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($username)
	{
		$user = User::whereUsername($username)->firstOrFail();

		return View::make('profiles.edit')->withUser($user);
	}

		/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($username)
	{
		$user = User::whereUsername($username)->firstOrFail();

		$input = Input::only('location', 'bio', 'twitter_username', 'github_username');

		$this->profileForm->validate($input);

		$user->profile->fill($input)->save();

		return Redirect::route('profile.edit', $user->username);
	}

}