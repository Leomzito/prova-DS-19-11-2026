<?php
    class cadastro {
        public function lerCadastros() {
            $arquivo = __DIR__ . "";
            if (!file_exists($arquivo)) {
                file_put_contents($arquivo, "[]");
            }
            $conteudo = file_get_contents($arquivo);
            $cadastros = json_decode($conteudo, true);
            return is_array($cadastros) ?$cadastros : [];
        }
        public function cadastrarFuncionario ($nome,$email, $salario, $tipo_funcionario) {
            if (trim ($nome) === "" )
        }
    }
?>