<?php

namespace App\Controllers\Notas;

use App\Models\Nota;
use Core\Database;
use Core\Validacao;

class AtualizarController
{
    public function __invoke()
    {
        $validacao = Validacao::validar([
            'titulo' => ['required', 'min:3', 'max:255'],
            'nota' => ['required'],
            'id' => ['required']
        ], request()->all());

        if ($validacao->naoPassou()) {
            return redirect('/notas?id=' . request()->post('id'));
        }

        $db = new Database(config('database'));

        $db->query(
            query: "
                update notas
                set titulo = :titulo
                , nota = :nota
                where id = :id
            ",
            params: [
                'titulo' => request()->post('titulo'),
                'nota' => request()->post('nota'),
                'id' => request()->post('id')
            ]
        );

        flash()->push('mensagem', 'Registro atualizado com sucesso!!');

        return redirect('/notas?id=' . request()->post('id'));
    }
}
