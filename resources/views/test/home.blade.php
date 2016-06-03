@extends('global.master')

@section('pageHeader')
{{ $settings['forum_name'] }}
@endsection

@section('content')

<div class="col-sm-3">
	<ul class="nav nav-pills nav-stacked">
		@foreach( $category as $cat )

		<li class="nav-item"><a href="#" class="nav-link{{ ($cat['category_place'] == 1)? ' active' : '' }}">{{ $cat['category_name'] }}</a></li>

		@endforeach
	</ul>
</div>

<div class="col-sm-9">
	<div class="row">
		@foreach( $thread as $th )
		<div class="col-sm-4">
			<div class="card card-block">
				<h4 class="card-title"><a href="#">{{ $th->post_name }}</a></h4>
				<p class="card-text">{{ Bbcode::strip($th->post_content) }}</p>
				<p class="card-text"><small class="text-muted">Last updated <span title="{{ date('D, F Y', $th->updated_at) }}">{{ date('l, g:h a', $th->updated_at) }}</span> by <a href="#">jtPox</a></small></p>
			</div>
		</div>
		@endforeach
	</div>
</div>

@endsection
