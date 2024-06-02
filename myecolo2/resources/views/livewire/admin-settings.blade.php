<div>

    <div class="tab">
        <ul class="nav nav-tabs customtab" role="tablist">
            <li class="nav-item">
                <a wire:click.prevent='selectTab("general_settings")' class="nav-link {{ $tab == 'general_settings' ? 'active' : '' }}" data-toggle="tab" href="#general_settings" role="tab" aria-selected="true">Paramètres généraux</a>
            </li>
            <li class="nav-item">
                <a  wire:click.prevent='selectTab("logo_favicon")' class="nav-link {{ $tab == 'logo_favicon' ? 'active' : '' }}" data-toggle="tab" href="#logo_favicon" role="tab" aria-selected="false">Logo et Favicon</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent='selectTab("social_networks")' class="nav-link {{ $tab == 'social_networks' ? 'active' : '' }}" data-toggle="tab" href="#social_networks" role="tab" aria-selected="false">Réseaux sociaux</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent='selectTab("payment_methods")' class="nav-link {{ $tab == 'payment_methods' ? 'active' : '' }}" data-toggle="tab" href="#payment_methods" role="tab" aria-selected="false">Méthodes de paiement</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade {{ $tab == 'general_settings' ? 'active show' : '' }}" id="general_settings" role="tabpanel">
                <div class="pd-20">
                    <form wire:submit='updateGeneralSettings()'>
                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Nom du site</b></label>
                                    <input type="text" class="form-control" placeholder="Entrez le nom du site" wire:model='site_name'>
                                    @error('site_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Email du site</b></label>
                                    <input type="text" class="form-control" placeholder="Entrez l'email du site" wire:model='site_email'>
                                    @error('site_email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Téléphone du site</b></label>
                                    <input type="text" class="form-control" placeholder="Entrez le téléphone du site" wire:model='site_phone'>
                                    @error('site_phone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Mots-clés méta du site</b><small> Séparés par une virgule (a,b,c)</small></label>
                                    <input type="text" class="form-control" placeholder="Entrez les mots-clés méta du site" wire:model='site_meta_keywords'>
                                    @error('site_meta_keywords') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label for="">Adresse du site</label>
                            <input type="text" class="form-control" placeholder="Entrez l'adresse du site" wire:model="site_address">
                            @error('site_address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                         </div>
                         <div class="form-group">
                            <label for="">Description générale du site</label>
                            <textarea  cols="4" rows="4" placeholder="Description méta du site...." class="form-control" wire:model='site_meta_description'></textarea>
                            @error('site_meta_description') <span class="text-danger">{{ $message }}</span> @enderror
                         </div>
                         <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade {{ $tab == 'logo_favicon' ? 'active show' : '' }}" id="logo_favicon" role="tabpanel">
                <div class="pd-20">
                    <div class="row">
                        <div class="col-md-6">
                             <h5>Logo du site</h5>
                             <div class="mb-2 mt-1" style="max-width: 200px;">
                                <img wire:ignore src="" class="img-thumbnail" data-ijabo-default-img="/style_assets/img/site/{{ $site_logo }}" id="site_logo_image_preview">
                            </div>
                             <form action="{{ route('admin.change-logo') }}" method="POST" enctype="multipart/form-data" id="change_site_logo_form">
                              @csrf
                              <div class="mb-2">
                                <input type="file" name="site_logo" id="site_logo" class="form-control">
                                <span class="text-danger error-text site_logo_error"></span>
                              </div>
                              <button type="submit" class="btn btn-primary">Changer le logo</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <h5>Favicon du site</h5>
                            <div class="mb-2 mt-1" style="max-width: 100px;">
                                <img wire:ignore src="" alt="" class="img-thumbnail" id="site_favicon_image_preview" data-ijabo-default-img="/style_assets/img/site/{{ $site_favicon }}">
                            </div>
                            <form action="{{ route('admin.change-favicon') }}" method="post" enctype="multipart/form-data" id="change_site_favicon_form">
                             @csrf
                             <div class="mb-2">
                                <input type="file" name="site_favicon" id="site_favicon" class="form-control">
                                <span class="text-danger error-text site_favicon_error"></span>
                             </div>
                             <button type="submit" class="btn btn-primary">Changer le favicon</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade {{ $tab == 'social_networks' ? 'active show' : '' }}" id="social_networks" role="tabpanel">
                <div class="pd-20">
                    <form wire:submit='updateSocialNetworks()'>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>URL Facebook</b></label>
                                    <input type="text" class="form-control" wire:model='facebook_url' placeholder="Entrez l'URL Facebook">
                                    @error('facebook_url'){{ $message }}@enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>URL Twitter</b></label>
                                    <input type="text" class="form-control" wire:model='twitter_url' placeholder="Entrez l'URL Twitter">
                                    @error('twitter_url'){{ $message }}@enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>URL Instagram</b></label>
                                    <input type="text" class="form-control" wire:model='instagram_url' placeholder="Entrez l'URL Instagram">
                                    @error('instagram_url'){{ $message }}@enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>URL YouTube</b></label>
                                    <input type="text" class="form-control" wire:model='youtube_url' placeholder="Entrez l'URL YouTube">
                                    @error('youtube_url'){{ $message }}@enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>URL GitHub</b></label>
                                    <input type="text" class="form-control" wire:model='github_url' placeholder="Entrez l'URL GitHub">
                                    @error('github_url'){{ $message }}@enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>URL Linkedin</b></label>
                                    <input type="text" class="form-control" wire:model='linkedin_url' placeholder="Entrez l'URL Linkedin">
                                    @error('linkedin_url'){{ $message }}@enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade {{ $tab == 'payment_methods' ? 'active show' : '' }}" id="payment_methods" role="tabpanel">
                <div class="pd-20">
                    ------ Méthodes de paiement ------
                </div>
            </div>
        </div>
    </div>

</div>
