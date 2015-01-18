<?php
// src/PM/UserBundle/Services/PMUserPasswordGenere.php
namespace PM\UserBundle\Services;

class PMUserPasswordGenere
{
    public function genererMDP ($longueur = 8){
        $mdp = "";
        $possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";
        $longueurMax = strlen($possible);

        if ($longueur > $longueurMax) { $longueur = $longueurMax; }
        $i = 0;

        while ($i < $longueur) {
            $caractere = substr($possible, mt_rand(0, $longueurMax-1), 1);

            if (!strstr($mdp, $caractere)) {
                $mdp .= $caractere;
                $i++;
            }
        }

        return strval($mdp);
    }
}