<?php
session_start();
require_once('db_connect.php');




if(isset($_POST['submit'])) {
   
    $discord_id = $_SESSION['discord_id'];
    $kategoria = $_POST['kategoria'];


    if ($kategoria == "T-SUPPORT") {
        $steam_nick = $_POST['steam_nick'];
        $wiek = $_POST['wiek_sup'];
        $imie = $_POST['imie'];
        $mutacja = $_POST['mutacja'];
        $staz = $_POST['staz'];
        $czas = $_POST['czas'];
        $admin = $_POST['admin'];
        $dos = $_POST['dos'];
        $reg = $_POST['reg'];
        $gracz1 = $_POST['gracz1'];
        $gracz2 = $_POST['gracz2'];
        $opis = $_POST['opis'];
        $query = "INSERT INTO tsupport_odpowiedzi (discord_id, kategoria, steam_nick, imie, mutacja, staz, czas, admin, dos, reg, opis, gracz1, gracz2, wiek) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($query);
        
        $stmt->bind_param("ssssssssssssss", $discord_id, $kategoria, $steam_nick, $imie, $mutacja, $staz, $czas, $admin, $dos, $reg, $opis, $gracz1, $gracz2, $wiek);

        $result = $stmt->execute();
        $stmt->close();
    } elseif ($kategoria == "CRIME") {
        
        $nazwa_org = $_POST['nazwa_org'];
        $wiek_owner_org = $_POST['wiek_owner_org'];
        $mutacja_org = $_POST['mutacja_org'];
        $rodzaj_org = $_POST['rodzaj_org'];
        $ilosc_czl_org = $_POST['ilosc_czl_org'];
        $ubrania_org = $_POST['ubrania_org'];
        $hisotria_org = $_POST['hisotria_org'];
        $zajecie_org = $_POST['zajecie_org'];
        $czemuwy_org = $_POST['czemuwy_org'];
        $czego_org = $_POST['czego_org'];
        $opiekun_org = $_POST['opiekun_org'];
        $olowek_org = $_POST['olowek_org'];
        $query = "INSERT INTO org_odpowiedzi (discord_id, kategoria, nazwa_org, wiek_owner_org, mutacja_org, rodzaj_org, ilosc_czl_org, ubrania_org, hisotria_org, zajecie_org, czemuwy_org, czego_org, opiekun_org, olowek_org) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($query);
        
        $stmt->bind_param("ssssssssssssss", $discord_id, $kategoria, $nazwa_org, $wiek_owner_org, $mutacja_org, $rodzaj_org, $ilosc_czl_org, $ubrania_org, $hisotria_org, $zajecie_org, $czemuwy_org, $czego_org, $opiekun_org, $olowek_org);

        $result = $stmt->execute();
        $stmt->close();
    } elseif ($kategoria == "EMS") {
        
        $imie_ems = $_POST['imie_ems'];
        $mutacja_ems = $_POST['mutacja_ems'];
        $wiek_ems = $_POST['wiek_ems'];
        $umiejmed_ems = $_POST['umiejmed_ems'];
        $doswiadczenie_ems = $_POST['doswiadczenie_ems'];
        $czemuty_ems = $_POST['czemuty_ems'];
        $imieic_ems = $_POST['imieic_ems'];
        $wiekic_ems = $_POST['wiekic_ems'];
        $karany_ems = $_POST['karany_ems'];
        $prawojazdy_ems = $_POST['prawojazdy_ems'];
        $historia_ems = $_POST['historia_ems'];
        $odegraj_ems = $_POST['odegraj_ems'];

        $query = "INSERT INTO ems_odpowiedzi (discord_id, kategoria, imie_ems, mutacja_ems, wiek_ems, umiejmed_ems, doswiadczenie_ems, czemuty_ems, imieic_ems, wiekic_ems, karany_ems, prawojazdy_ems, historia_ems, odegraj_ems) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($query);
        
        $stmt->bind_param("ssssssssssssss", $discord_id, $kategoria, $imie_ems, $mutacja_ems, $wiek_ems, $umiejmed_ems, $doswiadczenie_ems, $czemuty_ems, $imieic_ems, $wiekic_ems, $karany_ems, $prawojazdy_ems, $historia_ems, $odegraj_ems);

        $result = $stmt->execute();
        $stmt->close();
    }  if ($kategoria == "LSC") {
        $imie_lsc = $_POST['imie_lsc'];
        $mutacja_lsc = $_POST['mutacja_lsc'];
        $wiek_lsc = $_POST['wiek_lsc'];
        $imieic_lsc = $_POST['imieic_lsc'];
        $wiekic_lsc = $_POST['wiekic_lsc'];
        $karanyic_lsc = $_POST['karanyic_lsc'];
        $prawojazdy_lsc = $_POST['prawojazdy_lsc'];
        $doswiadczenie_lsc = $_POST['doswiadczenie_lsc'];
        $historia_postaci_lsc = $_POST['historia_postaci_lsc'];
        $dlaczego_wybrac_lsc = $_POST['dlaczego_wybrac_lsc'];
        $list_motywacyjny_lsc = $_POST['list_motywacyjny_lsc'];

        $query = "INSERT INTO lsc_odpowiedzi (discord_id, kategoria, imie_lsc, mutacja_lsc, wiek_lsc, imieic_lsc, wiekic_lsc, karanyic_lsc, prawojazdy_lsc, doswiadczenie_lsc, historia_postaci_lsc, dlaczego_wybrac_lsc, list_motywacyjny_lsc) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($query);

        $stmt->bind_param("sssssssssssss", $discord_id, $kategoria, $imie_lsc, $mutacja_lsc, $wiek_lsc, $imieic_lsc, $wiekic_lsc, $karanyic_lsc, $prawojazdy_lsc, $doswiadczenie_lsc, $historia_postaci_lsc, $dlaczego_wybrac_lsc, $list_motywacyjny_lsc);

        $result = $stmt->execute();
        $stmt->close();
    } if ($kategoria == "LSPD") {
        $imie_lspd = $_POST['imie_lspd'];
        $mutacja_lspd = $_POST['mutacja_lspd'];
        $wiek_lspd = $_POST['wiek_lspd'];
        $umiejepd_lspd = $_POST['umiejepd_lspd'];
        $dos_lspd = $_POST['dos_lspd'];
        $czemuty_lspd = $_POST['czemuty_lspd'];
        $daneic_lspd = $_POST['daneic_lspd'];
        $wiekic_lspd = $_POST['wiekic_lspd'];
        $prawkoic_lspd = $_POST['prawkoic_lspd'];
        $listmot_lspd = $_POST['listmot_lspd'];
        
        $query = "INSERT INTO lspd_odpowiedzi (discord_id, kategoria, imie_lspd, mutacja_lspd, wiek_lspd, umiejepd_lspd, dos_lspd, czemuty_lspd, daneic_lspd, wiekic_lspd, prawkoic_lspd, listmot_lspd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($query);
        
        $stmt->bind_param("ssssssssssss", $discord_id, $kategoria, $imie_lspd, $mutacja_lspd, $wiek_lspd, $umiejepd_lspd, $dos_lspd, $czemuty_lspd, $daneic_lspd, $wiekic_lspd, $prawkoic_lspd, $listmot_lspd);
        
        $result = $stmt->execute();
        $stmt->close();
    } if ($kategoria == "FIRMA") {
        $typ_firma = $_POST['typ_firma'];
        $nazwa_firma = $_POST['nazwa_firma'];
        $owner_firma = $_POST['owner_firma'];
        $prac_firma = $_POST['prac_firma'];
        $czym_firma = $_POST['czym_firma'];
        $vel_firma = $_POST['vel_firma'];
        $kasa_firma = $_POST['kasa_firma'];
        $historia_firma = $_POST['historia_firma'];
        $baza_firma = $_POST['baza_firma'];
        $dev_firma = $_POST['dev_firma'];
        
        $query = "INSERT INTO firma_odpowiedzi (discord_id, kategoria, typ_firma, nazwa_firma, owner_firma, prac_firma, czym_firma, vel_firma, kasa_firma, historia_firma, baza_firma, dev_firma) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($query);
        
        $stmt->bind_param("ssssssssssss", $discord_id, $kategoria, $typ_firma, $nazwa_firma, $owner_firma, $prac_firma, $czym_firma, $vel_firma, $kasa_firma, $historia_firma, $baza_firma, $dev_firma);
        
        $result = $stmt->execute();
        $stmt->close();
    } if ($kategoria == "DOJ") {
        $nickdoj = $_POST['nickdoj'];
        $wiekdoj = $_POST['wiekdoj'];
        $nazwdoj = $_POST['nazwdoj'];
        $wiekicdoj = $_POST['wiekicdoj'];
        $telefondoj = $_POST['telefondoj'];
        $jazdydoj = $_POST['jazdydoj'];
        $karanydoj = $_POST['karanydoj'];
        $opisdoj = $_POST['opisdoj'];
        $czmdoj = $_POST['czmdoj'];
        $dosdoj = $_POST['dosdoj'];
        
        $query = "INSERT INTO doj_odpowiedzi (discord_id, kategoria, nickdoj, wiekdoj, nazwdoj, wiekicdoj, telefondoj, jazdydoj, karanydoj, opisdoj, czmdoj, dosdoj) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($query);
        
        $stmt->bind_param("ssssssssssss", $discord_id, $kategoria, $nickdoj, $wiekdoj, $nazwdoj, $wiekicdoj, $telefondoj, $jazdydoj, $karanydoj, $opisdoj, $czmdoj, $dosdoj);
        
        $result = $stmt->execute();
        $stmt->close();
    } if ($kategoria == "SHERIF") {
        $wieksh = $_POST['wieksh'];
        $regsh = $_POST['regsh'];
        $dossh = $_POST['dossh'];
        $grsh = $_POST['grsh'];
        $dosnsh = $_POST['dosnsh'];
        $wiekicsh = $_POST['wiekicsh'];
        $czmsh = $_POST['czmsh'];
        $wysh = $_POST['wysh'];
        $listsh = $_POST['listsh'];
        $imieicsh = $_POST['imieicsh'];
        
        
        $query = "INSERT INTO sherif_odpowiedzi (discord_id, kategoria, wieksh, regsh, dossh, grsh, dosnsh, wiekicsh, czmsh, wysh, listsh, imieicsh) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($query);
        
        $stmt->bind_param("ssssssssssss", $discord_id, $kategoria, $wieksh, $regsh, $dossh, $grsh, $dosnsh, $wiekicsh, $czmsh, $wysh, $listsh, $imieicsh);
        
        $result = $stmt->execute();
        $stmt->close();
    }


    
    header('Location: index.php');
    exit();
}


function checkAdminPermission($conn, $discord_id, $kategoria) {
    $query = "SELECT * FROM administratorzy WHERE discord_id = '$discord_id' AND kategoria = '$kategoria'";
    $result = mysqli_query($conn, $query);
    return mysqli_num_rows($result) > 0;
}


if(isset($_GET['podania'])) {


    header('Location: podania.php');
    exit();
}


if(isset($_SESSION['discord_id'])) {
    $discord_id = $_SESSION['discord_id'];
    $discord_avatar = $_SESSION['discord_avatar'];
    $discord_username = $_SESSION['discord_username'];

    $query_get_categories = "SELECT DISTINCT kategoria FROM administratorzy WHERE discord_id = '$discord_id'";
    $result_get_categories = mysqli_query($conn, $query_get_categories);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Panel użytkownika</title>
    <link rel="icon" href="logo2.svg" type="image/svg+xml">
</head>
<body>
<div class="navbar">
    <div class="logo">
        <img src="logo2.png" alt="Logo">
    </div>
    <div class="user-info">
        <div class="greeting-and-link">
            <span class="username">Witaj, <?= $discord_username ?></span>
            <?php if(checkAdminPermission($conn, $discord_id, 'T-SUPPORT') || checkAdminPermission($conn, $discord_id, 'CRIME') || checkAdminPermission($conn, $discord_id, 'LSPD') || checkAdminPermission($conn, $discord_id, 'EMS') || checkAdminPermission($conn, $discord_id, 'LSC') || checkAdminPermission($conn, $discord_id, 'DOJ') || checkAdminPermission($conn, $discord_id, 'SHERIF') || checkAdminPermission($conn, $discord_id, 'FIRMA')): ?>
                <a href="index.php?podania=true" class="spr-podania-button-1">Sprawdz Podania</a>
            <?php endif; ?>
            
            <a href="logout.php" class="spr-podania-button-2">Wyloguj się</a>
        </div>
        <img src="<?= $discord_avatar ?>" alt="User Avatar">
    </div>
</div>


<div class="container"> 
    <section class="section-1">
        <p class="section-1-title-text">PODANIA</p>
        <div class="section-1-middle-box">
            <p class="section-1-middle-text-1">TRILOGY</p>
            <img class="section-1-middle-img" src="right.svg" alt="">
            <p class="section-1-middle-text-2">PODANIA</p>
        </div>
    </section>
</div>


<div class="podania">
   

<form method="post" id="myForm">
    <div class="box-kategoria">
        <p class="kategoria">Wybierz kategorię:</p>
        <select name="kategoria" id="kategoria" class="kategoria-select">
            <option value="Brak">Brak</option>
            <option value="T-SUPPORT">T-SUPPORT</option>
            <option value="CRIME">CRIME</option>
            <option value="EMS">EMS</option>
            <option value="LSC">LSC</option>
            <option value="LSPD">LSPD</option>
            <option value="SHERIF">SHERIF</option>
            <option value="FIRMA">FIRMA</option>
            <option value="DOJ">DOJ</option>
        </select>
    </div>
    <div id="formularz-support" class="formularz-container hidden">

        <div class="formularz-support-1">
            <div class="box-tsupport">
                <p class="tsupport-text">Nazwa Steam:</p>
                <input type="text" class="input" name="steam_nick" required>
            </div>
                <br>
            <div class="box-tsupport">
                <p class="tsupport-text">Imie:</p>
                <input type="text" class="input" name="imie" required>
            </div>
            <br>
            <div class="box-tsupport">
                <p class="tsupport-text">Wiek:</p>
                <input type="text" class="input" name="wiek_sup" required>
            </div>
            <br>
            <div class="box-tsupport">
                <p class="tsupport-text">Mutacja: (Tak/Nie)</p>
                <input type="text" class="input" name="mutacja" required>
            </div>
            <br>
            <div class="box-tsupport">
                <p class="tsupport-text">Staż na serwerze:</p>
                <input type="text" class="input" name="staz" required>
            </div>
            <br>
            <div class="box-tsupport">
                <p class="tsupport-text">Ile czasu dziennie jesteś w stanie na poświęcić na pełnienie tej funkcji?</p>
                <input type="text" class="input2" name="czas" required>
            </div>
            <br>
            <div class="box-tsupport">
                <p class="tsupport-text">Czy byłeś Administratorem na innym serwerze? Jeżeli tak, to na jakim??</p>
                <input type="text" class="input2" name="admin" required>
            </div>
            <br>
            <div class="box-tsupport">
                <p class="tsupport-text">Doświadczenie administracyjne od 1 do 10</p>
                <input type="text" class="input2" name="dos" required>
            </div>
            <br>
            <div class="box-tsupport">
                <p class="tsupport-text">Znajomość regulaminu od 1 do 10</p>
                <input type="text" class="input2" name="reg" required>
            </div>
            <br>
            <div class="box-tsupport">
                <p class="tsupport-text">Coś o sobie (Minimum 5 zdań)</p>
                <input type="text" class="input3" name="opis" required>
            </div>
            <br>
            <div class="box-tsupport">
                <p class="tsupport-text">Gracz potrzebuje pomocy i stworzył ticket w którym prosi o pomoc. Niestety nie wiesz jak możesz mu pomóc (nie znasz się) Co mu napiszesz? (min. 100 znaków):</p>
                <input type="text" class="input4" name="gracz1" required>
            </div>
            <br>
            <div class="box-tsupport">
                <p class="tsupport-text">Gracz na ogólnym czacie źle wypowiada się na temat innego użytkownika będąc przy tym wulgarny. Jak reagujesz na taką sytuację?:</p>
                <input type="text" class="input4" name="gracz2" required>
            </div> 
            <br>
            <button class="send-podanie-button" type="submit" name="submit">Wyślij odpowiedz</button>

        </div>
       
        


       
    </div>
    <div id="formularz-crime" class="formularz-container hidden">
        <div class="box-tsupport">
            <p class="tsupport-text">Nazwa Organizacji:</p>
            <input type="text" class="input" name="nazwa_org" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Wiek szefa OOC (min. 14):</p>
            <input type="text" class="input" name="wiek_owner_org" required>
        </div>
        <br>
        <div class="box-tsupport">
                <p class="tsupport-text">Mutacja: (Tak/Nie)</p>
                <input type="text" class="input" name="mutacja_org" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Rodzaj organizacji:</p>
            <input type="text" class="input" name="rodzaj_org" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Ilość członków (min.4):</p>
            <input type="text" class="input" name="ilosc_czl_org" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Styl ubrań (podczas spotkań okrągłego stołu):</p>
            <input type="text" class="input" name="ubrania_org" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Historia organizacji (min. 150 słów):</p>
            <input type="text" class="input2" name="hisotria_org" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czym organizacja będzie się zajmować?:</p>
            <input type="text" class="input2" name="zajecie_org" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Dlaczego powinniśmy wybrać akurat was?:</p>
            <input type="text" class="input3" name="czemuwy_org" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czego nie można robić podczas przegranej akcji?:</p>
            <input type="text" class="input2" name="czego_org" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czego oczekujesz od opiekuna jako nowa organizacja?:</p>
            <input type="text" class="input2" name="opiekun_org" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Podaj mi 15 zastosowań ołówka liczy się kreatywność:</p>
            <input type="text" class="input2" name="olowek_org" required>
        </div>

        <br>
        <button class="send-podanie-button" type="submit" name="submit">Wyślij odpowiedz</button>

    </div>


    <div id="formularz-ems" class="formularz-container hidden">

        <div class="box-tsupport">
            <p class="tsupport-text">Imię (OOC):</p>
            <input type="text" class="input" name="imie_ems" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Mutacja: (Tak/Nie)</p>
            <input type="text" class="input" name="mutacja_ems" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Ile masz lat?</p>
            <input type="text" class="input" name="wiek_ems" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Na ile oceniasz swoje umiejętnosci med? (1-10)</p>
            <input type="text" class="input" name="umiejmed_ems" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Imię i nazwisko (IC)</p>
            <input type="text" class="input" name="imieic_ems" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Wiek (IC)</p>
            <input type="text" class="input" name="wiekic_ems" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czy byłeś karany (IC)</p>
            <input type="text" class="input" name="karany_ems" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czy posiadasz prawojazdy (Kategoria B i C)?</p>
            <input type="text" class="input" name="prawojazdy_ems" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czy posiadasz jakieś doświadczenie jako medyk na serwerach FiveM?</p>
            <input type="text" class="input2" name="doswiadczenie_ems" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Wyjaśnij, dlaczego to właśnie ciebie powinniśmy wybrać i dlaczego chcesz dołączyć do EMS.</p>
            <input type="text" class="input2" name="czemuty_ems" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Historia postaci</p>
            <input type="text" class="input2" name="historia_ems" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Odegraj na /me i /do dowolną operację</p>
            <input type="text" class="input2" name="odegraj_ems" required>
        </div>
        
        <br>
        <button class="send-podanie-button" type="submit" name="submit">Wyślij odpowiedz</button>

    </div>


<div id="formularz-lsc" class="formularz-container hidden">

        <div class="box-tsupport">
            <p class="tsupport-text">Imię (OOC):</p>
            <input type="text" class="input" name="imie_lsc" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czy posiadasz mutację? (Tak/Nie)</p>
            <input type="text" class="input" name="mutacja_lsc" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Twój wiek:</p>
            <input type="text" class="input" name="wiek_lsc" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Imię i nazwisko (IC):</p>
            <input type="text" class="input" name="imieic_lsc" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Wiek (IC):</p>
            <input type="text" class="input" name="wiekic_lsc" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czy byłeś karany (IC)?</p>
            <input type="text" class="input" name="karanyic_lsc" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czy posiadasz prawojazdy (Kategoria B i C)?</p>
            <input type="text" class="input" name="prawojazdy_lsc" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czy posiadasz jakieś doświadczenie jako mechanik na serwerach FiveM?</p>
            <input type="text" class="input2" name="doswiadczenie_lsc" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Opisz Historię postaci i jej dobre cechy:</p>
            <input type="text" class="input2" name="historia_postaci_lsc" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Wyjaśnij, dlaczego to właśnie ciebie powinniśmy wybrać i dlaczego chcesz dołączyć do LSC:</p>
            <input type="text" class="input2" name="dlaczego_wybrac_lsc" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">List motywacyjny:</p>
            <input type="text" class="input3" name="list_motywacyjny_lsc" required>
        </div>

        <br>
        <button class="send-podanie-button" type="submit" name="submit">Wyślij odpowiedz</button>

</div>

<div id="formularz-lspd" class="formularz-container hidden">

        <div class="box-tsupport">
            <p class="tsupport-text">Imię (OOC):</p>
            <input type="text" class="input" name="imie_lspd" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czy posiadasz mutację? (Tak/Nie)</p>
            <input type="text" class="input" name="mutacja_lspd" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Twój wiek:</p>
            <input type="text" class="input" name="wiek_lspd" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Na ile oceniasz swoje umiejętności policyjne (1/10):</p>
            <input type="text" class="input" name="umiejepd_lspd" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czy posiadasz jakieś doświadczenie jako policjant na serwerach FiveM? </p>
            <input type="text" class="input" name="dos_lspd" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Wyjaśnij, dlaczego to właśnie ciebie powinniśmy wybrać i dlaczego chcesz dołączyć do PD.</p>
            <input type="text" class="input" name="czemuty_lspd" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Imie Nazwisko (IC)</p>
            <input type="text" class="input" name="daneic_lspd" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Wiek (IC)</p>
            <input type="text" class="input2" name="wiekic_lspd" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czy posiadasz prawojazdy (Kategoria B i C)?</p>
            <input type="text" class="input2" name="prawkoic_lspd" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Napisz List Motywacyjny W Którym Przekonasz nas dlaczego akurat ciebie mamy wybrać do naszej jednostki (min. 200 słów.)</p>
            <input type="text" class="input2" name="listmot_lspd" required>
        </div>

        <br>
        <button class="send-podanie-button" type="submit" name="submit">Wyślij odpowiedz</button>

</div>

<div id="formularz-firma" class="formularz-container hidden">

        <div class="box-tsupport">
            <p class="tsupport-text">Typ Firmy(np. Ochrona)</p>
            <input type="text" class="input" name="typ_firma" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Nazwa Firmy</p>
            <input type="text" class="input" name="nazwa_firma" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Szef Firmy (discord):</p>
            <input type="text" class="input" name="owner_firma" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Pracownicy Firmy i hierarchia (min 5 osób ):</p>
            <input type="text" class="input" name="prac_firma" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czym będzie zajmować się twoja Firma</p>
            <input type="text" class="input" name="czym_firma" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Cel Firmy</p>
            <input type="text" class="input" name="vel_firma" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">W jaki sposób będzie utrzymywała się Twoja firma</p>
            <input type="text" class="input" name="kasa_firma" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Historia powstania Firmy ( minimum 200 słów )</p>
            <input type="text" class="input2" name="historia_firma" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Gdzie będzie znajdowała się baza Firmy </p>
            <input type="text" class="input2" name="baza_firma" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Co potrzebujesz ze strony skryptowej aby twoja firma funkcjonowała </p>
            <input type="text" class="input2" name="dev_firma" required>
        </div>

        <br>
        <button class="send-podanie-button" type="submit" name="submit">Wyślij odpowiedz</button>

</div>

<div id="formularz-doj" class="formularz-container hidden">

        <div class="box-tsupport">
            <p class="tsupport-text">Nick (OOC)</p>
            <input type="text" class="input" name="nickdoj" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Wiek (OOC)</p>
            <input type="text" class="input" name="wiekdoj" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Imie Nazwisko (IC)</p>
            <input type="text" class="input" name="nazwdoj" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Wiek (IC)</p>
            <input type="text" class="input" name="wiekicdoj" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Nr.Telefonu (IC)</p>
            <input type="text" class="input" name="telefondoj" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czy posiadasz prawo jazdy kategori B lub A?</p>
            <input type="text" class="input" name="jazdydoj" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czy byłe(a)ś karany(a)?</p>
            <input type="text" class="input" name="karanydoj" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Opisz siebie</p>
            <input type="text" class="input" name="opisdoj" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Dlaczego chcesz pracować w DOJu</p>
            <input type="text" class="input" name="czmdoj" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Opisz swoje doświadczenie</p>
            <input type="text" class="input" name="dosdoj" required>
        </div>
        <br>
        <button class="send-podanie-button" type="submit" name="submit">Wyślij odpowiedz</button>

</div>



<div id="formularz-sherif" class="formularz-container hidden">

        <div class="box-tsupport">
            <p class="tsupport-text">Wiek: (OOC)</p>
            <input type="text" class="input" name="wieksh" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Znajomość regulaminu serwera (1-10):</p>
            <input type="text" class="input" name="regsh" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Doświadczenie w serwerze RolePlay:</p>
            <input type="text" class="input" name="dossh" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Doświadczenie w pracy w grupie:</p>
            <input type="text" class="input" name="grsh" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Doświadczenie na służbie SASD:</p>
            <input type="text" class="input" name="dosnsh" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Imię i nazwisko (IC):</p>
            <input type="text" class="input" name="imieicsh" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Wiek: (IC):</p>
            <input type="text" class="input" name="wiekicsh" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Dlaczego akurat SASD?:</p>
            <input type="text" class="input" name="czmsh" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">Czym się wyróżnisz w SASD?:</p>
            <input type="text" class="input" name="wysh" required>
        </div>
        <br>
        <div class="box-tsupport">
            <p class="tsupport-text">List motywacyjny:</p>
            <input type="text" class="input" name="listsh" required>
        </div>
        <br>
        <button class="send-podanie-button" type="submit" name="submit">Wyślij odpowiedz</button>

</div>

    
   
</form>
</div>
<script>
document.getElementById('kategoria').addEventListener('change', function() {
    var value = this.value;
    var formSupport = document.getElementById('formularz-support');
    var formCrime = document.getElementById('formularz-crime');
    var formEms = document.getElementById('formularz-ems');
    var formLsc = document.getElementById('formularz-lsc');
    var formLSPD = document.getElementById('formularz-lspd');
    var formFirma = document.getElementById('formularz-firma'); // Dodane pole dla firmy
    var formDoj = document.getElementById('formularz-doj'); // Dodane pole dla doj
    var formSherif = document.getElementById('formularz-sherif'); // Dodane pole dla sherif

    if (value === 'T-SUPPORT') {
        slideDown(formSupport);
        slideUp(formCrime);
        slideUp(formEms);
        slideUp(formLsc);
        slideUp(formLSPD);
        slideUp(formFirma); // Ukryj formularz firmy
        slideUp(formDoj); // Ukryj formularz doj
        slideUp(formSherif); // Ukryj formularz sherif
        clearFields(formCrime);
        clearFields(formEms);
        clearFields(formLsc);
        clearFields(formLSPD);
        clearFields(formFirma); // Wyczyść pola formularza firmy
        clearFields(formDoj); // Wyczyść pola formularza doj
        clearFields(formSherif); // Wyczyść pola formularza sherif
        removeRequired(formCrime);
        removeRequired(formEms);
        removeRequired(formLsc);
        removeRequired(formLSPD);
        removeRequired(formFirma); // Usuń wymagane pola dla formularza firmy
        removeRequired(formDoj); // Usuń wymagane pola dla formularza doj
        removeRequired(formSherif); // Usuń wymagane pola dla formularza sherif
        addRequired(formSupport);
    } else if (value === 'CRIME') {
        slideDown(formCrime);
        slideUp(formSupport);
        slideUp(formEms);
        slideUp(formLsc);
        slideUp(formLSPD);
        slideUp(formFirma);
        slideUp(formDoj);
        slideUp(formSherif);
        clearFields(formSupport);
        clearFields(formEms);
        clearFields(formLsc);
        clearFields(formLSPD);
        clearFields(formFirma);
        clearFields(formDoj);
        clearFields(formSherif);
        removeRequired(formSupport);
        removeRequired(formEms);
        removeRequired(formLsc);
        removeRequired(formLSPD);
        removeRequired(formFirma);
        removeRequired(formDoj);
        removeRequired(formSherif);
        addRequired(formCrime);
    } else if (value === 'EMS') {
        slideDown(formEms);
        slideUp(formSupport);
        slideUp(formCrime);
        slideUp(formLsc);
        slideUp(formLSPD);
        slideUp(formFirma);
        slideUp(formDoj);
        slideUp(formSherif);
        clearFields(formSupport);
        clearFields(formCrime);
        clearFields(formLsc);
        clearFields(formLSPD);
        clearFields(formFirma);
        clearFields(formDoj);
        clearFields(formSherif);
        removeRequired(formSupport);
        removeRequired(formCrime);
        removeRequired(formLsc);
        removeRequired(formLSPD);
        removeRequired(formFirma);
        removeRequired(formDoj);
        removeRequired(formSherif);
        addRequired(formEms);
    } else if (value === 'LSC') {
        slideDown(formLsc);
        slideUp(formSupport);
        slideUp(formCrime);
        slideUp(formEms);
        slideUp(formLSPD);
        slideUp(formFirma);
        slideUp(formDoj);
        slideUp(formSherif);
        clearFields(formSupport);
        clearFields(formCrime);
        clearFields(formEms);
        clearFields(formLSPD);
        clearFields(formFirma);
        clearFields(formDoj);
        clearFields(formSherif);
        removeRequired(formSupport);
        removeRequired(formCrime);
        removeRequired(formEms);
        removeRequired(formLSPD);
        removeRequired(formFirma);
        removeRequired(formDoj);
        removeRequired(formSherif);
        addRequired(formLsc);
    } else if (value === 'LSPD') {
        slideDown(formLSPD);
        slideUp(formSupport);
        slideUp(formCrime);
        slideUp(formEms);
        slideUp(formLsc);
        slideUp(formFirma);
        slideUp(formDoj);
        slideUp(formSherif);
        clearFields(formSupport);
        clearFields(formCrime);
        clearFields(formEms);
        clearFields(formLsc);
        clearFields(formFirma);
        clearFields(formDoj);
        clearFields(formSherif);
        removeRequired(formSupport);
        removeRequired(formCrime);
        removeRequired(formEms);
        removeRequired(formLsc);
        removeRequired(formFirma);
        removeRequired(formDoj);
        removeRequired(formSherif);
        addRequired(formLSPD);
    } else if (value === 'FIRMA') { // Obsługa kategorii FIRMA
        slideDown(formFirma);
        slideUp(formSupport);
        slideUp(formCrime);
        slideUp(formEms);
        slideUp(formLsc);
        slideUp(formLSPD);
        slideUp(formDoj);
        slideUp(formSherif);
        clearFields(formSupport);
        clearFields(formCrime);
        clearFields(formEms);
        clearFields(formLsc);
        clearFields(formLSPD);
        clearFields(formDoj);
        clearFields(formSherif);
        removeRequired(formSupport);
        removeRequired(formCrime);
        removeRequired(formEms);
        removeRequired(formLsc);
        removeRequired(formLSPD);
        removeRequired(formDoj);
        removeRequired(formSherif);
        addRequired(formFirma);
    } else if (value === 'DOJ') { // Obsługa kategorii DOJ
        slideDown(formDoj);
        slideUp(formSupport);
        slideUp(formCrime);
        slideUp(formEms);
        slideUp(formLsc);
        slideUp(formLSPD);
        slideUp(formFirma);
        slideUp(formSherif);
        clearFields(formSupport);
        clearFields(formCrime);
        clearFields(formEms);
        clearFields(formLsc);
        clearFields(formLSPD);
        clearFields(formFirma);
        clearFields(formSherif);
        removeRequired(formSupport);
        removeRequired(formCrime);
        removeRequired(formEms);
        removeRequired(formLsc);
        removeRequired(formLSPD);
        removeRequired(formFirma);
        removeRequired(formSherif);
        addRequired(formDoj);
    } else if (value === 'SHERIF') { // Obsługa kategorii SHERIF
        slideDown(formSherif);
        slideUp(formSupport);
        slideUp(formCrime);
        slideUp(formEms);
        slideUp(formLsc);
        slideUp(formLSPD);
        slideUp(formFirma);
        slideUp(formDoj);
        clearFields(formSupport);
        clearFields(formCrime);
        clearFields(formEms);
        clearFields(formLsc);
        clearFields(formLSPD);
        clearFields(formFirma);
        clearFields(formDoj);
        removeRequired(formSupport);
        removeRequired(formCrime);
        removeRequired(formEms);
        removeRequired(formLsc);
        removeRequired(formLSPD);
        removeRequired(formFirma);
        removeRequired(formDoj);
        addRequired(formSherif);
    } else if (value === 'Brak') {
        slideUp(formSupport);
        slideUp(formCrime);
        slideUp(formEms);
        slideUp(formLsc);
        slideUp(formLSPD);
        slideUp(formFirma);
        slideUp(formDoj);
        slideUp(formSherif);
        clearFields(formSupport);
        clearFields(formCrime);
        clearFields(formEms);
        clearFields(formLsc);
        clearFields(formLSPD);
        clearFields(formFirma);
        clearFields(formDoj);
        clearFields(formSherif);
        removeRequired(formSupport);
        removeRequired(formCrime);
        removeRequired(formEms);
        removeRequired(formLsc);
        removeRequired(formLSPD);
        removeRequired(formFirma);
        removeRequired(formDoj);
        removeRequired(formSherif);
    }
});






    function slideDown(element) {
        element.classList.remove('hidden');
        var height = element.scrollHeight;
        element.style.maxHeight = height + 'px';
    }

    function slideUp(element) {
        var height = element.scrollHeight;
        element.style.maxHeight = height + 'px';
        setTimeout(function() {
            element.style.maxHeight = '0';
            setTimeout(function() {
                element.classList.add('hidden');
            }, 300);
        }, 100);
    }

    function clearFields(form) {
        var inputs = form.getElementsByTagName('input');
        for (var i = 0; i < inputs.length; i++) {
            inputs[i].value = '';
        }
    }

    function removeRequired(form) {
        var inputs = form.getElementsByTagName('input');
        for (var i = 0; i < inputs.length; i++) {
            inputs[i].removeAttribute('required');
        }
    }

    function addRequired(form) {
        var inputs = form.getElementsByTagName('input');
        for (var i = 0; i < inputs.length; i++) {
            inputs[i].setAttribute('required', 'required');
        }
    }
</script>



   
    
   
    
</body>
</html>

<?php
} else {
    header('Location: discord_login.php');
    exit();
}
?>
