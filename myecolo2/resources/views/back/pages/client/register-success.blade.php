<!DOCTYPE html>
<html lang="fr">
<head>

    <!-- Site favicon -->

		<link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="/style_assets/img/site/{{ get_settings()->site_favicon }}"
    />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription réussie</title>
    <style>
        body{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .reg-success{
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-top: 2%;
        }
        .reg-success p{
            width: 100%;
            max-width: 320px;
            font-size: 18px;
        }
        .reg-success span{
            font-size: 2.3em;
            color: #7ff785;
            font-weight: bold;
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="reg-success">
        <span>&check;</span>
        <p>
            Félicitations, votre inscription a été effectuée avec succès.
            Veuillez vérifier votre adresse E-mail pour vous connecter.
        </p>
    </div>
</body>

</html>
