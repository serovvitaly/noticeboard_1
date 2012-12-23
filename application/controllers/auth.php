<?php
  
class Auth_Controller extends Base_Controller {
    
    public function action_index()
    {
        $this->layout->content = View::make('base.auth');
    }
    
    public function action_login()
    {
        $email = Helper::post('email');
        $pass  = Helper::post('pass');
        
        var_dump($_POST);

        $msgs = array();
        if (!$email) {
            $msgs[] = array(
                'type'  => 'error',
                'text'  => 'Поле "Email" не может быть пустым.'
            );
        }
        if (!$pass) {
            $msgs[] = array(
                'type'  => 'error',
                'text'  => 'Поле "Пароль" не может быть пустым'
            );
        }
        
        if ($email AND $pass) {
            $credentials = array('username' => $email, 'password' => $pass . md5($email));
            if (Auth::attempt($credentials))
            {
                 return Redirect::to('/');
            }
            else {
                $msgs[] = array(
                    'type'  => 'error',
                    'title' => 'Ошибка авторизации:',
                    'text'  => 'Неверно введен логин или пароль.'
                );
            }
        }  
        
        $this->layout->content = View::make('base.auth', array('msgs_login' => $msgs));      
    }
    
    public function action_registration()
    {        
        $email = Helper::post('email');
        $pass  = Helper::post('pass');
        $pass_confirm  = Helper::post('pass_cf');

        $msgs = array();
        if (!$email) {
            $msgs[] = array(
                'type'  => 'error',
                'text'  => 'Поле "Email" не может быть пустым.'
            );
        }
        if (!$pass) {
            $msgs[] = array(
                'type'  => 'error',
                'text'  => 'Поле "Пароль" не может быть пустым.'
            );
        }
        if (!$pass_confirm) {
            $msgs[] = array(
                'type'  => 'error',
                'text'  => 'Поле "Повторите пароль" не может быть пустым.'
            );
        }
        if ($pass !== $pass_confirm) {
            $msgs[] = array(
                'type'  => 'error',
                'text'  => 'Неверно введен повторный пароль.'
            );
        }
        
        if ($email AND $pass AND $pass == $pass_confirm) {
            $password = Hash::make($pass . md5($email));
            
            $user = new User;

            $user->email    = $email;
            $user->password = $password;

            $user->save();
            
            Auth::login($user);
            
            return Redirect::to('/');
        }        
        
        $this->layout->content = View::make('base.auth', array('msgs_regist' => $msgs));
    }
    
    public function action_logout()
    {
        Auth::logout();
        
        return Redirect::to('/');
    }
    
}
