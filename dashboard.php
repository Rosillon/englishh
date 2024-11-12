<?php
session_start(); // Iniciar sesión
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = "Estudiante"; // Para pruebas, establecer un nombre de usuario por defecto
    // En producción, redirigir a la página de login si no hay sesión
    // header("Location: login.php");
    // exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - English Express</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            height: 100vh;
            padding: 2rem 1rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
        }
        .sidebar img {
            border-radius: 50%;
            height: 80px;
            width: 250px;
            display: block;
            margin: 0 auto 1rem auto;
        }
        .welcome {
            text-align: center;
            margin-bottom: 2rem;
        }
        .welcome h2, .welcome h3 {
            color: #ecf0f1;
        }
        .menu {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .menu a {
            color: white;
            text-decoration: none;
            padding: 0.75rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .menu a:hover {
            background-color: #34495e;
        }
        .content {
            flex-grow: 1;
            padding: 2rem;
            background-color: #ffffff;
            margin-left: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(135deg, #e74c3c, #c0392b); /* Degradado rojo */
            color: white;
            padding: 1rem;
            border-radius: 5px;
            margin-bottom: 1rem;
        }
        .header h1 {
            margin: 0;
        }
        .header .actions a {
            color: white;
            text-decoration: none;
            padding: 0.5rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .header .actions a:hover {
            background-color: #c0392b;
        }
        .sections {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .section {
            background-color: #ecf0f1;
            padding: 1.5rem;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .section h2 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }
        .section-content {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1rem;
        }
        .level-item {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .level-item:hover {
            transform: translateY(-5px);
        }
        .level-item img {
            border-radius: 5px;
            height: 150px;
            width: 280px;
            margin-bottom: 0.5rem;
        }
        .level-description {
            color: #34495e;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="https://i.ibb.co/DwZKHbB/aujgh.png" alt="English Express Logo">
        <div class="welcome">
            <h2>¡Hola! Bienvenido,</h2>
            <h3><?php echo $_SESSION['usuario']; ?></h3>
        </div>
        <div class="menu">
            <a href="#niveles"><i class="fas fa-layer-group"></i> Niveles</a>
            <a href="#lecciones"><i class="fas fa-book"></i> Lecciones</a>
            <a href="#progreso"><i class="fas fa-chart-line"></i> Progreso</a>
            <a href="#recursos"><i class="fas fa-folder-open"></i> Recursos</a>
            <a href="#mensajeria"><i class="fas fa-comments"></i> Mensajería</a>
        </div>
        <div class="icon-bar">
            <a href="settings.php"><i class="fas fa-cog"></i></a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
        </div>
    </div>
    <div class="content">
        <div class="header">
            <h1>Dashboard de Estudiante</h1>
            <div class="actions">
                <a href="settings.php"><i class="fas fa-cog"></i></a>
                <a href="interacciones.php"><i class="fas fa-comments"></i></a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
        <div class="sections">
            <div id="niveles" class="section">
                <h2>Niveles</h2>
                <div class="section-content">
                    <div class="level-item">
                        <img src="https://www.viajarmiami.com/img/visitar-centro-de-miami-downtown.jpg" alt="Nivel 1">
                        <div class="level-description">
                            <strong>Nivel 1 - Principiante</strong>
                            <p>Comienza tu viaje en el aprendizaje del inglés desde lo básico.</p>
                        </div>
                    </div>
                    <div class="level-item">
                        <img src="https://www.hotelpalomar-southbeach.com/images/1700-960/miami-skyline-steele-rutherford-e78e9bc8.jpg" alt="Nivel 2">
                        <div class="level-description">
                            <strong>Nivel 2 - Intermedio</strong>
                            <p>Desarrolla tus habilidades de comunicación con ejercicios prácticos.</p>
                        </div>
                    </div>
                    <div class="level-item">
                        <img src="https://www.diabetes.co.uk/wp-content/uploads/2022/10/usa.jpg" alt="Nivel 3">
                        <div class="level-description">
                            <strong>Nivel 3 - Avanzado</strong>
                            <p>Perfecciona tu fluidez y comprensión del inglés avanzado.</p>
                        </div>
                    </div>
                    <div class="level-item">
                        <img src="https://www.civitatis.com/f/estados-unidos/estados-unidos.jpg" alt="Nivel 4">
                        <div class="level-description">
                            <strong>Nivel 4 - Conversación</strong>
                            <p>Participa en conversaciones y mejora tu inglés hablado.</p>
                        </div>
                    </div>
                    <div class="level-item">
                        <img src="https://cdn.tripster.ru/thumbs2/7ed18170-cb1b-11ee-86b0-2a9906d7d1f5.1220x600.jpeg" alt="Nivel 5">
                        <div class="level-description">
                            <strong>Nivel 5 - Preparación Exámenes</strong>
                            <p>Prepárate para exámenes de certificación como TOEFL y IELTS.</p>
                        </div>
                    </div>
                    <div class="level-item">
                        <img src="https://proyectoviajero.com/wp-content/uploads/2022/07/Monument_Valley_vista_desde_Hunts_Mesa.webp" alt="Nivel 6">
                        <div class="level-description">
                            <strong>Nivel 6 - Negocios</strong>
                            <p>Mejora tu inglés para el ámbito empresarial y profesional.</p>
                        </div>
                    </div>
                    <div class="level-item">
                        <img src="https://travellersworldwide.com/wp-content/uploads/2023/01/shutterstock_248799484.jpg.webp" alt="Nivel 7">
                        <div class="level-description">
                            <strong>Nivel 7 - Viajes</strong>
                            <p>Aprende inglés para comunicarte en tus viajes alrededor del mundo.</p>
                        </div>
                    </div>
                    <div class="level-item">
                        <img src="https://www.olaeducation.edu.np/wp-content/uploads/2020/10/usa-1-1024x410.jpg" alt="Nivel 8">
                        <div class="level-description">
                            <strong>Nivel 8 - Literatura</strong>
                            <p>Sumérgete en la literatura en inglés y mejora tu comprensión lectora.</p>
                        </div>
                    </div>
                </div>
            </div>
                        <!-- Sección de Lecciones -->
                        <div id="lecciones" class="section">
                <h2>Lecciones</h2>
                <div class="section-content">
                    <div class="level-item">
                        <img src="https://i9.ytimg.com/vi/u7y1PSTDArA/mqdefault.jpg?v=673292d1&sqp=CMykyrkG&rs=AOn4CLCAto7niYFdZIwUXTDBMyDW6f6-gg" alt="Lección 1">
                        <a href="https://youtu.be/u7y1PSTDArA" target="_blank">Ver Lección 1</a>
                    </div>
                    <div class="level-item">
                        <img src="https://i9.ytimg.com/vi_webp/i-NKFnM8rBo/mqdefault.webp?v=673292e3&sqp=CMykyrkG&rs=AOn4CLC9O0QExsiZeiQdWb5SVMT2U_4sFQ" alt="Lección 2">
                        <a href="https://youtu.be/i-NKFnM8rBo" target="_blank">Ver Lección 2</a>
                    </div>
                    <div class="level-item">
                        <img src="https://i9.ytimg.com/vi_webp/El0Es7lZQcM/mqdefault.webp?v=673292f2&sqp=CMykyrkG&rs=AOn4CLCxx2e-Qv3vJ6YA39TMVFQfGQ3Vcw" alt="Lección 1">
                        <a href="https://youtu.be/El0Es7lZQcM" target="_blank">Ver Lección 1</a>
                    </div>
                    <div class="level-item">
                        <img src="https://i9.ytimg.com/vi_webp/jl_p-XLWW_4/mqdefault.webp?v=673292ff&sqp=CMykyrkG&rs=AOn4CLD1RApXXKxec33g_s9ZveOqgDsRsA" alt="Lección 2">
                        <a href="https://youtu.be/jl_p-XLWW_4" target="_blank">Ver Lección 2</a>
                    </div>
                </div>
            </div>
            <!-- Sección de Progreso -->
            <div id="progreso" class="section">
                <h2>Porcentaje de niveles alcanzados</h2>
                <div class="section-content">
                    <div class="progress-bar">
                        <span class="progress-text">Nivel 1: 80% completado</span>
                        <div class="progress">
                            <div class="progress-fill" style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <span class="progress-text">Nivel 2: 60% completado</span>
                        <div class="progress">
                            <div class="progress-fill" style="width: 60%;"></div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <span class="progress-text">Nivel 3: 40% completado</span>
                        <div class="progress">
                            <div class="progress-fill" style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- Sección de Recursos -->
            <div id="recursos" class="section">
                <h2>Recursos</h2>
                <div class="section-content">
                    <div class="level-item">
                        <img src="https://i.ytimg.com/an_webp/cFJamlqjU5Y/mqdefault_6s.webp?du=3000&sqp=CNSayrkG&rs=AOn4CLA5y58N4t-ghqW8nZYKyNZJC_1sZA" alt="Recurso 1">
                        <a href="https://www.youtube.com/watch?v=2lxfJmL4dmA&pp=ygUPaW5nbGVzIHByb2RpZ2lv" target="_blank">Estudia Ingles Gratis</a>
                    </div>
                    <div class="level-item">
                        <img src="https://i.ytimg.com/an_webp/2lxfJmL4dmA/mqdefault_6s.webp?du=3000&sqp=CMCoyrkG&rs=AOn4CLBX22RKPNsma_vI9zFsfdfRFDGMLg" alt="Recurso 2">
                        <a href="https://www.youtube.com/watch?v=2lxfJmL4dmA" target="_blank">Ingles Gratis en Tulsa</a>
                    </div>
                    <div class="level-item">
                        <img src="https://i.ytimg.com/an_webp/5PO5ZD_E9PA/mqdefault_6s.webp?du=3000&sqp=CMD4ybkG&rs=AOn4CLCh9ARgXGqMzBvwPF0XTGWUqslu6A" alt="Recurso 3">
                        <a href="https://www.youtube.com/watch?v=2lxfJmL4dmA&pp=ygUPaW5nbGVzIHByb2RpZ2lv" target="_blank">Ingles Codigo Abierto</a>
                    </div>
                    <div class="level-item">
                        <img src="https://i.ytimg.com/an_webp/jXhTUDSawMs/mqdefault_6s.webp?du=3000&sqp=COHuybkG&rs=AOn4CLAbonCJtxGniPgvSn67535BeQNvzQ" alt="Recurso 4">
                        <a href="https://www.youtube.com/watch?v=2lxfJmL4dmA" target="_blank">Clases Free Us Pandemic</a>
                    </div>
                </div>
            </div>
            <!-- Sección de Mensajería -->
            <div id="mensajeria" class="section">
                <h2>Mensajería</h2>
                <div class="messaging">
                    <div class="message-container">
                        <div class="message"><strong>Juan:</strong> ¡Hola, cómo estás?</div>
                        <div class="message"><strong>Ana:</strong> Muy bien, ¿y tú?</div>
                    </div>
                    <div class="message-input">
                        <input type="text" placeholder="Escribe un mensaje...">
                        <button>Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

