<div class="col-6">
    <form action="update.php?entity=user" method="post" style="display: flex; flex-direction: column; gap: 1rem;">
        <input type="text" value="<?= htmlspecialchars($user['name'] ?? '') ?>" name="name" placeholder="Имя" required>
        <input type="text" value="<?= htmlspecialchars($user['surname'] ?? '') ?>" name="surname" placeholder="Фамилия">
        <input type="email" value="<?= htmlspecialchars($user['email'] ?? '') ?>" name="email" placeholder="Email" required>
        <input type="hidden" name="entity" value="user">
        <input type="hidden" value="<?= (int) ($user['id'] ?? 0) ?>" name="id">

        <button type="submit">Сохранить</button>
    </form>
</div>