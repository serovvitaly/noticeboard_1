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
      });
  </script>
  
</head>
<body>
  <div class="container-fluid content">
  
    @section('topline')
    <div class="row header">
      <div style="height: 30px; background: #323232;"></div>
      <div class="span6">
      <a href="/">ГЛАВНАЯ</a>
      </div>
      <div class="span3">
      <? if (Auth::check()) { ?>
        Привет! <a href="/auth/logout/">выход</a>
      <? } else { ?>
        <a href="/auth/">Авторизация / регистрация</a>
      <? } ?>
      </div>
      <div class="span3" style="padding-top: 10px;">
        
      </div>      
    </div>
    @yield_section
  </div>
  {{ $content }}
  {{ HTML::script('bundles/bootstrap/js/bootstrap.js') }}
</body>
</html>
