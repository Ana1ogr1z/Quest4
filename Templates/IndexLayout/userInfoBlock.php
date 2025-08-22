<!--Первая форма ввода данных-->
        <form class="panel" id="user_info">
            <p></p>
            <div>   
                <label>Имя</label><br>
                <input minlength="3" type="text" required id="user_name" name="user_name"><br>
            </div>
            <div>
                <label>Фамилия</label><br>
                <input type="text" id="usersurname" name="user_surname"><br>
            </div>
            <div>
                <label>Почта</label><br>
                <input type="email" required id="email" name="email"><br>
            </div>
            <div>
                <label>Сообщение</label><br>
                <textarea required maxlength="80" id="message" name="message"></textarea><br>
            </div>
                <button type="submit" id="sendButton">Отправить</button>
            <p></p>
        </form>