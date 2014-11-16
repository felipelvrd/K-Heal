DROP TRIGGER IF EXISTS votarTratamiento;
DELIMITER //
CREATE TRIGGER votarTratamiento
AFTER INSERT ON khlevaluacionestratamientos
FOR EACH ROW
BEGIN
SELECT t.IdUsuario into @idUsu
FROM khltratamientos t
WHERE t.Id = NEW.idTratamiento;

SELECT u.Nombre into @usuNom
FROM khlusuarios u
WHERE u.Id = NEW.IdUsuario;

INSERT INTO khlnotificaciones (Fecha, Estado, Descripcion, IdUsuario ) values (NOW(),'P', concat('El usuario ',@usuNom,' votó en un tratamiento que publicaste.'), @idUsu);
END
//
DELIMITER ;