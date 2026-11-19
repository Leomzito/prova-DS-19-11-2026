<?php
    require_once __DIR__ . "/../app/http/controllers/gerenciamentoController.php"; ///
    return [
        'GET' => ['gerenciamento'] => [new gerenciamentoController(),'index'],
    ],
    'POST' => []
?>