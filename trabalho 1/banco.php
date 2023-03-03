<?php
// Informações para conexão com o banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "nome_do_banco_de_dados";

// Cria a conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Executa as consultas SQL
mysqli_query($conn, "INSERT INTO Cliente (nome, cpf, email, data_nasc, formas_pagamento) VALUES ('João', '123.456.789-00', 'joao@example.com', '1990-01-01', 'cartao_cred')");
mysqli_query($conn, "INSERT INTO Cliente (nome, cpf, email, data_nasc, formas_pagamento) VALUES ('Maria', '987.654.321-00', 'maria@example.com', '1995-05-05', 'cartao_deb')");
mysqli_query($conn, "DELETE FROM Cliente WHERE id = 1");

mysqli_query($conn, "CREATE TABLE Forma_pagamento (
    cartao_cred varchar(255),
    cartao_deb varchar(255),
    dinheiro varchar(255),
    pix varchar(255),
    foreign key(id) references Cliente(id)
)");

mysqli_query($conn, "INSERT INTO Forma_pagamento (cartao_cred, cartao_deb, dinheiro, pix, id) VALUES ('Visa', 'Mastercard', 'Real', '123.456.789/0001-01', 1)");
mysqli_query($conn, "INSERT INTO Forma_pagamento (cartao_cred, cartao_deb, dinheiro, pix, id) VALUES ('Elo', 'Santander', 'Dolar', '987.654.321/0001-01', 2)");
mysqli_query($conn, "DELETE FROM Forma_pagamento WHERE id = 2");

// Exibe os resultados das consultas SQL
$result = mysqli_query($conn, "SELECT * FROM Cliente");
echo "Tabela Cliente:<br>";
echo "<table border='1'>
<tr>
<th>id</th>
<th>nome</th>
<th>cpf</th>
<th>email</th>
<th>data_nasc</th>
<th>formas_pagamento</th>
</tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nome'] . "</td>";
    echo "<td>" . $row['cpf'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['data_nasc'] . "</td>";
    echo "<td>" . $row['formas_pagamento'] . "</td>";
    echo "</tr>";
}
echo "</table>";

$result = mysqli_query($conn, "SELECT * FROM Forma_pagamento");
