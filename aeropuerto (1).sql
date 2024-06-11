-- Crear la base de datos
CREATE DATABASE aeropuerto;

-- Usar la base de datos creada
USE aeropuerto;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    usuario VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    cargo VARCHAR(255) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    contraseña VARCHAR(255) NOT NULL
);


-- Crear la tabla Vuelos
CREATE TABLE Vuelos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Operador VARCHAR(255) NOT NULL,
    SubOP VARCHAR(255) NOT NULL,
    Matricula VARCHAR(255) NOT NULL,
    Empresa VARCHAR(255) NOT NULL,
    Precio DECIMAL(10, 2) NOT NULL,
    Origen VARCHAR(255) NOT NULL,
    Destino VARCHAR(255) NOT NULL,
    FechaSalida DATE NOT NULL,
    FechaLlegada DATE NOT NULL,
    Hora TIME NOT NULL,
    Horario VARCHAR(255) NOT NULL,
    TipoVuelo VARCHAR(255) NOT NULL,
    ModoVuelo VARCHAR(255) NOT NULL
);

-- Crear la tabla vuelos_solicitados
CREATE TABLE vuelos_solicitados(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    origen VARCHAR(250) NOT NULL,
    destino VARCHAR(250) NOT NULL,
    fecha_salida VARCHAR(50) NOT NULL,
    fecha_llegada VARCHAR(50) NOT NULL,
    tipo_viaje VARCHAR(10) NOT NULL
);

------------------------------------------ Son ejemplos

INSERT INTO usuarios (nombre, apellidos, usuario, email, cargo, genero, contraseña) VALUES 
('Juan', 'Pérez', 'juanp', 'juan.perez@example.com', 'Administrador', 'Masculino', 'contraseña123'),
('María', 'Gómez', 'mariag', 'maria.gomez@example.com', 'Gerente', 'Femenino', 'contraseña123'),
('Carlos', 'López', 'carlosl', 'carlos.lopez@example.com', 'Empleado', 'Masculino', 'contraseña123');

INSERT INTO Vuelos (Operador, SubOP, Matricula, Empresa, Precio, Origen, Destino, FechaSalida, FechaLlegada, Hora, Horario, TipoVuelo, ModoVuelo) VALUES
('Operador1', 'SubOP1', 'MAT123', 'Empresa1', 150.00, 'Lima (LIM)', 'Arequipa (AQP)', '2024-06-15', '2024-06-15', '08:00:00', 'Diurno', 'Comercial', 'Directo'),
('Operador2', 'SubOP2', 'MAT124', 'Empresa2', 200.00, 'Arequipa (AQP)', 'Lima (LIM)', '2024-06-16', '2024-06-16', '09:00:00', 'Diurno', 'Comercial', 'Directo'),
('Operador3', 'SubOP3', 'MAT125', 'Empresa3', 250.00, 'Lima (LIM)', 'Chiclayo (CIX)', '2024-06-17', '2024-06-17', '10:00:00', 'Diurno', 'Comercial', 'Directo'),
('Operador4', 'SubOP4', 'MAT126', 'Empresa4', 180.00, 'Chiclayo (CIX)', 'Lima (LIM)', '2024-06-18', '2024-06-18', '11:00:00', 'Diurno', 'Comercial', 'Directo'),
('Operador5', 'SubOP5', 'MAT127', 'Empresa5', 220.00, 'Lima (LIM)', 'Trujillo (TRU)', '2024-06-19', '2024-06-19', '12:00:00', 'Diurno', 'Comercial', 'Directo'),
('Operador6', 'SubOP6', 'MAT128', 'Empresa6', 170.00, 'Trujillo (TRU)', 'Lima (LIM)', '2024-06-20', '2024-06-20', '13:00:00', 'Diurno', 'Comercial', 'Directo'),
('Operador7', 'SubOP7', 'MAT129', 'Empresa7', 160.00, 'Lima (LIM)', 'Piura (PIU)', '2024-06-21', '2024-06-21', '14:00:00', 'Diurno', 'Comercial', 'Directo'),
('Operador8', 'SubOP8', 'MAT130', 'Empresa8', 210.00, 'Piura (PIU)', 'Lima (LIM)', '2024-06-22', '2024-06-22', '15:00:00', 'Diurno', 'Comercial', 'Directo'),
('Operador9', 'SubOP9', 'MAT131', 'Empresa9', 190.00, 'Lima (LIM)', 'Juliaca (JUL)', '2024-06-23', '2024-06-23', '16:00:00', 'Diurno', 'Comercial', 'Directo'),
('Operador10', 'SubOP10', 'MAT132', 'Empresa10', 140.00, 'Juliaca (JUL)', 'Lima (LIM)', '2024-06-24', '2024-06-24', '17:00:00', 'Diurno', 'Comercial', 'Directo');

INSERT INTO vuelos_solicitados (origen, destino, fecha_salida, fecha_llegada, tipo_viaje) VALUES
('Lima (LIM)', 'Arequipa (AQP)', '2024-06-25', '2024-06-25', 'Ida'),
('Arequipa (AQP)', 'Lima (LIM)', '2024-06-26', '2024-06-26', 'Ida'),
('Lima (LIM)', 'Trujillo (TRU)', '2024-06-27', '2024-06-27', 'Ida');