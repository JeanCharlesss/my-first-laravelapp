<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    protected $fillable = ['nome','cpf','telefone','email','marca','aparelho','numserie','problema','pedidoServico'];
}
