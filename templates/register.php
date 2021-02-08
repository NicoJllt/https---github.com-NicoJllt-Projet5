<?php $this->title = "S'enregistrer"; ?>

<form method="post" action="../public/index.php?route=register" id="register-section">
    <h1>S'ENREGISTRER</h1>
    <label for="pseudo">NOM D'UTILISATEUR</label><br>
    <input type="text" class="pseudo-input" name="username" value="<?= isset($post) ? htmlspecialchars($post->get('username')) : ''; ?>"><br>
    <div class="constraint-error">
        <?= isset($errors['username']) ? $errors['username'] : ''; ?>
    </div>
    <label for="password">MOT DE PASSE</label><br>
    <input type="password" class="password-input" id="show-password" name="password"><br>
    <input type="checkbox" onclick="Afficher()"> Afficher le mot de passe<br>

    <div class="constraint-error">
        <?= isset($errors['password']) ? $errors['password'] : ''; ?>
    </div>
    <input type="submit" value="Inscription" class="submit-form" name="submit">
</form>