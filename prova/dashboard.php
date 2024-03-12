<?php
// Conexão com o banco de dados (substitua as credenciais conforme necessário)
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "escola";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Consulta SQL para selecionar todos os alunos
$sql = "SELECT * FROM alunos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Alunos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Dashboard de Alunos</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
            <th>Matrícula</th>
            <th>Curso</th>
            <th>Turma</th>
            <th>Período</th>
            <th>Ações</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Exibe os dados de cada aluno
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["data_nascimento"] . "</td>";
                echo "<td>" . $row["matricula"] . "</td>";
                echo "<td>" . $row["curso"] . "</td>";
                echo "<td>" . $row["turma"] . "</td>";
                echo "<td>" . $row["periodo"] . "</td>";
                echo "<td>
                        <a href='editar_aluno.php?id=" . $row["id"] . "'>Editar</a> | 
                        <a href='excluir_aluno.php?id=" . $row["id"] . "'>Excluir</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>Nenhum aluno encontrado</td></tr>";
        }
        ?>
    </table>
    <p><a href="cadastro.html">Cadastrar novo aluno</a></p>
</body>
</html>

<?php
// Fecha a conexão com o banco de dados
$conn->close();
?>
