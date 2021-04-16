<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHALLENGE</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    
    <style>
    #conjugaison{
    
    margin-top:45px;
}
.erreur{
    color:red;
    font-weight: bold;
}
.verbe_introuvable{
    
    margin-top:34;
}
.custom,.resultat{
    
   position: absolute;
   bottom: 0;
   left:40%;
}
.resultat{
    text-align: center;
    margin-top: 34px;
}

.rouge{
    font-weight:bold;
    color:red;
}
    </style>
</head>
<body>
    
   <section id="conjugaison">
        <?php 

        function conjuguer($temps, $verbe)
        {
        
            if ($temps == "passe" && $verbe == "manger") {
                
                $resultat = "<div class='resultat text-center'>
                                <p><u>Le Verbe <span class='rouge'>manger</span> au pass<span class='rouge'>é</span></u></p>
                                <p>J'ai mang<span class='text-danger font-weight-bold'>é</span></p>
                                <p>Tu as mang<span class='text-danger font-weight-bold'>é</span></p>
                                <p>Il/elle/on a mang<span class='text-danger font-weight-bold'>é</span></p>
                                <p>Nous avons mang<span class='text-danger font-weight-bold'>é</span></p>
                                <p>Vous avez mang<span class='text-danger font-weight-bold'>é</span></p>
                                <p>Ils/elles ont mang<span class='text-danger font-weight-bold'>é</span></p>
                            </div>";
                            
            } elseif ($temps == "passe" && $verbe == "danser") {
                $resultat = "<div class='resultat text-center'>
                                <p><u>Le Verbe <span class='rouge'>danser</span> au pass<span class='rouge'>é</span></u></p>
                                <p>J'ai dans<span class='text-danger font-weight-bold'>é</span></p>
                                <p>Tu as dans<span class='text-danger font-weight-bold'>é</span></p>
                                <p>Il/elle/on a dans<span class='text-danger font-weight-bold'>é</span></p>
                                <p>Nous avons dans<span class='text-danger font-weight-bold'>é</span></p>
                                <p>Vous avez dans<span class='text-danger font-weight-bold'>é</span></p>
                                <p>Ils/elles ont dans<span class='text-danger font-weight-bold'>é</span></p>
                            </div>";
               
            } elseif ($temps == "present" && $verbe == "manger") {
                $resultat = "<div class='resultat text-center'>
                                <p><u>Le Verbe <span class='rouge'>manger</span> au présent</u></p>
                                <p>Je mang<span class='text-danger font-weight-bold'>e</span></p>
                                <p>Tu mang<span class='text-danger font-weight-bold'>es</span></p>
                                <p>Il/elle/on mang<span class='text-danger font-weight-bold'>e</span></p>
                                <p>Nous mang<span class='text-danger font-weight-bold'>eons</span></p>
                                <p>Vous mang<span class='text-danger font-weight-bold'>ez</span></p>
                                <p>Ils/elles mang<span class='text-danger font-weight-bold'>ent</span></p>
                            </div>";
            } elseif ($temps == "present" && $verbe == "danser") {
                $resultat = "<div class='resultat text-center'>
                                <p><u>Le Verbe <span class='rouge'>danser</span> au présent</u></p>
                                <p>Je dans<span class='text-danger font-weight-bold'>e</span></p>
                                <p>Tu dans<span class='text-danger font-weight-bold'>es</span></p>
                                <p>Il/elle/on dans<span class='text-danger font-weight-bold'>e</span></p>
                                <p>Nous dans<span class='text-danger font-weight-bold'>ons</span></p>
                                <p>Vous dans<span class='text-danger font-weight-bold'>ez</span></p>
                                <p>Ils/elles dans<span class='text-danger font-weight-bold'>ent</span></p>
                            </div>";
            } elseif ($temps == "future" && $verbe == "manger") {
                $resultat = "<div class='resultat text-center'>
                                <p><u>Le Verbe <span class='rouge'>manger</span> au future</u></p>
                                <p>Je manger<span class='text-danger font-weight-bold'>ai</span></p>
                                <p>Tu manger<span class='text-danger font-weight-bold'>as</span></p>
                                <p>Il/elle/on manger<span class='text-danger font-weight-bold'>a</span></p>
                                <p>Nous manger<span class='text-danger font-weight-bold'>ons</span></p>
                                <p>Vous manger<span class='text-danger font-weight-bold'>ez</span></p>
                                <p>Ils/elles manger<span class='text-danger font-weight-bold'>ont</span></p>
                            </div>";
            } elseif ($temps == "future" && $verbe == "danser") {
                $resultat = "<div class='resultat text-center'>
                                <p><u>Le Verbe <span class='rouge'>danser</span> au future</u></p>
                                <p>Je danser<span class='text-danger font-weight-bold'>ai</span></p>
                                <p>Tu danser<span class='text-danger font-weight-bold'>as</span></p>
                                <p>Il/elle/on danser<span class='text-danger font-weight-bold'>a</span></p>
                                <p>Nous danser<span class='text-danger font-weight-bold'>ons</span></p>
                                <p>Vous danser<span class='text-danger font-weight-bold'>ez</span></p>
                                <p>Ils/elles danser<span class='text-danger font-weight-bold'>ont</span></p>
                            </div>";
            } else {
                $resultat = "<div class='custom mb-5 justify-content-center text-center text-danger font-weight-bold'>Ce n'est pas un verbe du premier groupe</div>";
            }
            echo $resultat;
        }
        
        if (isset($_POST['show'])) {
        
            $verbe = htmlspecialchars($_POST['verbe']);
            $temps = htmlspecialchars($_POST['temps']);
        
            conjuguer($temps, $verbe);
        }
        
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
                                    <option value="future" <?php if (isset($temps) && $temps=="future") echo'selected';?>>FUTURE</option>
                                </select>
                                <span class="erreur" id="temps-erreur"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="verbe" id="verbe" class="form-control">
                                    <option value="">SELECTIONNER UN VERBE</option>
                                    <option value="manger" <?php if (isset($verbe) && $verbe=="manger") echo'selected';?>>MANGER</option>
                                    <option value="danser" <?php if (isset($verbe) && $verbe=="danser") echo'selected';?>>DANSER</option>
                                </select>
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