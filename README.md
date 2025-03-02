# Kirby Client Info Plugin

A Kirby plugin that adds a Client Info panel page with editable fields that save to site.txt.

## Installation

### Download

Download and copy this repository to `/site/plugins/kirby-client-info`.

### Git submodule

```
git submodule add https://github.com/vantronye/kirby-client-info.git site/plugins/kirby-client-info
```

### Composer

```
composer require vantronye/kirby-client-info
```

## Setup

After installation, you will see a new menu item "Client Info" in the panel's left navigation.

## Options

The plugin has the following options that can be set in your `/site/config/config.php`:

```php
return [
    'vantronye.kirby-client-info.cache' => true // Set to false to disable caching
];
```

## License

MIT

## Credits

- [vantronye](https://github.com/vantronye)