EBImagineBundle
===============

## Filter "width" : fixed width with preserved ratio

``` yaml
# app/config/config.yml

avalanche_imagine:
  web_root: '%kernel.root_dir%/../web'
  cache_prefix: files/cache
  driver: gd
  filters:
    width_filter_example:
      type: width
      options:
        width: 100
```

``` jinja
{# test.html.twig #}

<img src="{{ '/path/to/image'|apply_filter('width_filter_example') }}">
````

## Filter "height" : fixed height with preserved ratio

``` yaml
# app/config/config.yml

avalanche_imagine:
  web_root: '%kernel.root_dir%/../web'
  cache_prefix: files/cache
  driver: gd
  filters:
    height_filter_example:
      type: height
      options:
        height: 100
```

``` jinja
{# test.html.twig #}

<img src="{{ '/path/to/image'|apply_filter('height_filter_example') }}">
````

## Filter "border" : add borders

``` yaml
# app/config/config.yml

avalanche_imagine:
  web_root: '%kernel.root_dir%/../web'
  cache_prefix: files/cache
  driver: gd
  filters:
    # color : #CCCCCC, width = 1px, picture size unchanged
    border_filter_example:
      type: border
      options: []
    # color : #CCCCCC, width = 1px, picture size : 50x50
    border50_filter_example:
      type: border
      options:
        size: [50, 50]
    # color : #CCCCCC, width = 5px, picture size unchanged
    border_big_filter_example:
      type: border
      options:
        width: 5
    # color : #FF0000, width = 5px, picture size unchanged
    border_red_filter_example:
      type: border
      options:
        color: 'FF0000'
    # color : #FF0000, width = 5px, picture size unchanged, rotation of 20°, background filled with color #FF0000
    border_angle_filter_example:
      type: border
      options:
        angle: 20
        bg: 'FF0000'
```

``` jinja
{# test.html.twig #}

<img src="{{ '/path/to/image'|apply_filter('border_filter_example') }}">
<img src="{{ '/path/to/image'|apply_filter('border50_filter_example') }}">
<img src="{{ '/path/to/image'|apply_filter('border_big_filter_example') }}">
<img src="{{ '/path/to/image'|apply_filter('border_red_filter_example') }}">
<img src="{{ '/path/to/image'|apply_filter('border_angle_filter_example') }}">
```

## Filter "grayscale" : convert in grayscale

``` yaml
# app/config/config.yml

avalanche_imagine:
  web_root: '%kernel.root_dir%/../web'
  cache_prefix: files/cache
  driver: gd
  filters:
    grayscale_filter_example:
      type: grayscale
      options: []
    grayscale50_filter_example:
      type: grayscale
      options:
        size: [50, 50]
```

``` jinja
{# test.html.twig #}

<img src="{{ '/path/to/image'|apply_filter('grayscale_filter_example') }}">
<img src="{{ '/path/to/image'|apply_filter('grayscale50_filter_example') }}">
````

## Filter "rotate" : rotate the image

``` yaml
# app/config/config.yml

avalanche_imagine:
  web_root: '%kernel.root_dir%/../web'
  cache_prefix: files/cache
  driver: gd
  filters:
    rotate_filter_example:
      type: rotate
      options:
        angle: 20
    rotate_red_filter_example:
      type: rotate
      options:
        angle: 20
        bg: 'FF0000'
    rotate50_filter_example:
      type: rotate
      options:
        angle: 20
        size: [50, 50]
```

``` jinja
{# test.html.twig #}

<img src="{{ '/path/to/image'|apply_filter('rotate_filter_example') }}">
<img src="{{ '/path/to/image'|apply_filter('rotate_red_filter_example') }}">
<img src="{{ '/path/to/image'|apply_filter('rotate50_filter_example') }}">
````
