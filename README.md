# Statamic Admin Log

This addon creates a new log which records every action taken by yoour users in the control panel, allowing you to track who changed what and when.

## Requirements

- Statamic v3

## Installation

From your site folder, run `composer require webographen/statamic-admin-log` - or install it via the control panel.

## Usage

Statamic Admin Log will start logging all actions in  th control panel once it is installed.

TODO: IP address setting

To add the widget to your control panel dashboard, edit the config under `config/statamic/cp.php` and add the following entry to the `widgets` array:

```php
[
    'type' => 'continue_editing',
    'width' => 100,
],

```

## Optional Settings

By default the widget display the last five entries across all collections. You can modify this by adding two more parameters:

```php
[
    'type' => 'continue_editing',
    'width' => 100,
    'collections' => '*',
    'limit' => 5
],

```

## About Us

[Webographen](https://webographen.de/) is a digital design studio focusing on Statamic. We make websites that are not just pretty, but scale in terms of design and technology.