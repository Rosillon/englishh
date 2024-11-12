<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Express</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css"> <!-- Enlace al archivo CSS -->
</head>
<body class="font-roboto bg-gray-100">
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <a href="Index.php"><img src="https://i.ibb.co/B4x2HJ2/U-E-Colegio-Santa-Rita.png" class="h-10000 w-10000" height="100" alt="U-E-Colegio-Santa-Rita" width="250" border="0"></a>
            </div>
            <nav class="flex items-center space-x-6">
                <a class="text-gray-700 hover:text-red-600" href="#">Inicio</a>
                <a href="QuienesSomos.php" class="text-gray-700 hover:text-red-600">Quienes Somos</a>
                <a class="text-gray-700 hover:text-red-600" href="#">Contacto</a>
                <a class="text-gray-700 hover:text-red-600" href="Login.php">Login</a>
                <a class="text-red-600" href=""><i class="fas fa-phone"></i></a>
                <a class="text-red-600" href="#"><i class="fas fa-envelope"></i></a>
                <a class="text-red-600" href="#"><i class="fas fa-user"></i></a>
            </nav>
        </div>
    </header>
    <main class="bg-custom text-white py-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <div class="md:w-2/3">
                <h1 class="text-5xl font-bold mb-4">“Aprende rápido, habla fluido.”</h1>
                <p class="text-lg mb-1">“English Express” es un programa de inglés gratuito en línea para todos los niveles.</p>
                <h5 class="text-lg mb-1">Enfocado en la fluidez y comunicación efectiva para el uso diario y profesional.</h5>
                <button class="bg-white text-red-800 font-bold py-2 px-4 rounded">Más detalles</button>
            </div>
            <div class="md:w-1/6 flex justify-center mt-100 md:mt-0">
                <div class="relative">
                    <img alt="Teacher writing on a chalkboard" class="rounded-lg shadow-lg" height="200" src="https://www.shutterstock.com/image-photo/vibrant-vertical-portrait-male-teacher-600nw-2154311867.jpg" width="160"/>
                    <div class="absolute inset-y-10 left-0 flex items-center">
                        <button class="text-white text-2xl"><i class="fas fa-chevron-left"></i></button>
                    </div>
                    <div class="absolute inset-y-0 right-0 flex items-center">
                        <button class="text-white text-2xl"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="md:w-1/50 flex justify-center mt-100 md:mt-100">
                <div class="relative">
                    <img alt="Teacher writing on a chalkboard" class="rounded-lg shadow-lg" height="200" src="https://i.ibb.co/JnpKC9B/QR-UJGH.png" width="160"/>
                    <div class="absolute inset-y-0 left-0 flex items-center">
                        <button class="text-white text-2xl"><i class="fas fa-chevron-left"></i></button>
                    </div>
                    <div class="absolute inset-y-0 right-0 flex items-center">
                        <button class="text-white text-2xl"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section class="bg-white py-6 shadow-md">
        <div class="container mx-auto flex justify-around">
            <a class="flex flex-col items-center text-gray-700 hover:text-red-600" href="#"><i class="fas fa-book text-2xl mb-2"></i><span>LIBROS</span></a>
            <a class="flex flex-col items-center text-gray-700 hover:text-red-600" href="#"><i class="fas fa-users text-2xl mb-2"></i><span>NIVELES</span></a>
            <a class="flex flex-col items-center text-gray-700 hover:text-red-600" href="#"><i class="fas fa-tags text-2xl mb-2"></i><span>OPORTUNIDADES</span></a>
            <a class="flex flex-col items-center text-gray-700 hover:text-red-600" href="#"><i class="fas fa-certificate text-2xl mb-2"></i><span>CERTIFICADOS</span></a>
            <a class="flex flex-col items-center text-gray-700 hover:text-red-600" href="#"><i class="fas fa-heart text-2xl mb-2"></i><span>DONAR</span></a>
        </div>
    </section>
    <section class="bg-gray-100 py-6">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-5 gap-4">
            <div class="bg-white p-4 rounded shadow-md text-center">
                <p class="text-gray-500">Inicio del Próximo Nivel</p>
                <p class="text-xl text-red-700 hover:text-gray-600 font-bold">OCTUBRE 2024</p>
            </div>
            <div class="bg-white p-4 rounded shadow-md text-center">
                <p class="text-gray-500">Finalización</p>
                <p class="text-xl text-red-700 hover:text-gray-600 font-bold">DICIEMBRE 2024</p>
            </div>
            <div class="bg-white p-4 rounded shadow-md text-center">
                <p class="text-gray-500">Fecha inc</p>
                <p class="text-xl text-red-700 hover:text-gray-600 font-bold">Vie, 15 Octubre</p>
            </div>
            <div class="bg-white p-4 rounded shadow-md text-center">
                <p class="text-gray-500">Fecha fin</p>
                <p class="text-xl text-red-700 hover:text-gray-600 font-bold">Lun, 30 Diciemb</p>
            </div>
            <div class="bg-white p-4 rounded shadow-md text-center">
                <p class="text-gray-500">Matricula / Inscritos</p>
                <p class="text-xl text-red-700 hover:text-gray-600 font-bold"><i class="fas fa-user"></i> 98 Personas</p>
            </div>
        </div>
    </section>
</body>
</html>
