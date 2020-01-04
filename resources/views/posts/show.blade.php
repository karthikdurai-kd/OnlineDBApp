<!DOCTYPE html>
<html>
<head>
	<title>Post Page</title>
	<link rel="stylesheet" type="text/css" href="{{URL('/public/css/bootstrap.css')}}">
    
</head>
<body>
  @include('inc.messages')
  @include('inc.titlePage')
    <center><h1>Data of ID: {{$res->id}}</h1></center>
    <p> Title is: {{$res->Title}}</p>
    <p>Body is: {{$res->Body}}</p>  
    <center>
    <a href="/blog1/posts" class="btn btn-info">Go Back</a> 
    @if(!Auth::guest())  
       @if(Auth::user()->id == $res->user_id)
        <a href="/blog1/posts/{{$res->id}}/edit" class="btn btn-dark">Edit</a>
        <a href="/blog1/posts/{{$res->id}}/delete" class="btn btn-danger">Delete</a>
       @endif
    @endif
    </center>
</body> 
</html>