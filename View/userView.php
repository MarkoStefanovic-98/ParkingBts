<center>
    <h1>

        Bienvenue Grand ADMIN

    </h1></center>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-demandes-tab" data-toggle="tab" href="#nav-demandes" role="tab" aria-controls="nav-demandes" aria-selected="true">Réserver une place</a>
        <a class="nav-item nav-link" id="nav-profiles-tab" data-toggle="tab" href="#nav-profiles" role="tab" aria-controls="nav-profiles" aria-selected="false">Les profiles</a>
    </div>
</nav>

<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-demandes" role="tabpanel" aria-labelledby="nav-demandes-tab">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Réserver une demande de place Parking</div>
                <div class="card-body">


                    <form method="POST">
                        <div class="form-group">

                            <div class="form-label-group">
                                <input type="date" id="inputDate" name="deb" class="form-control" placeholder="Date_deb" required="required" autofocus="autofocus">
                                <label for="inputDate">Date début</label>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="date" id="inputDate" name="fin" class="form-control" placeholder="Date_deb" required="required" autofocus="autofocus">
                                <label for="inputDate">Date début</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block" name="submit_reserve">Demander place</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="nav-profiles" role="tabpanel" aria-labelledby="nav-profiles-tab">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Nom / Prénom</th>
                <th>Compte</th>
                <th>Supprimer</th>
            </tr>
            </thead>
                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td></td>
                </tr>
        </table>
    </div>
</div>