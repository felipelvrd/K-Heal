<body>
<div class='dvComentario'>
<p><textarea id='taComentario' class='taComentario'></textarea></p>
<p><input id='btnEnviarComentario' type="button" value="Envíar comentario" onClick="comentar(<?php echo $_GET['id_trat'];?>);"></p>
<div id='dvMensajeComentario'></div>
</div>
</body>
</html>