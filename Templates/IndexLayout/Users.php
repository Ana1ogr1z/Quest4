<div class="users-container">
    <?php foreach ($users as $user): ?>
        <div class="user-item">
        <span></span>
            <span class="user-name"><?= htmlspecialchars($user['name']) ?></span>
            <span class="user-surname"><?= htmlspecialchars($user['surname']) ?></span>
            <a href="edit.php?entity=user&id=<?= (int)$user['id'] ?>" 
                   class="btn btn-outline-primary btn-sm">
                    Редактировать
                </a>
            <span class="user-email"><?= htmlspecialchars($user['email']) ?></span>
            <div class="user-actions">
                <form method="post" action="delete.php" style="display: inline;">
                    <input type="hidden" name="entity" value="user">
                    <input type="hidden" name="id" value="<?= (int)$user['id'] ?>">
                    <button type="submit" 
                            class="btn btn-outline-danger btn-sm"
                            onclick="return confirm('Удалить этого пользователя?')">
                        Удалить
                    </button>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>