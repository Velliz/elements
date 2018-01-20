<?php

namespace plugins\elements\adminlte_description;

use pte\Parts;

class AdminLTE_Description extends Parts
{

    const VERTICAL = "";
    const HORIZONTAL = "dl-horizontal";

    public function SetStyle($style = AdminLTE_Description::VERTICAL)
    {
        $this->data['Style'] = $style;
    }

    public function SetDescription($arrData = array())
    {
        $this->data['Desc'] = $arrData;
    }

    /**
     * @return string
     */
    public function Parse()
    {
        $this->pte->SetValue($this->data);
        $this->pte->SetHtml(AdminLTE_Description::class . '.html');
        return $this->pte->Output();
    }

}