<?php

namespace plugins\elements\adminlte_carousel;

use pte\Parts;

class AdminLTE_Carousel extends Parts
{

    public function SetTags($tags)
    {
        $this->data['Tags'] = $tags;
    }

    public function SetIndicator($arrData)
    {
        $this->data['Indicator'] = $arrData;
    }

    /**
     * @return string
     */
    public function Parse()
    {
        foreach ($this->data['Indicator'] as $key => $val) {
            $val['SlideTo'] = $key;
            $val['DataTarget'] = $this->data['Tags'];
            if ($key === 0) {
                $val['IsActive'] = 'active';
            } else {
                $val['IsActive'] = '';
            }
            $this->data['Indicator'][$key] = $val;
        }
        $this->data['TagId'] = $this->data['Tags'];
        $this->data['TagHref'] = $this->data['Tags'];

        $this->pte->SetValue($this->data);
        $this->pte->SetHtml(ROOT . AdminLTE_Carousel::class . '.html');
        return $this->pte->Output();
    }

}