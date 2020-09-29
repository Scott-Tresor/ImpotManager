<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Utilisateurs</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>
                            nom
                        </th>
                        <th>
                            post-nom
                        </th>
                        <th>
                            email
                        </th>
                        <th>
                            role
                        </th>
                        <th>
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <a href=""
                                   class="btn btn-outline-primary">
                                    <i class=" ti-new-window btn-icon-prepend"></i> Voir
                                </a>
                                <form onsubmit="return confirm('Voulez vous supprimer')" action="" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-secondary">
                                        <i class="ti-trash  btn-icon-prepend"></i> Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
