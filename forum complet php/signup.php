<!DOCTYPE html>
<html lang="en">
 <?php include 'includes/head.php';?>

<body>
    <br>
    <br>
<form class="container" method="POST">
  <div class="mb-3">
    <label for="Pseudo" class="form-label">Pseudo</label>
    <input type="text" class="form-control" name="pseudo">
  </div>
  <div class="mb-3">
    <label for="Nom" class="form-label">Nom</label>
    <input type="text" class="form-control" name="lastname">
  </div>
  <div class="mb-3">
    <label for="Prenom" class="form-label">Prénom</label>
    <input type="text" class="form-control" name="firstname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
</form>
    
</body>
</html>