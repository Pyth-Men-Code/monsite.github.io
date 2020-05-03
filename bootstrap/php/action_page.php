 
 <?php


//ouverture d'une connexion à la bdd monsite

    $objetpdo  = new pdo ('mysql:host=localhost;dbname=monsite','root','');
    //prépation d'une requete 
    $objectpdo->prepare('INSERT INTO interlocuteur values (null, :nom  ,:prenom  ,:password  ,:email)');
    //marquation
    $pdoStat->bindValues(':nom',$_POST['nom'], PDO::PARAM_STR);
    $pdoStat->bindValues(':prernom',$_POST['prenom'], PDO::PARAM_STR);
    $pdoStat->bindValues(':password',$_POST['pswd'], PDO::PARAM_STR);
    $pdoStat->bindValues(':email',$_POST['email'], PDO::PARAM_STR);
    //execution de la requete 
    $insertIsOk =  insertisok $pdoStat->execute();


    if($insertIsOk){
        $message ='le contact a été enregistré';
    }
    else{
        $message='insertion échouée';

    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
      <h1> insertion des contact</p> 
      <p><?php echo $message; ?> </p>

    </body>
    </html>