
    <p>Cher {{ $seller_name }}</p>

<p>
    Nous envoyons cet email pour vérifier le compte Vendeur associé avec {{ $seller_email }}
    <br>
    Vous pouvez voir l'autorisation de vente commerciale ci-dessous, puis vérifier le compte en cliquant sur le lien suivant: <br>
    <a href="{{ $actionLink }}">Vérifier le compte</a>

    {{-- <img src="{{ $autorisation }}" alt="Autorisation de vente commerciale" style="width: 100%; height: auto;"> --}}
</p>
