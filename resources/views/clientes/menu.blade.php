<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurante Mesai</title>

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #0b0b0f;
      font-family: Arial, sans-serif;
      color: white;
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* NAVBAR */

    .navbar {
      width: 100%;
      background: #c9972f;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
      border-bottom: 3px solid #e2b857;
      gap: 20px;
      flex-wrap: wrap;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .logo-circle {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: #111;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      border: 2px solid #f5d27c;
      flex-shrink: 0;
    }

    .logo-text h1 {
      font-size: 28px;
      color: white;
    }

    .logo-text p {
      font-size: 13px;
      color: #f7e7bc;
    }

    /* LINKS */

    .nav-links {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
    }

    .nav-links a {
      text-decoration: none;
      color: white;
      padding: 15px 25px;
      font-weight: bold;
      border-radius: 10px;
      transition: .3s;
    }

    .nav-links a:hover {
      background: #111116;
      color: #ffcc66;
    }

    .nav-active {
      background: #f5e6c8;
      color: #111 !important;
    }

    /* HERO */

    .hero {
      background: linear-gradient(135deg, #c9972f, #e2b857);
      padding: 70px 20px;
      text-align: center;
    }

    .hero h2 {
      font-size: 50px;
      margin-bottom: 20px;
      color: white;
      line-height: 1.2;
    }

    .hero p {
      font-size: 20px;
      color: #fff3d4;
      max-width: 800px;
      margin: auto;
      line-height: 1.7;
    }

    /* GRID */

    .contenedor {
      padding: 40px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 30px;
    }

    /* CARD */

    .card {
      background: #14141b;
      border: 1px solid #2c2c38;
      border-radius: 20px;
      overflow: hidden;
      transition: .3s;
      display: flex;
      flex-direction: column;
    }

    .card:hover {
      transform: translateY(-5px);
      border-color: #c9972f;
      box-shadow: 0 10px 25px rgba(201, 151, 47, 0.2);
    }

    .card-header {
      background: #1b1b24;
      padding: 20px;
      border-bottom: 1px solid #2c2c38;
    }

    .card-header h2 {
      color: #ffcc66;
      font-size: 24px;
      line-height: 1.4;
    }

    .card-body {
      padding: 20px;
      display: flex;
      flex-direction: column;
      gap: 15px;
      flex: 1;
    }

    .categoria {
      color: #d1d1d1;
      line-height: 1.6;
    }

    .descripcion {
      color: #bdbdbd;
      line-height: 1.8;
      flex: 1;
    }

    .footer-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 15px;
      flex-wrap: wrap;
      margin-top: 10px;
    }

    .precio {
      color: #00e676;
      font-size: 24px;
      font-weight: bold;
    }

    .badge {
      background: #2a2a35;
      color: white;
      padding: 8px 14px;
      border-radius: 10px;
      font-size: 13px;
    }

    /* FOOTER */

    .footer {
      margin: 0 40px 40px;
      background: #1a1a22;
      border: 1px solid #2c2c38;
      padding: 25px;
      border-radius: 18px;
      text-align: center;
      color: #cfcfcf;
      line-height: 1.9;
      font-size: 15px;
    }

    /* TABLET */

    @media(max-width:900px) {

      .navbar {
        flex-direction: column;
        padding: 20px;
      }

      .logo {
        justify-content: center;
      }

      .nav-links {
        width: 100%;
        justify-content: center;
      }

      .hero h2 {
        font-size: 38px;
      }

      .hero p {
        font-size: 18px;
      }

      .contenedor {
        padding: 25px;
      }

      .footer {
        margin: 0 25px 25px;
      }

    }

    /* MOVIL */

    @media(max-width:600px) {

      body {
        overflow-x: hidden;
      }

      /* NAVBAR */

      .navbar {
        padding: 15px;
        gap: 18px;
      }

      .logo {
        width: 100%;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        gap: 10px;
      }

      .logo-circle {
        width: 60px;
        height: 60px;
        font-size: 22px;
      }

      .logo-text h1 {
        font-size: 24px;
      }

      .logo-text p {
        font-size: 14px;
      }

      .nav-links {
        width: 100%;
        flex-direction: column;
        gap: 12px;
      }

      .nav-links a {
        width: 100%;
        padding: 16px;
        border-radius: 14px;
        background: rgba(0, 0, 0, 0.12);
        text-align: center;
        font-size: 15px;
      }

      /* HERO */

      .hero {
        padding: 50px 20px;
      }

      .hero h2 {
        font-size: 30px;
        line-height: 1.3;
        margin-bottom: 15px;
      }

      .hero p {
        font-size: 16px;
        line-height: 1.8;
      }

      /* CONTENEDOR */

      .contenedor {
        padding: 18px;
        gap: 22px;
        grid-template-columns: 1fr;
      }

      /* CARD */

      .card {
        border-radius: 22px;
      }

      .card-header {
        padding: 18px;
      }

      .card-header h2 {
        font-size: 22px;
      }

      .card-body {
        padding: 18px;
        gap: 18px;
      }

      .categoria {
        font-size: 15px;
      }

      .descripcion {
        font-size: 15px;
        line-height: 1.9;
        color: #d8d8d8;
      }

      .footer-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
      }

      .precio {
        font-size: 24px;
      }

      .badge {
        width: 100%;
        text-align: center;
        padding: 12px;
        border-radius: 12px;
      }

      /* FOOTER */

      .footer {
        margin: 0 18px 25px;
        padding: 22px;
        font-size: 14px;
        line-height: 1.9;
      }

    }
  </style>
</head>

<body>

  <!-- NAVBAR -->

  <nav class="navbar">

    <div class="logo">

      <div class="logo-circle">
        M
      </div>

      <div class="logo-text">
        <h1>Restaurante Mesai</h1>
        <p>Menu</p>
      </div>

    </div>

    <div class="nav-links">

      <a href="/menu" class="nav-active">
        Menu
      </a>

      <a href="/reservacion">
        Reservar Mesa
      </a>

    </div>

  </nav>

  <!-- HERO -->

  <section class="hero">

    <h2>
      Déjate seducir por sabores únicos
    </h2>

    <p>
      Vive una experiencia gastronómica moderna con los platillos exclusivos de Mesai Restaurant
    </p>

  </section>

  <!-- MENUS -->

  <section class="contenedor">

    @foreach($menus as $menu)

    <div class="card">

      <div class="card-header">
        <h2>{{ $menu->nombre }}</h2>
      </div>

      <div class="card-body">

        <p class="categoria">
          <strong>Categoría:</strong>
          {{ $menu->categoria }}
        </p>

        <p class="descripcion">
          {{ $menu->descripcion }}
        </p>

        <div class="footer-item">

          <span class="precio">
            ${{ $menu->precio }}
          </span>

          <span class="badge">
            Disponible
          </span>

        </div>

      </div>

    </div>

    @endforeach

  </section>

  <!-- FOOTER -->

  <div class="footer">

    P.D. Los platillos aquí presentados son solo una muestra de nuestras especialidades más populares; en el restaurante le espera una carta más extensa, diseñada para ofrecerle una experiencia aún más completa.

  </div>

</body>

</html>