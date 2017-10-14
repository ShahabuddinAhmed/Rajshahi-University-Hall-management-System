@extends('layout.showInfo')

@section('title')

	Student Info

@endsection

@section('body')

	<div class="cls_ntc ">

		{{-- Here Show Information --}}
		@foreach($studentInfoes as $info)
			{{ $info->id }}
		@endforeach
		
	</div>

@endsection