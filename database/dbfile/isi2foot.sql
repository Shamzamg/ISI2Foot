create database if not exists isi2foot;

use isi2foot;

INSERT INTO `equipes` (`id`, `nom_equipe`, `logo_equipe`) VALUES
(1, 'Real Madrid','realmadrid.png'),
(2, 'Liverpool FC','liverpool.png'),
(3, 'Olympique Lyonnais','OL.png'),
(4, 'Paris Saint-Germain FC','PSG.png'),
(5, 'Atlético de Madrid','atletico.png'),
(6, 'Olympique de Marseille','OM.png');

INSERT INTO `joueurs` (`id`, `equipe_id`, `nom`,`prenom`, `age`, `numero`, `photo`) VALUES
(1, 1, 'Benzema', 'Karim', '33', '9', 'benzema.png'),
(2, 2, 'Salah', 'Mohamed', '28', '11', 'salah.png'),
(3, 3, 'Cherki', 'Rayan', '16', '18', 'cherki.png'),
(4, 4, 'Mbappe', 'Killian', '22', '7', 'mbappe.png'),
(5, 5, 'Suárez', 'Luis', '34', '9', 'suarez.png'),
(6, 6, 'Thauvin', 'Florian', '28', '26', 'thauvin.png'),
(7, 3, 'Slimani', 'Islam', '32', '20', 'slimani.png');
