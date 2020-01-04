<!DOCTYPE html>
<html>
<head>
	<title>Create Page</title>
	<link rel="stylesheet" type="text/css" href="{{URL('/public/css/bootstrap.css')}}">
    
</head>
<body>
     @include('inc.messages')
      @include('inc.titlePage')
    <form method="post" action="{{URL($url)}}">
    	
         <center><h1>Post Creation Page</h1></center>
    	<table>
    		<tr>
    			<td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
    		</tr>
    		<tr>
    			<td>Enter Your Name:</td>
    			<td><input type="text" name="Name" size="30">
    		</tr>
    		<tr><td><br/></td></tr>

    		<tr>
    	        <td>Enter Your Occupation Details:</td>
    	        <td><input type="text" name="Occupation" size="30"></td>		
    		</tr>
        </table>
        <center><input type="submit" name="Submit"></center>
   </form>
</body>
</html>