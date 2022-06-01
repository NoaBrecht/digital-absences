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
            <h3>Leerkrachten</h3>
        </div>
        <div class="container">
            <p>Hier moet de lijst met leerkrachten geupload worden als deze gewijzigd is. De leerkrachten die al bestonden worden geupdate, de leerkrachten die niet meer in de lijst zitten worden verwijderd en de nieuwe leerkrachten worden toegevoegd.</p>

            <button type="button" class="btn btn-primary">Nieuw rooster uploaden</button>

        <table class="table">
            <thead>
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
                    <th scope="row">Willekens</th>
                    <td>Stijn</td>
                    <td>WIST</td>
                    <td><button type="button" class="btn btn-success">Active</button></td>
                </tr>   
                <tr>
                    <th scope="row">Adinau</th>
                    <td>Tim</td>
                    <td>ADTI</td>
                    <td><button type="button" class="btn btn-success">Active</button></td>
                </tr>
                <tr>    
                    <th scope="row">Vandepitte</th>
                    <td>Jan</td>
                    <td>VDPJ</td>
                    <td><button type="button" class="btn btn-danger">Inactive</button></td>
                </tr>
            </tbody>
            </table>
                    </div>
                    
    </main>
    <?php include 'components/end-tags.php'; ?>
</body>
</html>