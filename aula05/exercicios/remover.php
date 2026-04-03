<?php
$arquivo = 'produtos.json';
$nomeParaRemover = 'Moletom'; 

// verifica se o arquivo existe
if (!file_exists($arquivo)) {
    die("Arquivo não encontrado!");
}

// lê o conteúdo
$conteudo = file_get_contents($arquivo);
$produtos = json_decode($conteudo, true);

// verifica se o JSON é válido
if ($produtos === null) {
    die("Erro ao ler o JSON!");
}

// remove o produto com segurança
$produtosAtualizados = array_filter($produtos, function($item) use ($nomeParaRemover) {
    return isset($item['nome']) && $item['nome'] !== $nomeParaRemover;
});

// reorganiza os índices
$produtosAtualizados = array_values($produtosAtualizados);

// salva de volta no arquivo
file_put_contents($arquivo, json_encode($produtosAtualizados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "Produto '$nomeParaRemover' removido com sucesso!";
?>