
<div class="row">
    <div class="col-md-12">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="h4 text-blue">Vendeurs en attente</h4>
                </div>
            </div>
            <div class="table-responsive mt-4">
                <table class="table table-borderless table-striped">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th>Nom</th>
                            <th>Nom d'utilisateur</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Document à vérifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sellers as $seller)
                        <tr>
                            <td>{{ $seller->name }}</td>
                            <td>{{ $seller->username }}</td>
                            <td>{{ $seller->email }}</td>
                            <td>
                                <form method="POST" action="{{route('admin.manage-sellers.update-seller-status', $seller->id)}} ">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" onchange="this.form.submit()">
                                        <option value="Pending" {{ $seller->status == 'Pending' ? 'selected' : '' }}>En attente</option>
                                        <option value="inActive" {{ $seller->status == 'inActive' ? 'selected' : '' }}>Rejeté</option>
                                        <option value="Active" {{ $seller->status == 'Active' ? 'selected' : '' }}>Accepté</option>
                                    </select>
                                </form>
                            </td>
                            <td>
                                <a href="{{ asset('style_assets/img/users/sellers/autorisations/'. $seller->username . '.jpg') }}" target="_blank">
                                    <i class="fas fa-file"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">
                                <span class="text-danger">Aucun vendeur en attente trouvé!</span>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
