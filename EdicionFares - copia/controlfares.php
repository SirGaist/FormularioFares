<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventario Fares</title>
  <link rel="short cut icon" href="Multimedia/svp.png" />
  <link rel="stylesheet" type="text/css" href="dcolores.css">
  <link rel="stylesheet" type="text/css" href="diseñocssf.css">
  
</head>
<header id="titulo1">
  <h1>Ediciones FARES</h1>
</header class="fcolor-d5">
<nav class="fcolor-l4">
  <ul>
    <li><a href="#">Principal</a></li>
    <li><a href="#">Libros</a></li>
    <li class="f-desplegable">
      <a href="#" class="btndesplegable">Inventario</a>
    <div class="cont-desplegable" class="s-encabezado">
      <a href="cproductos.php">Crear Producto</a>
      <a href="#">Consultar Producto</a>
      </div>
      </li>
    <li><a href="#">Contacto</a></li>
  </ul>
</nav>

<body>
  <section class="fcolor-l1" class="seccion-form">
    <div>
      <h2>Inventario</h2>
    </div>
    <form class="fcolor-l5" action="Guardar.php" method="post" autocomplete="off">

      <div id="codnom">
        <label class="codnom1">Código: 
        <input class="campof" type="text" name="codigo" id="codigo" pattern="^[0-]+{3,}"
            placeholder="Ingresar solo números" size="12" autofocus required></label>

        <label class="codnom1">Producto: 
        <input class="campof" type="text" name="nproducto" id="nproducto" pattern="^[a-zA-Z\s]+{3,100}"
            placeholder="Ingresar solo tareas" size="45" </label>
      </div>

      <div id="cospor">
        <label class="codnom1">Costo: 
          <input class="campof" type:"text" name:"costop" id:"costop" pattern:"[0-9]+([,\.][0-9]+?)"></label>
        <label class="codnom1">Porcentaje de venta: 
          <input class="campof" type:"text" name="porcentajev" id:"porcentajev" maxlenght="3"
            size="4"></label>
      </div>

      <div id="prefecha">
        <label class="codnom1">Precio de venta: 
          <input class="campof" type="text" name:"pventa" id:"pventa" readonly></label>
        <label class="codnom1">Fecha: 
          <input class="campof" type="date" name:"fechacreacion" id:"fechacreacion"></label>
      </div>

      <div id="csimagen">
        <img src="" width:"200px" alt="Imagen del producto">
      </div>
      
      <div id="botonimg">
        <input class="campof" type="file" name:"simagen" id:"simagen">
      </div>

      <input type="submit" value:"Guardar">
    </form>
  </section>
  <footer class="fcolor-d5">
    <p>
      Derechos de autor reservados &copy; 2004-2023
    </p>
  </footer>
</body>

</html>