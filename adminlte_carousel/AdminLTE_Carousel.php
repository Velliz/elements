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
            $val['SlideTo'] = sprintf('data-slide-to="%s"', $key);
            $val['DataTarget'] = sprintf('data-target="#%s"', $this->data['Tags']);
            if ($key === 0) {
                $val['IsActive'] = 'active';
            } else {
                $val['IsActive'] = '';
            }
            $this->data['Indicator'][$key] = $val;
        }
        $this->data['TagId'] = sprintf('id="%s"', $this->data['Tags']);
        $this->data['TagHref'] = sprintf('href="#%s"', $this->data['Tags']);

        $this->pte->SetValue($this->data);
        $this->pte->SetHtml(AdminLTE_Carousel::class . '.html');
        return $this->pte->Output();
    }

}