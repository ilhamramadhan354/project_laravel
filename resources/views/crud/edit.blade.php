@extends('layouts.index')
@section('content')

<div class="section">
	<div class="card-panel purple darken-3 white-text">Edit Articles</div>
</div>

<div class="section">
  <form action="{{ url('update', $showedit->id) }}" method="POST">
  {!! csrf_field() !!}
    <div class="row">
          <div class="input-field col s6">
            <input type="text" class="validate" name="caption" value="{{ $showedit->caption }}">
            <label for="title">Caption</label>
          </div>
    </div>
    <div class="row">
          <div class="input-field col s6">
            <input type="text" class="validate" name="contents" value="{{ $showedit->contents }}">
            <label for="title">Contents</label>
          </div>
    </div>
      
      <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Submit <i class="material-icons right">send</i></button>
  </form>
</div>

@endsection