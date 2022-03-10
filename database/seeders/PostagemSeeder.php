<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Postagem;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Postagem::create([
            'titulo' => 'A segunda temporada de The Witcher já tem data?',
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lectus tellus, pharetra nec lorem sit amet, suscipit congue arcu. Fusce in pretium mauris, eu eleifend quam. Donec facilisis nisi et elementum scelerisque. Nunc vel dignissim.',
            'hash' => md5('A segunda temporada de The Witcher já tem data?'),
            'conteudo' => ['content' => 'NULL'],
            'tema' => 'Filmes',
            'imagem_postagem' => 'imagem01.jpg',
            'user_id' => 2
        ]);

        Postagem::create([
            'titulo' => 'Reiner Braun (Shingeki no Kyojin)',
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lectus tellus, pharetra nec lorem sit amet, suscipit congue arcu. Fusce in pretium mauris, eu eleifend quam. Donec facilisis nisi et elementum scelerisque. Nunc vel dignissim.',
            'hash' => md5('Reiner Braun (Shingeki no Kyojin)'),
            'conteudo' => ['content' => 'NULL'],
            'tema' => 'Animes',
            'imagem_postagem' => 'imagem02.jpg',
            'user_id' => 1
        ]);

        Postagem::create([
            'titulo' => 'Novidades sobre o PHP 8 e Laravel 8 !!',
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lectus tellus, pharetra nec lorem sit amet, suscipit congue arcu. Fusce in pretium mauris, eu eleifend quam. Donec facilisis nisi et elementum scelerisque. Nunc vel dignissim.',
            'hash' => md5('Novidades sobre o PHP 8 e Laravel 8'),
            'conteudo' => ['content' => 'NULL'],
            'tema' => 'Programação',
            'imagem_postagem' => 'imagem03.jpg',
            'user_id' => 1
        ]);

        Postagem::create([
            'titulo' => 'Guerra virtual: ataque hacker contra Ucrânia começou antes de invasão russa',
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lectus tellus, pharetra nec lorem sit amet, suscipit congue arcu. Fusce in pretium mauris, eu eleifend quam. Donec facilisis nisi et elementum scelerisque. Nunc vel dignissim.',
            'hash' => md5('Guerra virtual: ataque hacker contra Ucrânia começou antes de invasão russa'),
            'conteudo' => ['content' => 'NULL'],
            'tema' => 'Notícias',
            'imagem_postagem' => 'imagem04.png',
            'user_id' => 2
        ]);

    }
}
