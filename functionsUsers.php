<?php
session_start ();
require 'bdd.php';

function getUsers($bdd)
{
    $resultat = $bdd->query('SELECT * FROM users');

    return $resultat;
}

function getUserByUsername($username, $bdd)
{
    $users = getUsers($bdd); 
    foreach($users as $user)
    {
        if($username == $user['username'])
        {
            $stmt = $bdd->prepare('SELECT * FROM users WHERE username = :username');
            $stmt->bindParam(':username', $username);
            $stmt->execute();

            $result = $resultat->fetch();

            return $result;
        }
    }
}

function createUser($dataUser, $bdd)
{
    // insert a row
    $username = $_POST["username"];
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $passwd = password_hash($_POST["passwd"], PASSWORD_BCRYPT);

    $stmt = $bdd->prepare("INSERT INTO users (username, prenom, nom, email, passwd) VALUES (:username, :prenom, :nom, :email, :passwd)");

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':passwd', $passwd);

    $stmt->execute();
    
    header('Location: index.php');
}

function connect($data, $message, $bdd)
{

    //interroger la base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
    $users = getUsers($bdd); 
    
    foreach($users as $user)
    {
            // on teste si nos variables sont définies
            if (isset($_POST['username']) && isset($_POST['passwd'])) {

                // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
                if ($user['username'] == $_POST['username'] && password_verify($_POST['passwd'], $user['passwd'])) {
                    // dans ce cas, tout est ok, on peut démarrer notre session
                    
                    // on enregistre les paramètres de notre visiteur comme variables de session ($username et $passwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['passwd'] = $_POST['passwd'];

                    if($_SESSION['username'] == 'h_core57')
                    {
                        $_SESSION['role'] = 'admin';
                    }
                    else
                    {
                        $_SESSION['role'] = 'user';
                    }
                    my_session_regenerate_id();
                    my_session_start();
                    // on redirige notre visiteur vers une page de notre section membre
                    echo '<meta http-equiv="refresh" content="0;URL=index.php">';
                }
                else {
                    // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
                    echo '<body onLoad="alert(\'Mot de passe incorect...\')">';
                    // puis on le redirige vers la page d'accueil
                    echo '<meta http-equiv="refresh" content="0;URL=#">';
                }
            }
        }
}

function my_session_start() {
    if (isset($_SESSION['destroyed'])) {
       if ($_SESSION['destroyed'] < time()-300) {
           // Ne devrait pas se produire habituellement. Cela pourrait être une 
           // attaque ou en raison d'un réseau instable. Supprimez tout l'état 
           // d'authentification de cette session utilisateurs.
            remove_all_authentication_flag_from_active_sessions($_SESSION['username']);
           throw(new DestroyedSessionAccessException);
       }
       if (isset($_SESSION['new_session_id'])) {
           // Pas encore complètement expiré. Pourrait être perdu cookie par réseau instable.
           // Essayez à nouveau de définir le cookie d'ID de session approprié.
           // Remarque: n'essayez pas de redéfinir l'ID de session si vous 
           // souhaitez supprimer l'état d'authentification.
           session_commit();
           session_id($_SESSION['new_session_id']);
           // Nouvel ID de session doit exister
           session_start();
           return;
       }
   }
}

function my_session_regenerate_id() {
    // Le nouvel ID de session est requis pour définir l'ID de session approprié 
    // lorsque l'ID de session n'est pas défini en raison d'un réseau instable.
    $new_session_id = session_create_id();
    $_SESSION['new_session_id'] = $new_session_id;
    
    // Définie le timestamp de destruction
    $_SESSION['destroyed'] = time();
    
    // Ecrit et ferme la session courante
    session_commit();

    // Démarre la session avec un nouvel ID
    session_id($new_session_id);
    ini_set('session.use_strict_mode', 0);
    session_start();
    ini_set('session.use_strict_mode', 1);
    
    // La nouvelle session n'en a pas besoin
    unset($_SESSION['destroyed']);
    unset($_SESSION['new_session_id']);
}