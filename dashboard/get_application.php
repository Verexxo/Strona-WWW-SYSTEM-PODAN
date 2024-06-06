<?php
require_once('db_connect.php');

if(isset($_GET['discord_id']) && isset($_GET['id']) && isset($_GET['category']) && isset($_GET['table'])) {




    $kategoria = $_GET['category'];


        if ($kategoria == "T-SUPPORT") {

            $discord_id = $_GET['discord_id'];
            $application_id = $_GET['id'];
            $category = $_GET['category'];
            $table = $_GET['table'];

            $query = "SELECT * FROM $table WHERE id = '$application_id' AND discord_id = '$discord_id' AND kategoria = '$category'";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
            
                echo "<h2>Dane podania:</h2>";
                echo "<p><b>ID:</b> " . $row['id'] . "</p>";
                echo "<p><b>Discord ID:</b> " . $row['discord_id'] . "</p>";
                echo "<p><b>Kategoria:</b> " . $row['kategoria'] . "</p>";
                echo "<p><b>Steam Nick:</b> " . $row['steam_nick'] . "</p>";
                echo "<p><b>Imie:</b> " . $row['imie'] . "</p>";
                echo "<p><b>Mutacja:</b> " . $row['mutacja'] . "</p>";
                echo "<p><b>Staż:</b> <br>" . $row['staz'] . "</p>";
                echo "<p><b>Ile czasu dziennie jesteś w stanie na poświęcić na pełnienie tej funkcji?:</b> <br>" . $row['czas'] . "</p>";
                echo "<p><b>Czy byłeś Administratorem na innym serwerze? Jeżeli tak, to na jakim??:</b> <br>" . $row['admin'] . "</p>";
                echo "<p><b>Doświadczenie administracyjne od 1 do 10:</b> " . $row['dos'] . "</p>";
                echo "<p><b>Znajomość regulaminu od 1 do 10:</b> " . $row['reg'] . "</p>";
                echo "<p><b>Coś o sobie (Minimum 5 zdań):</b> <br>" . $row['opis'] . "</p>";
                echo "<p><b>Gracz potrzebuje pomocy i stworzył ticket w którym prosi o pomoc. Niestety nie wiesz jak możesz mu pomóc (nie znasz się) Co mu napiszesz? (min. 100 znaków):</b> <br>" . $row['gracz1'] . "</p>";
                echo "<p><b>Gracz na ogólnym czacie źle wypowiada się na temat innego użytkownika będąc przy tym wulgarny. Jak reagujesz na taką sytuację?:</b> <br>" . $row['gracz2'] . "</p>";


            } else {
                echo "Brak danych dla podanego identyfikatora podania.";
            }
        } elseif ($kategoria == "CRIME") {
            $discord_id = $_GET['discord_id'];
            $application_id = $_GET['id'];
            $category = $_GET['category'];
            $table = $_GET['table'];

            $query = "SELECT * FROM $table WHERE id = '$application_id' AND discord_id = '$discord_id' AND kategoria = '$category'";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                echo "<h2>Dane podania:</h2>";
                echo "<p><b>ID:</b> " . $row['id'] . "</p>";
                echo "<p><b>Discord ID:</b> " . $row['discord_id'] . "</p>";
                echo "<p><b>Kategoria:</b> " . $row['kategoria'] . "</p>";

                echo "<p><b>Nazwa Organizacji:</b> " . $row['nazwa_org'] . "</p>";
                echo "<p><b>Wiek szefa OOC (min. 14):</b> " . $row['wiek_owner_org'] . "</p>";
                echo "<p><b>Mutacja: (Tak/Nie)</b> " . $row['mutacja_org'] . "</p>";
                echo "<p><b>Rodzaj organizacji:</b> " . $row['rodzaj_org'] . "</p>";
                echo "<p><b>Ilość członków (min.4):</b> " . $row['ilosc_czl_org'] . "</p>";
                echo "<p><b>Styl ubrań (podczas spotkań okrągłego stołu):</b> <br>" . $row['ubrania_org'] . "</p>";
                echo "<p><b>Historia organizacji (min. 150 słów):</b> <br>" . $row['hisotria_org'] . "</p>";
                echo "<p><b>Czym organizacja będzie się zajmować?</b> <br>" . $row['zajecie_org'] . "</p>";
                echo "<p><b>Dlaczego powinniśmy wybrać akurat was?:</b> <br>" . $row['czemuwy_org'] . "</p>";
                echo "<p><b>Czego nie można robić podczas przegranej akcji?:</b> <br>" . $row['czego_org'] . "</p>";
                echo "<p><b>Czego oczekujesz od opiekuna jako nowa organizacja?:</b> <br>" . $row['opiekun_org'] . "</p>";
                echo "<p><b>Podaj mi 15 zastosowań ołówka liczy się kreatywność:</b> <br>" . $row['olowek_org'] . "</p>";
            
            }
        } elseif ($kategoria == "EMS") {
            $discord_id = $_GET['discord_id'];
            $application_id = $_GET['id'];
            $category = $_GET['category'];
            $table = $_GET['table'];

            $query = "SELECT * FROM $table WHERE id = '$application_id' AND discord_id = '$discord_id' AND kategoria = '$category'";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                echo "<h2>Dane podania:</h2>";
                echo "<p><b>ID:</b> " . $row['id'] . "</p>";
                echo "<p><b>Discord ID:</b> " . $row['discord_id'] . "</p>";
                echo "<p><b>Kategoria:</b> " . $row['kategoria'] . "</p>";

                echo "<p><b>Imię (OOC):</b> " . $row['imie_ems'] . "</p>";
                echo "<p><b>Mutacja: (Tak/Nie)</b> " . $row['mutacja_ems'] . "</p>";
                echo "<p><b>Ile masz lat?</b> " . $row['wiek_ems'] . "</p>";
                echo "<p><b>Na ile oceniasz swoje umiejętnosci med? (1-10)</b> " . $row['umiejmed_ems'] . "</p>";
                echo "<p><b>Imię i nazwisko (IC)</b> " . $row['doswiadczenie_ems'] . "</p>";
                echo "<p><b>Wiek (IC)</b> " . $row['czemuty_ems'] . "</p>";
                echo "<p><b>Czy byłeś karany (IC)</b> <br>" . $row['imieic_ems'] . "</p>";
                echo "<p><b>Czy posiadasz prawojazdy (Kategoria B i C)?</b> <br>" . $row['wiekic_ems'] . "</p>";
                echo "<p><b>Czy posiadasz jakieś doświadczenie jako medyk na serwerach FiveM?</b> <br>" . $row['karany_ems'] . "</p>";
                echo "<p><b>Wyjaśnij, dlaczego to właśnie ciebie powinniśmy wybrać i dlaczego chcesz dołączyć do EMS.</b> <br>" . $row['prawojazdy_ems'] . "</p>";
                echo "<p><b>Historia postaci</b> <br>" . $row['historia_ems'] . "</p>";
                echo "<p><b>Odegraj na /me i /do dowolną operację</b> <br>" . $row['odegraj_ems'] . "</p>";
            
            }
        } elseif ($kategoria == "LSC") {
            $discord_id = $_GET['discord_id'];
            $application_id = $_GET['id'];
            $category = $_GET['category'];
            $table = $_GET['table'];

            $query = "SELECT * FROM $table WHERE id = '$application_id' AND discord_id = '$discord_id' AND kategoria = '$category'";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                echo "<h2>Dane podania:</h2>";
                echo "<p><b>ID:</b> " . $row['id'] . "</p>";
                echo "<p><b>Discord ID:</b> " . $row['discord_id'] . "</p>";
                echo "<p><b>Kategoria:</b> " . $row['kategoria'] . "</p>";

                echo "<p><b>Imię OOC:</b> " . $row['imie_lsc'] . "</p>";
                echo "<p><b>Czy posiadasz mutację?:</b> " . $row['mutacja_lsc'] . "</p>";
                echo "<p><b>Twój wiek:</b> " . $row['wiek_lsc'] . "</p>";
                echo "<p><b>Imię i nazwisko:</b> " . $row['imieic_lsc'] . "</p>";
                echo "<p><b>Wiek:</b> " . $row['wiekic_lsc'] . "</p>";
                echo "<p><b>Czy byłeś karany:</b> " . $row['karanyic_lsc'] . "</p>";
                echo "<p><b>Czy posiadasz prawojazdy (Kategoria B i C)?:</b> " . $row['prawojazdy_lsc'] . "</p>";
                echo "<p><b>Czy posiadasz jakieś doświadczenie jako mechanik na serwerach FiveM?:</b> <br>" . $row['doswiadczenie_lsc'] . "</p>";
                echo "<p><b>Historia postaci i jej dobre cechy:</b> <br>" . $row['historia_postaci_lsc'] . "</p>";
                echo "<p><b>Wyjaśnij, dlaczego to właśnie ciebie powinniśmy wybrać i dlaczego chcesz dołączyć do LSC:</b> <br>" . $row['dlaczego_wybrac_lsc'] . "</p>";
                echo "<p><b>List motywacyjny:</b> <br>" . $row['list_motywacyjny_lsc'] . "</p>";
            
            }
        }
        elseif ($kategoria == "LSPD") {
            $discord_id = $_GET['discord_id'];
            $application_id = $_GET['id'];
            $category = $_GET['category'];
            $table = $_GET['table'];

            $query = "SELECT * FROM $table WHERE id = '$application_id' AND discord_id = '$discord_id' AND kategoria = '$category'";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                echo "<h2>Dane podania:</h2>";
                echo "<p><b>ID:</b> " . $row['id'] . "</p>";
                echo "<p><b>Discord ID:</b> " . $row['discord_id'] . "</p>";
                echo "<p><b>Kategoria:</b> " . $row['kategoria'] . "</p>";

                echo "<p><b>Imię OOC:</b> " . $row['imie_lspd'] . "</p>";
                echo "<p><b>Czy posiadasz mutację?:</b> " . $row['mutacja_lspd'] . "</p>";
                echo "<p><b>Twój wiek:</b> " . $row['wiek_lspd'] . "</p>";
                echo "<p><b>Na ile oceniasz swoje umiejętnosci policyjne?</b> " . $row['umiejepd_lspd'] . "</p>";
                echo "<p><b>Czy posiadasz jakieś doświadczenie jako policjant na serwerach FiveM?</b> " . $row['dos_lspd'] . "</p>";
                echo "<p><b>Wyjaśnij, dlaczego to właśnie ciebie powinniśmy wybrać i dlaczego chcesz dołączyć do PD.</b> " . $row['czemuty_lspd'] . "</p>";
                echo "<p><b>Imię i nazwisko (IC)</b> " . $row['daneic_lspd'] . "</p>";

                echo "<p><b>Wiek (IC)</b> <br>" . $row['wiekic_lspd'] . "</p>";

                echo "<p><b>Czy posiadasz prawojazdy (Kategoria B i C)?</b> <br>" . $row['prawkoic_lspd'] . "</p>";

                echo "<p><b>Napisz List Motywacyjny W Którym Przekonasz nas dlaczego akurat ciebie mamy wybrać do naszej jednostki (min. 200 słów.)</b> <br>" . $row['listmot_lspd'] . "</p>";

            
            }
        }elseif ($kategoria == "FIRMA") {
            $discord_id = $_GET['discord_id'];
            $application_id = $_GET['id'];
            $category = $_GET['category'];
            $table = $_GET['table'];

            $query = "SELECT * FROM $table WHERE id = '$application_id' AND discord_id = '$discord_id' AND kategoria = '$category'";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                echo "<h2>Dane podania:</h2>";
                echo "<p><b>ID:</b> " . $row['id'] . "</p>";
                echo "<p><b>Discord ID:</b> " . $row['discord_id'] . "</p>";
                echo "<p><b>Kategoria:</b> " . $row['kategoria'] . "</p>";

                echo "<p><b>Typ Firmy (np. Ochrona):</b> " . $row['typ_firma'] . "</p>";
                echo "<p><b>Nazwa Firmy:</b> " . $row['nazwa_firma'] . "</p>";
                echo "<p><b>Szef Firmy (discord):</b> " . $row['owner_firma'] . "</p>";
                echo "<p><b>Pracownicy Firmy i hierarchia (min 5 osób):</b> " . $row['prac_firma'] . "</p>";
                echo "<p><b>Czym będzie zajmować się twoja Firma:</b> " . $row['czym_firma'] . "</p>";
                echo "<p><b>Cel Firmy:</b> " . $row['vel_firma'] . "</p>";
                echo "<p><b>W jaki sposób będzie utrzymywała się Twoja firma:</b> " . $row['kasa_firma'] . "</p>";

                echo "<p><b>Historia powstania Firmy (minimum 200 słów):</b> <br>" . $row['historia_firma'] . "</p>";

                echo "<p><b>Gdzie będzie znajdowała się baza Firmy:</b> <br>" . $row['baza_firma'] . "</p>";

                echo "<p><b>Co potrzebujesz ze strony skryptowej aby twoja firma funkcjonowała:</b> <br>" . $row['dev_firma'] . "</p>";

            
            }
        }elseif ($kategoria == "DOJ") {
            $discord_id = $_GET['discord_id'];
            $application_id = $_GET['id'];
            $category = $_GET['category'];
            $table = $_GET['table'];

            $query = "SELECT * FROM $table WHERE id = '$application_id' AND discord_id = '$discord_id' AND kategoria = '$category'";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                echo "<h2>Dane podania:</h2>";
                echo "<p><b>ID:</b> " . $row['id'] . "</p>";
                echo "<p><b>Discord ID:</b> " . $row['discord_id'] . "</p>";
                echo "<p><b>Kategoria:</b> " . $row['kategoria'] . "</p>";

                echo "<p><b>Nick (OOC):</b> " . $row['nickdoj'] . "</p>";
                echo "<p><b>Wiek (OOC):</b> " . $row['wiekdoj'] . "</p>";

                echo "<p><b>Imie Nazwisko (IC):</b> " . $row['nazwdoj'] . "</p>";
                echo "<p><b>Wiek (IC):</b> " . $row['wiekicdoj'] . "</p>";
                echo "<p><b>Nr.Telefonu (IC):</b> " . $row['telefondoj'] . "</p>";
                echo "<p><b>Czy posiadasz prawo jazdy kategori B lub A?:</b> " . $row['jazdydoj'] . "</p>";
                echo "<p><b>Czy byłe(a)ś karany(a)?:</b> " . $row['karanydoj'] . "</p>";

                echo "<p><b>Opisz siebie:</b> <br>" . $row['opisdoj'] . "</p>";

                echo "<p><b>Dlaczego chcesz pracować w DOJu:</b> <br>" . $row['czmdoj'] . "</p>";

                echo "<p><b>Opisz swoje doświadczenie:</b> <br>" . $row['dosdoj'] . "</p>";

            
            }
        }elseif ($kategoria == "SHERIF") {
            $discord_id = $_GET['discord_id'];
            $application_id = $_GET['id'];
            $category = $_GET['category'];
            $table = $_GET['table'];

            $query = "SELECT * FROM $table WHERE id = '$application_id' AND discord_id = '$discord_id' AND kategoria = '$category'";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                echo "<h2>Dane podania:</h2>";
                echo "<p><b>ID:</b> " . $row['id'] . "</p>";
                echo "<p><b>Discord ID:</b> " . $row['discord_id'] . "</p>";
                echo "<p><b>Kategoria:</b> " . $row['kategoria'] . "</p>";

                echo "<p><b>Wiek: (OOC):</b> " . $row['wieksh'] . "</p>";
                echo "<p><b>Znajomość regulaminu serwera (1-10):</b> " . $row['regsh'] . "</p>";
                echo "<p><b>Doświadczenie w serwerze RolePlay:</b> " . $row['dossh'] . "</p>";
                echo "<p><b>Doświadczenie w pracy w grupie:</b> " . $row['grsh'] . "</p>";
                echo "<p><b>Doświadczenie na służbie SASD:</b> " . $row['dosnsh'] . "</p>";
                echo "<p><b>Imię i nazwisko (IC):</b> " . $row['imieicsh'] . "</p>";
                echo "<p><b>Wiek: (IC):</b> " . $row['wiekicsh'] . "</p>";
                echo "<p><b>Dlaczego akurat SASD?:</b> <br>" . $row['czmsh'] . "</p>";

                echo "<p><b>Czym się wyróżnisz w SASD?:</b> <br>" . $row['wysh'] . "</p>";
                echo "<p><b>List motywacyjny:</b> <br>" . $row['listsh'] . "</p>";

            
            }
        }
       
    }

    
?>