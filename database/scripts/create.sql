DROP DATABASE IF EXISTS sistema_transportacion;

CREATE DATABASE sistema_transportacion;

USE sistema_transportacion;

CREATE TABLE `mercancias` (
`id` int PRIMARY KEY AUTO_INCREMENT,
`cantidad` int,
`descripcion` varchar(255),
`precio` double,
`tipo_mercancia_id` int
);

CREATE TABLE `clientes` (
`id` int PRIMARY KEY AUTO_INCREMENT,
`nombre` varchar(255),
`apellido_paterno` varchar(255),
`apellido_materno` varchar(255),
`edad` int,
`direccion` varchar(255),
`telefono` int
);

CREATE TABLE `pedidos` (
`id` int PRIMARY KEY AUTO_INCREMENT,
`mercancia_id` int,
`cliente_id` int,
`estatus_id` int,
`origen` varchar(255),
`destino` varchar(255)
);

CREATE TABLE `estatusMercancias` (
`id` int PRIMARY KEY AUTO_INCREMENT,
`descripcion` varchar(255)
);

CREATE TABLE `tiposMercancias` (
`id` int PRIMARY KEY AUTO_INCREMENT,
`descripcion` varchar(255)
);

ALTER TABLE `mercancias` ADD FOREIGN KEY (`tipo_mercancia_id`) REFERENCES `tiposMercancias` (`id`);

ALTER TABLE `pedidos` ADD FOREIGN KEY (`mercancia_id`) REFERENCES `mercancias` (`id`);

ALTER TABLE `pedidos` ADD FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);

ALTER TABLE `pedidos` ADD FOREIGN KEY (`estatus_id`) REFERENCES `estatusMercancias` (`id`);

INSERT INTO tiposMercancias(descripcion) VALUES ("Materia prima"), ("Semiproductos"), ("Productos en bruto"),
    ("Productos elaborados"), ("Fragiles"), ("Peligrosas");

INSERT INTO mercancias(cantidad, descripcion, precio, tipo_mercancia_id) VALUES (100, "Cemento", 239, 4);
