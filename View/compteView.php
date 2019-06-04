<?php echo $_GET['id_u'];
    ?>

<ul class="list-group">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Changer le mot de passe</div>
            <div class="card-body">


                <form method="POST">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="hidden" name="id_u" value="<? $_GET['id_u'];?>">
                            <input type="password" id="inputPassword" name="mdp" class="form-control" placeholder="Password" required="required">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" name="submit_change" >Valider</button>
                </form>
            </div>
        </div>
    </div>
</ul>
