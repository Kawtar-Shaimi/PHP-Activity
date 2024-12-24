<?php
    require_once('../DB/database.php');
    session_start();
    $sql = "SELECT * FROM livres";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>    
</head>
<body>
    <div class="whole-container">
            <div class="clients w-full px-3 mt-5">
                <p class="text-center pb-2 font-bold text-blue-900 text-xl lg:text-2xl">Liste des livres</p>
                <table class="table-auto border-collapse border border-gray-500 w-full text-xs">
                    <tr>
                        <th class="py-2 px-2 text-left text-sm lg:text-[15px] bg-blue-300">Titre</th>
                        <th class="py-2 px-2 text-left text-sm lg:text-[15px] bg-blue-300">Auteur</th>
                        <th class="py-2 px-2 text-left text-sm lg:text-[15px] bg-blue-300">Categorie</th>
                        <th class="py-2 px-2 text-left text-sm lg:text-[15px] bg-blue-300">Date Ajout</th>
                        <th class="py-2 px-2 text-left text-sm lg:text-[15px] bg-blue-300">Disponible</th>
                    </tr>
                    <?php
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr class='even:bg-yellow-50 odd:bg-blue-300'>";
                                echo "<td class='px-7 py-2 text-sm lg:text-[15px] '>" . $row['titre'] . "</td>";
                                echo "<td class='px-2 py-2 text-sm lg:text-[15px]'>" . $row['auteur'] . "</td>";
                                echo "<td class='px-2 py-2 text-sm lg:text-[15px]'>" . $row['categorie'] . "</td>";
                                echo "<td class='px-2 py-2 text-sm lg:text-[15px]'>" . $row['date_ajout'] . "</td>";
                                echo "<td class='px-2 py-2 text-sm lg:text-[15px]'>" . $row['disponible'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center py-2'>No Livre Found</td></tr>";
                        }
                        $conn->close();
                    ?>
                </table>
            </div> 
        </div>
        </div>
    </div>
</body>
</html>