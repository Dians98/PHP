<?php 

    $age = null;

    /* Vérifier si l'utilisateur a déjà poster sur le form */
    if(!empty($_POST['dob']))
    {
        setcookie("dob",$_POST['dob']);
        /* écrire manuellement le cookie car un cookie en principe ne se met en place que lors de la deuxième connexion */
        $_COOKIE['dob'] = $_POST['dob'];
    }
    
    /* Vérifier s'il existe déjà un cookie */
    if(!empty($_COOKIE['dob']))
    {
        $age =  (int) date('Y') - $_POST['dob'];
    }
    
?>

<?php if($age && $age>18): ?>
    <h1>Le contenu</h1>

<?php elseif($age && $age<18) : ?>
    <p>Contenu réservé pour adulte</p>

<?php else: ?>
    <form action="" method="post">
        <div>
            <select name="dob" id="dob" >
                <?php for($i = date('Y'); $i > 1919 ; $i--): ?>
                    <option value="<?= $i ?>" ><?= $i ?></option>
                <?php endfor?>
            </select>  
        </div>
            <button type ="submit">Accepter</button>
    </form>
<?php endif ?>
