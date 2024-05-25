<?php

namespace plugins\elements\pukocms;

use pte\Parts;

class helloworld extends Parts
{

    /**
     * @return string
     */
    public function Parse()
    {
        $this->pte->SetValue($this->data);
        $this->pte->SetHtml(ROOT . pukocms::class . '.html');
        return $this->pte->Output();
    }

}
