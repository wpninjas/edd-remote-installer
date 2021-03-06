EDD Remote Installer
============

Remotely install plugins and themes from stores running Easy Digital Downloads.

## Usage

### Adding your EDD site

Please make a pull request and add your sites URL to the `api_urls.json` file.

### Server-side

In order to use the server side, you must define `EDD_RI_IS_SERVER` to be (boolean) true.

This will expose 3 new actions to EDD:
* `check_download` checks if a download is free or not.
* `get_download` gets the file of the download
* `get_downloads` gets a json array of all the available products.

After you install the plugin, You will have to go to its admin page (under settings) and select a download category for your plugins and another one for your themes.

This will allow you to limit the products that will be available for remote installation using categories.

### Client-side

All you have to do is activate the plugin. If you visit the Plugins submenu page you will find the page to load EDD
sites downloads. Select a site from the dropdown and load the sites downloads.

It then creates a new options page where the user is able to install their products.
If a product is free then it is directly downloaded and installed.
If it's a billable product, then a popup text form is displayed and the user has to enter their license key in
order to process.
Licenses are created using the [EDD Software Licensing](https://easydigitaldownloads.com/downloads/software-licensing/?ref=116) plugin.

## A Word of CAUTION

This plugin is still at an early stage in its development and needs a lot of things to be fixed.
This is for the time being a proof of concept and an invitation to collaborate and build a kick-ass installer for our EDD-based stores.

Themes installation currently does not work, but plugins are fully operational.
