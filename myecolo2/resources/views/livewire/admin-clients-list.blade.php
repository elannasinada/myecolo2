<div class="row">
    <div class="col-md-12">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="h4 text-blue">Clients</h4>
                </div>
            </div>
            <div class="table-responsive mt-4">
                <table class="table table-borderless table-striped">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th>Nom</th>
                            <th>Nom d'utilisateur</th>
                            <th>Email</th>
                            <th>Adresse</th>
                            <th>Téléphone</th>
                            <th>Ville</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($clients as $client)
                        <tr>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->username }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->address }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>{{ $client->city }}</td>
                            <td>
                                    <a href="javascript:;" class="text-danger deleteCategoryBtn" wire:click="deleteClient({{ $client->id }})">
                                        <i class="dw dw-delete-3"></i>
                                    </a>

                                    @if (session()->has('message'))
                                        <div class="alert alert-{{ session('alert-type') }}">
                                            {{ session('message') }}
                                        </div>
                                    @endif

                                {{-- <form method="POST" action="{{ route('admin.manage-clients.delete', $client->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('êtes-vous sûr vous voulez supprimer ce client?')">Supprimer</button>
                                </form> --}}
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7"></td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
