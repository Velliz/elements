Usage sample:

```php
$desc = new AdminLTE_Description('desc', array());

$desc->SetStyle(AdminLTE_Description::HORIZONTAL);
$desc->SetDescription(array(
    array(
        'Title' => 'Didit Velliz',
        'Text' => 'Programmer',
    ),
    array(
        'Title' => 'Lois',
        'Text' => 'Gamer',
    ),
    array(
        'Title' => 'Christian',
        'Text' => 'Lead Developer',
    )
));
$data['desc'] = $desc;

return $data;
```