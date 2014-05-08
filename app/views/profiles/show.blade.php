@extends('layouts.master')



@section('content')

	<div class="starter-template">
        <h1>
        	Profile 
        </h1>

        <h2>{{ $user->username }} <small>{{ $user->profile->location}}</small></h2>
        <p class="lead">{{ $user->profile->bio }}</p>

        <ul class="links">

        	<li>{{ link_to('http://twitter.com/' . $user->profile->twitter_username, 'Find Me On Twitter')}} <span class="fa fa-twitter"></span></li>

        	<li>{{ link_to('http://github.com/' . $user->profile->github_username, 'See my code!')}}<span class="fa fa-github-square"></span></li>

        </ul>
    </div>

@stop