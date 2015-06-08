@extends ('master')

@section('content')
<div class="container">
	<div class="row">
		
	<div class="container content-container">
	
		
		<div class="col-md-10 col-md-offset-1">
			<h2>All @if (count($visitors) > 0){{ count($visitors) }} @endif Registered Visitors
				<small><a href="{{ url() }}/download-csv">Download visitors.csv</a></small>
			</h2>
			
			<br>
			<div class="table-responsive"> 
				<table class="table table-hover visitor-table">
					<tr>
						<th>Full Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Delete</th>
					</tr>
					@if (count($visitors) > 0)
						@foreach ($visitors as $visitor)
							<tr>
								<td>{{ $visitor['first_name'] }} {{ $visitor['surname'] }}</td>
								<td>{{ $visitor['email'] }}</td>
								<td>{{ $visitor['phone'] }}</td>
								<td><a href="{{ url() }}/delete-visitor/{{ $visitor['id'] }}" class="btn btn-xs btn-danger" onclick="return confirmDeletion();">Delete</a></td>
							</tr>
						@endforeach
					@else
						<tr>
							<td colspan="6">No visitors have been registered as of yet.</td>
						</tr>
					@endif
				</table>
			</div>
		</div>
	</div>
	</div>
</div>
@endsection