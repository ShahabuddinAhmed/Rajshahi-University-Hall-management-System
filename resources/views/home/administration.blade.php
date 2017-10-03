@extends('layout.showInfo')

@section('title')

	Administration

@endsection

@section('body')

	<div class="cls_ntc ">

		{{-- Here Show Information --}}
		@foreach($infos as $info)
			{{ $info->administration }}
		@endforeach
		
	</div>

@endsection