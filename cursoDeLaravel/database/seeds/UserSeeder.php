<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $userData = [
            'name'=> 'Lívia',
            'email'=> 'admin@mail.com',
            'password'=> bcrypt('123456')
          ];

          if(User::where('email', '=', $userData['email'])->count()){
              $user = User::where('email', '=', $userData['email'])->first();
              $user->update($userData);
              echo "atuaalizado";
          }else{
                User::Create($userData);
                echo "criado";
          }

    }
}
