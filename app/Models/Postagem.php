<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    use HasFactory;
    protected $table = "postagens";

    protected $fillable = [
        'titulo',
        'descricao',
        'hash',
        'conteudo',
        'imagem_postagem',
        'tema',
        'user_id'
    ];
    protected $casts = [
        'conteudo' => 'array'
    ];

    protected $temas = [
        'Programação', 'Notícias', 'Filmes', 'Jogos', 'Animes'
    ];

    /**
     * Pegar usuário dono da postagem
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
