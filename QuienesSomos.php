<!DOCTYPE html>
<html>
<head>
  <title>Quienes Somos - English Express</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
  <style>
    .bg-custom {
      background-image: url('https://wallpapercave.com/wp/wp3457127.png');
      background-size: cover;
      background-position: center;
    }
  </style>
</head>
<body class="font-roboto bg-gray-100">
  <header class="bg-white shadow-md">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <div class="flex items-center">
        <a href="index.php"><img src="https://i.ibb.co/B4x2HJ2/U-E-Colegio-Santa-Rita.png" class="h-10000 w-10000" height="100" alt="U-E-Colegio-Santa-Rita" width="250" border="0"></a>
      </div>
      <nav class="flex items-center space-x-6">
        <a href="index.php" class="text-gray-700 hover:text-red-600">Inicio</a>
        <a href="QuienesSomos.php" class="text-gray-700 hover:text-red-600">Quienes Somos</a>
        <a href="contacto.php" class="text-gray-700 hover:text-red-600">Contacto</a>
        <a href="Login.php" class="text-gray-700 hover:text-red-600">Login</a>
        <a href="#" class="text-red-600"><i class="fas fa-phone"></i></a>
        <a href="#" class="text-red-600"><i class="fas fa-envelope"></i></a>
        <a href="#" class="text-red-600"><i class="fas fa-user"></i></a>
      </nav>
    </div>
  </header>
  <main class="bg-custom text-white py-12">
    <div class="container mx-auto text-center">
      <h1 class="text-5xl font-bold mb-4">Quienes Somos</h1>
      <p class="text-lg mb-6">
        “English Express” es un programa de inglés en línea diseñado para todos los niveles, enfocado en mejorar la fluidez y comunicación efectiva. 
        Nuestra misión es brindar acceso gratuito a educación de calidad para que cada persona pueda alcanzar su máximo potencial en el idioma inglés, 
        independientemente de su ubicación o situación económica.
      </p>
      <button class="bg-white text-red-600 font-bold py-2 px-4 rounded">Únete a Nosotros</button>
    </div>
  </main>
  <section class="bg-white py-6 shadow-md">
    <div class="container mx-auto flex justify-around">
      <a href="#" class="flex flex-col items-center text-gray-700 hover:text-red-600">
        <i class="fas fa-book text-2xl mb-2"></i>
        <span>LIBROS</span>
      </a>
      <a href="#" class="flex flex-col items-center text-gray-700 hover:text-red-600">
        <i class="fas fa-users text-2xl mb-2"></i>
        <span>NIVELES</span>
      </a>
      <a href="#" class="flex flex-col items-center text-gray-700 hover:text-red-600">
        <i class="fas fa-tags text-2xl mb-2"></i>
        <span>OPORTUNIDADES</span>
      </a>
      <a href="#" class="flex flex-col items-center text-gray-700 hover:text-red-600">
        <i class="fas fa-certificate text-2xl mb-2"></i>
        <span>CERTIFICADOS</span>
      </a>
      <a href="#" class="flex flex-col items-center text-gray-700 hover:text-red-600">
        <i class="fas fa-heart text-2xl mb-2"></i>
        <span>DONAR</span>
      </a>
    </div>
  </section>
</body>
</html>
