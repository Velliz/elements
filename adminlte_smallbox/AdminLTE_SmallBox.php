<?php

namespace plugins\elements\adminlte_smallbox;

use pte\Parts;

class AdminLTE_SmallBox extends Parts
{

    const AQUA = 'bg-aqua';
    const GREEN = 'bg-green';
    const YELLOW = 'bg-yellow';
    const RED = 'bg-red';

    public function SetName($name)
    {
        $this->data['Name'] = $name;
    }

    public function SetNumber($number)
    {
        $this->data['Number'] = $number;
    }

    public function SetColor($color = AdminLTE_SmallBox::AQUA)
    {
        $this->data['Color'] = $color;
    }

    public function SetFaIcon($icon = 'fa-flag-o')
    {
        $this->data['Icon'] = $icon;
    }

    public function SetUrl($url)
    {
        $this->data['Url'] = $url;
    }

    public function SetUrlName($uriName)
    {
        $this->data['UriName'] = $uriName;
    }

    /**
     * @return string
     *
     * example of passing data to construct
     * $data = array(
     *    'Name' => 'Messages',
     *    'Number' => 123,
     *    'Color' => AdminLTE_InfoBox::AQUA,
     *    'Icon' => 'fa-flag-o',
     *    'Url' => 'example/user',
     *    'UrlName' => 'see more',
     * );
     */
    public function Parse()
    {
        $this->pte->SetValue($this->data);
        $this->pte->SetHtml(AdminLTE_SmallBox::class . '.html');
        return $this->pte->Output();
    }

}