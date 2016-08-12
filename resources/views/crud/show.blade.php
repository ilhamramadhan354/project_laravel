@extends('layouts.index')
@section('content')

<div class="section">
	<div class="card-panel purple darken-3 white-text">Articles</div>
</div>

<div class="section">
	
	<div class="row">
		<div class="col s12">
			<h5>{{ $show->caption }}</h5>

            <div class="divider"></div>
            <p>{!! $show->contents !!}</p>
                
		</div>
	</div>

</div>

@endsection