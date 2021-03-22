<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Kredycik informacje</title>
    </head>
    <body>
        <?php
			require_once 'libs/Smarty.class.php';
            $kwota = $_REQUEST['kwota']; 
            $okres = $_REQUEST['okres']; 
            $oproc = $_REQUEST['oproc'];

            $smarty = new Smarty();

            $smarty -> assign('kwota', $kwota);
            $smarty -> assign('okres', $okres);
            $smarty -> assign('oproc', $oproc);

            if(!(isset($kwota)) && !(isset($okres)) && !(isset($oproc))){
                $zwrot[] = 'Brak jednego z parametrów.';
            }
            if($kwota == ""){
                $zwrot[] = 'Nie podano kwoty.';
            }
            if($okres == ""){
                $zwrot[] = 'Nie podano terminu spłaty.';
            }
            if($oproc == ""){
                $zwrot[] = 'Nie podano oprocentowania.';
            }

            if(!empty($zwrot)){
                $smarty -> assign('zwrot', $zwrot);
                $petla = 0;
                while($petla < count($zwrot)){
                    echo $zwrot[$petla] . "<br>";
                    $petla++;
                }
            }

            if(empty($zwrot)){
                if(!is_numeric($kwota)){
                    $blad[] = 'Wpisana kwota nie jest liczbą.';
                }
                if(!is_numeric($okres)){
                    $blad[] = 'Wpisany termin zwrotu nie jest liczbą.';
                }
                if(!is_numeric($oproc)){
                    $blad[] = 'Wpisane oprocentowanie nie jest liczbą.';
                }

                if(!empty($blad)){
                    $smarty -> assign('blad', $blad);
                    $petla2 = 0;
                    while($petla2 < count($blad)){
                        echo $blad[$petla2] . "<br>";
                        $petla2++;
                    }
                exit;
                }

                $kwota = intval($kwota);
                $okres = floatval($okres);
                $oproc = intval($oproc);

                $splata = round($kwota/($okres*12) + ($kwota/($okres*12))*($oproc/100), 2);
                echo "Miesięczna rata wynosi: " . $splata . " złotych.";
            }  
        ?>
    </body>
</html>