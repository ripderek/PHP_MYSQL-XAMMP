use Persona;

/*Crear una tabla Personas donde el id es un identity*/
CREATE TABLE Personas (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombres VARCHAR(100) NOT NULL,
    Apellidos VARCHAR(100) NOT NULL,
    Correo VARCHAR(100) NOT NULL,
    FechaNacimiento DATE NOT NULL
);
/*drop table Personas;*/

insert into Personas(Nombres,Apellidos,Correo, FechaNacimiento)
values('Raul','Coello','raul@gmail.com','2024-05-23');

select * from Personas;

select * from Personas where ID=4;