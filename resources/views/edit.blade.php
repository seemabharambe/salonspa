@extends('home')

@section('center')



<h1>Update Appointment Record</h1>

<form method="POST" action="/update/{{$record->id}}">
@csrf
   <table class="table table-border table-dark">
	   	<tr>
	   		<td>Name</td>
	   		<td><input type="text" name="name" value="{{$record->name}}"></td>
	   	</tr>


	   	<tr>
	   		<td>Email</td>
	   		<td><input type="email" name="email" value="{{$record->email}}"></td>
	   	</tr>


	   	<tr>
	   		<td>Mobile_Number</td>
	   		<td><input type="text" name="phone" value="{{$record->phone}}"></td>
	   	</tr>


	   	<tr>
	   		<td>Service</td>
	   		<td><input type="text" name="chooseservice" value="{{$record->chooseservice}}"></td>
	   	</tr>


	   	<tr>
	   		<td>Date</td>
	   		<td><input type="date" name="date" value="{{$record->date}}"></td>
	   	</tr>

	   	<tr>
	   		<td>Message</td>
	   		<td><input type="text" name="message" value="{{$record->message}}"></td>

	   	</tr>


  		<tr><td><input type="submit" name="send" value="Update"></td></tr>
   </table>
   	
</form>

@endsection