<!DOCTYPE html>
<html>

<head>
    
<<<<<<< HEAD
    <title>Malla Informática </title>
=======
    <title>Malla informarica </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
>>>>>>> a8c1beaebfba89cf8ea3d2547b54a666aff8ab42
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="#" />  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../frondend/bootstrap4/css/bootstrap.min.css">	
    <link rel="stylesheet" href="../frondend/plugins/sweetAlert2/sweetalert2.min.css">  
    <link rel="stylesheet" href="../frondend/plugins/animate.css/animate.css">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        function toggleColor(color) {
            var buttons = document.getElementsByClassName('card');
            for (var i = 0; i < buttons.length; i++) {
                if (buttons[i].classList.contains(color)) {
                    buttons[i].classList.toggle('active');
                } else {
                    buttons[i].classList.remove('active');
                }
            }
        }
    </script>
</head>

<body>
    <?php
    include './backend/OptenerInfo.php';
    ?>
    <div class="col-lg-3">
            <button id="btn" class="btn btn-outline-primary btn-lg btn-block">Ayuda</button>
        </div>
     <script src="../frondend/jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="../frondend/popper/popper.min.js"></script>	 	 	
    <script src="../frondend/bootstrap4/js/bootstrap.min.js"></script>
    <script src="../frondend/plugins/sweetAlert2/sweetalert2.all.min.js"></script>
      
    <script>$("#btn").click(function(){
      Swal.fire({
        imageUrl: '../frondend/img/servicios.gif',
          imageHeight: 412,
          imageAlt: 'A tall image',
          title: 'Bienvenido!!',
          text: 'Aquí podrá ver las materias correspondientes a cada carrera, solo debe colocar el mouse sobre la materia y vera un resumen del mismo.\nPara ver el documento completo, solo haga click en la materia.\nGracias!',
          
          animation: false,
          customClass: {
          popup: 'animated bounceIn'
      }
      });
  });</script> 	  
    
    <nav class="navbar navbar-light bg-custom">
        <div class="container">
            <img src="FCyT_web2.png" alt="Facultad de Ciencias y Tecnologías">
            <button class="navbar-toggler show" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.fctunca.edu.py/carreras/informatica">Ingeniería Informática</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.fctunca.edu.py/carreras/electronica">Ingeniería Electrónica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.fctunca.edu.py/carreras/electricidad">Ingeniería en Electricidad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.fctunca.edu.py/carreras/civil">Ingeniería Civil</a>
                    </li>
                </ul>
               
        

                <div class="navbar-collapse mt-4">
                    <div class="container-img">
                        <div class="ContRow">
                            <button class="card red" onclick="toggleColor('red')">
                                <h4>CI: CIENCIAS DE LA INGENIERIA</h4>
                                <div class="tooltip">
                                    <span class="tooltiptext">
                                        <p>
                                            <?php echo obtenerInformacionCategoria(1); ?>
                                        </p>
                                    </span>
                                </div>
                            </button>
                            <button class="card yellow" onclick="toggleColor('yellow')">
                                <h4>CB: CIENCIAS BASICAS</h4>
                                <div class="tooltip">
                                    <span class="tooltiptext">
                                        <p>
                                            <?php echo obtenerInformacionCategoria(2); ?>
                                        </p>
                                    </span>
                                </div>
                            </button>
                            <button class="card blue" onclick="toggleColor('blue')">
                                <h4>AI: APLICACIONES DE LA INGENIERIA</h4>
                                <div class="tooltip">
                                    <span class="tooltiptext">
                                        <p>
                                            <?php echo obtenerInformacionCategoria(3); ?>
                                        </p>
                                    </span>
                                </div>
                            </button>
                            <button class="card green" onclick="toggleColor('green')">
                                <h4>CO: COMPLEMENTOS DE LA FORMACION</h4>
                                <div class="tooltip">
                                    <span class="tooltiptext">
                                        <p>
                                            <?php echo obtenerInformacionCategoria(4); ?>
                                        </p>
                                    </span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header>
        <h3>Malla Curricular Informatica</h3> 
    </header>

    <div class="container">

        <div class="semestres">
            <h2>Primer semestre</h2>
        </div>

        <div class="row">
            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=5">
                    <h4>Calculo I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(1); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=3">
                    <h4>Fisica I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(2); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=8">
                    <h4>Quimica</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(3); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=1">
                    <h4>Computacion I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(4); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=4">
                    <h4>Algebra I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(5); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=6">
                    <h4>Geometria Analitica y Vectorial</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(6); ?>
                        </p>
                    </span>
                </div>
            </div>
            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=2">
                    <h4>Electronica I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(7); ?>
                        </p>
                    </span>
                </div>
            </div>
            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=10">
                    <h4>Eventos y Deportes I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(8); ?>
                        </p>
                    </span>
                </div>
            </div>
            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=7">
                    <h4>Diseño Tecnico</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(9); ?>
                        </p>
                    </span>
                </div>
            </div>
            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=9">
                    <h4>Ingles I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(10); ?>
                        </p>
                    </span>
                </div>
            </div>

        </div>
        <div class="semestres">
            <h2>Segundo semestre</h2>
        </div>
        <div class="row">
            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=13">
                    <h4>Laboratorio I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(11); ?>
                        </p>
                    </span>
                </div>
            </div>
            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=12">
                    <h4>Informatica I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(12); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=15">
                    <h4>Calculo II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(13); ?>
                        </p>
                    </span>
                </div>
            </div>
            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=17">
                    <h4>Administracion y Mercadotecnia</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(14); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=16">
                    <h4>Algebra II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(15); ?>
                        </p>
                    </span>
                </div>
            </div>
            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=19">
                    <h4>Eventos y Deportes II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(16); ?>
                        </p>
                    </span>
                </div>
            </div>
            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=18">
                    <h4>Ingles II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(17); ?>
                        </p>
                    </span>
                </div>
            </div>
            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=11">
                    <h4>Computacion II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(18); ?>
                        </p>
                    </span>
                </div>
            </div>
            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=14">
                    <h4>Fisica II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(19); ?>
                        </p>
                    </span>
                </div>
            </div>

        </div>
        <div class="semestres">
            <h2>Tercer semestre</h2>
        </div>
        <div class="row">
            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=27">
                    <h4>Expresion Oral y Escrita</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(20); ?>
                        </p>
                    </span>
                </div>
            </div>
            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=22">
                    <h4>Computacion III</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(21); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=28">
                    <h4>Eventos y Deportes III</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(22); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=25">
                    <h4>Calculo III</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(23); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=20">
                    <h4>Estructura de Datos I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(24); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=24">
                    <h4>Probabilidad y Estadisticas</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(25); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=23">
                    <h4>Fisica III</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(26); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=21">
                    <h4>Lenguaje de Programacion I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(27); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=26">
                    <h4>Metodologia de la Investigacion I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(28); ?>
                        </p>
                    </span>
                </div>
            </div>
        </div>

        <div class="semestres">
            <h2>Cuarto semestre</h2>
        </div>

        <div class="row">

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=31">
                    <h4>Lenguaje de Programacion II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(29); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=37">
                    <h4>Eventos y Deportes IV</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(30); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=29">
                    <h4>Base de Datos I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(31); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=33">
                    <h4>Contabilidad I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(32); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=32">
                    <h4>Taller de Hardware I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(33); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=34">
                    <h4>Derecho Intelectual y Laboral</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(34); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=30">
                    <h4>Diseño de Sistemas Informaticos</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(35); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=36">
                    <h4>Ingles III</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(36); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=35">
                    <h4>Emprendedorismo</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(37); ?>
                        </p>
                    </span>
                </div>
            </div>

        </div>

        <div class="semestres">
            <h2>Quinto semestre</h2>
        </div>

        <div class="row">

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=40">
                    <h4>Lenguaje de Programacion III</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(38); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=39">
                    <h4>Investigacion de Operaciones I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(39); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=44">
                    <h4>Matematica Aplicada</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(40); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=38">
                    <h4>Ingenieria de Software I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(41); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=41">
                    <h4>Redes de Computadoras I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(42); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=42">
                    <h4>Sistemas Operativos I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(43); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=45">
                    <h4>Idiomas I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(44); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=43">
                    <h4>Taller de Hardware II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(45); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=46">
                    <h4>Eventos y Deportes V</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(46); ?>
                        </p>
                    </span>
                </div>
            </div>

        </div>
        <div class="semestres">
            <h2>Sexto semestre</h2>
        </div>
        <div class="row">

            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=48">
                    <h4>Estructura de Lenguajes</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(47); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=49">
                    <h4>Lenguaje de Programacion IV</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(48); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=55">
                    <h4>Eventos y Deportes VI</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(49); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=52">
                    <h4>Metodos Numericos</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(50); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=50">
                    <h4>Redes de Computadoras II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(51); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=47">
                    <h4>Base de Datos II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(52); ?>
                        </p>
                    </span>
                </div>
            </div>


            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=54">
                    <h4>Laboratorio de Idiomas I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(53); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=53">
                    <h4>Etica Profecional</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(54); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=51">
                    <h4>Sistemas Operativos II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(55); ?>
                        </p>
                    </span>
                </div>
            </div>

        </div>
        <div class="semestres">
            <h2>Septimo semestre</h2>
        </div>
        <div class="row">

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=56">
                    <h4>Ingenieria de Software II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(56); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=58">
                    <h4>Programacion Web I</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(57); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=60">
                    <h4>Gestion Gubernamental</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(58); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=59">
                    <h4>Seguridad en redes</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(59); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=57">
                    <h4>Lenguaje de Programacion V</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(60); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=63">
                    <h4>Eventos y Deportes VII</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(61); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=61">
                    <h4>Metodologia de la Investigacion II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(62); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=62">
                    <h4>Idiomas II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(63); ?>
                        </p>
                    </span>
                </div>
            </div>

        </div>
        <div class="semestres">
            <h2>Octavo semestre</h2>
        </div>
        <div class="row">

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=69">
                    <h4>Tecnicas de Organizacion y Metodos</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(64); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card yellow">
                <a href="/PW/backend/mostrar.php?idmaterias=68">
                    <h4>Investigacion de Operaciones II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(65); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=71">
                    <h4>Eventos y Deportes VIII</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(66); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=66">
                    <h4>Programacion Web II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(67); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=67">
                    <h4>Sistemas Distribuidos</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(68); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=70">
                    <h4>Laboratorio de Idiomas II</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(69); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card red">
                <a href="/PW/backend/mostrar.php?idmaterias=65">
                    <h4>Modelado de Datos</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(70); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=64">
                    <h4>Ingenieria de Software III</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(71); ?>
                        </p>
                    </span>
                </div>
            </div>
        </div>
        <div class="semestres">
            <h2>Noveno semestre</h2>
        </div>
        <div class="row">
            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=77">
                    <h4>Gestion de Calidad y Productividad</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(72); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=76">
                    <h4>Inteligencia Artificial</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(73); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=75">
                    <h4>Ingenieria de Software IV</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(74); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=74">
                    <h4>Gestion de Centro de Computos</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(75); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=72">
                    <h4>Diseño de Algoritmos Paralelos</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(76); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=73">
                    <h4>Evaluacion de Rendimientos de Sistemas Informaticos</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(77); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=78">
                    <h4>Metodologia de la Investigacion III</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(78); ?>
                        </p>
                    </span>
                </div>
            </div>

        </div>

        <div class="semestres">
            <h2>Decimo semestre</h2>
        </div>
        <div class="row">

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=82">
                    <h4>Tecnologia en redes y Telecomunicaciones</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(79); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card green">
                <a href="/PW/backend/mostrar.php?idmaterias=84">
                    <h4>Contratos y Licitaciones</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(80); ?>
                        </p>
                    </span>
                </div>
            </div>


            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=79">
                    <h4>Gestion de Proyectos Informaticos</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(81); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=81">
                    <h4>Auditoria en Informatica</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(82); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=83">
                    <h4>Proyecto Final de Grado</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(83); ?>
                        </p>
                    </span>
                </div>
            </div>

            <div class="card blue">
                <a href="/PW/backend/mostrar.php?idmaterias=80">
                    <h4>Diseño de Compiladores</h4>
                </a>
                <div class="tooltip">
                    <span class="tooltiptext ">
                        <p>
                            <?php echo obtenerInformacionMateria(84); ?>
                        </p>
                    </span>
                </div>
            </div>
        </div>
        <div class="container-page">
            <div class="page foldtl">
                <h2>Trabajo Realizado Por:</h2>
                <p>Carlos Jein Coronel Rojas</p>
                <p>Fabrizio Benjamin Villar Ferreira</p>
                <p>Roberto Carlos Saucedo</p>
            </div>
        </div>
    </div>
   	 
</body>

</html>