<form class="forms-sample" method="post" action="{{ route('impot.store') }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="revenuebrute">Loyer</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('revenuebrute') ? 'is-invalid' : '' }}"
                    id="revenuebrute"
                    placeholder="revenuebrute"
                    name="revenuebrute"
                    value="{{ old('revenuebrute') }}"
                >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Importe Retenue</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('importretenue') ? 'is-invalid' : '' }}"
                    id="exampleInputEmail3"
                    placeholder="Montant a  payer"
                    name="impotretenue"
                    value="{{ request()->get('revenuebrute') * 100/22 }}"

                >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="firstname">Solde de l'impot</label>
                <input
                    type="month"
                    class="form-control {{ $errors->first('solde') ? 'is-invalid' : '' }}"
                    id="firstname"
                    placeholder="solde"
                    name="solde"
                    value="{{ old('solde') }}"
                >
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="fonction">Date de depot</label>
                <input
                    type="date"
                    class="form-control {{ $errors->first('datedepot') ? 'is-invalid' : '' }}"
                    id="datedepot"
                    placeholder="datedepot"
                    name="datedepot"
                    value="{{ old('datedepot') }}"
                >
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleSelectGender">Contribuable</label>
                <select class="form-control" name="user_id" id="exampleSelectGender">
                    @foreach($user as $eleves)
                        <option class="text-black" id="{{ $eleves->id }}" value="{{ $eleves->id }}">{{ $eleves->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="fonction">Refference paiment</label>
                <input
                    type="text"
                    class="form-control {{ $errors->first('reference') ? 'is-invalid' : '' }}"
                    id="reference"
                    placeholder="reference"
                    name="reference"
                    value="{{ old('reference') }}"
                >
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="fonction">Date de paiement</label>
                <input
                    type="date"
                    class="form-control {{ $errors->first('datepaiement') ? 'is-invalid' : '' }}"
                    id="datepaiement"
                    placeholder="datepaiement"
                    name="datepaiement"
                    value="{{ old('datepaiement') }}"
                >
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Enregistrement</button>
</form>

