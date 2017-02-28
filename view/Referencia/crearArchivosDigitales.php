<h1 class="title"><a href="#">Crear un Archivo Digital</a></h1>
<form action="?controller=Referencia&action=crearArchivosDigitales" method="POST">
    <table style="margin-left: 20px;">
        <tr>
            <td>Seleccione una biblioteca</td>
            <td>
                <select name="nombre_biblioteca">
                    <?php
                    foreach ($result['bibliotecas'] as $value) {
                        echo "<option>" . $value['nombre_biblioteca'] . "</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
         <?php
        if ($result['campos']['autores'] == "t") {
            echo "<tr>";
            echo "<td>Autores</td>";
            echo '<td><textarea name="autores" rows="4" cols="20"></textarea></td>';
            echo "</tr>";
        }
        if ($result['campos']['titulo'] == "t") {
            echo "<tr>";
            echo "<td>T&iacute;tulo</td>";
            echo '<td><input type="text" name="titulo" value="" /></td>';
            echo "</tr>";
        }
       
        if ($result['campos']['cant_paginas'] == "t") {
            echo "<tr>";
            echo "<td>Cantidad de p&aacute;ginas</td>";
            echo '<td><input type="text" name="cant_paginas" value="" /></td>';
            echo "</tr>";
        }
       
        if ($result['campos']['palabras_clave'] == "t") {
            echo "<tr>";
            echo "<td>Palabras clave</td>";
            echo '<td><textarea name="palabras_clave" rows="4" cols="20"></textarea></td>';
            echo "</tr>";
        }
       
        if ($result['campos']['direccion_online'] == "t") {
            echo "<tr>";
            echo "<td>Direcci&oacute;n de acceso en l&iacute;nea</td>";
            echo '<td><input type="text" name="direccion_online" value="" /></td>';
            echo "</tr>";
        }
    
        if ($result['campos']['colaboradores'] == "t") {
            echo "<tr>";
            echo "<td>Colaboradores</td>";
            echo '<td><textarea name="colaboradores" rows="4" cols="20"></textarea></td>';
            echo "</tr>";
        }
        if ($result['campos']['fecha_consulta'] == "t") {
            echo "<tr>";
            echo "<td>Fecha de consulta</td>";
            echo '<td><input type="text" name="fecha_consulta" value="" /></td>';
            echo "</tr>";
        }
        ?>
        <tr>
            <td><input type="submit" value="Crear" name="create" /></td>
        </tr>
    </table>
</form>