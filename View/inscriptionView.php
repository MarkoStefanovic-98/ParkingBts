<?php
if(isset($_POST['submit_inscription']))
{
    if($i>0){
        echo "<div class='error'><section class='error-title'><b>".$message2."</b></section><br>";
        echo "<p class='justify'>".$message."</p></div>";
    }
}
?>
<body class="bg-dark">

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Inscription</div>
        <div class="card-body">
            <form method="post" action="#">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="firstName" class="form-control" name="nom" placeholder="First name" required="required" autofocus="autofocus">
                                <label for="firstName">Nom</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="lastName" class="form-control" name="prenom" placeholder="Last name" required="required">
                                <label for="lastName">Prénom</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" name="mail" placeholder="Email address" required="required">
                        <label for="inputEmail">Email</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" class="form-control" name="mdp" placeholder="Password" required="required">
                                <label for="inputPassword">Mot de passe</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="confirmPassword" class="form-control" name="confirm" placeholder="Confirm password" required="required">
                                <label for="confirmPassword">Confirmer Mot de passe</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" name="submit_inscription" class="btn btn-primary btn-block" >S'inscrire</button>
            </form>
        </div>
    </div>
</div>

<!----------------------------->