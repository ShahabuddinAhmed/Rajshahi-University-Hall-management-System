@extends('layout.showInfo')

@section('title')

	Canteen

@endsection

@section('body')

	<div class="cls_ntc ">

		{{-- Here Show Information --}}
		@foreach($infos as $info)
			{{ $info->canteen }}
		@endforeach
		
	</div>

@endsection