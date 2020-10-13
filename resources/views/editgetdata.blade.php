@extends('home')

@section('center')

   
<form method="POST" action="editinquiry/{{$da->first()->id}}">
    @csrf
		<table class="table table-borderd table-dark">

         <tr>
         	<td>Name</td>
         	<td><input type="text" name="nam" value="{{$da->first()->nam}}"></td>
         </tr>


           <tr>
         	<td>Email</td>
         	<td><input type="email" name="mail" value="{{$da->first()->mail}}"></td>
         </tr>


           <tr>
         	<td>Subject</td>
         	<td><input type="text" name="sub" value="{{$da->first()->msg}}"></td>
         </tr>


           <tr>
         	<td>Message</td>
         	<td><input type="text" name="msg" value="{{$da->first()->sub}}"></td>
         </tr>

         <tr><td><input type="submit" name="send" value="update"></td></tr>


 			



	     </table>

</form>



@endsection