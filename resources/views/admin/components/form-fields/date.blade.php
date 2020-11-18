@php
	$input_name = $name;
	if ($locale) {
		$input_name = $locale . '[' . $name . ']';
	}
@endphp
<div class="form-group">
	@include('admin/components/form-fields/label')
	<input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" name="{{ $input_name }}" value="{{ $value }}">
</div>