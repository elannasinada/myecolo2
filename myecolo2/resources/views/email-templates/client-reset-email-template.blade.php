<p>Cher {{ $client->name }}</p><br>
<p>
    Votre mot de passe sur {{ get_settings()->site_name }} a été modifié avec succès. Voici vos nouvelles informations de connexion :
    <br>
    <b>Identifiant de connexion : </b> {{ $client->email }}
    <br>
    <b>Mot de passe : </b>{{ $new_password }}
</p>
<br>
Veuillez garder vos informations de connexion confidentielles. Votre identifiant de connexion et votre mot de passe sont personnels et ne doivent jamais être partagés avec qui que ce soit.

<p>
    {{ get_settings()->site_name }} ne sera pas responsable de toute utilisation abusive de votre identifiant de connexion ou de votre mot de passe.
</p>
<br>
---------------------------------------
<p>
    Cet e-mail a été envoyé automatiquement par {{ get_settings()->site_name }}. Ne pas y répondre.
</p>
