<?php
function e($v){ return htmlspecialchars($v ?? '', ENT_QUOTES, 'UTF-8'); }
function cls_invalid($errors, $field){ return ($errors[$field] ?? '') !== '' ? 'is-invalid' : ''; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion utilisateur</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/validation-ajax.js" defer></script>
</head>
<body>

  <main class="m-3 position">

    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header text-center"><h4>Connexion utilisateur</h4></div>
            <div class="card-body">

              <?php if (!empty($success)): ?>
                <div class="alert alert-success">Connexion réussie ✅</div>
              <?php endif; ?>

              <form id="loginForm" method="post" action="/login" novalidate>
                <div id="formStatus" class="alert d-none"></div>

                <div class="mb-3">
                  <label for="prenom" class="form-label">Prénom</label>
                  <input id="prenom" name="prenom" class="form-control <?= cls_invalid($errors,'prenom') ?>" value="<?= e($values['prenom'] ?? '') ?>">
                  <div class="invalid-feedback" id="prenomError"><?= e($errors['prenom'] ?? '') ?></div>
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Mot de passe</label>
                  <input id="password" name="password" type="password" class="form-control <?= cls_invalid($errors,'password') ?>">
                  <div class="invalid-feedback" id="passwordError"><?= e($errors['password'] ?? '') ?></div>
                </div>

                <button class="btn btn-primary w-100" type="submit">Valider</button>
                <a href="/exit" class="btn btn-primary w-100">Retour</a>
              </form>

              <script src="js/validation-ajax.js" defer></script>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

    <footer class="footer mt-auto py-3 text-white"> <div class="container text-center">
            <p class="mb-0 fs-6">&copy; 2026 V1-Tp Validation ETU4072</p>
        </div>
    </footer>

</body>
</html>