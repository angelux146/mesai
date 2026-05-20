<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Reservar Mesa | Restaurante Mesai</title>

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
      background: #111116;
      display: flex;
      justify-content: center;
      align-items: center;
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
      color: #fff3d4;
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
      text-align: center;
      padding: 70px 20px;
    }

    .hero h2 {
      font-size: 46px;
      margin-bottom: 15px;
      color: white;
      line-height: 1.3;
    }

    .hero p {
      color: #fff4d8;
      font-size: 19px;
      max-width: 700px;
      margin: auto;
      line-height: 1.8;
    }

    /* CONTENEDOR */

    .container {
      width: 100%;
      display: flex;
      justify-content: center;
      padding: 50px 20px;
    }

    /* FORMULARIO */

    .form-card {
      width: 100%;
      max-width: 750px;
      background: #14141b;
      border: 1px solid #2c2c38;
      border-radius: 22px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, .35);
    }

    .form-header {
      background: #1b1b24;
      padding: 25px;
      border-bottom: 1px solid #2c2c38;
    }

    .form-header h3 {
      color: #ffcc66;
      font-size: 30px;
    }

    .form-body {
      padding: 35px;
    }

    .success {
      background: rgba(0, 230, 118, 0.15);
      color: #00e676;
      padding: 15px;
      border-radius: 12px;
      margin-bottom: 25px;
      border: 1px solid #00e676;
      line-height: 1.6;
    }

    .input-group {
      margin-bottom: 22px;
    }

    .input-group label {
      display: block;
      margin-bottom: 10px;
      color: #ddd;
      font-weight: bold;
      font-size: 15px;
    }

    .input-group input,
    .input-group select,
    .input-group textarea {
      width: 100%;
      padding: 15px;
      border: 1px solid #2c2c38;
      border-radius: 12px;
      background: #1b1b24;
      color: white;
      outline: none;
      font-size: 15px;
      transition: .3s;
    }

    .input-group input:focus,
    .input-group select:focus,
    .input-group textarea:focus {
      border-color: #c9972f;
      box-shadow: 0 0 12px rgba(201, 151, 47, .3);
    }

    textarea {
      resize: vertical;
      min-height: 130px;
    }

    /* GRID */

    .grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    /* BOTON */

    .btn {
      width: 100%;
      padding: 18px;
      border: none;
      border-radius: 14px;
      background: linear-gradient(135deg, #c9972f, #e2b857);
      color: white;
      font-size: 17px;
      font-weight: bold;
      cursor: pointer;
      transition: .3s;
      margin-top: 10px;
    }

    .btn:hover {
      transform: translateY(-2px);
      opacity: .95;
      box-shadow: 0 8px 20px rgba(201, 151, 47, .3);
    }

    /* FOOTER */

    .footer {
      margin: 0 20px 40px;
      background: #14141b;
      border: 1px solid #2c2c38;
      border-radius: 18px;
      padding: 25px;
      text-align: center;
      color: #bdbdbd;
      line-height: 1.9;
      font-size: 15px;
    }

    /* TABLET */

    @media(max-width: 900px) {

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
        font-size: 17px;
      }

      .grid {
        grid-template-columns: 1fr;
      }

      .form-body {
        padding: 25px;
      }

    }

    /* MOVIL */

    @media(max-width: 600px) {

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
        text-align: center;
        padding: 16px;
        border-radius: 14px;
        background: rgba(0, 0, 0, 0.12);
        font-size: 15px;
      }

      /* HERO */

      .hero {
        padding: 50px 20px;
      }

      .hero h2 {
        font-size: 32px;
        line-height: 1.3;
      }

      .hero p {
        font-size: 16px;
        line-height: 1.8;
      }

      /* FORM */

      .container {
        padding: 25px 15px;
      }

      .form-card {
        border-radius: 22px;
      }

      .form-header {
        padding: 20px;
      }

      .form-header h3 {
        font-size: 24px;
        text-align: center;
      }

      .form-body {
        padding: 20px;
      }

      .grid {
        grid-template-columns: 1fr;
        gap: 0;
      }

      .input-group {
        margin-bottom: 20px;
      }

      .input-group label {
        font-size: 14px;
      }

      .input-group input,
      .input-group select,
      .input-group textarea {
        padding: 16px;
        font-size: 15px;
        border-radius: 14px;
      }

      textarea {
        min-height: 120px;
      }

      .btn {
        padding: 18px;
        font-size: 16px;
        border-radius: 14px;
      }

      /* FOOTER */

      .footer {
        margin: 0 15px 25px;
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
        <p>Reservaciones</p>
      </div>

    </div>

    <div class="nav-links">

      <a href="/menu">
        Menu
      </a>

      <a href="/reservaciones" class="nav-active">
        Reservar Mesa
      </a>

    </div>

  </nav>

  <!-- HERO -->

  <section class="hero">

    <h2>
      Reserva tu mesa fácilmente
    </h2>

    <p>
      Vive una experiencia gastronómica elegante y moderna en Restaurante Mesai
    </p>

  </section>

  <!-- CONTENIDO -->

  <div class="container">

    <div class="form-card">

      <div class="form-header">
        <h3>Formulario de Reservación</h3>
      </div>

      <div class="form-body">

        @if(session('success'))

        <div class="success">
          {{ session('success') }}
        </div>

        @endif

        <form method="POST"
          action="{{ route('reservacion.guardar') }}">

          @csrf

          <div class="grid">

            <div class="input-group">
              <label>Nombre</label>

              <input type="text"
                name="nombre"
                placeholder="Ingresa tu nombre"
                required>
            </div>

            <div class="input-group">
              <label>Teléfono</label>

              <input type="text"
                name="telefono"
                placeholder="Ingresa tu teléfono"
                required>
            </div>

          </div>

          <div class="input-group">
            <label>Correo Electrónico</label>

            <input type="email"
              name="email"
              placeholder="Ingresa tu correo"
              required>
          </div>

          <div class="input-group">
            <label>Notas Especiales</label>

            <textarea name="notas"
              placeholder="Escribe alguna indicación adicional..."></textarea>
          </div>

          <div class="grid">

            <div class="input-group">
              <label>Fecha</label>

              <input type="date"
                name="fecha"
                required>
            </div>

            <div class="input-group">
              <label>Hora</label>

              <input type="time"
                name="hora"
                required>
            </div>

          </div>

          <div class="grid">

            <div class="input-group">
              <label>Número de Personas</label>

              <input type="number"
                name="personas"
                placeholder="Ejemplo: 4"
                required>
            </div>

            <div class="input-group">
              <label>Mesa</label>

              <select name="mesa">

                <option value="Mesa 1">
                  Mesa 1
                </option>

                <option value="Mesa 2">
                  Mesa 2
                </option>

                <option value="Mesa 3">
                  Mesa 3
                </option>

              </select>

            </div>

          </div>

          <button type="submit" class="btn">
            Confirmar Reservación
          </button>

        </form>

      </div>

    </div>

  </div>

  <!-- FOOTER -->

  <div class="footer">

    Nuestro equipo está listo para brindarte una experiencia culinaria única.
    Reserva tu mesa y disfruta de un ambiente moderno, elegante y exclusivo.

  </div>

</body>

</html>