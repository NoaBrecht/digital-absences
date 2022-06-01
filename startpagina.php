<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include 'components/head-tags.php'; ?>
    <title>Startpagina</title>
    <script>
        function init(){
            // Zet in de sidebar de huidige pagina actief.
            document.getElementById('startpagina').classList.add("active");
        }
    </script>
</head>
<body onload="init()">
    <?php include 'components/header.php'; ?>
    <main>
        <div class="title">
            <h3>Titel naam</h3>
        </div>
        <div class="container">
            <div class="grid-container">
                <div class="card">
                    <div class="body">
                        <img src="img/circle-posters" alt="">
                    </div>
                    <div class="footer">

                    </div>
                </div>
                <div class="card">
                    2
                </div>
                <div class="card">
                3
                </div>
            </div>
        </div>
    </main>
    <?php include 'components/end-tags.php'; ?>
</body>
</html>