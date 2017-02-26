<?php

namespace Application\Models\Configuration;

trait Shortcut {

    public function setTITRE($titre) {
        $_SESSION['TITRE_PAGE'] = $titre;
    }

    public function getTITRE() {
        return $_SESSION['TITRE_PAGE'];
    }

    public function generateSlug($str, $charset='utf-8') {
        $str = htmlentities($str, ENT_NOQUOTES, $charset);
        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
        $str = preg_replace('#&[^;]+;#', '', $str);
        $str = mb_strtolower($str, 'UTF-8');
        $str = str_replace(' ', '-', $str);
        return $str;
    }

}