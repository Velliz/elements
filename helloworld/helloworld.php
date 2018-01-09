<?php
    
namespace plugins\elements\helloworld;

use pte\Parts;

class helloworld extends Parts
{

    /**
     * @return string
     */
    public function Parse()
    {
        $this->pte->SetValue($this->data);
        $this->pte->SetHtml(helloworld::class . '.html');
        return $this->pte->Output();
    }

}