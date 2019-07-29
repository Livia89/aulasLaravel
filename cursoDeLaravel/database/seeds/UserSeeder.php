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
<<<<<<< HEAD
        $data = [
          'name'=> 'Lívia3',
          'email'=> 'admin@mail.com',
          'password'=> bcrypt('123456')
        ];

        if(User::where('email', '=', $data['email'])->count()){
          $user = User::where('email', '=', $data['email'])->first();
          $user->update($data);
          echo "Usuario alterado";
        }else{
            User::create($data);
          echo "Usuario Criado";
        }
=======

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

>>>>>>> 94486e7f70bae02aa18c199cea50e6913f5717a8
    }
}
