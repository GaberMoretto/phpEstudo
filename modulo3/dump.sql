CREATE TABLE estado (id integer PRIMARY KEY NOT NULL, sigla char (2), nome text);

-- Dados
INSERT INTO estado (id, sigla, nome)
VALUES
(1, 'RS', 'Rio Grande do Sul'),
(2, 'SP', 'São Paulo'),
(3, 'RJ', 'Rio de Janeiro'),
(4, 'PR', 'Paraná'),
(5, 'MG', 'Minas Gerais');
-----------------------------------------------------------------------------------------------------

CREATE TABLE cidade ( id integer primary KEY NOT null, nome text, id_estado INTEGER REFERENCES estado (id));
-- Dados
INSERT INTO cidade (id, nome, id_estado)
VALUES
(1, 'Porto Alegre', 1),
(2, 'São Paulo', 2),
(3, 'Rio de Janeiro', 3),
(4, 'Curitiba', 4),
(5, 'Belo Horizonte', 5);
-----------------------------------------------------------------------------------------------------
CREATE table pessoa (id integer PRIMARY KEY NOT NULL, nome text, endereco text, bairro text, telefone int, email text, id_cidade integer references cidade (id));
-- Dados

-- Dados
INSERT INTO pessoa (id, nome, endereco, bairro, telefone, email, id_cidade) VALUES
(1, 'Gabriel Moretto', 'Rua das Flores, 123', 'Centro', 5198422879, 'gabriel.moretto@universo.univates.br', 1),
(2, 'Ana Souza', 'Avenida Brasil, 456', 'Jardim América', 51987654321, 'ana.souza@email.com', 2),
(3, 'Carlos Pereira', 'Rua Santos Dumont, 789', 'Boa Vista', 51981234567, 'carlos.pereira@email.com', 3),
(4, 'Beatriz Lima', 'Rua da Paz, 111', 'Bela Vista', 51983214567, 'beatriz.lima@email.com', 4),
(5, 'Eduardo Silva', 'Avenida Central, 222', 'Centro', 51985214763, 'eduardo.silva@email.com', 5),
(6, 'Mariana Oliveira', 'Rua do Sol, 333', 'Zona Sul', 51984561234, 'mariana.oliveira@email.com', 1),
(7, 'João Santos', 'Avenida Independência, 444', 'Liberdade', 51985471234, 'joao.santos@email.com', 2),
(8, 'Patrícia Gomes', 'Rua das Palmeiras, 555', 'Centro', 51986561234, 'patricia.gomes@email.com', 3),
(9, 'Lucas Ferreira', 'Avenida dos Estados, 666', 'Alvorada', 51987451234, 'lucas.ferreira@email.com', 4),
(10, 'Fernanda Alves', 'Rua Rio Branco, 777', 'Centro', 51988651234, 'fernanda.alves@email.com', 5);

-----------------------------------------------------------------------------------------------------