CREATE TABLE `usuarios` (
    `id` int(100) NOT NULL AUTO_INCREMENT,
    `nombre` varchar(100) NOT NULL,
    `pass` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `numero` int(10) NOT NULL,
    primary key (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuarios` (`nombre`, `pass`, `email`, `numero`) VALUES
('Miguel Fuster', '123', 'miguel@email.com', 555111),
('Sofia Fuster', 'abc', 'sofia@email.com', 555222);