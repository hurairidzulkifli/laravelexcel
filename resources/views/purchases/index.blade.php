@extends('layouts.app')


@section('content')

<div class="container">
	<div class="card-header">Purchases</div>
		<div class="card-body">
			<form action="{{ route('purchase.import') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<input type="file" name="import">
				<input type="submit" class="btn btn-primary" value="Import File">
			</form>

			@include('purchases.table')
	</div>
</div>

@endsection