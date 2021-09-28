<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>S/N</th>
			<th>Word</th>
			<th>Description</th>
			<th>Created By</th>
		</tr>
	</thead>
	<tbody>
		@foreach($dictionary_terms as $dictionary_term)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $dictionary_term->word }}</td>
				<td>{{ $dictionary_term->description }}</td>
				<td>{{ $dictionary_term->user->name }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
{{ $dictionary_terms->links() }}
