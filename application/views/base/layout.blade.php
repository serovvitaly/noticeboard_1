<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>@if (isset($title)) {{ $title }} @endif</title>
  {{ HTML::style('bundles/bootstrap/css/bootstrap.css') }}
  {{ HTML::style('bundles/skins/default/css/styles.css') }}
  
  {{ HTML::script('bundles/jquery/jquery-1.8.3.min.js') }}
  
  <script type="text/javascript">
      $(document).ready(function(){
          $('*').tooltip();
          /*$('.announcements-item .wrapper .details .views').tooltip({
              placement: 'right'
          });*/
          
          $('#modal-auth').modal({
            show: false,
            backdrop: true
        });
      });
  </script>
  
</head>
<body>
  <div class="container">
  
    @section('topline')
    <div class="row header">
      <div style="height: 30px; background: #323232; border-bottom: 1px solid white;"></div>
      <div class="span6">
      <a href="/">ГЛАВНАЯ</a>
      </div>
      <div class="span3">
      <? if (Auth::check()) { ?>
        Привет! <a href="/auth/logout/">выход</a>
      <? } else { ?>
        <a href="/auth/" data-toggle="modal" data-target="#modal-auth">Авторизация / регистрация</a>
      <? } ?>
      </div>
      <div class="span3" style="padding-top: 10px;">
        <a class="button-place" href="/place/">Разместить объявление</a>
      </div>      
    </div>
    @yield_section
  </div>
  <div class="container content" style="margin-top: 30px;">
  <div class="top-navigation violet">
    <ul class="tabs">
      <li class="active"><a href="/buy/">Куплю</a></li>
      <li><a href="/sell/">Продам</a></li>
      <li><a href="/take/">Сниму</a></li>
      <li><a href="/rent/">Сдам</a></li>
      <li><a href="/other/">Прочее</a></li>
    </ul>
  </div>
  @section('content')
    @if (isset($content)) {{ $content }} @endif
  @yield_section
  </div>
  {{ HTML::script('bundles/bootstrap/js/bootstrap.js') }}
  
  
<!-- Modal Auth -->
<div id="modal-auth" class="modal hide" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="brand">Авторизация/регистрация</h4>
  </div>
  <div class="modal-body">
    <?= View::make('base.auth') ?>
  </div>
</div>
  
  
</body>
</html>
