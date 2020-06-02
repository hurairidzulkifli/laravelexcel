@extends('layouts.app')


@section('content')

<div class="container">
	<div class="card-header">Customers</div>
		<div class="card-body">
			<a href="{{ route('customers.export') }}" class="btn btn-primary">Export Excel</a>
			<br><br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th>No.</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
				</tr>
				<tbody>
					@foreach($customers as $customer)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $customer->first_name }}</td>
						<td>{{ $customer->last_name }}</td>
						<td>{{ $customer->email }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection