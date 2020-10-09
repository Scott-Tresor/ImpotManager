<template>
    <div>
        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="revenuebrute">Loyer</label>
                        <input
                            type="text"
                            class="form-control"
                            id="revenuebrute"
                            placeholder="revenuebrute"
                            name="revenuebrute"
                            value=""
                        >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail3">Importe Retenue</label>
                        <input
                            type="text"
                            class="form-control"
                            id="exampleInputEmail3"
                            placeholder="importretenue"
                            name="importretenue"
                            value=""

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
                            class="form-control"
                            id="firstname"
                            placeholder="solde"
                            name="solde"
                            value=""
                        >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fonction">Date de depot</label>
                        <input
                            type="date"
                            class="form-control"
                            id="datedepot"
                            placeholder="datedepot"
                            name="datedepot"
                            value=""
                        >
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleSelectGender">Contribuable</label>
                        <select class="form-control" name="user_id" id="exampleSelectGender">

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
                            class="form-control"
                            id="reference"
                            placeholder="reference"
                            name="reference"
                            value=""
                        >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fonction">Date de paiement</label>
                        <input
                            type="date"
                            class="form-control"
                            id="datepaiement"
                            placeholder="datepaiement"
                            name="datepaiement"
                            value=""
                        >
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data {

        }
    }
</script>
