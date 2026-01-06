<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://predial.salamanca.gob.mx/img/favicon.png?v=1" />

    <meta name="description" content="No hay nada que ver por aquí. Parece que te has perdido.">
    <meta name="keywords" content="página no encontrada, error 404, perdido">
    <meta name="author" content="Gobierno Municipal de Salamanca">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>No hay nada que ver por aquí</title>

    <!-- CSS: Google Fonts y Bootstrap desde CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        /* ================================ */
        /* ESTILOS GENERALES                */
        /* ================================ */

        * {
            font-family: "Montserrat", Arial, sans-serif !important;
        }

        body {
            margin: 0;
            font-family: "Montserrat", Arial, sans-serif;
            font-size: 16px;
            background-color: #f5f5f5;
            overflow-x: hidden;
            position: relative;
        }

        html,
        body {
            width: 100%;
            min-height: 100vh;
        }

        /* Fondo con textura para toda la página */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("https://predial.salamanca.gob.mx/img/Fondo_textura.png?v=1");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.4;
            z-index: -1;
        }

        /* ================================ */
        /* HEADER Y TOPBAR                  */
        /* ================================ */

        .topbar {
            background-color: rgb(144, 12, 63);
            padding: 5px 0;
            color: white;
            height: auto;
            min-height: 40px;
            display: flex;
            align-items: center;
        }

        .topbar .container {
            width: 100%;
            padding: 0 15px;
        }

        .contact-info {
            color: rgb(255, 255, 255);
            font-size: 14px;
            gap: 10px;
            display: flex;
            align-items: center;
            margin: 5px 0;
            white-space: nowrap;
            flex-wrap: wrap;
            justify-content: center;
        }

        .contact-info-group {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 15px;
        }

        .contact-info img {
            width: 20px;
            margin-right: 8px;
            filter: brightness(0) invert(1);
        }

        /* ================================ */
        /* ICONOS SOCIALES                  */
        /* ================================ */

        .social-icons {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            align-items: center;
            margin: 5px 0;
        }

        .social-icons-container {
            display: flex;
            justify-content: flex-end;
        }

        .social-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: transparent !important;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 20px;
            color: rgb(255, 255, 255);
            line-height: 1;
        }

        .social-icon i,
        .social-icon img {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-icon i {
            font-size: 20px !important;
        }

        .social-icon:hover {
            transform: translateY(-3px);
            background-color: transparent !important;
            color: #ccc;
        }

        .social-icon.facebook:hover {
            color: blue;
        }

        .social-icon.x:hover {
            color: black;
        }

        .social-icon.youtube:hover {
            color: red;
        }

        .social-icon.instagram:hover {
            background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
            background-clip: text;
            color: transparent;
        }

        .social-icon.tiktok:hover {
            background: linear-gradient(45deg, #000000, #ffffff, #ff0050, #00f2ea);
            background-clip: text;
            color: transparent;
        }

        /* Icono de X/Twitter específico */
        .social-icon.x img,
        .footer-social-icon.x img {
            width: 20px;
            height: 20px;
            filter: brightness(0) saturate(100%) invert(1);
            transition: all 0.3s ease;
        }

        .social-icon.x:hover img,
        .footer-social-icon.x:hover img {
            filter: brightness(0) saturate(100%) invert(0);
        }

        /* ================================ */
        /* NAVBAR Y LOGOTIPO               */
        /* ================================ */

        .navbar {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: transparent;
            padding: 10px;
        }

        .navbar-logo {
            text-align: center;
            width: 100%;
        }

        .navbar-logo img {
            height: auto;
            max-height: 110px;
            width: auto;
            margin: 0;
        }

        /* ================================ */
        /* SECCIÓN PRINCIPAL MANTENIMIENTO  */
        /* ================================ */

        .maintenance-section {
            min-height: calc(100vh - 300px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
            background: linear-gradient(135deg, #1E5C50 0%, #2d7a6b 50%, #1E5C50 100%);
            position: relative;
            overflow: hidden;
        }

        .maintenance-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .maintenance-content {
            max-width: 800px;
            text-align: center;
            background: rgba(255, 255, 255, 0.95);
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 1;
        }

        .maintenance-icon {
            width: 120px;
            height: 120px;
            margin: 0 auto 30px;
            background: #900C3F;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: pulse 2s infinite;
        }

        .maintenance-icon i {
            font-size: 60px;
            color: white;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(144, 12, 63, 0.7);
            }

            50% {
                transform: scale(1.05);
                box-shadow: 0 0 0 20px rgba(144, 12, 63, 0);
            }
        }

        .maintenance-title {
            font-size: 3rem;
            color: #900C3F;
            font-weight: 700;
            margin-bottom: 20px;
            letter-spacing: 2px;
        }

        .maintenance-subtitle {
            font-size: 1.5rem;
            color: #1E5C50;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .maintenance-text {
            font-size: 1.1rem;
            color: #333;
            line-height: 1.8;
            margin-bottom: 40px;
        }

        .maintenance-info {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            margin-top: 40px;
        }

        .maintenance-info h3 {
            color: #900C3F;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .contact-card {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            padding: 15px;
            margin: 10px 0;
            background: white;
            border-radius: 10px;
            transition: all 0.3s ease;
            text-decoration: none;
            color: inherit;
        }

        .contact-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(144, 12, 63, 0.2);
        }

        .contact-card img {
            width: 24px;
            height: 24px;
            filter: invert(11%) sepia(71%) saturate(4824%) hue-rotate(323deg) brightness(92%) contrast(103%);
        }

        .contact-card-content {
            text-align: left;
            flex: 1;
        }

        .contact-label {
            font-size: 12px;
            color: #666;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .contact-value {
            font-size: 16px;
            color: #1a1a1a;
            font-weight: 600;
        }

        /* ================================ */
        /* BOTÓN REGRESAR                   */
        /* ================================ */

        .btn-home {
            display: inline-block;
            padding: 15px 40px;
            background-color: #900C3F;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            margin: 20px 0;
            border: none;
            cursor: pointer;
        }

        .btn-home:hover {
            background-color: #7a0a35;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(144, 12, 63, 0.3);
            color: white;
        }

        .btn-home i {
            margin-right: 8px;
        }

        /* ================================ */
        /* PIE DE PÁGINA                   */
        /* ================================ */

        .footer {
            background-image: url('https://predial.salamanca.gob.mx/img/fondo-verde.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 40px 0 20px;
        }

        .footer-top {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            text-align: left;
            margin-bottom: 30px;
        }

        .footer h4 {
            color: white;
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .footer p,
        .footer a {
            color: rgba(255, 255, 255, 0.95);
            text-decoration: none;
            font-size: 16px;
            line-height: 1.8;
        }

        .footer a:hover {
            color: white;
            text-decoration: underline;
        }

        .footer img.icon {
            width: 20px;
            margin-right: 8px;
            filter: brightness(0) invert(1);
        }

        .footer-social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: transparent !important;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 20px;
            color: #fff;
            margin-right: 10px;
        }

        .footer-social-icon:hover {
            background-color: transparent !important;
            transform: translateY(-3px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 20px;
            text-align: center;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
        }

        .footer-links-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links-list li {
            margin-bottom: 10px;
        }

        .footer-links-list li img {
            margin-right: 8px;
            width: 14px;
            height: 14px;
        }

        /* ================================ */
        /* MEDIA QUERIES - RESPONSIVE       */
        /* ================================ */

        @media (max-width: 767.98px) {
            .col-md-7.d-none {
                display: none !important;
            }

            .col-md-5 {
                width: 100%;
                text-align: center;
            }

            .social-icons-container {
                justify-content: center;
            }

            .topbar {
                padding: 8px 0;
            }

            .navbar-logo img {
                max-height: 80px;
            }

            .maintenance-content {
                padding: 40px 25px;
            }

            .maintenance-title {
                font-size: 2rem;
            }

            .maintenance-subtitle {
                font-size: 1.2rem;
            }

            .maintenance-text {
                font-size: 1rem;
            }

            .maintenance-icon {
                width: 100px;
                height: 100px;
            }

            .maintenance-icon i {
                font-size: 50px;
            }

            .footer-top {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .contact-card {
                flex-direction: row;
                text-align: left;
            }

            .contact-card-content {
                text-align: left;
            }
        }

        @media (max-width: 480px) {
            .maintenance-title {
                font-size: 1.5rem;
                letter-spacing: 1px;
            }

            .maintenance-subtitle {
                font-size: 1rem;
            }

            .maintenance-content {
                padding: 30px 20px;
            }

            .maintenance-info {
                padding: 20px;
            }

            .navbar-logo img {
                max-height: 80px;
            }
        }
    </style>
</head>

<body>
    <!-- SECCIÓN: HEADER Y NAVEGACIÓN -->
    <header id="header" class="header">
        <!-- Barra superior con contacto y redes sociales -->
        <div class="topbar d-flex align-items-center">
            <div class="container">
                <div class="row w-100 align-items-center justify-content-between">
                    <!-- Info de contacto (oculto en móviles) -->
                    <div class="col-md-7 d-none d-md-block">
                        <div class="d-flex flex-wrap align-items-center contact-info-group">
                            <div class="contact-info me-md-3">
                                <img src="https://predial.salamanca.gob.mx/img/marcador.svg?v=1" alt="Marcador">
                                <a href="https://www.google.com.mx/maps/place/Presidencia+Municipal+de+Salamanca/@20.5685459,-101.1999714,17z/data=!3m1!4b1!4m6!3m5!1s0x842c854bd784062b:0xc99d1c20da973c4c!8m2!3d20.5685459!4d-101.1999714!16s%2Fg%2F1tcw3ys1?entry=ttu&g_ep=EgoyMDI1MDMxMC4wIKXMDSoASAFQAw%3D%3D"
                                    target="_blank" style="text-decoration: none; color: inherit;">
                                    Portal Octaviano Muñoz Ledo S/N
                                </a>
                            </div>
                            <div class="contact-info">
                                <img src="https://predial.salamanca.gob.mx/img/llamada-telefonica.svg?v=1"
                                    alt="Teléfono">
                                <span>+52 464 6414 500</span>
                            </div>
                        </div>
                    </div>

                    <!-- Redes sociales -->
                    <div class="col-md-5 col-12 text-md-end">
                        <div class="social-icons-container">
                            <div class="social-icons align-items-center justify-content-md-end justify-content-center">
                                <a href="https://www.facebook.com/GobSalamanca" class="social-icon facebook"
                                    target="_blank" aria-label="Facebook">
                                    <i class="bi bi-facebook" style="font-size: 25px;"></i>
                                </a>
                                <a href="https://x.com/GobSalamanca" class="social-icon x" target="_blank"
                                    aria-label="Twitter/X">
                                    <img src="https://predial.salamanca.gob.mx/img/twitter-alt.svg?v=1" alt="X Logo"
                                        class="icon">
                                </a>
                                <a href="https://www.youtube.com/@presidenciamunicipaldesala2094"
                                    class="social-icon youtube" target="_blank" aria-label="YouTube">
                                    <i class="bi bi-youtube" style="font-size: 25px;"></i>
                                </a>
                                <a href="https://www.instagram.com/salamanca_gto_mx/?hl=es"
                                    class="social-icon instagram" target="_blank" aria-label="Instagram">
                                    <i class="bi bi-instagram" style="font-size: 25px;"></i>
                                </a>
                                <a href="https://www.tiktok.com/@salamanca_gto_mx?is_from_webapp=1&sender_device=pc"
                                    class="social-icon tiktok" target="_blank" aria-label="TikTok">
                                    <i class="bi bi-tiktok" style="font-size: 25px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar con logo -->
        <nav class="navbar">
            <div class="navbar-logo">
                <a href="https://salamanca.gob.mx/">
                    <img src="https://predial.salamanca.gob.mx/img/logo.png?v=1" alt="Logo Gobierno de Salamanca">
                </a>
            </div>
        </nav>
    </header>

    <!-- SECCIÓN: MANTENIMIENTO -->
    <section class="maintenance-section">
        <div class="maintenance-content">
            <div class="maintenance-icon">
                <i class="bi bi-question-circle-fill"></i>
            </div>

            <h1 class="maintenance-title">NO HAY NADA QUE VER POR AQUÍ</h1>
            <h2 class="maintenance-subtitle">Parece que te has perdido</h2>

            <p class="maintenance-text">
                Esta página no existe o ya no está disponible. Es posible que hayas llegado aquí por error o que la
                dirección que buscabas haya cambiado.
            </p>

            <p class="maintenance-text">
                <strong style="font-size: 1.3rem; color: #900C3F;">No hay contenido disponible en esta
                    dirección.</strong>
            </p>

            <p class="maintenance-text">
                Te sugerimos verificar la dirección o regresar a la página principal.
            </p>

            <a href="https://salamanca.gob.mx/" class="btn-home">
                <i class="bi bi-house-door-fill"></i> Regresar a la página principal
            </a>

            <!--  <div class="maintenance-info">
                <h3><i class="bi bi-signpost-split"></i> ¿Necesitas ayuda?</h3>
                <p style="margin-bottom: 20px;">
                    Si crees que esto es un error, puedes contactarnos:
                </p>

                <div class="contact-card">
                    <img src="https://predial.salamanca.gob.mx/img/llamada-telefonica.svg" alt="Teléfono">
                    <div class="contact-card-content">
                        <div class="contact-label">Teléfono</div>
                        <div class="contact-value">+52 464 6414 500</div>
                    </div>
                </div>

                <div class="contact-card">
                    <img src="https://predial.salamanca.gob.mx/img/reloj-tres.svg" alt="Horario">
                    <div class="contact-card-content">
                        <div class="contact-label">Horario de Atención</div>
                        <div class="contact-value">Lunes a Viernes 8:00 - 16:00 hrs</div>
                    </div>
                </div>

                <div class="contact-card">
                    <img src="https://predial.salamanca.gob.mx/img/marcador.svg" alt="Domicilio">
                    <div class="contact-card-content">
                        <div class="contact-label">Domicilio</div>
                        <div class="contact-value">Portal Octaviano Muñoz Ledo S/N</div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    <!-- SECCIÓN: PIE DE PÁGINA -->


    <!-- SCRIPTS ESENCIALES desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
