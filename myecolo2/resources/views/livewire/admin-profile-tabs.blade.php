<div>
    <div class="profile-tab height-100-p">
        <div class="tab height-100-p">
            <ul class="nav nav-tabs customtab" role="tablist">
                <li class="nav-item">
                    <a wire:click.prevent="selectTab('personal_details')"  class="nav-link {{$tab == 'personal_details' ? 'active' : ''}}" data-toggle="tab" href="#personal_details" role="tab">Détails personnels</a>
                </li>
                <li class="nav-item">
                    <a wire:click.prevent="selectTab('update_password')" class="nav-link {{$tab == 'update_password' ? 'active' : ''}}" data-toggle="tab" href="#update_password" role="tab">Modifier le mot de passe</a>
                </li>
                </li>
            </ul>
            <div class="tab-content">

                <!-- Timeline Tab start -->
                <div class="tab-pane fade  {{ $tab == 'personal_details' ? 'active show' : ''}}" id="personal_details" role="tabpanel">
                    <div class="pd-20">
                        <form wire:submit.prevent='updateAdminPersonalDetails()'>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Prénom</label>
                                        <input type="text" class="form-control" wire:model='first_name' placeholder="Entrez votre prénom"/>
                                        @error('first_name')
                                            <spane class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nom</label>
                                        <input type="text" class="form-control" wire:model='last_name' placeholder="Entrez votre nom"/>
                                        @error('last_name')
                                            <spane class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" wire:model='email' placeholder="Entrez votre adresse email"/>
                                        @error('email')
                                            <spane class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary"> Enregistrer </button>
                        </form>
                    </div>
                </div>
                <!-- Timeline Tab End -->
                <!-- Tasks Tab start -->
                <div class="tab-pane fade  {{$tab == 'update_password' ? 'active show' : ''}}" id="update_password" role="tabpanel">
                    <div class="pd-20 profile-task-wrap">
                        ------ update password here
                    </div>
                </div>
                <!-- Tasks Tab End -->
            </div>
        </div>
    </div>
</div>
