<center>
    <h1>

Bienvenue Grand ADMIN

</h1></center>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-demandes-tab" data-toggle="tab" href="#nav-demandes" role="tab" aria-controls="nav-demandes" aria-selected="true">Les demandes d'inscriptions</a> 
    <a class="nav-item nav-link" id="nav-profiles-tab" data-toggle="tab" href="#nav-profiles" role="tab" aria-controls="nav-profiles" aria-selected="false">Les profiles</a> 
    <a class="nav-item nav-link" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="false">Les places</a> 
    </div>
</nav>

<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-demandes" role="tabpanel" aria-labelledby="nav-demandes-tab">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nom / Prénom</th>
                    <th>Email</th>
                    <th>Confirmer</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <?php
        foreach($acceptme as $k => $v)
            {
        ?>
                <tr>
                    <td>
                        <?= $v['nom']."  ".$v['prenom'];?>
                    </td>
                    <td>
                        <?= $v['mail'];?>
                    </td>
                    <td><a href="<?=BASE_URL;?>/acceptInscrit/<?=$v['id_u'];?>">confirmer</a></td>
                    <td><a href="<?=BASE_URL;?>/admin/<?=$v['id_u'];?>">Supprimer</a></td>
                </tr>
                <?php
            }
            
        ?>
        </table>
    </div>
    
      <div class="tab-pane fade" id="nav-profiles" role="tabpanel" aria-labelledby="nav-profiles-tab">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nom / Prénom</th>
                    <th>Email</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <?php
        foreach($afficheUser as $key => $value)
            {
        ?>
                <tr>
                    <td>
                        <?= $value['nom']."  ".$value['prenom'];?>
                    </td>
                    <td>
                        <?= $value['mail'];?>
                    </td>
                    <td><a href="<?=BASE_URL;?>/admin/<?=$value['id_u'];?>">Supprimer</a></td>
                </tr>
                <?php
            }
        ?>
        </table>
    </div>
    
    
    <div class="tab-pane fade" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
        <div class="card card-login mx-auto mt-5 col-md-6">
            <div class="container">
                <div class="card card-login mx-auto mt-5 col-md-6">
                    <div class="card-header">Ajout d'une place</div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="text" name="nom_p" class="form-control" required="required" autofocus="autofocus">
                                    <label for="nom">Nommez la comme vous le voulez</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block" name="submit_place" type="submit">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nom / Prénom</th>
                        <th>Place</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                while($reponse = $usedPlace->fetch())
                {
            ?>
                        <tr>
                            <td>
                                <?= $reponse['nom']." ".$reponse['prenom'];?>
                            </td>
                            <td>
                                <?= $reponse['nom_p'];?>
                            </td>
                            <td><a href="<?=BASE_URL;?>/deleteUsedPlace/<?= $reponse['id_p'];?>">Supprimer</a></td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>