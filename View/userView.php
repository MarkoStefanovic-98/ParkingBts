<center>
    <h1>

        Bienvenue Grand ADMIN

    </h1></center>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-demandes-tab" data-toggle="tab" href="#nav-demandes" role="tab" aria-controls="nav-demandes" aria-selected="true">Réserver une place</a>
        <a class="nav-item nav-link" id="nav-profiles-tab" data-toggle="tab" href="#nav-profiles" role="tab" aria-controls="nav-profiles" aria-selected="false">Votre Place en cours</a>
        <a class="nav-item nav-link" id="nav-his-tab" data-toggle="tab" href="#nav-his" role="tab" aria-controls="nav-his" aria-selected="false">Votre historique</a>
        <a class="nav-item nav-link" id="nav-pro-tab" data-toggle="tab" href="#nav-pro" role="tab" aria-controls="nav-pro" aria-selected="false">Votre profile</a>
        <a class="nav-item nav-link" id="nav-place-tab" data-toggle="tab" href="#nav-place" role="tab" aria-controls="nav-place" aria-selected="false">Votre demande de place</a>
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
                                <label for="inputDate">Date fin</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="submite">Demander place</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="nav-profiles" role="tabpanel" aria-labelledby="nav-profiles-tab">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Numéros de la place</th>
                <th>date début - date fin</th>
            </tr>
            </thead>
            <?php
            foreach($valide as $key => $value)
            {
            ?>
                <tr>
                    <td>
                        <?=$value['nom_p'];?>
                    </td>
                    <td>
                        <?=$value['date_deb'];?>
                    </td>
                    <td>
                        <?=$value['date_fin'];?>
                    </td>
                </tr>

                <?php
            }
            ?>
        </table>
    </div>

    <div class="tab-pane fade" id="nav-his" role="tabpanel" aria-labelledby="nav-his-tab">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Nom de la place</th>
                <th>Date début - Date fin</th>
            </tr>
            </thead>
            <?php
            foreach($reponse as $key => $value)
            {
            ?>
            <tr>
                <td>
                    <?=$value['nom_p'];?>
                </td>
                <td>
                    <?=$value['date_deb'];?> /
                    <?=$value['date_fin'];?>
                </td>
            </tr>
                <?php
            }
            ?>
        </table>
    </div>

    <div class="tab-pane fade" id="nav-pro" role="tabpanel" aria-labelledby="nav-pro-tab">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Nom / Prénom</th>
                <th>formulaire a mettre</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tr>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
        </table>
    </div>

    <div class="tab-pane fade" id="nav-place" role="tabpanel" aria-labelledby="nav-place-tab">
        <table class="table table-hover">
            <thead>
            <tr>

                <th>Nom place</th>
                <th>Date début - Date fin</th>
                <th>Etat</th>
            </tr>
            </thead>
            <?php
            foreach($demande as $key => $value)
            {
            ?>
            <tr>
                <td>
                    place numéro : <?=$value['nom_p'];?>
                </td>
                <td>
                    <?=$value['date_deb'];?> /
                    <?=$value['date_fin'];?>
                </td>
                <td>en cours de vérification</td>
            </tr>
                <?php
            }
            ?>
        </table>
    </div>

</div>