<form class="forms-sample" method="post" action="{{ route('users.store') }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputName1">Nom</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}"
                    id="exampleInputName1"
                    placeholder="name"
                    name="name"
                    value="{{ old('name') }}"
                >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Post-Nom</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('secondname') ? 'is-invalid' : '' }}"
                    id="exampleInputEmail3"
                    placeholder="secondname"
                    name="secondname"
                    value="{{ old('secondname') }}"
                >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="firstname">Prenom</label>
                <input
                    type="month"
                    class="form-control {{ $errors->first('firstname') ? 'is-invalid' : '' }}"
                    id="firstname"
                    placeholder="firstname"
                    name="firstname"
                    value="{{ old('firstname') }}"
                >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="fonction">Adresse Email</label>
                <input
                    type="month"
                    class="form-control {{ $errors->first('email') ? 'is-invalid' : '' }}"
                    id="email"
                    placeholder="email"
                    name="email"
                    value="{{ old('email') }}"
                >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="phones">Numero de Telephone</label>
                <input
                    type="month"
                    class="form-control {{ $errors->first('phones') ? 'is-invalid' : '' }}"
                    id="phones"
                    placeholder="phones"
                    name="phones"
                    value="{{ old('phones') }}"
                >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="national_identification">Numero d'identification nationale</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('national_identification') ? 'is-invalid' : '' }}"
                    id="national_identification"
                    placeholder="national_identification"
                    name="national_identification"
                    value="{{ old('national_identification') }}"
                >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="province">Province</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('province') ? 'is-invalid' : '' }}"
                    id="province"
                    placeholder="province"
                    name="province"
                    value="{{ old('province') }}"
                >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="commune">Commune</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('commune') ? 'is-invalid' : '' }}"
                    id="commune"
                    placeholder="commune"
                    name="commune"
                    value="{{ old('commune') }}"
                >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="ville">Ville</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('ville') ? 'is-invalid' : '' }}"
                    id="ville"
                    placeholder="ville"
                    name="ville"
                    value="{{ old('ville') }}"
                >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="quartier">Quartier</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('quartier') ? 'is-invalid' : '' }}"
                    id="quartier"
                    placeholder="quartier"
                    name="quartier"
                    value="{{ old('quartier') }}"
                >
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="number">Numero Parcelle</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('number') ? 'is-invalid' : '' }}"
                    id="number"
                    placeholder="number"
                    name="number"
                    value="{{ old('number') }}"
                >
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="number">Mot de passe</label>
                <input
                    type="password"
                    class="form-control {{ $errors->first('password') ? 'is-invalid' : '' }}"
                    id="password"
                    placeholder="password"
                    name="password"
                    value="{{ old('password') }}"
                >
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Enregistrement</button>
</form>
