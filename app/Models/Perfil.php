<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    protected $table = "perfils";
    protected $fillable = [
        'privado',
        'imagem_perfil',
        'descricao',
        'urls',
        'user_id'
    ];
    protected $casts = [
        'privado' => 'boolean',
        'urls' => 'array'
    ];

    const LINKSVALIDOS = ['instagram', 'github', 'youtube'];

    public static function getLinksValidos()
    {
        return self::LINKSVALIDOS;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
