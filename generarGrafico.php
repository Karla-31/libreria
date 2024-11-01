<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos de la aplicación ( a través de variables POST)
    $data = array(
        "labels" => array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio"),
        "values" => array(10, 20, 30, 40, 50, 60)
    );

    // Generar el grafico utilizando  PHP
    $plot = new PHPlot(800, 600);
    $plot->SetDataValues($data["values"]);
    $plot->SetDataColors(array('red', 'green', 'blue'));
    $plot->SetXDataLabelPos('none');
    $plot->DrawGraph();

    // Enviar el grafico al navegador
    header("Content-type: image/png");
    $plot->PrintImage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario con Grafico</title>
</head>
<body>
    <h1>Crear un grafico</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="submit" name="submit" value="Generar Grafico">
    </form>
    <img id="graphImage" src="" alt="Grafico">

    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            event.preventDefault();
            document.getElementById("graphImage").src = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>";
        });
    </script>
</body>
</html>