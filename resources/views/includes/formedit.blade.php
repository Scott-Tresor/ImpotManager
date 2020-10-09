<form class="forms-sample" method="post" action="{{ route('users.update', $user) }}">
    @method("PATCH")
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputName1">Nom</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}"
                    id="exampleInputName1"
                    placeholder="Nom du contribuable"
                    name="name"
                    value="{{ $user->name }}"
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
                    placeholder="Post-Nom du contribuable"
                    name="secondname"
                    value="{{ $user->secondname }}"
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
                    placeholder="Prenom du contribuable"
                    name="firstname"
                    value="{{ $user->firstname }}"
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
                    placeholder="Adresse Email du contribuable"
                    name="email"
                    value="{{ $user->email }}"
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
                    placeholder="Numero du telephone du contribuable"
                    name="phones"
                    value="{{ $user->phones }}"
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
                    placeholder="Numero d'indentification nationale Ex: 12345668"
                    name="national_identification"
                    value="{{ $user->national_identification }}"
                >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="commune">Commune</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('commune') ? 'is-invalid' : '' }}"
                    id="commune"
                    placeholder="Commune du contribuable"
                    name="commune"
                    value="{{ $user->commune }}"
                >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="ville">Ville</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('ville') ? 'is-invalid' : '' }}"
                    id="ville"
                    placeholder="ville"
                    name="ville"
                    value="{{ $user->ville }}"
                >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="quartier">Quartier</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('quartier') ? 'is-invalid' : '' }}"
                    id="quartier"
                    placeholder="quartier"
                    name="quartier"
                    value="{{ $user->quartier }}"
                >
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="number">Numero Parcelle</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('number') ? 'is-invalid' : '' }}"
                    id="number"
                    placeholder="number"
                    name="number"
                    value="{{ $user->number }}"
                >
            </div>
        </div>

    </div>
    <button type="submit" class="btn btn-primary mr-2">Enregistrement</button>
</form>
