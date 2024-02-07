<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="shortcut icon"
            href="assets/favicon.ico"
            type="image/x-icon"
        />
        <link rel="stylesheet" href="normalize.css" />
        <link rel="stylesheet" href="style.css" />
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
        <title>Plataforma</title>
    </head>
    <body>
        <header>
            <img src="assets/logouniver.png" alt="Logo" class="logo-header" />
            <div class="profile">
                <button class="profile-btn">
                    <div class="user-info">
                        <img
                            src="assets/hombre.png"
                            alt="Imagen del usuario"
                            class="user"
                        />
                        <p class="name">Luis Enrique</p>
                        <i class="bx bx-chevron-down profile-icon"></i>
                        <div class="dropdown-menu">
                            <ul>
                                <li>
                                    <a href=""
                                        ><i class="bx bx-user"></i>MI Perfil</a
                                    >
                                </li>
                                <li>
                                    <a href=""
                                        ><i class="bx bx-log-out"></i>Salir</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </button>
            </div>
        </header>

        <main class="main-content">
            <nav class="side-bar">
                <ul>
                    <li>
                        <a href="/plantel.html">
                            <i class="bx bxs-school icon-sidebar"></i>
                            <span class="txt-sidebar">Plantel</span>
                        </a>
                    </li>
                    <li>
                        <a href="/grupo.html">
                            <i class="bx bx-group icon-sidebar"></i>
                            <span class="txt-sidebar">Grupos</span>
                        </a>
                    </li>
                    <li>
                        <a href="/index.html">
                            <i class="bx bx-book icon-sidebar"></i>
                            <span class="txt-sidebar">Materias</span>
                        </a>
                    </li>
                    <li>
                        <a href="/index.html">
                            <i class="bx bx-time icon-sidebar"></i>
                            <span class="txt-sidebar">Horarios</span>
                        </a>
                    </li>
                    <li>
                        <a href="/index.html">
                            <i class="bx bx-user icon-sidebar"></i>
                            <span class="txt-sidebar">Perfil</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="content">
                <?php
                include ('assets/php/Conexion.php');

                ?>
                <!--Register
                <form class="form">
                    <div class="form-group">
                        <label>Clave de grupo</label>
                        <input type="number" />
                    </div>

                    <div class="form-group">
                        <label>Horario</label>
                        <input type="datetime" />
                    </div>

                    <div class="form-group">
                        <label>Docente</label>
                        <input type="text" />
                    </div>

                    <div class="form-group">
                        <label>Número de alumnos</label>
                        <input type="number" />
                    </div>

                    <div class="form-group">
                        <label>Plantel</label>
                        <input type="text" />
                    </div>

                    <div class="button-form">
                        <input class="button" type="submit">
                    </div>
                </form>
                -->
            </div>
        </main>
        <script src="script.js"></script>
    </body>
</html>
