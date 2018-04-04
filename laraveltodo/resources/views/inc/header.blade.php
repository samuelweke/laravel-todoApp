<!DOCTYPE html>
<html>
<head>
	<title>TODO APPLICATION</title> 
	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

</head>

<body class="bg-light">
	<nav class="navbar navbar-expand-lg navbar-light bg-custom">
		<a class="navbar-brand" href="#">My-To-Do Note</a>
		  

	  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
	    <ul class="navbar-nav ">
	      <li class="nav-item ">
	        <a class="nav-link" href="#form">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link"  action="{{ url('/todo') }}" href="#todo">Add Todo</a>
	      </li>
	    </ul>
	  </div>
	</nav>
