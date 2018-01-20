Usage sample:

```php
$small = new AdminLTE_SmallBox('smallbox', array());
$small->SetColor(AdminLTE_SmallBox::GREEN);
$small->SetNumber(113);
$small->SetUrl('home/admin');
$small->SetUrlName('Lihat selengkapnya');
$small->SetFaIcon('fa-globe');
$small->SetName('Order Motor');

$data['smallbox'] = $small;

return $data;
```