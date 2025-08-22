//Проверка подключения библиотек
console.log(typeof $ !== 'undefined' ? '✅ jQuery подключен' : '❌ jQuery не найден');
console.log(typeof bootstrap !== 'undefined' ? '✅ Bootstrap подключен' : '❌ Bootstrap не найден');

//для первой
document.addEventListener('DOMContentLoaded', function(){

    //Для второй
document.getElementById("click_order").addEventListener("click", function(){
        
    let fullname = document.getElementById("fullname")?.value.trim() || "";
    let address = document.getElementById("address")?.value.trim() || "";
    let order_comm = document.getElementById("order_comm")?.value.trim() || "";
    let contract = document.getElementById("contract")?.checked || false;
    
    if (!fullname) {
        Swal.fire({
            icon: 'warning',
            title: 'Не все поля заполнены',
            text: 'Пожалуйста, укажите ваше полное имя',
        });
        return;
    }
    
    if (!contract) {
        Swal.fire({
            icon: 'error',
            title: 'Требуется согласие',
            text: 'Для продолжения необходимо принять условия договора-оферты',
        });
        return;
    }
    
    Swal.fire({
        icon: 'success',
        title: 'Заказ создан!',
        html: `Полное имя: ${fullname}<br>` + 
        `Адрес доставки: ${address || "Не указан"}<br>` + 
        `Комментарий к доставке: ${order_comm || "Нет комментариев"}<br>`,
        confirmButtonText: 'OK'
    });
});
    
    document.getElementById("sendButton").addEventListener("click",function(){
        
        let username = $('#user_name').val().trim() || "";
        let usersurname = $('#user_surname').val().trim() || "";
        let email = $('#email').val().trim() || "";
        let message = $('#message').val().trim() || "";

        $('#result').text('Отправка запроса на сервер...');
        
        $.ajax({
            url: 'https://httpbin.org/post',
            type: 'POST',
            contentType: 'application/json',
            dataType: 'json',
            data: JSON.stringify({
                username: username,
                usersurname: usersurname,
                email: email,
                message: message
            }),

            success: function(response) {
                $('#result').html(
                    '<strong>Успешный ответ от сервера:</strong><br>' + JSON.stringify(response, null, 2)
                );
            },
            
            error: function(xhr, status, error) {
                $('#result').html(
                    '<strong>Произошла ошибка:</strong><br>' +
                    'Статус: ' + status + '<br>' +
                    'Текст ошибки: ' + error
                );

                console.error('AJAX Error:', status, error);
                console.error('Full response:', xhr.responseText);
            },
            
            complete: function() {
                console.log('AJAX запрос завершен');
            }
        });
        
        });

        //Для второй
document.getElementById("click_order").addEventListener("click", function(){
        
    let fullname = document.getElementById("fullname")?.value.trim() || "";
    let address = document.getElementById("address")?.value.trim() || "";
    let order_comm = document.getElementById("order_comm")?.value.trim() || "";
    let contract = document.getElementById("contract")?.checked || false;
    
    if (!fullname) {
        Swal.fire({
            icon: 'warning',
            title: 'Не все поля заполнены',
            text: 'Пожалуйста, укажите ваше полное имя',
        });
        return;
    }
    
    if (!contract) {
        Swal.fire({
            icon: 'error',
            title: 'Требуется согласие',
            text: 'Для продолжения необходимо принять условия договора-оферты',
        });
        return;
    }
    
    Swal.fire({
        icon: 'success',
        title: 'Заказ создан!',
        html: `Полное имя: ${fullname}<br>` + 
        `Адрес доставки: ${address || "Не указан"}<br>` + 
        `Комментарий к доставке: ${order_comm || "Нет комментариев"}<br>`,
        confirmButtonText: 'OK'
    });
});
    });

        
