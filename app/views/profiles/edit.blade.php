@extends('layouts.master')



@section('content')

	<div class="starter-template">
        <h1>Edit Profile</h1>

        <article class="col-md-8 edit-form">

            {{ Form::model($user->profile, ['method' => 'PATCH', 'route' => 
                ['profile.update', $user->username]]) }}

            <!--Location Field  -->
            <div class"form-group">
                {{ Form::label('location', 'Location:') }}
                {{ Form::text('location', null, ['class' => 'form-control']) }}
            </div>

            <!--Bio Field  -->
             <div class"form-group">
                {{ Form::label('bio', 'Bio:') }}
                {{ Form::textarea('bio', null, ['class' => 'form-control']) }}
            </div>

            <!--Twitter Field  -->
             <div class"form-group">
                {{ Form::label('twitter_username', 'Twitter Profile Name:') }}
                {{ Form::text('twitter_username', null, ['class' => 'form-control']) }}
            </div>

            <!--Github Field  -->
             <div class"form-group">
                {{ Form::label('github_username', 'Github Profile Name:') }}
                {{ Form::text('github_username', null, ['class' => 'form-control']) }}
            </div>

            <!--Submit  -->
            <div class"form-group submit">
                 {{ Form::submit('Update Profile', ['class' => 'btn btn-primary']) }}
             </div>

            {{ Form::close() }}

        </article>



        <article class="col-md-4 user-profile">

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