<?php
include 'Conexion.php';

function obtenerInformacionMateria($id) {
  $pdo = conectar();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  try {
    $stmt = $pdo->prepare("SELECT * FROM infomaterias WHERE idInfo = :id");
    $stmt->execute(['id' => $id]);
    $materia = $stmt->fetch();
    $html = '<p>';
    $html .= '<h6>' . $materia['Nombre'] . '</h6> ';
    $html .= '<h4>Carga horaria:'. $materia['horas'] . ' </h4>';
    $html .= '<h4>Año: '. $materia['año'] . ' </h4>';
    $html .= '<h4>Semestre: ' . $materia['semestre'] . '</h4>';
    $html .= '<h4>Docente: ' . $materia['docente'].'</h4>';
    $html .= '</p>';
    return $html;
  } catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
  }

  
}
?>