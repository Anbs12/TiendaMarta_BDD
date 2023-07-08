create database tiendamm;

use tiendamm;

-- Tabla Perfil
CREATE TABLE Perfil (
  Codigo INT PRIMARY KEY,
  Descripcion VARCHAR(255)
);
-- Ver contenido de Perfil
select * from Perfil;

-- Tabla Usuario
CREATE TABLE Usuario (
  ID INT PRIMARY KEY,
  Nombre VARCHAR(255),
  Apellido VARCHAR(255),
  Email VARCHAR(255),
  Password VARCHAR(255),
  PerfilID INT,
  FOREIGN KEY (PerfilID) REFERENCES Perfil(Codigo)
);

-- Ver contenido de Usuario
select * from Usuario;

-- Tabla Producto
CREATE TABLE Producto (
  ID INT PRIMARY KEY auto_increment,
  Nombre VARCHAR(255),
  Descripcion VARCHAR(255),
  Precio DECIMAL(10, 2),
  Stock INT
);

-- ver contenido de la tabla
select * from Producto;

-- Para borrar las tablas
drop table Perfil;
drop table Usuario;
drop table Producto;


-- Insertando valores a los perfiles
INSERT INTO Perfil (Codigo, Descripcion)
VALUES (1, 'Admin');
INSERT INTO Perfil (Codigo, Descripcion)
VALUES (2, 'Vendedor');


-- valores a usuarios
insert into Usuario (ID, Nombre, Apellido, Email, Password, PerfilID)
values(1, 'Antonella', 'Nattino', 'antonella@santotomas.com', 1234567, 1);

insert into Usuario (ID, Nombre, Apellido, Email, Password, PerfilID)
values(2, 'Anubis', 'Montero', 'anubis@santotomas.com', 1234567, 2);

insert into Usuario (ID, Nombre, Apellido, Email, Password, PerfilID)
values(3, 'Ajota', 'Perez', 'ajota@santotomas.com', 123, 1);

-- Experimentando
select * from Usuario where PerfilID = 1;

delete from Usuario where ID = 3;





