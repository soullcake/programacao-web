<?php
include __DIR__ . '/database.php';
include __DIR__ . '/Product.php';

$model = new Product(connection());
$products = $model->find();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Madim+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50">

    <!-- Header -->
    <header class="bg-white shadow-md flex justify-center items-center h-24">
      <div class="container mx-auto flex items-center">
          <img src="./img/icon.png" alt="Logo" class="w-12 h-12">
          <h1 class="text-2xl ml-2">Confeitaria</h1>
          <nav class="ml-auto space-x-4">
              <a href="#menu" class="text-gray-800 hover:text-blue-600">Cardapio</a>
              <a href="#about" class="text-gray-800 hover:text-blue-600">Sobre</a>
          </nav>
      </div>
    </header>
  

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8" id="menu">
      <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-x-4 gap-y-8 min-h-[90vh]">
      <?php
        foreach ($products as $product) {
            // reajusta a imagem que vai ser selecionada
            $image_id = ($product['id'] - 1) % 5 + 1;
            
            $image_path = './img/' . $image_id . '.jpg';
            
            echo '<div class="bg-pink-200 rounded-lg shadow-md p-4">';
            echo '<img src="' . $image_path . '" alt="' . $product['name'] . '" class="w-full h-32 object-cover mb-4 rounded-md">';
            echo '<h2 class="text-lg font-semibold mb-2">' . $product['name'] . '</h2>';
            echo '<p class="text-gray-600">' . $product['description'] . '</p>';
            echo '<p class="mt-2 text-blue-600 font-bold">R$ ' . number_format($product['price'], 2, ',', '.') . '</p>';
            echo '</div>';
        }
    ?>



      </section>
    </main>
  
  <section class="bg-yellow-100 py-16 min-h-100vh" id="about">
    <div class="container mx-auto px-4 pb-8">
        <h2 class="text-3xl font-semibold text-gray-800 mb-8">Sobre Nós</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-2xl font-semibold text-gray-700 mb-4">Quem Somos</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque purus ut nisi ultricies, sed mattis magna tempus. Donec suscipit sapien id nunc convallis posuere.</p>
            </div>
            <div>
                <h3 class="text-2xl font-semibold text-gray-700 mb-4">Nossa Missão</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque purus ut nisi ultricies, sed mattis magna tempus. Donec suscipit sapien id nunc convallis posuere.</p>
            </div>
        </div>
    </div>
  </section>

</body>
</html>
