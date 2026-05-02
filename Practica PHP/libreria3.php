<html>
<head>
    <title>Ejemplo de PHP</title>
</head>
<body>
<?php include("libpagina.phtml") ?>
<?php CabeceraPagina() ; ?>
 <TABLE>
 <TR>
    <TD> <?php Indice() ?></TD>
    <TD>
        Esta es otra página<BR><BR>
        completamente distinta<BR><BR>
        pero comparte el pie y la cabecera con la otra.<BR><BR>
    </TD>
 </TR>
 </TABLE>
<?php PiePagina() ; ?>
</body>
</html>