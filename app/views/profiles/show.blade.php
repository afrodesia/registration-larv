@extends('layouts.master')



@section('content')

	<div class="starter-template">
        <h1>
        	Profile 
        </h1>



        <article class="user-profile">

        <h2>{{ $user->username }} <small>{{ $user->profile->location}}</small></h2>
        <p class="lead">{{ $user->profile->bio }}</p>

        <ul class="links user-social">
        	<li>{{ link_to('http://twitter.com/' . $user->profile->twitter_username, 'Find Me On Twitter')}} <span class="fa fa-twitter"></span></li>

        	<li>{{ link_to('http://github.com/' . $user->profile->github_username, 'See my code!')}}<span class="fa fa-github-alt"></span></li>
        </ul>

        @if (Auth::user()->id == $user->id)
        <p class="edit-profile"> {{ link_to_route('profile.edit', 'Edit Your Profile', $user->username) }}</p>
        @endif
        </article>
    </div>

@stop