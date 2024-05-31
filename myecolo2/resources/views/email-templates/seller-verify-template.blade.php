
    <p>Cher {{ $seller->first_name }} {{ $seller->last_tname }}</p>

<p>
    Nous envoyons cet email pour vérifier le compte Vendeur associé avec {{ $seller_email }}
    <br>
    Vous pouvez vérifier votre compte en cliquant sur le lien ci-dessous: <br>
    <a href="{{ $actionLink }}">Vérifier le compte</a>
</p>