DROP PROCEDURE IF EXISTS get_documentos_tipos;
DELIMITER $$
CREATE PROCEDURE get_documentos_tipos()
  BEGIN 
    SELECT *
    FROM documentos_tipos
    WHERE estado = '1'
    ORDER BY (nombre)
    ;
  END$$
DELIMITER ;
-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
