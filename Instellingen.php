<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include 'components/head-tags.php'; ?>
    <title>Instellingen</title>
    <script>
        function init(){
            // Zet in de sidebar de huidige pagina actief.
            document.getElementById('instellingen').classList.add("active");
        }
    </script>
  </head>
<body onload="init()">
    <?php include 'components/header.php'; ?>
    <main>
        <div class="title">
            <h3>Instellingen</h3>
        </div>
        <div class="container">
        <div class="row align-items-start">
        <div class="col col-md-2 ">
        <div class="row">
            <a href="" class="link-primary">  Account instellingen</a>
        </div>
        <div class="row">
        <a href="#" class="link-secondary">Wachtwoord wijzigen</a>
         </div>
    </div>
    </div>
    </div>
    <div class="col border-start">

    </div>

    </main>
    <?php include 'components/end-tags.php'; ?>
</body>
</html>