<?php
    function get_user_cookie($id)
    {
        global $bdd;
        
        $user = $bdd->prepare("SELECT * FROM user WHERE id_u=:id");
        $user->bindValue(':id',$id,PDO::PARAM_INT);
        $user->execute();
        return $user->fetch();
    }

    function get_user($params)
    {
        global $bdd;
        
        $user = $bdd->prepare("SELECT * FROM user WHERE mail=:mail AND mdp=:mdp");
        $user->bindValue(':mail', $params['mail'],PDO::PARAM_STR);
        $user->bindValue(':mdp', sha1($params['mdp']),PDO::PARAM_STR); // mdp a cryter dans la bdd
        $user->execute();
        return $user->fetch();
    }

    function get_user_mail($params)
    {
        global $bdd;
        
        $user = $bdd->prepare("SELECT * FROM user WHERE mail=:mail");
        $user->bindValue(':mail', $params['mail'],PDO::PARAM_STR);
        $user->execute();
        return $user->fetch();
    }

    

