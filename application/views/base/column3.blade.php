@layout('base.layout')

@section('content')
<div class="row">
  <div class="span2 left-side">@if ( isset($left_side) ) {{ $left_side }} @else LEFT_SIDE @endif</div>
  <div class="span7">{{ $content }}</div>
  <div class="span2 right-side">@if ( isset($right_side) ) {{ $right_side }} @else RIGHT_SIDE @endif</div>
</div>
@endsection