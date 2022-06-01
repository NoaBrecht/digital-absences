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
        <div class="container">
            <div class="grid-container">
                <div class="card">
                    <div class="body">
                        <img src="img/circle-posters.png" alt="">
                    </div>
                    <div class="footer text-center">    
                        <h4>Posterss</h4>
                        <p>Upload posters of afbeeldingen om weer te geven</p>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <img src="img/circle-bestanden.png" alt="">
                    </div>
                    <div class="footer text-center">    
                        <h4>Leerkrachten</h4>
                        <p>Pas de leerkrachten aan</p>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <img src="img/circle-vervangingen.png" alt="">
                    </div>
                    <div class="footer text-center">    
                        <h4>Vervangingen</h4>
                        <p>Stel de vervangingen met afwezige leerkrachten op</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'components/end-tags.php'; ?>
</body>
</html>