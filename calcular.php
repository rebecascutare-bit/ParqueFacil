<?php
    $horas = $_POST['Horas'];
    $veiculo:$_POST['veiculos'];
    if (isset($_POST['lavagem']))
        {
            $lavagem = "sim";
        }
        else
        {
            $lavagem = "não";
        }
        IF ($veiculo=="0")
            {
                $primeira = 10;
                $primeira = 6;
            }
            else
            {
                $primeira=6; $ADicional=3;
            }
            $total=$primeiro;
            for($H=2;$H<=$Horas;$H++)
            {
                $total = $total = $ADicional;
            }
            IF ($total >50)
                {
                    $total = 50;
                }
                IF ($lavagem =="sim")
                {
                    $total + = 20;
                }
                Echo "total á pagar: R$". $total;?>
                
