@extends('layout.updateInfo')

@section('title')

	Update Administration

@endsection

@section('body')

	<form action="updateadministration" method="post">
		{{ csrf_field() }}
        <div class="field-wrap">
            <textarea name="info" type="text" rows="15" maxlength="995">

            </textarea>
        </div>
        <button type="submit" class="button button-block"/>Submit</button>
    </form>

@endsection