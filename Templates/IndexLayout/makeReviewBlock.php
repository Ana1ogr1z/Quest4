<button type="button" style="width: 200px; height: 30px; margin-left: 45%;" id="makeReviewBlock">Добавить отзыв</button>
<form action="create_review.php" method="post" class="panel" id="reviewBlock" hidden>
    <p></p>
    <label class="responseTitle" style="margin-left: 2%;">Оставьте свой отзыв!</label>
    <p></p>
    <div>   
        <label>Полное имя</label><br>
        <input minlength="3" type="text" required id="fullnameReview" name="fullnameReview"><br>
    </div>
    <div>   
        <label>Адрес</label><br>
        <input minlength="3" type="text" required id="addressReview" name="addressReview"><br>
    </div>
    <div>
        <label>Отзыв</label><br>
        <textarea required maxlength="500" id="messageReview" name="messageReview"></textarea><br>
    </div>
    <p></p>
    <button type="submit" id="sendButtonReview">Отправить отзыв</button>
    <p></p>
</form>