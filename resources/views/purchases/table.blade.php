<br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th>No.</th>
					<th>Customer Id</th>
					<th>Company</th>
					<th>Account Number</th>
				</tr>
				<tbody>
					@foreach($purchases as $purchase)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $purchase->customer_id }}</td>
						<td>{{ $purchase->company }}</td>
						<td>{{ $purchase->bank_acc_number }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
