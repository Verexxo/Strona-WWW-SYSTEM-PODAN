<?php
session_start();
require_once('db_connect.php');

function checkAdminPermission($conn, $discord_id, $kategoria) {
    $query = "SELECT * FROM administratorzy WHERE discord_id = '$discord_id' AND kategoria = '$kategoria'";
    $result = mysqli_query($conn, $query);
    return mysqli_num_rows($result) > 0;
}

function sendDiscordMessage($webhookURL, $message) {
    $data = array('content' => $message);
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json",
            'method'  => 'POST',
            'content' => json_encode($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($webhookURL, false, $context);
    return $result;
}

function deleteApplication($conn, $id, $table) {
    $query = "DELETE FROM $table WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    return $result;
}

$discordWebhookURL = "https://discord.com/api/webhooks/1214703437133119499/RQcko3Kdo7FZVOmiaCeJnMIeZBgQWTd01TkBcWkh6WcX2QSDZuBEjTnwUdBWGkPkc5o1";

if(isset($_GET['delete_application']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $table = $_GET['table'];

    $deleted = deleteApplication($conn, $id, $table);
    $discord_id = $_GET['discord_id'];
    $id = $_GET['id'];
    $category = $_GET['category'];

       
        $data = array(
            "username" => "TrilogyRP - Wyniki",
            "content" => "<@$discord_id>", 
            "embeds" => array(
                array(
                    "title" => "Zakceptowano Podanie",
                    "description" => "<@$discord_id> Twoje podanie do $category zostało zakceptowane!",
                    "color" => 4718336 
                )
            )
        );
    
        $data_string = json_encode($data);
    
        $ch = curl_init($discordWebhookURL);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        curl_close($ch);
    
        header('Location: podania.php');
        exit();
}

if(isset($_GET['remove_application']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $table = $_GET['table'];

    $deleted = deleteApplication($conn, $id, $table);
    $discord_id = $_GET['discord_id'];
    $id = $_GET['id'];
    $category = $_GET['category'];

   
    if(isset($_GET['remove_application']) && isset($_GET['id'])) {
        $id = $_GET['id'];
        $table = $_GET['table'];
    
        $deleted = deleteApplication($conn, $id, $table);
        $discord_id = $_GET['discord_id'];
        $id = $_GET['id'];
        $category = $_GET['category'];
    
     
        $data = array(
            "username" => "TrilogyRP - Wyniki",
            "content" => "<@$discord_id>", 
            "embeds" => array(
                array(
                    "title" => "Odrzucono Podanie",
                    "description" => "<@$discord_id> Twoje podanie do $category zostało odrzucone!",
                    "color" => 16711680 
                )
            )
        );
    
        $data_string = json_encode($data);
    
        $ch = curl_init($discordWebhookURL);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        curl_close($ch);
    
        header('Location: podania.php');
        exit();
    }
    

    $data_string = json_encode($data);

    $ch = curl_init($discordWebhookURL);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);

    header('Location: podania.php');
    exit();
}


if(isset($_GET['index'])) {
    header('Location: index.php');
    exit();
}

if(isset($_SESSION['discord_id'])) {
    $discord_id = $_SESSION['discord_id'];
    $discord_avatar = $_SESSION['discord_avatar'];
    $discord_username = $_SESSION['discord_username'];

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Panel użytkownika</title>
        <link rel="stylesheet" href="style-podania.css">
        <link rel="stylesheet" href="style.css">
        
        <link rel="icon" href="logo2.svg" type="image/svg+xml">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
    <body>


    <div class="navbar">
    <div class="logo">
        <img src="logo2.png" alt="Logo">
    </div>
    <div class="user-info">
        <div class="greeting-and-link">
            <span class="username">Witaj, <?= $discord_username ?></span>
            <a href="podania.php?index=true" class="spr-podania-button">Powrót</a>
        </div>
        <img src="<?= $discord_avatar ?>" alt="User Avatar">
    </div>
</div>



<h2 style="text-align: center;">Lista podań:</h2>
    <div class="modal" id="myModal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="modal-content"></div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $(".check-application").click(function(){
                var discordId = $(this).data('discord-id');
                var applicationId = $(this).data('application-id');
                var category = $(this).data('category');
                var table = $(this).data('table');

                $.get("get_application.php?discord_id=" + discordId + "&id=" + applicationId + "&category=" + category + "&table=" + table, function(data, status){
                    $("#modal-content").html(data);
                    $("#myModal").css("display", "block");
                });
            });

            $(".close").click(function(){
                $("#myModal").css("display", "none");
            });
        });
    </script>

    <?php
    
    $columns = array(
        "tsupport_odpowiedzi" => array(
            "ID" => "id",
            "Steam" => "steam_nick",
            "Podanie napisano o:" => "data_wprowadzenia",
            "Akcje" => "opis",
        ),
        "org_odpowiedzi" => array(
            "ID" => "id",
            "Nazwa Org" => "nazwa_org",
            "Podanie napisano o:" => "data_wprowadzenia",
            "Akcje" => "id",
        ),
        "ems_odpowiedzi" => array(
            "ID" => "id",
            "Imie" => "imie_ems",
            "Podanie napisano o:" => "data_wprowadzenia",
            "Akcje" => "id",
        ),
        "lsc_odpowiedzi" => array(
            "ID" => "id",
            "Imie" => "imie_lsc",
            "Podanie napisano o:" => "data_wprowadzenia",
            "Akcje" => "id",
        ),
        "lspd_odpowiedzi" => array(
            "ID" => "id",
            "Imie" => "imie_lspd",
            "Podanie napisano o:" => "data_wprowadzenia",
            "Akcje" => "id",
        ),
        "firma_odpowiedzi" => array(
            "ID" => "id",
            "Imie" => "typ_firma",
            "Podanie napisano o:" => "data_wprowadzenia",
            "Akcje" => "id",
        ),
        "doj_odpowiedzi" => array(
            "ID" => "id",
            "Imie" => "nickdoj",
            "Podanie napisano o:" => "data_wprowadzenia",
            "Akcje" => "id",
        ),
        "sherif_odpowiedzi" => array(
            "ID" => "id",
            "Wiek" => "wieksh",
            "Podanie napisano o:" => "data_wprowadzenia",
            "Akcje" => "id",
        ),
    );

    foreach ($columns as $table => $tableColumns) {
        $query_get_categories = "SELECT DISTINCT kategoria FROM $table";
        $result_get_categories = mysqli_query($conn, $query_get_categories);
    
        while ($row = mysqli_fetch_assoc($result_get_categories)) {
            if (checkAdminPermission($conn, $discord_id, $row['kategoria'])) {
                $query_get_applications = "SELECT * FROM $table WHERE kategoria = '{$row['kategoria']}'";
                $result_get_applications = mysqli_query($conn, $query_get_applications);
                ?>
                <?php if (mysqli_num_rows($result_get_applications) > 0) : ?>
                    <h3 style="text-align: center;">Kategoria: <?= $row['kategoria'] ?></h3>
                    <table border="1">
                        <tr>
                            <?php
                          
                            foreach ($tableColumns as $columnTitle => $columnName) {
                                echo "<th>$columnTitle</th>";
                            }
                            ?>
                        </tr>
                        <?php while ($row_application = mysqli_fetch_assoc($result_get_applications)) : ?>
                            <tr>
                                <?php
                                
                                foreach ($tableColumns as $columnTitle => $columnName) {
                                    if ($columnTitle == "Akcje") {
                                        echo "<td><a class='check-application' data-discord-id='{$row_application['discord_id']}' data-application-id='{$row_application['id']}' data-category='{$row_application['kategoria']}' data-table='{$table}'>Sprawdź podanie</a></td>";
                                    } else {
                                        echo "<td>{$row_application[$columnName]}</td>";
                                    }
                                }
                                ?>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                <?php else : ?>
                    <p>Brak podań w kategorii <?= $row['kategoria'] ?></p>
                <?php endif; ?>
                <?php
            }
        }
    }
    ?>
<script>
    $(document).ready(function(){
        $(".check-application").click(function(){
            var discordId = $(this).data('discord-id');
            var applicationId = $(this).data('application-id');
            var category = $(this).data('category');
            var table = $(this).data('table');

            $.get("get_application.php?discord_id=" + discordId + "&id=" + applicationId + "&category=" + category + "&table=" + table, function(data, status){
                $("#modal-content").html(data);
                $("#myModal").css("display", "block");
                $("#modal-content").append("<a class='podania-1' href='podania.php?delete_application=true&discord_id=" + discordId + "&id=" + applicationId + "&category=" + category + "&table=" + table + "'>Akceptuj</a>");
                $("#modal-content").append("<a class='podania-2' href='podania.php?remove_application=true&discord_id=" + discordId + "&id=" + applicationId + "&category=" + category + "&table=" + table + "'>Odrzuć</a>");
            });
        });

        $(".close").click(function(){
            $("#myModal").css("display", "none");
        });
    });
</script>

    </body>
    </html>

    <?php
} else {
    header('Location: discord_login.php');
    exit();
}
?>
