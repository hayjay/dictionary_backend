<form action="{{ route('dictionary_term_store') }}" method="POST" role="form">
	<legend>Create New Dictionary Term</legend>

	@csrf
	<div class="form-group">
		<label for="">Word</label>
		<input type="text" name="word" value="{{ old('word') }}" title="Please insert the word here." class="form-control" id="" placeholder="Please insert the word here.">
		@if ($errors->has('word'))
			<span class="label" style="color: red;">{{ $errors->first('word') }}</span>
		@endif
	</div> <br>

	<div class="form-group">
		<label for="">Description</label>
		<textarea name="description" id="inputDescription" class="form-control" rows="3"  title="Please insert the description here." placeholder="Please insert the description here.">{{ old('description') }}</textarea>
		@if ($errors->has('description'))
			<span class="label" style="color: red;" >{{ $errors->first('description') }}</span>
		@endif
	</div> <br>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>