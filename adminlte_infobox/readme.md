Usage sample:

```php
$infoBox = new AdminLTE_InfoBox('hello', array());
        
$infoBox->SetMessages('Testing');
$infoBox->SetNumber(400);
$infoBox->SetColor(AdminLTE_InfoBox::RED);
$infoBox->SetBackground(AdminLTE_InfoBox::YELLOW);
$infoBox->SetProgressBar(30);
$infoBox->SetProgressDescription('Description');
$infoBox->SetFaIcon('fa-users');

$data['hello'] = $infoBox;

return $data;
```