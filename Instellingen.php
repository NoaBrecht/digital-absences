<!DOCTYPE html>
<html lang="nl">

<head>
    <?php include 'components/head-tags.php'; ?>
    <title>Instellingen</title>
    <script>
        function init() {
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
            <div class="split left">
                <div class="centered">
                    <img src="img_avatar2.png" alt="Avatar woman">
                    <h2>Jane Flex</h2>
                    <p>Some text.</p>
                </div>
            </div>

            <div class="split right">
                <div class="centered">
                    <img src="img_avatar.png" alt="Avatar man">
                    <h2>John Doe</h2>
                    <p>Some text here too.</p>
                </div>
            </div>

        </div>
        <div class="col border-start">

        </div>

    </main>
    <?php include 'components/end-tags.php'; ?>
</body>

</html>