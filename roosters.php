<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include 'components/head-tags.php'; ?>
    <title>Startpagina</title>
    <script>
        function init(){
            // Zet in de sidebar de huidige pagina actief.
            document.getElementById('roosters').classList.add("active");
        }
    </script>
</head>
<body onload="init()">
    <?php include 'components/header.php'; ?>
    <main>
        <div class="title">
            <h3>Roosters</h3>
        </div>
        <div class="container">
            <p>Hier moet het roosterbestand geupload worden als deze gewijzigd is. Er wordt telkens van de laatst geuploade rooster gebruik gemaakt.</p>
            <p>Laatst geuploade rooster: 1/12/2021 18:39</p>
        </div>
        <button type="button" class="btn btn-primary">Nieuw rooster uploaden</button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Bestandsnaam</th>
      <th scope="col">Datum</th>
      <th scope="col">Aanpassen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>GPU003</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>GPU002</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>GPU001 Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </main>
    <?php include 'components/end-tags.php'; ?>
</body>
</html>