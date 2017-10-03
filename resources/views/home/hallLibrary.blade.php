@extends('layout.showInfo')

@section('title')

	Library

@endsection

@section('body')

	<div class="cls_ntc ">

		{{-- Here Show Information --}}
		@foreach($infos as $info)
			{{ $info->library }}
		@endforeach
		
	</div>

@endsection