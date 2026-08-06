<div align="center">

# SVG Placeholder

**Generates an invisible SVG of exact dimensions to hold the space while a Craft image lazyloads**

One Twig call returns a base64 data URI you drop straight into a `src` attribute.

<p align="center">
  <a href="https://packagist.org/packages/mblode/svgplaceholder">
    <img src="https://img.shields.io/packagist/v/mblode/svgplaceholder?style=flat&colorA=000000&colorB=000000" />
  </a>
  <a href="https://github.com/mblode/svgplaceholder/blob/master/LICENSE.md">
    <img src="https://img.shields.io/github/license/mblode/svgplaceholder?style=flat&colorA=000000&colorB=000000" />
  </a>
</p>

</div>

## Install

```bash
composer require mblode/svgplaceholder
```

Run that in your Craft project root, then install SVG Placeholder from Settings, Plugins in the control panel.

## Quickstart

```twig
<img src="{{ craft.svgplaceholder.generate({ width: 300, height: 500 }) }}">
```

That renders a transparent 300 by 500 SVG as a base64 data URI, so the browser reserves the right space before the real image arrives.

## Usage

Pass a color as the second argument to get a visible block instead of a transparent one:

```twig
{{ craft.svgplaceholder.generate({ width: 300, height: 500 }, '#cccccc') }}
```

With a JS lazyloader such as lazysizes, read the dimensions off the transformed asset:

```twig
{% macro lazyLoadImage(element, transform) %}
    {% cache using key element.id %}
        <img class="lazyload"
            src="{{ craft.svgplaceholder.generate({ width: element.width(transform), height: element.height(transform) }) }}"
            data-src="{{ element.url(transform) }}"
            alt="{{ element.title }}">
    {% endcache %}
{% endmacro %}
```

## Requirements

- Craft CMS 3. `composer.json` requires `craftcms/cms ^3.0.0-RC1`, and the plugin has never been updated for Craft 4 or later.
- Nothing else. The SVG is assembled and base64 encoded in PHP, with no build step and no extra extension.

## Notes

- Browsers now cover most of this without a plugin: `loading="lazy"` on an `<img>` with `width` and `height` set, or a CSS `aspect-ratio`, reserves the space on its own. This is still useful where a JS lazyloader needs a real `src` to swap out.
- Based on the Craft 2 plugin [SVG Placeholder](https://github.com/daltonrooney/svgplaceholder) by Dalton Rooney.
- Last released in 2017, and unmaintained since.

## License

MIT

---

Crafted by [<img src="https://blode.co/avatar-circle.png" width="20" align="top" />](https://blode.co) [Matthew Blode](https://blode.co)
