<center>
    <h1>

Bienvenue Grand ADMIN

</h1></center>
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
    <div class="card card-login mx-auto mt-5 col-md-6">
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
                    <td><?= $reponse['nom']." ".$reponse['prenom'];?></td>
                    <td><?= $reponse['nom_p'];?></td>
                    <td><a href="<?=BASE_URL;?>/deleteUsedPlace/<?= $reponse['id_p'];?>">Supprimer</a></td>
                </tr>
                
                 <?php } ?>
                
            </tbody>
        </table>
    </div>