<div class="row" style="margin: 0;">
  <div class="span3 box-login" style="margin-left: 16px;">
    <h4>Авторизация</h4>
    
    <? if (isset($msgs_login)) echo Helper::msg($msgs_login) ?>
    <form action="/auth/login/" style="margin: 0;" method="POST">
      <input style="margin: 0 auto 10px;" type="text" name="email" placeholder="Email"><br/>
      <input style="margin: 0 auto 10px;" type="password" name="pass" placeholder="Пароль"><br/>
      <label style="font-size: 11px; margin: 0"><input style="margin: 0 5px 0 0;" type="checkbox" name=""> запомнить меня на этом компьютере</label>
      <div style="text-align: right; margin-top: 56px;">
        <button style="width: 157px;" type="submit" class="btn btn-small btn-primary">Войти</button>
        <button class="btn btn-small" data-dismiss="modal" aria-hidden="true">Отмена</button>
      </div>
    </form>
  </div>
  <div class="span3" style="border-left: 1px solid #ECECEC; padding-left: 30px; margin-left: 30px;">
    <h4>Регистрация</h4>
    
    <? if (isset($msgs_regist)) echo Helper::msg($msgs_regist) ?>
    <form action="/auth/registration/" style="margin: 0;" method="POST">
      <input style="margin: 0 auto 10px;" type="text" name="email" placeholder="Email"><br/>
      <input style="margin: 0 auto 10px;" type="password" name="pass" placeholder="Пароль"><br/>
      <input style="margin: 0 auto 10px;" type="password" name="pass_cf" placeholder="Повторить пароль"><br/>
      <label style="font-size: 11px; margin: 0"><input style="margin: 0 5px 0 0;" type="checkbox" name=""> я принимаю <a href="#">условия</a></label>
      <div style="text-align: right; margin-top: 16px;">
        <button style="width: 157px;" type="submit" class="btn btn-small btn-primary">Регистрация</button>
        <button class="btn btn-small" data-dismiss="modal" aria-hidden="true">Отмена</button>
      </div>
    </form>
  </div>
</div>