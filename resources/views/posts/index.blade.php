<!DOCTYPE html>
<html>
<head>
	<title>Post Page</title>
	<link rel="stylesheet" type="text/css" href="{{URL('/public/css/bootstrap.css')}}">
  
</head>
<body>
      @include('inc.titlePage')
      @include('inc.messages')
     <center> <h1>Post</h1></center><hr>
      @if(count($posts)>0)
          @foreach($posts as $p)
             <div>

                   <h3><a href="posts/{{$p->id}}">{{$p->Title}}</a></h3>
                   <small>{{$p->Body}}</small>
                   <hr>
              </div>
           @endforeach
           {{$posts->links()}}
      @else
        <p>No Post Found</p>

      @endif

</body>
</html>