<?php

function connection() : SQLite3 {
    return new SQLite3('bakery.db');
}

$connection = connection();

$connection->exec(
    "CREATE TABLE IF NOT EXISTS products (
      id INTEGER PRIMARY KEY AUTOINCREMENT,
      name TEXT NOT NULL,
      description TEXT,
      price REAL)"
);

$connection->exec(
    "INSERT INTO products (name, description, price, image) VALUES
    ('Bolo de Chocolate', 'Delicioso bolo de chocolate feito com ingredientes de alta qualidade.', 15.99, 'bolo_chocolate.jpg'),
    ('Cupcake de Morango', 'Cupcake fofo com cobertura de chantilly e morangos frescos.', 3.49, 'cupcake_morango.jpg'),
    ('Torta de Limão', 'Torta cremosa de limão com uma crosta de biscoito de chocolate.', 12.75, 'torta_limao.jpg'),
    ('Cookie de Aveia', 'Cookie crocante de aveia com pedaços de chocolate amargo.', 1.99, 'cookie_aveia.jpg'),
    ('Pudim de Baunilha', 'Pudim cremoso de baunilha com calda de caramelo.', 4.25, 'pudim_baunilha.jpg'),
    ('Donut de Framboesa', 'Donut fofinho recheado com geleia de framboesa.', 2.99, 'donut_framboesa.jpg'),
    ('Torta de Maçã', 'Torta clássica de maçã com uma cobertura de massa crocante.', 10.50, 'torta_maca.jpg'),
    ('Brownie de Nozes', 'Brownie rico em chocolate com pedaços de nozes.', 6.99, 'brownie_nozes.jpg'),
    ('Cheesecake de Morango', 'Cheesecake cremoso com uma camada de compota de morango.', 18.50, 'cheesecake_morango.jpg'),
    ('Pão de Canela', 'Pão macio com uma generosa cobertura de açúcar e canela.', 7.25, 'pao_canela.jpg'),
    ('Biscoitos de Gengibre', 'Biscoitos de gengibre decorados com glacê real.', 2.25, 'biscoito_gengibre.jpg'),
    ('Torta de Chocolate', 'Torta indulgente de chocolate com uma base de biscoito.', 14.99, 'torta_chocolate.jpg'),
    ('Creme Brûlée', 'Creme de baunilha com uma crosta de açúcar queimado.', 5.75, 'creme_brulee.jpg'),
    ('Muffin de Mirtilo', 'Muffin fofo repleto de mirtilos frescos.', 3.99, 'muffin_mirtilo.jpg'),
    ('Bolo de Cenoura', 'Bolo de cenoura úmido com cobertura de cream cheese.', 11.25, 'bolo_cenoura.jpg'),
    ('Tiramisu', 'Sobremesa italiana clássica com camadas de biscoitos de café e mascarpone.', 16.99, 'tiramisu.jpg'),
    ('Pavê de Chocolate', 'Pavê delicioso com camadas de biscoitos e creme de chocolate.', 8.50, 'pave_chocolate.jpg'),
    ('Torta de Morango', 'Torta refrescante de morango com uma geleia brilhante.', 13.25, 'torta_morango.jpg'),
    ('Éclair de Chocolate', 'Éclair recheado com creme de chocolate e coberto com ganache.', 4.75, 'eclair_chocolate.jpg'),
    ('Rosquinha de Canela', 'Rosquinha macia coberta com açúcar e canela.', 1.49, 'rosquinha_canela.jpg')"
);

?>