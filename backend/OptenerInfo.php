<?php
include 'Conexion.php';

function obtenerInformacionMateria($id) {
  $pdo = conectar();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Ejecutar la consulta para obtener los datos de la materia
  $stmt = $pdo->prepare("SELECT * FROM infomaterias WHERE idInfo = :id");
  $stmt->execute(['id' => $id]);

  $materia = $stmt->fetch();

  // Crear el HTML de la información de la materia
  $html = '<p>';
  $html .= '<h6>' . $materia['Nombre'] . '</h6> ';
  $html .= '<h4>Carga horaria:'. $materia['horas'] . ' </h4>';
  $html .= '<h4>Año: '. $materia['año'] . ' </h4>';
  $html .= '<h4>Semestre: ' . $materia['semestre'] . '</h4>';
  $html .= '<h4>Docente: ' . $materia['docente'].'</h4>';
  $html .= '</p>';

  return $html;
}

function obtenerInformacionCategoria($id) {
  $pdo = conectar();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Ejecutar la consulta para obtener los datos de la materia
  $stmt = $pdo->prepare("SELECT IM.idcategoria, C.nombre, SUM(IM.horas) AS total_horas, COUNT(IM.idcategoria) AS cantidad FROM InfoMaterias IM JOIN InfoCategorias C ON IM.idcategoria = C.idcategoria WHERE IM.idcategoria = :id GROUP BY IM.idcategoria, C.nombre");
  $stmt->execute(['id' => $id]);

  $materia = $stmt->fetch();

  // Crear el HTML de la información de la materia
  $html = '<p>';
  $html .= '<h4>' . $materia['nombre'] . '</h4> ';
  $html .= '<h4>Carga horaria total:'. $materia['total_horas'] . ' </h4>';
  $html .= '<h4>Total de materias: ' . $materia['cantidad'] . '</h4>';
  $html .= '</p>';

  return $html;
}
?>
