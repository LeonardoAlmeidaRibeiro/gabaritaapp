<?php

namespace App\Http\Controllers;

class MensagemController extends Controller
{

    public function sucessoStore($id)
    {
        return response()->json([
            'message' => 'Registro criado com sucesso',
            'id' => $id,
            'success' => true
        ]);
    }

    public function sucessoUpdate()
    {
        return response()->json([
            'message' => 'Registro editado com sucesso.',
            'success' => true
        ]);
    }

    public function sucessoDestroy()
    {
        return response()->json([
            'message' => 'Registro excluido com sucesso.',
            'success' => true
        ]);
    }

    public function naoLocalizado()
    {
        return response()->json([
            'message' => 'Registro não encontrado no banco.',
            'success' => false
        ]);
    }

    public function mensagemErro($erro)
    {
        return response()->json([
            'message' => 'Ocorreu o seguinte erro interno: ' . $erro,
            'success' => false
        ]);
    }

    public function mensagemDeleteErro()
    {
        return response()->json([
            'message' => 'O registro não pode ser excluído. Entre em contato com a DTI.',
            'success' => false
        ]);
    }

    public function sucessoAprovacaoWf()
    {
        return response()->json([
            'message' => 'Aprovação realizada com sucesso.',
            'success' => true
        ]);
    }

    public function sucessoRejeicaoWf()
    {
        return response()->json([
            'message' => 'Rejeição realizada com sucesso.',
            'success' => true
        ]);
    }
    public function sucessReabrirWf()
    {
        return response()->json([
            'message' => 'Reaberto com sucesso.',
            'success' => true
        ]);
    }
    public function avaliacaoPNR($id)
    {
        return response()->json([
            'message' => $id,
            'success' => false
        ]);
    }
    public function mensagemDeleteWorkflow()
    {
        return response()->json([
            'message' => 'Não é possível excluir o registro, pois o workflow já foi iniciado.',
            'success' => false
        ]);
    }
}
