<x-app-layout>
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-gray-900 dark:bg-gray-800 dark:text-red-400"
                            role="alert">

                            <span class="font-medium">{{ $error }}</span>

                        </div>
                    @endforeach
                @endif
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header px-4 py-3 border-bottom">
                            <h5 class="mb-0">Enregistrement d'un nouvel agent</h5>
                        </div>
                        <div class="card-body p-4">
                            <form id="jQueryValidationForm" method="post" action="{{ route('employes.store') }}">
                                @csrf
                                <!-- Nom -->
                                <div class="row mb-3">
                                    <label for="nom" class="col-sm-3 col-form-label">Nom</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-custom-dark" id="nom"
                                            name="nom" placeholder="Entrez le nom de l'agent" required>
                                    </div>
                                </div>

                                <!-- Postnom -->
                                <div class="row mb-3">
                                    <label for="postnom" class="col-sm-3 col-form-label">Postnom</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-custom-dark" id="postnom"
                                            name="postnom" placeholder="Entrez le postnom de l'agent" required>
                                    </div>
                                </div>

                                <!-- Prénom -->
                                <div class="row mb-3">
                                    <label for="prenom" class="col-sm-3 col-form-label">Prénom</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-custom-dark" id="prenom"
                                            name="prenom" placeholder="Entrez son prénom">
                                    </div>
                                </div>

                                <!-- Genre -->
                                <div class="row mb-3">
                                    <label for="genre" class="col-sm-3 col-form-label">Genre</label>
                                    <div class="col-sm-9">
                                        <select class="form-select bg-custom-dark" id="genre" name="genre"
                                            required>
                                            <option selected disabled value>Choisissez...</option>
                                            <option value="Homme">Homme</option>
                                            <option value="Femme">Femme</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- État civil -->
                                <div class="row mb-3">
                                    <label for="etat_civil" class="col-sm-3 col-form-label">État civil</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-custom-dark" id="etat_civil"
                                            name="etat_civil" placeholder="Entrez son état civil" required>
                                    </div>
                                </div>

                                <!-- Nationalité -->
                                <div class="row mb-3">
                                    <label for="nationalite" class="col-sm-3 col-form-label">Nationalité</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-custom-dark" id="nationalite"
                                            name="nationalite" placeholder="Entrez sa nationalité" required>
                                    </div>
                                </div>

                                <!-- Date de naissance -->
                                <div class="row mb-3">
                                    <label for="date_naissance" class="col-sm-3 col-form-label">Date de
                                        naissance</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control bg-custom-dark" id="date_naissance"
                                            name="date_naissance">
                                    </div>
                                </div>

                                <!-- Adresse physique -->
                                <div class="row mb-3">
                                    <label for="adresse_physique" class="col-sm-3 col-form-label">Adresse
                                        physique</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control bg-custom-dark" id="adresse_physique" name="adresse_physique" rows="3"
                                            placeholder="Entrez son adresse physique"></textarea>
                                    </div>
                                </div>

                                <!-- Téléphone -->
                                <div class="row mb-3">
                                    <label for="telephone" class="col-sm-3 col-form-label">Téléphone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-custom-dark" id="telephone"
                                            name="telephone" placeholder="Entrez son numéro de téléphone" required>
                                    </div>
                                </div>

                                <!-- Date d'embauche -->
                                <div class="row mb-3">
                                    <label for="date_embauche" class="col-sm-3 col-form-label">Date d'embauche</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control bg-custom-dark" id="date_embauche"
                                            name="date_embauche" required>
                                    </div>
                                </div>

                                <!-- Salaire -->
                                <div class="row mb-3">
                                    <label for="salaire" class="col-sm-3 col-form-label">Salaire</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-custom-dark" id="salaire"
                                            name="salaire" placeholder="Entrez le salaire" required>
                                    </div>
                                </div>

                                <!-- Poste -->
                                <div class="row mb-3">
                                    <label for="poste" class="col-sm-3 col-form-label">Poste</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-custom-dark" id="poste"
                                            name="poste" placeholder="Entrez le poste" required>
                                    </div>
                                </div>

                                <!-- Département -->
                                <div class="row mb-3">
                                    <label for="departement_id" class="col-sm-3 col-form-label">Département</label>
                                    <div class="col-sm-9">
                                        <select class="form-select bg-custom-dark" id="departement_id"
                                            name="departement_id" required>
                                            <option selected disabled value>Choisissez...</option>
                                            @foreach ($departements as $item)
                                                <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Boutons -->
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="submit" class="btn btn-white px-4">Enregistrer</button>
                                            <button type="reset" class="btn btn-light px-4">Réinitialiser</button>
                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
