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
    <style>
        .container {
            padding-top: 0px !important;
display: flex;
                align-items: flex-start;
            }
    </style>
</head>

<body onload="init()">
    <?php include 'components/header.php'; ?>
    <main>
        <div class="title">
            <h3>Instellingen</h3>
        </div>
        <div class="container">
            <div class="left">
                <div class="d-grid gap-2">
                    <a href="#" class="link-primary">Account instellingen</a>
                    <a href="#" class="link-primary">Wachtwoord wijzigen</a>

                </div>

            </div>
            <div class="right">
            </div>

        </div>
        <div class="col border-start">

        </div>

    </main>
    <?php include 'components/end-tags.php'; ?>
</body>

</html>