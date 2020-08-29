@extends('layouts.admin')

@section('content')
<form action="{{ route('store_artists') }}" method="POST" enctype="multipart/form-data">
	@csrf
	@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
	<div class="container row p-3 shadow rounded bg-dark mt-2 text-light">
		
		<div class="d-flex flex-column col-md-6">
			<label for="image">სურათი</label>
			<input type="file" name="image" onchange="previewFile(this);" value="{{ old('image') }}" class="form-control" id="image">
			<img id="previewImg" src="{{ old('image') }}" alt="სურათი" class="rounded">
		</div>
		<div class="col-md-6">
			<label for="name">სახელი</label>
			<input type="text" class="form-control mb-2" name="name" id="name" value="{{ old('name') }}">
			<label for="article-ckeditor1">აღწერა</label>
			<textarea id="article-ckeditor1" name="description" class="textarea">{{ old('description') }}</textarea>
			<div class="row ">
				<div class="col-md-6 pr-md-1 mt-2">
					<label for="gender">სქესი</label>
					<select class="form-control" value="{{ old('gender') }}" id="gender" name="gender">
						<option value="0">კაცი</option>
						<option value="1">ქალი</option>
					</select>
				</div>
				<div class="col-md-6 pl-md-1 mt-2">
					<label for="bday">დაბადების თარიღი</label>

					<input value="{{ old('birthday') }}" type="date" name="birthday" class="form-control" id="bday">
					
				</div>
			</div>
		</div>
		<button class="btn btn-warning text-dark w-100 mt-4">დამატება</button>
	</div>
</form>





@endsection
@section("js")

	<script type="text/javascript">
	    function previewFile(input){
	        var file = $("input[type=file]").get(0).files[0];
	        if(file){
	            var reader = new FileReader();
	            reader.onload = function(){
	                $("#previewImg").attr("src", reader.result);
	            }
	            reader.readAsDataURL(file);
	        }
	    }
	</script>
    <script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
    	$(document).ready(()=>{
    		CKEDITOR.replace( 'article-ckeditor1' );
    	});
    </script>
@endsection