<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Contribuables</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>
                            Revenue Brute
                        </th>
                        <th>
                            Taux
                        </th>
                        <th>
                            Solde
                        </th>
                        <th>
                            Date Paiement
                        </th>
                        <th>
                            Reference
                        </th>
                        <th>
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($impots as $user)
                        <tr class="text-center">
                            <td>
                                {{ $user->name ?? 'Pas de nom' }}
                            </td>
                            <td>
                                {{ $user->secondname ?? 'Pas de postnom' }}
                            </td>
                            <td>
                                {{ $user->email ?? 'Pas d email' }}
                            </td>
                            <td>
                                {{ $user->quartier ?? 'Pas de quartier' }}
                            </td>
                            <td>
                                {{ $user->province ?? 'Pas de province' }}
                            </td>
                            <td>
                                {{ $user->ville ?? 'Pas de ville' }}
                            </td>
                            <td>
                                <a href="{{ route('impot.show', $user->id) }}"
                                   class="btn btn-outline-primary">
                                    <i class=" ti-new-window btn-icon-prepend"></i> Voir
                                </a>
                                <a href="{{ route('impot.edit', $user->id) }}"
                                   class="btn btn-outline-secondary">
                                    <i class="ti-server  btn-icon-prepend"></i> Editer
                                </a>
                                @can('delete-user')
                                    <form onsubmit="return confirm('Voulez vous supprimer')" action="" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">
                                            <i class="ti-trash  btn-icon-prepend"></i> Supprimer
                                        </button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
