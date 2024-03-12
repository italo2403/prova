<?php
// Verifica se o ID do aluno foi passado via parâmetro GET
if(isset($_GET['id'])) {
    $aluno_id = $_GET['id'];
    
    // Aqui você pode adicionar a lógica para excluir o aluno com o ID fornecido do banco de dados
    // Por exemplo:
   $sql = "DELETE FROM alunos WHERE id = $aluno_id";
   //Executar a consulta SQL para excluir o aluno
    
    echo "Aluno com ID $aluno_id excluído com sucesso.";
    
} else {
    echo "ID do aluno não fornecido.";
}
?>
