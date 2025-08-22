<button type="button" style="width: 200px; height: 30px; margin-left: 45%;" id="makeUserBlock">Зарегистрироваться
</button>
<form action="register.php" method="post" class="panel" id="userBlock" hidden>
    <p></p>
    <label class="responseTitle" style="margin-left: 2%;">Зарегистрируйтесь!</label>
    <p></p>
    <div>   
        <label>Имя</label><br>
        <input minlength="3" type="text" required id="name" name="name"><br>
    </div>
    <div>   
        <label>Фамилия</label><br>
        <input minlength="3" type="text" required id="surname" name="surname"><br>
    </div>
    <div>
        <label>Почта</label><br>
        <textarea required maxlength="500" id="email" name="email"></textarea><br>
    </div>
    <p></p>
    <button type="submit" id="sendButtonUser">Отправить отзыв</button>
    <p></p>
</form>