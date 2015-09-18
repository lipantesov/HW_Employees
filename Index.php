

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="windows-1251">
        <link rel="stylesheet" href="Styles.css">
        <link rel="stylesheet" href="bootstrap.css">

        <title></title>
    </head>
<body>


<div class="main" >
        <div class="form_css">

                <form  class="form-horizontal" role="form" action="add_new_Employee.php" method="post">
                    <br>
                    <label for="" style="margin-left: 260px"><h4>Добавление нового сотрудника</h4></label>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Имя</label>
                        <div class="col-sm-3">
                            <input required="required" type="text" name="Name" class="form-control" id="inputName" placeholder="Имя">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSurname" class="col-sm-2 control-label">Фамилия</label>
                        <div class="col-sm-3">
                            <input type="text" required="required" name="Surname" class="form-control" id="inputSurname" placeholder="Фамилия">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPosition" class="col-sm-2 control-label">Должность</label>
                        <div class="col-sm-3">
                            <input type="text" required="required" name="Position" class="form-control" id="inputPosition" placeholder="Должность">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="department" class="col-sm-2 control-label">Отдел</label>
                        <div class="col-sm-3">
                            <select name="department" class="form-control">
                                <option>Менеджмент</option>
                                <option>Бухгалтерия</option>
                                <option>Сбыт</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPay" class="col-sm-2 control-label">Оклад</label>
                        <div class="col-sm-3">
                            <input type="text" required="required" name="Pay" class="form-control" id="inputPay" placeholder="Оклад">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputBirthDay" class="col-sm-2 control-label">День рождения</label>
                        <div class="col-sm-3">
                            <input type="date" required="required" name="BirthDay" class="form-control" id="inputBirthDay" placeholder="День рождения">
                        </div>
                    </div>






                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Добавить</button>
                        </div>
                    </div>
                   </form>
            </div>
       <div>
