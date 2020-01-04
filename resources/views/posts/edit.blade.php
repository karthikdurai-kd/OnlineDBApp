<!DOCTYPE html>
<html>
<head>
    <title>Edit Page</title>
    <link rel="stylesheet" type="text/css" href="{{URL('/public/css/bootstrap.css')}}">
    
</head>
<body>
    @include('inc.messages')
        @include('inc.titlePage')
    <center><h1>Edit Page</h1></center>
    <form method="post" action="{{URL($url)}}">
     
        
        <table>
            <tr>
                <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
            </tr>
            <tr>
                <td>Enter Your Name:</td>
                <td><input type="text" name="data[Title]" size="30" value='{{$edit->Title}}'>
            </tr>
            <tr><td><br/></td></tr>

            <tr>
                <td>Enter Your Occupation Details:</td>
                <td><input type="text" name="data[Body]" size="30" value="{{$edit->Body}}"></td>        
            </tr>

        </table>
        <center><input type="submit" name="Update" value="Update"></center>
   </form>
</body>
</html>