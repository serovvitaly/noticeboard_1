<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>{{ $title }}</title>
  {{ HTML::style('bundles/bootstrap/css/bootstrap.css') }}
  {{ HTML::style('bundles/skins/default/css/styles.css') }}
  
  {{ HTML::script('bundles/jquery/jquery-1.8.3.min.js') }}
</head>
<body>
  <div class="container content">
  
    @section('topline')
    <div class="row">
      <div class="span6">
      
      </div>
      <div class="span3">
      <? if (Auth::check()) { ?>
        Привет! <a href="/auth/logout/">выход</a>
      <? } else { ?>
        <a href="/auth/">Авторизация / регистрация</a>
      <? } ?>
      </div>
      <div class="span3">
        <a class="btn btn-danger" href="#">Разместить объявление</a>
      </div>      
    </div>
    @yield_section

    {{ $content }}
    
  </div>
  
  {{ HTML::script('bundles/bootstrap/js/bootstrap.js') }}
</body>
</html>
