@layout('base.layout')

@section('content')
<div class="row">
  <div class="span10">{{ $content }}</div>
  <div class="span2 right-side">@if ( isset($right_side) ) {{ $right_side }} @else RIGHT_SIDE @endif</div>
</div>
@endsection