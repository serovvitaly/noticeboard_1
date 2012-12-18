<div class="row">
  <div class="span6 box-login">
    <h4>Авторизация</h4>
    
    <? if (isset($msgs_login)) echo Helper::msg($msgs_login) ?>
    
    <form class="form-horizontal" action="/auth/login/" method="POST">
        <div class="control-group">
          <label class="control-label" for="inputEmail">Email</label>
          <div class="controls">
            <input type="text" id="inputEmail" name="email" placeholder="Email">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputPassword">Пароль</label>
          <div class="controls">
            <input type="password" id="inputPassword" name="pass" placeholder="Пароль">
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <label class="checkbox">
              <input type="checkbox"> Запомнить меня
            </label>
            <button type="submit" class="btn btn-small">Вход</button>
          </div>
        </div>
    </form>
    
  </div>
  <div class="span6">
    <h4>Регистрация</h4>
    
    <? if (isset($msgs_regist)) echo Helper::msg($msgs_regist) ?>
    
    <form class="form-horizontal" action="/auth/registration/" method="POST">
        <div class="control-group">
          <label class="control-label" for="inputEmail">Email</label>
          <div class="controls">
            <input type="text" id="inputEmail" name="email" placeholder="Email">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputPassword">Пароль</label>
          <div class="controls">
            <input type="password" id="inputPassword" name="pass" placeholder="Пароль">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputPasswordCf">Повторите пароль</label>
          <div class="controls">
            <input type="password" id="inputPasswordCf" name="pass_cf" placeholder="Пароль">
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn btn-small">Регистрация</button>
          </div>
        </div>
    </form>
  </div>
</div>