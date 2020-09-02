<?php

namespace App\Passport;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\Client as BaseClient;

class Client extends BaseClient
{   
    //Evita que a janela de autorização apareça
    public function skipsAuthorization(){
        return true;
    }
}
