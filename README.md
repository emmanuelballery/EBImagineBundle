EBImagineBundle
===============

``` yaml
# app/config/config.yml

avalanche_imagine:
  web_root: '%kernel.root_dir%/../web'
  cache_prefix: files/cache
  driver: gd
  filters:
    width:
      type: width
      options:
        width: 100
    height:
      type: height
      options:
        height: 100
    border:
      type: border
      options: []
    border50:
      type: border
      options:
        size: [50, 50]
    borderBig:
      type: border
      options:
        width: 5
    borderRed:
      type: border
      options:
        color: 'FF0000'
    borderAngle:
      type: border
      options:
        angle: 20
        bg: 'FF0000'
    grayscale:
      type: grayscale
      options: []
    grayscale50:
      type: grayscale
      options:
        size: [50, 50]
    rotate:
      type: rotate
      options:
        angle: 20
    rotateRed:
      type: rotate
      options:
        angle: 20
        bg: 'FF0000'
    rotate50:
      type: rotate
      options:
        angle: 20
        size: [50, 50]
```

``` jinja
{# test.html.twig #}

<img src="{{ src }}">
<img src="{{ src|apply_filter('width') }}">
<img src="{{ src|apply_filter('height') }}">
<img src="{{ src|apply_filter('border') }}">
<img src="{{ src|apply_filter('border50') }}">
<img src="{{ src|apply_filter('borderBig') }}">
<img src="{{ src|apply_filter('borderRed') }}">
<img src="{{ src|apply_filter('borderAngle') }}">
<img src="{{ src|apply_filter('grayscale') }}">
<img src="{{ src|apply_filter('grayscale50') }}">
<img src="{{ src|apply_filter('rotate') }}">
<img src="{{ src|apply_filter('rotateRed') }}">
<img src="{{ src|apply_filter('rotate50') }}">
````
