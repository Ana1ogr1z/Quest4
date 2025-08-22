<div class="reviews-container">
    <?php 
    $maxReviews = 6;
    $counter = 0;
    
    if (!empty($reviews)): 
        foreach ($reviews as $review): 
            if ($counter >= $maxReviews) break;
            
            $name = htmlspecialchars($review['name'] ?? 'Аноним');
            $comment = htmlspecialchars($review['comment'] ?? 'Без комментария');
    ?>
            <div class="review-card">
                <div class="card-header">
                    <h5 class="card-title"><?= $name ?></h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><?= nl2br($comment) ?></p>
                </div>
                <div class="card-footer">
                    <div class="btn-group">
                       <a href="edit.php?entity=review&id=<?= (int)$review['id'] ?>" 
                        class="btn btn-outline-primary">
                            Редактировать
                        </a>
                        <form method="post" action="delete.php">
                            <input type="hidden" name="entity" value="review">
                            <input type="hidden" name="id" value="<?= (int)$review['id'] ?>">
                            <button type="submit" 
                                    class="btn btn-outline-danger"
                                    onclick="return confirm('Удалить этот отзыв?')">
                                Удалить
                            </button>
                        </form>
                    </div>
                </div>
            </div>
    <?php 
            $counter++;
        endforeach; 
    else: 
    ?>
        <div class="no-reviews">
            <p>Пока нет отзывов. Будьте первым!</p>
        </div>
    <?php endif; ?>
</div>