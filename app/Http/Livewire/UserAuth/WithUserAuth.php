<?php


namespace App\Http\Livewire\UserAuth;

use App\Models\User;

trait WithUserAuth
{

    public User $user;
    public $password;


    public function authLogin()
    {
        $this->validate();

        if (!auth()->attempt([
            'email' => $this->user->email,
            'password' => $this->password])) {

            $this->addError('email', trans('auth.failed'));
        }

    }


    public function authRegister(): void
    {
        $this->validate();

        $this->user->setAttribute('password', $this->password);

        if ($this->user->save()) {
            auth()->login($this->user);
        }

        $this->mount();

    }


}
