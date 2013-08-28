EBImagineBundle
===============

This bundle is a demo of usefull AvalancheImage filters (https://github.com/avalanche123/AvalancheImagineBundle).

![default](/Resources/demo/default.jpg "default")

## Filter "width" : fixed width with preserved ratio

Options :
  - width: width in pixel

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

Options :
  - height: height in pixel

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

Options :
  - size: array of width/height (default: empty array, no resize)
  - width: the width in pixel of the border (default 1)
  - color: the color of the border without starting # (default CCCCCC)
  - angle: the angle of rotation of the image in degree (default 0, no rotation)
  - bg: the color of the background if a rotation is applied without starting # (default FF0000)

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

Options :
  - size: array of width/height (default: empty array, no resize)

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

Options :
  - size: array of width/height (default: empty array, no resize)
  - angle: the angle of rotation of the image in degree (default 0, no rotation)
  - bg: the color of the background if a rotation is applied without starting # (default FF0000)

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
