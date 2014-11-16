DROP TRIGGER IF EXISTS VotarComentario;
DELIMITER //
CREATE TRIGGER VotarComentario
AFTER INSERT ON khlevaluacionescomentarios
FOR EACH ROW
BEGIN
SELECT c.IdUsuario into @idUsu
FROM hklcomentarios c
WHERE c.Id = NEW.IdComentario;

SELECT u.Nombre into @usuNom
FROM khlusuarios u
WHERE u.Id = NEW.IdUsuario;

INSERT INTO khlnotificaciones (Fecha, Estado, Descripcion, IdUsuario ) values (NOW(),'P', concat('El usuario ',@usuNom,' votó en un comentario que realizaste.'), @idUsu);
END
//
DELIMITER ;