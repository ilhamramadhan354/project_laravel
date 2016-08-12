@extends('layouts.index')
@section('content')
<br>
<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Test 1</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab col s3 "><a class="actvive" href="#test3">Disabled Tab</a></li>
        <li class="tab col s3"><a href="#test4">Test 4</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
        <div class="section">
            <div class="card-panel purple darken-3 white-text">Welcome to Laravel 5.2 with Materializecss</div>
        </div>
    </div>
    <div id="test2" class="col s12">
        <div class="card-panel teal lighten-2">This is a card panel with a teal lighten-2 class</div>          
         @foreach($datas as $data)
    <div class="col s12">
      <h5>{{ $data->caption }}</h5>

            <div class="divider"></div>
            <p>{!!substr($data->contents,0,200)!!}</p>
                
            <a href="{{ url('read', $data->id) }}" class="btn btn-flat pink accent-3 waves-effect waves-light white-text">Readmore <i class="material-icons right">send</i></a>
            <a href="{{ url('edit',$data->id) }}" class="btn btn-flat purple darken-4 waves-effect waves-light white-text"><i class="material-icons ">mode_edit</i></a>
            <a href="{{ url('delete', $data->id) }}" onclick="return confirm('Are you sure delete articles?')" class="btn btn-flat red darken-4 waves-effect waves-light white-text"><i class="material-icons ">delete</i></a>    </div>   
    @endforeach
  </div>
        </div>
    <div id="test3" class="col s12">
         <div class="section">
            <div class="card-panel green white-text">Welcome to Laravel 5.2 with Materializecss</div>
        </div>
    </div>
    <div id="test4" class="col s12">
         <div class="section">
            <div class="card-panel teal white-text">Welcome to Laravel 5.2 with Materializecss</div>
        </div>
    </div> 
    <div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
            <a href="{{ url('add') }}" class="btn-floating btn-large red">
              <i class="large material-icons">add</i>
             </a>
         </div>
   
{{ $datas->render() }}
@endsection