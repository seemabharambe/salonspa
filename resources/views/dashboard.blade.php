@extends('home')

@section('center')
<div style="background-color: #000000;">
<h1 style="text-align: center">Sweet Salon Spa Appointments</h1>
		<table class="table table-borderd table-dark">

			<tr>
				<th>Sr.No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile_Number</th>
				<th>Service</th>
				<th>Date</th>
				<th>Message</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
  <?php $sr=1; ?>

            
             @foreach($data as $d)
             		
             	<tr>
             			<td>{{$sr }}</td>
             			<td>{{ $d->name }}</td>
             			<td>{{ $d->email }}</td>
             			<td>{{ $d->phone }}</td>
             			<td>{{ $d->chooseservice }}</td>
             			<td>{{ $d->date }}</td>
             			<td>{{ $d->message }}</td>
             			<td><a href="edit/{{$d->id}}">Edit</a></td>
             			<td><a href="delete/{{ $d->id }}">Delete</a></td>
             	</tr>
            @endforeach
<?php $sr++; ?>

  
		</table>

</div>

@endsection