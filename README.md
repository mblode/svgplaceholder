# SVG Placeholder plugin for Craft CMS 3.x

A plugin which generates an invisible SVG of specific dimensions for use when lazyloading images in Craft CMS templates.

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require mblode/svgplaceholder

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for svgplaceholder.

## Usage

```
{{ craft.svg_placholder.generate({height:500,width:'300'}) }}
```

## Example

When used with Lazysizes and a macro:

*_macros/utilities.html*
```
{% macro lazyLoadImage(element, transform) %}
        {% cache using key element.id %}
            <img class="lazyload" src="{{ craft.svgplaceholder.generate({ height: element.height(transform), width: element.width(transform) }) }}" data-src="{{ element.url(transform) }}" alt="{{ element.title }}">
        {% endcache %}
{% endmacro %}
```

*index.html*
```
{% import '_macros/utilities' as utils %}

...

{{ utils.lazyLoadImage(image, 'imageTransformName') }}
```

---

Brought to you by [Matthew Blode](https://matthewblode.com)

Based on the Craft CMS 2 plugin: [SVG Placeholder](https://github.com/daltonrooney/svgplaceholder)
