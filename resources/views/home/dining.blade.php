@extends('layout.showInfo')

@section('title')

	Dining

@endsection

@section('body')

	<div class="cls_ntc ">

		{{-- Here Show Information --}}
		@foreach($infos as $info)
			{{ $info->dining }}
		@endforeach
		
	</div>

@endsection