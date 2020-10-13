@extends('home')


@section('center')

<h1 style="text-align: center;">Sweet Salon Spa Inquiry</h1>

<table class="table table-borderd table-dark">
    <tr>
    	<th>Sr.No</th>
    	<th>Name</th>
    	<th>Email</th>
    	<th>Subject</th>
    	<th>Message</th>
    	<th>Edit</th>
    	<th>Delete</th>
   </tr>

   @foreach($gt as $t)
      <tr>

      	<?php $sr=1; ?>
      	  <td>{{$sr}}</td>
      	  <td>{{$t->nam}}</td>
      	  <td>{{$t->mail}}</td>
      	  <td>{{$t->sub}}</td>
      	  <td>{{$t->msg}}</td>
      	  <td><a href="editgetdata/{{$t->id}}">Edit</a></td>
      	  <td><a href="eraseget/{{$t->id}}">Delete</a></td>
     </tr>
   <?php $sr++; ?>

   @endforeach



</table>
@endsection