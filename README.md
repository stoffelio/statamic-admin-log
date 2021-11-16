# Statamic Admin Log

This addon creates a new log which records every action taken by your users in the control panel, allowing you to track who changed what and when.

Currently still in development, activiely working on additional features and fine tuning (see ToDo below).

## Requirements

- Statamic v3

## Installation

From your site folder, run `composer require webographen/statamic-admin-log` - or install it via the control panel.

## Usage

Statamic Admin Log will start logging all actions in the control panel once it is installed. 

The logs are saved in the default log directory (usually `storage/logs`).

If you want to be able to access your logs from the control panel, we recommend the free [Logbook](https://statamic.com/addons/aryeh-raber/logbook) addon.

##  Options

The addon automatically publishes a config file in `config/admin-log.php`. Currently there are three options:

**enabled** - turn the admin loog off and on (also possible via env variable)
**delete-after** - set how many days of logs laravel should keep (dfault: 30)
**log-name** - change the name of the logfiles (default: adminlog)

## Tracked Events

Currently these events are logged automatically:

- Asset (create/edit, delete)
- Asset Container (create/edit, delete)
- Asset Folder (create/edit, delete)
- Blueprint (create/edit, delete)
- Collection (create/edit, delete)
- Entry (create/edit, delete)
- Fieldset (create/edit, delete)
- Form (create/edit, delete)
- Form Submission (delete)
- Global Set (create/edit, delete)
- Navigation (create/edit, delete)
- Taxonomy (create/edit, delete)
- Taxonomy Term (create/edit, delete)
- User (create/edit, delete)
- User Group (create/edit, delete)
- User Role (create/edit, delete)

## ToDo

- [x] Create config for deleting logs after x days
- [ ] Differentiate between create and edit events
- [ ] Add more useful events
- [ ] Add IP logging option
- [ ] Tests :)

## About Us

[Webographen](https://webographen.de/) is a digital design studio focusing on Statamic. We make websites that are not just pretty, but scale in terms of design and technology.