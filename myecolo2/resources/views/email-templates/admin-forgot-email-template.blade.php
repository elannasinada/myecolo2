<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réinitialisation du mot de passe</title>
</head>
<body>
    <p> Cher\ Chère {{ $admin->first_name }} {{ $admin->last_name }}</p>
    <p>
    Nous avons reçu une demande de réinitialisation du mot de passe pour le compte Myecolo associé à l'adresse {{ $admin->email }}. Si vous avez fait cette demande, veuillez cliquer sur le lien ci-dessous pour réinitialiser votre mot de passe:
    <br><br><br>
    <a href="{{ $actionLink }}" target="_blank" style="background-color: #22bc66; border: 5px solid #22bc66; border-radius: 3px; box-shadow: 2px 3px rgba(0, 0, 0, 0.16); color: #fff; display: inline-block; padding: 10px 20px; text-decoration: none;">
        Réinitialiser le mot de passe</a>
        <br><br><br><br>
    <p> <b>Important :</b>
    Ce lien sera valide pendant 15 minutes.
    </p>
    <p> Si vous n'avez pas demandé de réinitialisation de mot de passe, veuillez ignorer cet e-mail.
    </p>
</body>
</html>
