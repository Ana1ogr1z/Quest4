document.addEventListener('DOMContentLoaded', function() {
    const makeReviewBtn = document.getElementById('makeReviewBlock');
    
    if (makeReviewBtn) {
        makeReviewBtn.addEventListener('click', function() {
            const reviewBlock = document.getElementById('reviewBlock');
            
            if (reviewBlock) {
                reviewBlock.hidden = !reviewBlock.hidden;
                this.textContent = reviewBlock.hidden ? 'Добавить отзыв' : 'Скрыть форму отзыва';
            }
        });
    }

    // Обработка отправки формы отзыва
    const reviewForm = document.getElementById('reviewBlock');
    if (reviewForm) {
        reviewForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            this.submit();
        });
    }

    
});