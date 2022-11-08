DROP DATABASE IF EXISTS sistema_transportacion;

CREATE DATABASE sistema_transportacion;

USE sistema_transportacion;

CREATE TABLE `mercancias` (
`id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
`cantidad` int,
`descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
`precio` double,
`tipo_mercancia_id` int
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

CREATE TABLE `clientes` (
`id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
`nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
`apellido_paterno` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
`apellido_materno` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
`edad` int,
`direccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
`telefono` varchar(20)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

CREATE TABLE `pedidos` (
`id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
`cliente_id` int,
`mercancia_id` int,
`origen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
`destino` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
`despachado_flag` boolean,
`entregado_flag` boolean
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

CREATE TABLE `tiposMercancias` (
`id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
`descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

ALTER TABLE `mercancias` ADD FOREIGN KEY (`tipo_mercancia_id`) REFERENCES `tiposMercancias` (`id`);

ALTER TABLE `pedidos` ADD FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);

ALTER TABLE `pedidos` ADD FOREIGN KEY (`mercancia_id`) REFERENCES `mercancias` (`id`);



INSERT INTO `tiposmercancias` (`id`, `descripcion`) VALUES
(1, 'Materia prima'),
(2, 'Semiproductos'),
(3, 'Productos en bruto'),
(4, 'Productos elaborados'),
(5, 'Fragiles'),
(6, 'Peligrosas');

INSERT INTO `mercancias` (`id`, `cantidad`, `descripcion`, `precio`, `tipo_mercancia_id`) VALUES
(1, 100, 'Cemento', 239, 4);

INSERT INTO `clientes` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`, `direccion`, `telefono`) VALUES
(1, 'Guadalupe', 'Franco', 'Ramírez', 20, 'Tecnológico de Celaya #69, El Marqués, Qro', '4423510534');

INSERT INTO `pedidos` (`id`, `cliente_id`, `mercancia_id`, `origen`, `destino`, `despachado_flag`, `entregado_flag`) VALUES
(1, 1, 1, 'Querétaro', 'CDMX', false, false), (2, 1, 1, 'Monterrey', 'Colima', true, false), (3, 1, 1, 'San Luis Potosí', 'Yucatán', true, true);