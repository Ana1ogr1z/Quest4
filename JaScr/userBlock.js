document.addEventListener('DOMContentLoaded', function() {
    const makeUserBtn = document.getElementById('makeUserBlock');
    
    if (makeUserBtn) {
        makeUserBtn.addEventListener('click', function() {
            const userBlock = document.getElementById('userBlock');
            
            if (userBlock) {
                userBlock.hidden = !userBlock.hidden;
                this.textContent = userBlock.hidden ? 'Зарегистрироваться' : 'Скрыть форму регистрации';
            }
        });
    }

    // Обработка отправки формы отзыва
    const userForm = document.getElementById('userBlock');
    if (userForm) {
        userForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            this.submit();
        });
    }
});