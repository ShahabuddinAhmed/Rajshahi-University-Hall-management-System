@extends('layout.showInfo')

@section('title')

	Contact

@endsection

@section('body')

	<div class="cls_ntc ">

		{{-- Here Show Information --}}
		@foreach($infos as $info)
			{{ $info->contact }}
		@endforeach
		
	</div>

@endsection