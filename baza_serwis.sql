-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Lut 2020, 22:50
-- Wersja serwera: 10.4.6-MariaDB
-- Wersja PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza_serwis`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `Categorie` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `connection_tc`
--

CREATE TABLE `connection_tc` (
  `categories_id` int(11) NOT NULL,
  `translation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `en_words`
--

CREATE TABLE `en_words` (
  `en_word_id` int(11) NOT NULL,
  `en_word` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `en_description` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pl_words`
--

CREATE TABLE `pl_words` (
  `pl_word_id` int(11) NOT NULL,
  `pl_word` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `pl_description` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `translation`
--

CREATE TABLE `translation` (
  `translation_id` int(11) NOT NULL,
  `en_word_id` int(11) NOT NULL,
  `pl_word_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `nick` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(72) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `FirstName` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `LastName` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `Country` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `Points` int(11) NOT NULL,
  `users_type` varchar(1) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`users_id`, `nick`, `password`, `email`, `FirstName`, `LastName`, `Country`, `Points`, `users_type`) VALUES
(1, 'Piotro123', '$2y$10$TirKCqV1ywBuD/PFbYnnL.UwBuEWuqMKtWHsInS2y8f1MKPMTarGm', 'lalala@gmail.com', 'Piotr', 'Augustyniak', 'Polska', 0, 'n'),
(2, 'test', '$2y$10$dI6J1WZOak2b00lgoirRI.kZj6c5ukNAioXYNrMdkUfcFbKyY.fsm', 'lalaal@gmail.com', 'Jedrzej', 'Pawlak', 'Szwecja', 0, 'n'),
(3, 'Karolcia123', '$2y$10$elaYTQvDGufgwYc8ZoaCaO6ipmKrbIlcFGz6CYCAwAiUDNjry9UZe', 'nalana@gmail.com', 'Karolina', 'Kowalska', 'Wielka Brytania', 0, 'n'),
(4, 'Janusz', '$2y$10$osI13IAhzHLJdEf7yrGnjOCrUfTz/NGSI6Y1nyEdsjkj./S20FOh6', 'fasod@gmail.com', 'Testowy', 'Tescik', 'Polska', 0, 'n'),
(7, 'tescior', '$2y$10$Mf.jocCrC.QhO/J.xNYlyut.ICfpuLzeDKcvSrY35F44iXFXbhKB.', 'chleb@chleb.com', 'JÄ™drzej', 'Augustyniak', 'Hiszpania', 0, 'n'),
(8, 'MazurChleb', '$2y$10$tIWQ73ZLkKZRr39T.PNAJut08GsSPJIwwk5nGG6DwHCpfegsKoknS', 'mazur@chleb.com', 'Mazur', 'Chleb', 'Polska', 0, 'n'),
(9, 'Januszex', '$2y$10$PNLP8bSBCAi/veo2Pr/V9O7nCEhs4cUwAfrPJ7Ua6AYY6/g5z3ZfK', 'januszex@wp.pl', 'Janusz123', 'Januszex', 'Wielka Brytania', 0, 'n'),
(10, 'Jaras123', '$2y$10$3KLHQtJ/Pl.YIFfOPun/UOjS3GtJgDQrjJj6quD0Q2H0eZErAkNxe', 'jaras123@gmail.com', 'Jarek', 'Szymkowiak', 'Polska', 0, 'n'),
(11, 'Eryk123', '$2y$10$AIuHfNXGzwSp.BT26RsKfOQnj3SHabHna6p8sywrnmFjHjH7ZENNm', 'eryk123@gmail.com', 'Eryk', 'SobczyÅ„ski', 'Francja', 0, 'n'),
(12, 'michas1235', '$2y$10$QjAjDhDFuDvPXt8kSIyP6uXtrcdpIMjitvOJJxCSw9aP/aW1ArlwG', 'michalwoj@gmail.com', 'MichaÅ‚', 'WÃ³jkiewicz', 'Polska', 0, 'n');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indeksy dla tabeli `connection_tc`
--
ALTER TABLE `connection_tc`
  ADD KEY `categories_id` (`categories_id`),
  ADD KEY `translation_id` (`translation_id`);

--
-- Indeksy dla tabeli `en_words`
--
ALTER TABLE `en_words`
  ADD PRIMARY KEY (`en_word_id`);

--
-- Indeksy dla tabeli `pl_words`
--
ALTER TABLE `pl_words`
  ADD PRIMARY KEY (`pl_word_id`);

--
-- Indeksy dla tabeli `translation`
--
ALTER TABLE `translation`
  ADD PRIMARY KEY (`translation_id`),
  ADD KEY `en_word_id` (`en_word_id`),
  ADD KEY `pl_word_id` (`pl_word_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `en_words`
--
ALTER TABLE `en_words`
  MODIFY `en_word_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `pl_words`
--
ALTER TABLE `pl_words`
  MODIFY `pl_word_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `translation`
--
ALTER TABLE `translation`
  MODIFY `translation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `connection_tc`
--
ALTER TABLE `connection_tc`
  ADD CONSTRAINT `connection_tc_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`categories_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `connection_tc_ibfk_2` FOREIGN KEY (`translation_id`) REFERENCES `translation` (`translation_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `translation`
--
ALTER TABLE `translation`
  ADD CONSTRAINT `translation_ibfk_1` FOREIGN KEY (`pl_word_id`) REFERENCES `pl_words` (`pl_word_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `translation_ibfk_2` FOREIGN KEY (`en_word_id`) REFERENCES `en_words` (`en_word_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
