@extends('layouts')

@section('contents')
<div class="content-wrapper">
    <section class="content catainer-fluid">
<form action="{{ route('store' )}}" method="POST">
	@csrf 
	<div>
		<label>Name:</label>
    	<input type="text" name="name"> 
    </div>

    <div>
		<label>Email:</label>
	 	<input type="text" name="email"> 
	</div>
	<div>
		<label>Address:</label>
	 	<input type="text" name="address"> 
	</div>

	<div>
	 	<label>Brithday:</label>
	 	<input type="date" name="brithday"> 
	</div>
	<button type="submit">Submit</button>
</form>
@include('sidebar')
</section>
</div>

@endsection

