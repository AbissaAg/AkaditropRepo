<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akaditro</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ffecd2, #fcb69f);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #343a40;
        }

        .link-image {
            display: block;
            margin: 20px auto;
            max-width: 80%;
            height: auto;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .link-image:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        .image-wrapper {
            margin-bottom: 30px;
        }

        .image-description {
            font-size: 22px;
            font-weight: bold;
            color: #ffffff;
            margin-top: 10px;
        }

        .title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 40px;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .row {
            justify-content: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="title">Bienvenue chez Akaditro</h1>
        <div class="row">
            <div class="col-md-5 image-wrapper">
                <a href="BoutiquePrincipale">
                    <img src="icono-negro.png" alt="Boutique" class="link-image">
                    <p class="image-description">Boutique Principale</p>
                </a>
            </div>
            <div class="col-md-5 image-wrapper">
                <a href="Evenement">
                    <img src="facture.jpg" alt="Evenement" class="link-image">
                    <p class="image-description">Événements</p>
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optionnel) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
