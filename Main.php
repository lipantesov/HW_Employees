<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="windows-1251">
        <link rel="stylesheet" href="Styles.css">
        <link rel="stylesheet" href="bootstrap.css">

        <title></title>
    </head>
<body>




<div class="container" style="margin-top: 30px;">



    <form action="Index.php" style="position: absolute">
        <input type="submit" class="btn btn-success" value="Добавить сотрудника">

    </form>


        <div class="form-group" >
            <form action="" method="post">
            <div class="col-sm-2" style="float: right">
                <select class="form-control" name="selDep">
                    <option value="Менеджмент.txt">Менеджмент</option>
                    <option value="Бухгалтерия.txt">Бухгалтерия</option>
                    <option value="Сбыт.txt">Сбыт</option>
                </select>

            </div>
            </form>

        </div>

    <div>

        <table class="table" style="margin-top: 60px">
            <tr>
                <th>№</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Должность</th>
                <th>Отдел</th>
                <th>Оклад</th>
                <th>День рождения</th>
            </tr>

            <?php

            $count = 1;
            $file = fopen("Все сотрудники.txt","r") or die ("не удалось открыть файл");
            while(!feof($file))
            {
                $str_array[] = fgets($file);
            }
            $count_el_array = count($str_array);


            for($i=0;$i < $count_el_array;$i++) {
                echo '<tr id="' . $i . '">';

                $string = $str_array[$i];

                /* в качестве разделителей используем пробел*/

                $tok = strtok($string, "  ");
                echo "<td>$count</td>";
                while ($tok !== false) {
                    echo "<td>$tok</td>";
                    $tok = strtok("  ");
                }
$count++;

            }
            ?>
      </table>
    </div>

</div>

</body>

</html>
