<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHALLENGE</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
   <section id="conjugaison">
        <?php 
            include "afficher-conjugaison.php";
        ?>
        <form action="#" method="POST" onsubmit="return validatingForm();">
            <div class="container">
                    <h4 class="text-center mb-5 border">CONJUGAISON DES VERBES DU 1<sup>er</sup> GROUPE</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="temps" id="temps" class="form-control">
                                    <option value="">SELECTIONNER UN TEMPS</option>
                                    <option value="passe" <?php if (isset($temps) && $temps=="passe") echo'selected';?>>PASSÉ SIMPLE</option>
                                    <option value="present" <?php if (isset($temps) && $temps=="present") echo'selected';?>>PRÉSENT</option>
                                    <option value="futur" <?php if (isset($temps) && $temps=="futur") echo'selected';?>>FUTUR</option>
                                </select>
                                <span class="erreur" id="temps-erreur"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                               <input type="text" name="verbe" id="verbe" class="form-control" placeholder="VERBE..." value="<?= (isset($verbe)) ? $verbe:'' ?>">
                                <span class="erreur" id="verbe-erreur"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" name="show" id="show" class="btn btn-primary btn-block">AFFICHER LA CONJUGAISON</button>
                        </div>
                        
                    </div>
            </div>
        </form>
   </section>

    <script src="scripts.js"></script>
</body>
</html>