<ul class="list-group">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Modifier les identidiants compte de l'utilisateur</div>
            <div class="card-body">

                <form method="POST">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="hidden" name="id_u" value="<? $_GET['id_u'];?>">
                            <input type="text" id="inputPassword" name="nom" class="form-control" placeholder="nom" required="required">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" name="submit_nom" >Changer nom</button><br>
                </form>
                <form method="POST">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="hidden" name="id_u" value="<? $_GET['id_u'];?>">
                            <input type="text" id="inputPassword" name="prenom" class="form-control" placeholder="text" required="required">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" name="submit_prenom" >Changer prenom</button></br>
                </form>
                <form method="POST">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="hidden" name="id_u" value="<? $_GET['id_u'];?>">
                            <input type="email" id="inputPassword" name="mail" class="form-control" placeholder="mail" required="required">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" name="submit_mail" >Changer mail</button></br>
                </form>
                <form method="POST">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="hidden" name="id_u" value="<? $_GET['id_u'];?>">
                            <input type="password" id="inputPassword" name="mdp" class="form-control" placeholder="Password" required="required">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" name="submit_change" >Changer mot de passe</button>
                </form>
            </div>
        </div>
    </div>
</ul>
