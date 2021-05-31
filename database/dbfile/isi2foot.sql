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

INSERT INTO `pays` (`id`, `nom`, `logo`) VALUES
(1, 'France', 'france.png'),
(2, 'Espagne', 'espagne.jpg'),
(3, 'Angleterre', 'angleterre.jpg'),
(4, 'Allemagne', 'allemagne.jpg'),
(5, 'Italie', 'italie.png'),
(6, 'Europe', 'europe.jpg');

INSERT INTO `championnats` (`id`, `nom`, `annee_debut`, `annee_fin`, `logo`, `pays_id`) VALUES
(1, 'Ligue 1', 2020, 2021, 'ligue1.png', 1),
(2, 'Champions League', 2020, 2021, 'champions_league.png', 6),
(3, 'Europa League', 2020, 2021, 'europa_league.png', 6);

INSERT INTO `rencontres` (`id`, `score`, `equipe_id1`, `equipe_id2`, `date`, `heure`, `championnat_id`) VALUES
(1, '1-0', 3, 6, '2021-05-29', '21:00:00', 1),
(2, '2-1', 3, 4, '2021-05-28', '19:30:00', 1),
(3, '', 1, 5, '2021-06-09', '21:00:00', 3),
(4, '', 6, 2, '2021-06-11', '20:50:00', 2);
