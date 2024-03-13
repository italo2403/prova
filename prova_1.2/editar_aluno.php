<?php
// Verifica se o ID do aluno foi passado via parâmetro GET
if(isset($_GET['id'])) {
    $aluno_id = $_GET['id'];
    
    // Aqui você pode adicionar a lógica para buscar os dados do aluno com o ID fornecido no banco de dados
    // Por exemplo:
    // $sql = "SELECT * FROM alunos WHERE id = $aluno_id";
    // Executar a consulta SQL e processar os resultados
    
    // Exemplo de formulário para editar os dados do aluno
    echo "<h2>Editar Aluno</h2>";
    echo "<form action='dashboard.php' method='post'>";
    echo "<input type='hidden' name='aluno_id' value='$aluno_id'>";
    echo "<label for='nome'>Nome:</label>";
    echo "<input type='text' id='nome' name='nome' value='Nome do Aluno'>";
    // Adicione mais campos conforme necessário
    echo "<button type='submit'>Salvar Alterações</button>";
    echo "</form>";
} else {
    echo "ID do aluno não fornecido.";
}
?>
