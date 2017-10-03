@extends('layout.showInfo')

@section('title')

	About

@endsection

@section('body')

	<div class="cls_ntc ">

		{{-- Here Show Information --}}
		@foreach($infos as $info)
			{{ $info->about }}
		@endforeach

		
	</div>

@endsection