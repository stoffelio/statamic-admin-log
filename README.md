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

## ToDo

- [ ] Create permission for viewing the logs
- [ ] Create config for deleting logs after x days
- [ ] Differentiate between create and edit events
- [ ] Create verbose log option (details regarding change made)
- [ ] Add more useful events
- [ ] Add IP logging option
- [ ] Tests :)

## About Us

[Webographen](https://webographen.de/) is a digital design studio focusing on Statamic. We make websites that are not just pretty, but scale in terms of design and technology.