CREATE TABLE Cliente (
id INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(255),
cpf VARCHAR(14),
email VARCHAR(255),
data_nasc date,
formas_pagamento VARCHAR(255),
PRIMARY KEY (id)
);
INSERT INTO Cliente (nome, cpf, email, data_nasc, formas_pagamento) VALUES ('João', '123.456.789-00', 'joao@example.com', '1990-01-01', 'cartao_cred');

INSERT INTO Cliente (nome, cpf, email, data_nasc, formas_pagamento) VALUES ('Maria', '987.654.321-00', 'maria@example.com', '1995-05-05', 'cartao_deb');
SELECT * FROM Cliente;

DELETE FROM Cliente WHERE id = 1;

Create table Forma_pagamento (
id INT NOT NULL AUTO_INCREMENT,
cartao_cred varchar(255),
cartao_deb varchar(255),
dinheiro varchar(255),
pix varchar(255),
foreign key(id) references Cliente(id)
);

INSERT INTO Forma_pagamento (cartao_cred, cartao_deb, dinheiro, pix, id) VALUES ('Visa', 'Mastercard', 'Real', '123.456.789/0001-01', 1);

INSERT INTO Forma_pagamento (cartao_cred, cartao_deb, dinheiro, pix, id) VALUES ('Elo', 'Santander', 'Dolar', '987.654.321/0001-01', 2);

SELECT * FROM Forma_pagamento;

DELETE FROM Forma_pagamento WHERE id = 2;
