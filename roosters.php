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

            <button type="button" class="btn btn-primary">Nieuw rooster uploaden</button>

        <table>
            <thead>
                <tr>
                    <th scope="col">Bestandsnaam</th>
                    <th scope="col">Datum</th>
                    <th scope="col">Aanpassen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>GPU003</th>
                    <td>1/12/2021 18:39</td>
                    <td><i class="bi bi-trash"></i></td>
                </tr>   
                <tr>
                    <td>GPU002</th>
                    <td>1/12/2021 18:39</td>
                    <td><i class="bi bi-trash"></i></td>
                </tr>
                <tr>    
                    <td>GPU001</th>
                    <td>1/12/2021 18:39</td>
                    <td><i class="bi bi-trash"></i></td>
                </tr>
            </tbody>
            </table>
                    </div>
                    
    </main>
    <?php include 'components/end-tags.php'; ?>
</body>
</html>