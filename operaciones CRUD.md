# OPERACIONES CRUD EN MYSQL
 Las operaciones *CRUD* son un conjunto de 4 operaciones fundamentales en el manejo de bases de datos
 y aplicaciones web.CRUD es un acronimo que representa las siguientes operaciones
 - **C**REATE(Crear)
 - **R**EAD(Leer)
 - **U**PDATE(Actualizar)
 - **D**ELETE(Eliminar)

 **Primero creamos una tabla**
 ```sql
    CREATE TABLE Usuarios(
        idUsuario INT PRIMARY KEY AUTO_INCREMENT,
        email VARCHAR(100) UNIQUE NOT NULL CHECK (email LIKE "%_@_%._%"),
        password VARCHAR (15)NOT NULL CHECK (LENGTH (password)>=8)
    );
 ```

## CREATE 
La operación *crear* es responsable de insertar nuevos datos en la BD en lenguaje sql, en sql esto se realiza con la sentencia `INSERT INTO` y el caso de MYSQL `INSERT`. El proposito de la operación es añadir el nuevo registro a una tabla

 ```sql
    --Ejemplo de una inserción valida usando todos los campos 
    INSERT INTO Usuarios VALUES (1,"ejemplo@gmail.com,12345678");
    --Ejemplo de una inserción valida usando el comando DEFAULT
    INSERT INTO Usuarios VALUES (DEFAULT "ejemplo2@gmail.com,abcdefgh");
    --Ejemplo de una inserción sin incluir el idUsuario
    INSERT Usuarios(email,password)VALUES("email3@hotmail.com", "12345678");
 ```
 ### EJERCICIOS 
 - Identifica los tipos de errores que pueden salir en este tipo(minimo 4 errores)
 
 - Inserta 4 registros nuevos en un solo INSERT

## READ
La operación *Leer* es utlizad para consultar o recuperar datos de la base de datos. Esto no modifica los datos simplemente los extrae. En MySQL esta operación se realiza con la sentencia `SELECT` 

 ```sql
   --Ejemplo de una consulta para todos los datos de una tabla
   SELECT * FROM Usuarios;
   -- Ejemplo de consulta para un registro en especifico atraves del ID
   SELECT * FROM Usuarios WHERE idUsuario=1;
   -- Ejemplo de consulta para un registro con un email en especifico  
   SELECT * FROM Usuarios WHERE email="ejemplo@gmail.com"
    -- Ejemplo de consulta con solo los campos email y password
    SELECT email,password FROM Usuarios ;
   -- Ejemplo de consulta de un condicional Lógico
     SELECT * FROM Usuarios WHERE(password)>=9; 
 ```
 ### Ejercicios 
 Realiza una consulta que muestre solo el email pero que coinsida con una contraseña de más de ocho caracteres y otra que realice una consulta a los id pares

## UPDATE
La operación *actualizar* se utliza para modificar registros existentes en la BD. Esto se hace con la sentencia UPDATE 
```sql
    --Ejemplo para actualizar la contraseña por su id
    UPDATE Usuarios SET password ="a1b2c3d44e5" WHERE idUsuario=1;
    --Ejemplo para actualizar el email y password de un usuario en especifico
    UPDATE Usuarios SET password ="a1b2c3d44e5", email="lucionhdz3012@gmail.com" WHERE idUsuario=1; 
```
### Ejercicio 
Intenta actualizar registros con valores que violen las restricciones(minimo 3)

## DELETE 
La operación *Eliminar* se usa para borrar registros de la BD. Esto se realiza con la sentencia`DELETE`. **DEBEMOS SER MUY CUIDADOSOS CON ESTA OPERACIÓN, YA QUE UNA VEZ QUE LOS DATOS SON ELIMINADOS NO PUEDEN SER RECUPERADOS**

```sql
    --Eliminar el usuario po el id
    DELETE FROM Usuarios WHERE idUsuario=4;
    -- Eliminar los usuarios con el email especifico 
    DELETE FROM Usuarios WHERE email="lucionhdz3012@gmail.com";
```
## Ejercicios 
- Eliminar usuarios cuyo email contenga uno o más 5
- Eliminar Usuarios que tengan una contraseña que contenga letras mayusculas usandi expresiones regulares (REGEXP)
- Eliminar usuarios con contraseñas que contengan solo números(ExpRegular)
- Eliminar Usuarios con correos que no tengan el Dominio gmail
 