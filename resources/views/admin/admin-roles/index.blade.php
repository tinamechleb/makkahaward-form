@extends('admin/layouts/main')

@section('dashboard-content')

	<div class="card py-4 px-4 mx-2 w-100">
		<div class="actions">
			@if (request()->get('admin')['cms_pages']['admin-roles']['permissions']['add'])
				<a href="{{ url('admin' . '/admin-roles/create') }}" class="btn btn-primary btn-sm col-12 col-md-1">Add</a>
			@endif
			@if (request()->get('admin')['cms_pages']['admin-roles']['permissions']['delete'])
				<form method="post" action="{{ url('admin' . '/admin-roles/') }}" class="d-block d-md-inline-block bulk-delete" onsubmit="return confirm('Are you sure?')">
					@csrf
					<input type="hidden" name="_method" value="DELETE">
					<button type="submit" class="btn btn-danger w-100 btn-sm">Bulk Delete</button>
				</form>
			@endif
		</div>
		<div class="datatable-wrapper pt-3">
			<table class="datatable no-export w-100">
				<thead>
					<tr>
						<th></th>
						<th>#</th>
						<th>Title</th>

						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($rows as $row)
						<tr>
							<td>
								<label class="checkbox-wrapper delete-checkbox">
									<input type="checkbox" value="{{ $row['id'] }}">
									<div></div>
								</label>
							</td>
							<td>
								{{ $row['id'] }}
							</td>
							<td>{{ $row['title'] }}</td>

							<td class="actions-wrapper text-right">
								@if (request()->get('admin')['cms_pages']['admin-roles']['permissions']['read'])
									<a href="{{ url('admin' . '/admin-roles/' . $row['id']) }}" class="mb-2 btn btn-secondary btn-sm">View</a>
								@endif
								@if (request()->get('admin')['cms_pages']['admin-roles']['permissions']['edit'])
									<a href="{{ url('admin' . '/admin-roles/' . $row['id'] . '/edit') }}" class="mb-2 btn btn-primary btn-sm">Edit</a>
								@endif
								@if (request()->get('admin')['cms_pages']['admin-roles']['permissions']['delete'])
									<form class="d-inline" onsubmit="return confirm('Are you sure?')" method="post" action="{{ url('admin' . '/admin-roles/' . $row['id']) }}">
										@csrf
										<input type="hidden" name="_method" value="DELETE">
										<button class="mb-2 btn btn-danger btn-sm">Delete</button>
									</form>
								@endif
							</td>
						</tr>
						@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection