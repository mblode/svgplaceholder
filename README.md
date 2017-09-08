# SvgPlaceholder plugin for Craft CMS 3.x

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

{{ craft.svg_placholder.generate({height:500,width:'300'}) }}

## Example

When used with Lazysizes:

```
<img class="lazyload" src="{{ craft.svg_placholder.generate({height:500,width:'300'}) }}" data-src="path-to-real-image-500x300.jpg" />
```

---

Brought to you by [Matthew Blode](https://matthewblode.com)
