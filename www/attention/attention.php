<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Посещаемость</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <a href="attention.php">
                    <li>Посещаемость</li>
                </a>
                <a href="students.php">
                    <li>Студенты</li>
                </a>
            </ul>
        </nav>
    </header>

    <section class="search">
        <div class="search__container container">
            <div class="attention__content">
                <form action="#" class="form">
                    <input type="search" id="text-to-find" autocomplete="off">
                    <button type="submit" onclick="javascript: FindOnPage('text-to-find',true); return false;">Поиск</button>
                </form>
            </div>
        </div>
    </section>

    <section class="data">
        <div class="data__container container">
            <div class="data__content">
                <table>
                    <th class="data__title">Номер студенческого билета</th>
                    <th class="data__title">Название дисциплины</th>
                    <th class="data__title">Посетил/Не посетил</th>
                    <th class="data__title">Дата посещения</th>                 
                    <?php
                    include 'app/database/connect.php';

                    $query_attent = 'SELECT * FROM attent';
                    $query_discipline = 'SELECT name_of_discipline FROM disciplines';
                                      
                    
                    if($result = $pdo->query($query_attent)){
                        foreach($result as $row){
                            echo "<tr>";
                                echo "<td>" . $row["id_student"] . "</td>";
                                echo "<td>" . $row["name_of_discipline"] . "</td>";
                                echo "<td>" . $row["is_here"] . "</td>";
                                echo "<td>" . $row["data_of_attention"] . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>

    <script src="assets/js/script.js"></script>
</body>
</html>