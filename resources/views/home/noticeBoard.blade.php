@extends('layout.showInfo')

@section('title')

	Notice Board

@endsection

@section('body')

	<div class="cls_ntc ">

		{{-- Here Show Information --}}
		@foreach($notices as $notice)
			{{$notice->notice}}
			<br>
			<br>
		@endforeach

		
	</div>

@endsection