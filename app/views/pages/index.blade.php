@extends('layouts.master')



@section('content')

	<div class="starter-template">
        <h1>
        	{{ Auth::check() ? "Welcome, " . Auth::user()->username : "Please, Sign Up !" }}
        </h1>
        <p class="lead">Use this document as a way to quickly start any new project.All you get is this text and a mostly barebones HTML document.</p>
    </div>

@stop