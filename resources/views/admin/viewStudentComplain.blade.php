@extends('layout.showInfo')

@section('title')

    View Student's Complain

@endsection

@section('body')

    <div class="cls_ntc ">

        {{-- Here Show Information --}}
        @foreach($complains as $complain)
        	{{ $complain->name }}
        	<br>
        	{{ $complain->std_id }}
        	<br>
        	{{ $complain->room }}
        	<br>
        	{{ $complain->complain }}
        @endforeach
        
    </div>

@endsection