@extends('layouts.admin')
@section('content')
	<categorycomponent :categories="{{ json_encode($cats) }}"></categorycomponent>
	
@endsection
