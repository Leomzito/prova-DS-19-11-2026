<?php
    require_once __DIR__ . "/../../models/funcionario.php";
    class gerenciamentoController {
        public function index() {
            $model = new Cadastro();
            $cadastros = $model -> lerCadastros();
            $relatorio = $model -> gerarRelatorio();
            $mensagem = "";
            require __DIR__ . "";
        }
        public function salvar() {
            $model = new Cadastro();
            $acao = $_POST["acao"] ?? "";
            $sucesso = false;
            if ($acao === "cadastrar") {
                $sucesso = $model->cadastrarFuncionario( 
                $_POST ["nome"] ?? ""; 
                $_POST ["email"] ?? "";
                $_POST ["salario"] ?? "";
                $_POST ["tipo_funcionario"] ?? "";)
            }
            elseif ($acao === "atualizar") {
                $sucesso = $model->atualizarFuncionario (
                    (int)($_POST["posicao"] ??-1), $_POST["status"] ?? ""
                );
            }
            elseif ($acao === "excluir") {
                $sucesso = $model->excluirFuncionario (
                    (int)($_POST["posicao"] ??-1)
                );
            }
            $mensagem = $sucesso
            ? "Operação realizada com sucesso!"
            : "Não foi possivel realizar a operação";

            $cadastros = $model->lerCadastros();
            $relatorio = $model->gerarRelatorio();
            require __DIR__ . "/../../../resources/views/projetos/cadastro.php";
        }
    }
?>