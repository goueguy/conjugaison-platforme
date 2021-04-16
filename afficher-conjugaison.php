<?php

function terminaisonsfutur($temps,$verbe,$a,$b,$c,$d,$e,$f){
    if($verbe == "aller"){
        $resultat = "<div class='custom mb-5 justify-content-center text-center font-weight-bold'><u>Le verbe <span class='rouge'> $verbe</span> n'est pas un verbe du 1<sup>er</sup> groupe</u></div>";
    }else{
        $resultat = "<div class='resultat text-center'>
                            <p><u>Le Verbe <span class='rouge'>$verbe</span> au $temps</u></p>
                            <p>Je $a</p>
                            <p>Tu $b</p>
                            <p>Il/elle/on $c</p>
                            <p>Nous $d</p>
                            <p>Vous $e</p>
                            <p>Ils/elles $f</p>
                    </div>";
    }
    
    echo $resultat;
}
function terminaisonsPasse($temps,$verbe,$a,$b,$c,$d,$e,$f){
    if($verbe == "aller"){
        $resultat = "<div class='custom mb-5 justify-content-center text-center font-weight-bold'><u>Le verbe <span class='rouge'> $verbe</span> n'est pas un verbe du 1<sup>er</sup> groupe</u></div>";
    }else{
        $resultat = "<div class='resultat text-center'>
                            <p><u>Le Verbe <span class='rouge'>$verbe</span> au $temps</u></p>
                            <p>Je ".str_replace('er',$a,$verbe)."</p>
                            <p>Tu ".str_replace('er',$b,$verbe)."ju</p>
                            <p>Il/elle/on ".str_replace('er',$c,$verbe)."</p>
                            <p>Nous ".str_replace('er',$d,$verbe)." </p>
                            <p>Vous ".str_replace('er',$e,$verbe)."</p>
                            <p>Ils/elles ".str_replace('er',$f,$verbe)."</p>
                    </div>";
    }
    
    echo $resultat;
}
function terminaisonsPresent($temps,$verbe,$a,$b,$c,$d,$e,$f){
    if($verbe == "aller"){
        $resultat = "<div class='custom mb-5 justify-content-center text-center font-weight-bold'><u>Le verbe <span class='rouge'> $verbe</span> n'est pas un verbe du 1<sup>er</sup> groupe</u></div>";
    }else{
        $resultat = "<div class='resultat text-center'>
                            <p><u>Le Verbe <span class='rouge'>$verbe</span> au $temps</u></p>
                            <p>Je ".str_replace('er',$a,$verbe)."</p>
                            <p>Tu ".str_replace('er',$b,$verbe)."</p>
                            <p>Il/elle/on ".str_replace('er',$c,$verbe)."</p>
                            <p>Nous ".str_replace('er',$d,$verbe)." </p>
                            <p>Vous ".str_replace('er',$e,$verbe)."</p>
                            <p>Ils/elles ".str_replace('er',$f,$verbe)."</p>
                    </div>";
    }
    
    echo $resultat;
}
function conjuguer($temps, $verbe)
{
    //echo strpos($verbe,"er");
    
    if ($temps == "passe" && substr($verbe,-2) ==="er") {
        if($verbe == "aller"){
            $resultat = "<div class='custom mb-5 justify-content-center text-center font-weight-bold'><u>Le verbe <span class='rouge'> $verbe</span> n'est pas un verbe du 1<sup>er</sup> groupe</u></div>";
        }elseif($verbe == "manger"){
            
            $resultat = "<div class='resultat text-center'>
                        <p><u>Le Verbe <span class='rouge'>$verbe</span> au $temps</u></p>
                        <p>Je ".str_replace("er", "<span class='rouge'>eai</span>", $verbe)."</p>
                        <p>Tu ".str_replace("er", "<span class='rouge'>eas</span>", $verbe)."</p>
                        <p>Il/elle/on ".str_replace("er", "<span class='rouge'>ea</span>", $verbe)."</p>
                        <p>Nous avons ".str_replace("er", "<span class='rouge'>eâmes</span>", $verbe)."</p>
                        <p>Vous avez ".str_replace("er", "<span class='rouge'>eâtes</span>", $verbe)."</p>
                        <p>Ils/elles ont ".str_replace("er", "<span class='rouge'>èrent</span>", $verbe)."</p>
                    </div>";
        }else{
        
            $resultat = "<div class='resultat text-center'>
                            <p><u>Le Verbe <span class='rouge'>$verbe</span> au $temps</u></p>
                            <p>Je ".str_replace("er", "<span class='rouge'>ai</span>", $verbe)."</p>
                            <p>Tu ".str_replace("er", "<span class='rouge'>as</span>", $verbe)."</p>
                            <p>Il/elle/on ".str_replace("er", "<span class='rouge'>a</span>", $verbe)."</p>
                            <p>Nous ".str_replace("er", "<span class='rouge'>âmes</span>", $verbe)."</p>
                            <p>Vous ".str_replace("er", "<span class='rouge'>âtes</span>", $verbe)."</p>
                            <p>Ils/elles ".str_replace("er", "<span class='rouge'>èrent</span>", $verbe)."</p>
                        </div>";
        }
        
    }elseif ($temps == "present" && substr($verbe,-2) ==="er") {
        
        if($verbe == "aller"){
            $resultat = "<div class='custom mb-5 justify-content-center text-center font-weight-bold'><u>Le verbe <span class='rouge'> $verbe</span> n'est pas un verbe du 1<sup>er</sup> groupe</u></div>";
        }else{
            if($verbe=="manger"){
                $premiere_personne_pluriel="<span class='rouge'>eons</span>";
            }else{
                $premiere_personne_pluriel="<span class='rouge'>ons</span>";
            }
            terminaisonsPresent($temps,$verbe,"<span class='rouge'>e</span>","<span class='rouge'>es</span>","<span class='rouge'>e</span>", $premiere_personne_pluriel,"<span class='rouge'>ez</span>","<span class='rouge'>ent</span>");
        }
       
    }elseif ($temps == "futur" && substr($verbe,-2) ==="er") {
        
        if($verbe=="aller"){
            $resultat = "<div class='custom mb-5 justify-content-center text-center font-weight-bold'><u>Le verbe <span class='rouge'> $verbe</span> n'est pas un verbe du 1<sup>er</sup> groupe</u></div>";
        }else{
           
            terminaisonsfutur($temps,$verbe,str_replace('er',"<span class='rouge'>erai</span>",$verbe),str_replace('er',"<span class='rouge'>eras</span>",$verbe),str_replace('er',"<span class='rouge'>era</span>",$verbe),str_replace('er',"<span class='rouge'>erons</span>",$verbe),str_replace('er',"<span class='rouge'>erez</span>",$verbe),str_replace('er',"<span class='rouge'>eront</span>",$verbe));
        }
    }
    else{
        
        $resultat = "<div class='custom mb-5 justify-content-center text-center font-weight-bold'><u>Le verbe <span class='rouge'> $verbe</span> n'est pas un verbe du 1<sup>er</sup> groupe</u></div>";
    }
    echo $resultat;
    
}

if (isset($_POST['show'])) {

    $verbe = strtolower(htmlspecialchars($_POST['verbe']));
    $temps = htmlspecialchars($_POST['temps']);

    conjuguer($temps, $verbe);
}
