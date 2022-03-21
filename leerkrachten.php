<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include 'components/head-tags.php'; ?>
    <title>Startpagina</title>
    <script>
        function init(){
            // Zet in de sidebar de huidige pagina actief.
            document.getElementById('leerkrachten').classList.add("active");
        }
    </script>
</head>
<body onload="init()">
    <?php include 'components/header.php'; ?>
    <main>
        <div class="title">
            <h3>Leerkrachten</h3>
        </div>
        <div class="table-responsive">
        <table class="table table-striped">
        <thead class="table-secondary">
    <tr>
      <th scope="col">Achternaam</th>
      <th scope="col">Voornaam</th>
      <th scope="col">Afkorting</th>
      <th scope="col">Active</th>
      <th scope="col">Aanpassen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td >Willekens</td>
      <td>Stijn</td>
      <td>WIST</td>
      <td>  <button type="button" class="btn btn-success">active</button></td>
      <td><i class="bi bi-pencil-square"></i></td>
    </tr>
    <tr>
      <td >Adinau</td>
      <td>Tim</td>
      <td>ADTI</td>
      <td>  <button type="button" class="btn btn-success">active</button></td>
      <td><i class="bi bi-pencil-square"></i></td>
    </tr>
    <tr>
      <td >Vandepitte</td>
      <td>Jan</td>
      <td>VDPJ</td>
      <td>  <button type="button" class="btn btn-danger">inactive</button></td>
      <td><i class="bi bi-pencil-square"></i></td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
    </main>
    <?php include 'components/end-tags.php'; ?>
</body>
</html>