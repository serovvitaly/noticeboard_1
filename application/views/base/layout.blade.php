<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>{{ $title }}</title>
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
        <a class="button-place" href="/place/" data-toggle="modal" data-target="#modal-place">Разместить объявление</a>
      </div>      
    </div>
    @yield_section
  </div>
  {{ $content }}
  {{ HTML::script('bundles/bootstrap/js/bootstrap.js') }}
  
  
<!-- Modal Auth -->
<div id="modal-auth" class="modal hide" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="brand">Авторизация/регистрация</h4>
  </div>
  <form action="/auth/login/" style="margin: 0;" method="POST">
  <div class="modal-body">
    <?= View::make('base.auth') ?>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-small btn-primary">Поехали</button>
    <button class="btn btn-small" data-dismiss="modal" aria-hidden="true">Отмена</button>
  </div>
  </form>
</div>
  
  
</body>
</html>
