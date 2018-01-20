<?php

namespace plugins\elements\adminlte_infobox;

use pte\Parts;

class AdminLTE_InfoBox extends Parts
{

    const AQUA = 'bg-aqua';
    const GREEN = 'bg-green';
    const YELLOW = 'bg-yellow';
    const RED = 'bg-red';

    public function SetMessages($messages)
    {
        $this->data['Messages'] = $messages;
    }

    public function SetNumber($number)
    {
        $this->data['Number'] = $number;
    }

    public function SetColor($color = AdminLTE_InfoBox::AQUA)
    {
        $this->data['Color'] = $color;
    }

    public function SetFaIcon($icon = 'fa-flag-o')
    {
        $this->data['Icon'] = $icon;
    }

    public function SetBackground($color = AdminLTE_InfoBox::AQUA)
    {
        $this->data['Background'] = $color;
    }

    public function SetProgressBar($number)
    {
        $this->data['UseProgress']['ProgressBar'] = str_replace('{?}', $number, 'style="width: {?}%"');
    }

    public function SetProgressDescription($desc)
    {
        $this->data['UseProgress']['ProgressDescription'] = $desc;
    }

    /**
     * @return string
     *
     * example of passing data to construct
     * $data = array(
     *    'Messages' => 'Messages',
     *    'Number' => 123,
     *    'Color' => AdminLTE_InfoBox::AQUA,
     *    'Icon' => 'fa-flag-o',
     *    'Background' => AdminLTE_InfoBox::AQUA,
     *    'ProgressDescription' => 'descripton text',
     *    'UseProgress' => true,
     * );
     */
    public function Parse()
    {
        $this->pte->SetValue($this->data);
        $this->pte->SetHtml(AdminLTE_InfoBox::class . '.html');
        return $this->pte->Output();
    }

}