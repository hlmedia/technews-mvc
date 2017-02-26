<?php

namespace Application\Models\News;

class Tags
{
    
    private $IDTAGS,
        $LIBELLETAGS;

    // -- Getters
    public function getIDTAGS() {
        return $this->IDTAGS;
    }

    public function getLIBELLETAGS() {
        return $this->LIBELLETAGS;
    }

}