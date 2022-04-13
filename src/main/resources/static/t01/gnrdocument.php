<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">
<head>  
<meta charset="utf-8">
<title>Prueba rapida como generar un documento e imprimir</title>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 14">
<meta name=Originator content="Microsoft Word 14">
<link rel=File-List href="APROBACIÓN_archivos/filelist.xml">

<link rel=themeData href="APROBACIÓN_archivos/themedata.thmx">
<link rel=colorSchemeMapping href="APROBACIÓN_archivos/colorschememapping.xml">

<style>
<!--
 /* Font Definitions */
 @font-face
  {font-family:Calibri;
  panose-1:2 15 5 2 2 2 4 3 2 4;
  mso-font-charset:0;
  mso-generic-font-family:swiss;
  mso-font-pitch:variable;
  mso-font-signature:-536870145 1073786111 1 0 415 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
  {mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-parent:"";
  margin-top:0cm;
  margin-right:0cm;
  margin-bottom:10.0pt;
  margin-left:0cm;
  line-height:115%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Calibri","sans-serif";
  mso-ascii-font-family:Calibri;
  mso-ascii-theme-font:minor-latin;
  mso-fareast-font-family:Calibri;
  mso-fareast-theme-font:minor-latin;
  mso-hansi-font-family:Calibri;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;
  mso-fareast-language:EN-US;}
.MsoChpDefault
  {mso-style-type:export-only;
  mso-default-props:yes;
  font-family:"Calibri","sans-serif";
  mso-ascii-font-family:Calibri;
  mso-ascii-theme-font:minor-latin;
  mso-fareast-font-family:Calibri;
  mso-fareast-theme-font:minor-latin;
  mso-hansi-font-family:Calibri;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;
  mso-fareast-language:EN-US;}
.MsoPapDefault
  {mso-style-type:export-only;
  margin-bottom:10.0pt;
  line-height:115%;}
@page WordSection1
  {size:595.3pt 841.9pt;
  margin:70.85pt 3.0cm 70.85pt 3.0cm;
  mso-header-margin:35.4pt;
  mso-footer-margin:35.4pt;
  mso-paper-source:0;}
div.WordSection1
  {page:WordSection1;}
-->
</style>


<style type="text/css">
    body {
        height: 842px;
        width: 595px;
        /* to centre page on screen*/
        margin-left: auto;
        margin-right: auto;
    }
  .center {
  display: block;
  text-align: center;
  margin: 20px auto;
}
</style>
</head>
 

<?php
if( isset($_POST['generar_contenido']) ){ //Si se pulso el boton 'generar_contenido' ..
if(empty($_POST['numero_factura']) ){ // Si esta vacio el campo 'numero_factura' entonces damos un mensaje de error.
echo "Por favor escriba el numero de factura";
}else{
?>

<body>



<center>
<b>Numero de factura:</b> <?php echo htmlentities($_POST['numero_factura']); //Imprimimos el numero de factura generada en el form. ?>
 
<br>
<input type='button' onclick='window.print();' value='Imprimir' />
</center>




<?php
}
}else{
?>
<center>
<form method="post" action="">
<p>Aqui el contenido</p>
<p>Factura numero: <input type="text" name="numero_factura" placeholder="Escribe el numero de factura aqui" /></p>
<br>
<br>
Hacer click para imprimir el contenido del formulario..
<input type="submit" name="generar_contenido" value=" Generar consulta " />
</form>
</center>
<?php
} //Fin del codigo
/*
by http://www.guidobatanmaquinarias.com
*/
?>
</body>
</html>