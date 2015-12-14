Scroll Up
=========
A wraper for jQuery plugin scrollup

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ibrarturi/yii2-scrollup "*"
```

or add

```
"ibrarturi/yii2-scrollup": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

 * Default Usage

```php
<?= \ibrarturi\scrollup\ScrollUp::widget(); ?>
```
 * Usage with theme parameter

 ```php
<?= \ibrarturi\scrollup\ScrollUp::widget([
	'theme' => 'tab',   // pill, link, image, tab
]); ?>
```

 * Usage with default optional parameters

 ```php
 <?= \ibrarturi\scrollup\ScrollUp::widget([
    'options' => [
        'scrollName' => 'scrollUp',      // Element ID
        'scrollDistance' => 300,         // Distance from top/bottom before showing element (px)
        'scrollFrom' => 'top',           // 'top' or 'bottom'
        'scrollSpeed' => 300,            // Speed back to top (ms)
        'easingType' => 'linear',        // Scroll to top easing (see http://easings.net/)
        'animation' => 'fade',           // Fade, slide, none
        'animationSpeed' => 200,         // Animation speed (ms)
        'scrollTrigger' => false,        // Set a custom triggering element. Can be an HTML string or jQuery object
        'scrollTarget' => false,         // Set a custom target element for scrolling to. Can be element or number
        'scrollText' => 'Scroll to top', // Text for element, can contain HTML
        'scrollTitle' => false,          // Set a custom <a> title if required.
        'scrollImg' => false,            // Set true to use image
        'activeOverlay' => false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        'zIndex' => 2147483647,          // Z-Index for the overlay
    ]
]); ?>
```

Resources
------

 * [Project Page](http://markgoodyear.com/2013/01/scrollup-jquery-plugin/)
 * [Demo](http://markgoodyear.com/labs/scrollup/)