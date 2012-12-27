@layout('base.layout')

@section('content')
<div class="row">
  <div class="span2 left-side">@if ( isset($left_side) ) {{ $left_side }} @else LEFT_SIDE @endif</div>
  <div class="span10">{{ $content }}</div>
</div>
@endsection