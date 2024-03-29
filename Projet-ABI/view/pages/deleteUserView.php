<?php
// Page suppression d'un utilisateur
use ABI\controller\Dashboard;

$results=Dashboard::viewUsers();
    if(!empty($results))
                {
?>

<div class='row'>

    <div class="col px-4">
    
            <table class="table table-hover">
            <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
                
                    foreach($results as $result)
                    {
            ?>
            <tr>
                <td><?= $result->first_name?></td>
                <td><?= $result->last_name?></td>
                <td><?= $result->email?></td>
                <td><?= $result->role?></td>
                <!-- Suppression utilisateur - envoie son id -->
                <td> <a href="../index.php?action=dashboard&action3=deleteUser&id_user=<?= $result->id_user?>">Supprimer</a></td>
            </tr>
           <?php
                    }
                
           ?>
            </tbody>
        </table>
    </div>
</div>
           
   <?php
    }