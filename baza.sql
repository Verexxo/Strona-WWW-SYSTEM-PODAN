

-- Zrzut struktury bazy danych panel
CREATE DATABASE IF NOT EXISTS `panel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `panel`;

-- Zrzut struktury tabela panel.administratorzy
CREATE TABLE IF NOT EXISTS `administratorzy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discord_id` varchar(255) NOT NULL,
  `kategoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483648 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Zrzucanie danych dla tabeli panel.administratorzy: ~22 rows (około)
INSERT INTO `administratorzy` (`id`, `discord_id`, `kategoria`) VALUES
	(1, '690566533755306035', 'EMS'),
	(2, '690566533755306035', 'FIRMA'),
	(3, '690566533755306035', 'LSC'),
	(4, '690566533755306035', 'LSPD'),
	(5, '690566533755306035', 'CRIME'),
	(6, '690566533755306035', 'T-SUPPORT'),
	(7, '527566487225892865', 'EMS'),
	(8, '527566487225892865', 'FIRMA'),
	(9, '527566487225892865', 'LSC'),
	(10, '527566487225892865', 'LSPD'),
	(11, '527566487225892865', 'CRIME'),
	(12, '527566487225892865', 'T-SUPPORT'),
	(13, '636284941365411842', 'EMS'),
	(14, '636284941365411842', 'FIRMA'),
	(15, '636284941365411842', 'LSC'),
	(16, '636284941365411842', 'LSPD'),
	(17, '636284941365411842', 'CRIME'),
	(18, '636284941365411842', 'T-SUPPORT'),
	(19, '961682517545607238', 'EMS'),
	(20, '432563367232667648', 'LSC'),
	(21, '595927133944283167', 'LSC'),
	(22, '1023722350698578000', 'CRIME'),
	(23, '595927133944283167', 'CRIME'),
	(24, '605896092441378827', 'LSPD'),
	(25, '498516762330136587', 'DOJ'),
	(26, '1115970869769011251', 'SHERIF');

-- Zrzut struktury tabela panel.doj_odpowiedzi
CREATE TABLE IF NOT EXISTS `doj_odpowiedzi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discord_id` varchar(255) NOT NULL,
  `kategoria` longtext DEFAULT NULL,
  `nickdoj` longtext DEFAULT NULL,
  `wiekdoj` longtext DEFAULT NULL,
  `nazwdoj` longtext DEFAULT NULL,
  `wiekicdoj` longtext DEFAULT NULL,
  `telefondoj` longtext DEFAULT NULL,
  `jazdydoj` longtext DEFAULT NULL,
  `karanydoj` longtext DEFAULT NULL,
  `opisdoj` longtext DEFAULT NULL,
  `czmdoj` longtext DEFAULT NULL,
  `dosdoj` longtext DEFAULT NULL,
  `data_wprowadzenia` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Zrzucanie danych dla tabeli panel.doj_odpowiedzi: ~0 rows (około)

-- Zrzut struktury tabela panel.ems_odpowiedzi
CREATE TABLE IF NOT EXISTS `ems_odpowiedzi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discord_id` varchar(255) DEFAULT NULL,
  `kategoria` longtext DEFAULT NULL,
  `imie_ems` longtext DEFAULT NULL,
  `mutacja_ems` longtext DEFAULT NULL,
  `wiek_ems` longtext DEFAULT NULL,
  `umiejmed_ems` longtext DEFAULT NULL,
  `doswiadczenie_ems` longtext DEFAULT NULL,
  `czemuty_ems` longtext DEFAULT NULL,
  `imieic_ems` longtext DEFAULT NULL,
  `wiekic_ems` longtext DEFAULT NULL,
  `karany_ems` longtext DEFAULT NULL,
  `prawojazdy_ems` longtext DEFAULT NULL,
  `historia_ems` longtext DEFAULT NULL,
  `odegraj_ems` longtext DEFAULT NULL,
  `data_wprowadzenia` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5579 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Zrzucanie danych dla tabeli panel.ems_odpowiedzi: ~0 rows (około)

-- Zrzut struktury tabela panel.firma_odpowiedzi
CREATE TABLE IF NOT EXISTS `firma_odpowiedzi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discord_id` longtext DEFAULT NULL,
  `kategoria` longtext DEFAULT NULL,
  `typ_firma` longtext DEFAULT NULL,
  `nazwa_firma` longtext DEFAULT NULL,
  `owner_firma` longtext DEFAULT NULL,
  `prac_firma` longtext DEFAULT NULL,
  `czym_firma` longtext DEFAULT NULL,
  `vel_firma` longtext DEFAULT NULL,
  `kasa_firma` longtext DEFAULT NULL,
  `historia_firma` longtext DEFAULT NULL,
  `baza_firma` longtext DEFAULT NULL,
  `dev_firma` longtext DEFAULT NULL,
  `data_wprowadzenia` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Zrzut struktury tabela panel.lsc_odpowiedzi
CREATE TABLE IF NOT EXISTS `lsc_odpowiedzi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discord_id` varchar(255) NOT NULL,
  `kategoria` longtext DEFAULT NULL,
  `imie_lsc` longtext DEFAULT NULL,
  `mutacja_lsc` longtext DEFAULT NULL,
  `wiek_lsc` longtext DEFAULT NULL,
  `imieic_lsc` longtext DEFAULT NULL,
  `wiekic_lsc` longtext DEFAULT NULL,
  `karanyic_lsc` longtext DEFAULT NULL,
  `prawojazdy_lsc` longtext DEFAULT NULL,
  `doswiadczenie_lsc` longtext DEFAULT NULL,
  `historia_postaci_lsc` longtext DEFAULT NULL,
  `dlaczego_wybrac_lsc` longtext DEFAULT NULL,
  `list_motywacyjny_lsc` longtext DEFAULT NULL,
  `data_wprowadzenia` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Zrzucanie danych dla tabeli panel.lsc_odpowiedzi: ~0 rows (około)

-- Zrzut struktury tabela panel.lspd_odpowiedzi
CREATE TABLE IF NOT EXISTS `lspd_odpowiedzi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discord_id` longtext DEFAULT NULL,
  `kategoria` longtext DEFAULT NULL,
  `imie_lspd` longtext DEFAULT NULL,
  `mutacja_lspd` longtext DEFAULT NULL,
  `wiek_lspd` longtext DEFAULT NULL,
  `umiejepd_lspd` longtext DEFAULT NULL,
  `dos_lspd` longtext DEFAULT NULL,
  `czemuty_lspd` longtext DEFAULT NULL,
  `daneic_lspd` longtext DEFAULT NULL,
  `wiekic_lspd` longtext DEFAULT NULL,
  `prawkoic_lspd` longtext DEFAULT NULL,
  `listmot_lspd` longtext DEFAULT NULL,
  `data_wprowadzenia` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Zrzucanie danych dla tabeli panel.lspd_odpowiedzi: ~0 rows (około)

-- Zrzut struktury tabela panel.org_odpowiedzi
CREATE TABLE IF NOT EXISTS `org_odpowiedzi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discord_id` varchar(255) DEFAULT NULL,
  `kategoria` longtext DEFAULT NULL,
  `nazwa_org` longtext DEFAULT NULL,
  `wiek_owner_org` longtext DEFAULT NULL,
  `mutacja_org` longtext DEFAULT NULL,
  `rodzaj_org` longtext DEFAULT NULL,
  `ilosc_czl_org` longtext DEFAULT NULL,
  `ubrania_org` longtext DEFAULT NULL,
  `hisotria_org` longtext DEFAULT NULL,
  `zajecie_org` longtext DEFAULT NULL,
  `czemuwy_org` longtext DEFAULT NULL,
  `czego_org` longtext DEFAULT NULL,
  `opiekun_org` longtext DEFAULT NULL,
  `olowek_org` longtext DEFAULT NULL,
  `data_wprowadzenia` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Zrzucanie danych dla tabeli panel.org_odpowiedzi: ~0 rows (około)

-- Zrzut struktury tabela panel.sherif_odpowiedzi
CREATE TABLE IF NOT EXISTS `sherif_odpowiedzi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discord_id` varchar(255) NOT NULL,
  `kategoria` longtext DEFAULT NULL,
  `wieksh` longtext DEFAULT NULL,
  `regsh` longtext DEFAULT NULL,
  `dossh` longtext DEFAULT NULL,
  `grsh` longtext DEFAULT NULL,
  `dosnsh` longtext DEFAULT NULL,
  `wiekicsh` longtext DEFAULT NULL,
  `czmsh` longtext DEFAULT NULL,
  `wysh` longtext DEFAULT NULL,
  `listsh` longtext DEFAULT NULL,
  `data_wprowadzenia` timestamp NOT NULL DEFAULT current_timestamp(),
  `imieicsh` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Zrzucanie danych dla tabeli panel.sherif_odpowiedzi: ~1 rows (około)

-- Zrzut struktury tabela panel.tsupport_odpowiedzi
CREATE TABLE IF NOT EXISTS `tsupport_odpowiedzi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discord_id` varchar(255) CHARACTER SET cp1250 COLLATE cp1250_polish_ci NOT NULL,
  `kategoria` varchar(50) NOT NULL,
  `steam_nick` varchar(100) NOT NULL,
  `imie` varchar(100) NOT NULL,
  `mutacja` longtext NOT NULL,
  `staz` longtext NOT NULL,
  `czas` longtext CHARACTER SET cp1250 COLLATE cp1250_polish_ci DEFAULT NULL,
  `admin` longtext DEFAULT NULL,
  `dos` longtext DEFAULT NULL,
  `reg` longtext DEFAULT NULL,
  `opis` longtext DEFAULT NULL,
  `gracz1` longtext DEFAULT NULL,
  `gracz2` longtext DEFAULT NULL,
  `wiek` longtext DEFAULT NULL,
  `data_wprowadzenia` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Zrzucanie danych dla tabeli panel.tsupport_odpowiedzi: ~0 rows (około)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
