<!--Вторая форма ввода адреса-->
        <form action="main.js" method="post" class="panel" id="order_form">
            <p></p>
                <label style="font-size: 18px;"><b>Информация о заказе</b></label><br>
                <label style="color: lightgray; font-size: 12px;">Доставим за 2 дня</label>
            <p></p>
            <div>
                <label>Полное имя</label><br>
                <input minlength="3" type="text" required id="fullname" name="fullname" require><br>
            </div>
            <div>
                <label>Адрес доставки</label><br>
                <input type="text" id="address" name="address"><br>
            </div>
            <div>
                <label>Комментарий к доставке</label><br>
                <textarea id="order_comm" name="order_comm"></textarea>
            </div>
            <div>
                <input required style="margin: 10px" type="checkbox" id="contract" name="contract">
                <label style="margin: 1px;" for="contract">Принять условия договoра-оферты</label>
            </div>
                <button type="button" id="click_order">Создать заказ</button>
            <p></p>
        </form>