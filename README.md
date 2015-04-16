# nx-php-totw-iterators

## Install
`composer install`

## Usage
```php
use Namics\TopifOfTheWeek\Generator\PostImporter;

require_once __DIR__ . '/vendor/autoload.php';

$importer = new PostImporter();
foreach ($importer->run() as $post) {
    echo $post->getTitle() . "\n";
}
```