Usage sample:

```php
$carousel = new AdminLTE_Carousel('carousel', array());
$carousel->SetTags('carousel-example-generic');
$carousel->SetIndicator(array(
    array(
        'ImgCaption' => 'Didit Velliz',
        'ImgSrc' => 'https://cdn.storial.co/book_cover/12278-e542a70cc90ba0bff2dad56bdfa3d38c4d4d90ae.jpeg',
    ),
    array(
        'ImgCaption' => 'Louis',
        'ImgSrc' => 'https://cdn.storial.co/book_cover/15522-a2d1b12bce2c0276fd1a213c8a880ef33beb724b.jpeg',
    ),
    array(
        'ImgCaption' => 'Christian',
        'ImgSrc' => 'https://cdn.storial.co/book_cover/15411-23310f630d110ad0c8f1236af8b487e5133437a5.jpeg',
    ),
));
$data['carousel'] = $carousel;

return $data;
```