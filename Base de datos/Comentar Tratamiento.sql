DROP TRIGGER IF EXISTS comentarTratamiento;
DELIMITER //
CREATE TRIGGER comentarTratamiento
AFTER INSERT ON hklcomentarios
FOR EACH ROW
BEGIN
SELECT t.IdUsuario into @idUsu
FROM khltratamientos t
WHERE t.Id = NEW.IdTratamientos;

SELECT u.Nombre into @usuNom
FROM khlusuarios u
WHERE u.Id = NEW.IdUsuario;

INSERT INTO khlnotificaciones (Fecha, Estado, Descripcion, IdUsuario ) values (NOW(),'P', concat('El usuario ',@usuNom,' comentó en un tratamiento que publicaste.'), @idUsu);
END
//
DELIMITER ;