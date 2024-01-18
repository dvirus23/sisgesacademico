CREATE TABLE roles(
                      id_rol              INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                      nombre_rol          VARCHAR (255) NOT NULL UNIQUE KEY,

                      fyh_creacion        DATETIME NULL,
                      fyh_actualizacion   DATETIME NULL,
                      estado              VARCHAR(11)

)ENGINE=InnoDB;

INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('ADMINISTRADOR','2024-10-03 11:20:22','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('DERECTOR ACADEMICO','2024-10-03 11:20:22','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('DIRECTOR ADMINISTRATIVO','2024-10-03 11:20:22','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('CONTADOR','2024-10-03 11:20:22','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('SECRETARIA','2024-10-03 11:20:22','1')

CREATE TABLE usuarios(

                         id_usuario          INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                         nombres             VARCHAR (255) NOT NULL,
                         rol_id              INT (11) NOT NULL,
                         email               VARCHAR (255) NOT NULL UNIQUE KEY,
                         password            TEXT NOT NULL,

                         fyh_creacion        DATETIME NULL,
                         fyh_actualizacion   DATETIME NULL,
                         estado              VARCHAR(11),

                         FOREIGN KEY (rol_id) REFERENCES roles (id_rol) on delete no action on update cascade

)ENGINE=InnoDB;
INSERT INTO usuarios (nombres,rol_id,email,password,fyh_creacion,estado)
VALUES ('Daniel Valdivia','1','admin@admin.com','$2y$10$wkA1j/oPiRJGs2WvH/dBO./rlei2uTFzkpH/c9yXQ/HPmTMVfQ6ci','2024-12-10 20:22:10','1');

