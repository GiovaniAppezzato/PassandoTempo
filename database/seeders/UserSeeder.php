<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Perfil;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->create([
            'user' =>
            [
                'name' => 'PassandoTempo',
                'email' => 'passando.tempo@gmail.com',
                'password' => bcrypt('123456'),
                'data_nascimento' => '2022-02-24',
                'tipo_conta' => 'Colaborador'
            ]
        ]);

        $this->create([
            'user' =>
            [
                'name' => 'GiovaniAppezzato',
                'email' => 'giovani.apztt@gmail.com',
                'password' => '$2y$10$OCd5/jALNmqnrZ1R7vfGB.0EqDEWd.NBdMU552YiZtX7h0IRxotbW',
                'data_nascimento' => '2003-11-24',
                'tipo_conta' => 'Colaborador'
            ],
            'perfil'=>
            [
                'privado' => false,
                'imagem_perfil' => 'example04.png',
                'descricao' => 'Imagine uma nova história para a sua vida e acredite nela.'
            ]
        ]);
    }

    /**
     * IMPORTANTE: Criar usuário e seu relacionamento com perfil
     * @param  array options
     */
    public function create($options = array()):void
    {
        $links = [];

        User::create([
            'name' => $options['user']['name'] ?? Str::random(10),
            'email' => $options['user']['email'] ?? Str::random(10).'@gmail.com',
            'password' => $options['user']['password'] ?? bcrypt('password'),
            'data_nascimento' => $options['user']['data_nascimento']  ?? null,
            'tipo_conta' => $options['user']['tipo_conta'] ?? 'Comum'
        ]);

        $usuario_id = User::where('name', $options['user']['name'])->value('id');

        foreach (Perfil::getLinksValidos() as $item) {
            $links[$item] = null;
        };

        Perfil::create([
            'privado' => $options['perfil']['privado'] ?? false,
            'imagem_perfil' => $options['perfil']['imagem_perfil'] ?? null,
            'descricao' => $options['perfil']['descricao'] ?? null,
            'urls' => $links,
            'user_id' => $usuario_id
        ]);
    }
}
