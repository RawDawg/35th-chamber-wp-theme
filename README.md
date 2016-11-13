# 35th Chamber Wordpress theme
## A simple theme to put the user login on a static frontpage.

Based on Sage [https://github.com/roots/sage](https://github.com/roots/sage)

☱☲☴☲☱☲☱☲☴☱☲☴☴☲☱☲☴☲☲☱☲☴☱☲☴☱☲☴☱☲☴☴☱☲

### Installation
* `$ npm install`  
* `$ bower install`
 
Just create a blank page, choose the template „Login Page” and set it as your homepage.

#### Available gulp commands

* `gulp` — Compile and optimize the files in your assets directory
* `gulp watch` — Compile assets when file changes are made
* `gulp --production` — Compile assets for production (no source maps).

#### Using BrowserSync

To use BrowserSync during `gulp watch` you need to update `devUrl` at the bottom of `assets/manifest.json` to reflect your local development hostname.

For example, if your local development URL is `http://project-name.dev` you would update the file to read:
```json
...
  "config": {
    "devUrl": "http://project-name.dev"
  }
...
```
If your local development URL looks like `http://localhost:8888/project-name/` you would update the file to read:
```json
...
  "config": {
    "devUrl": "http://localhost:8888/project-name/"
  }
...
```
☱☲☴☲☱☲☱☲☴☱☲☴☴☲☱☲☴☲☲☱☲☴☱☲☴☱☲☴☱☲☴☴☱☲

## Documentation

Sage documentation is available at [https://roots.io/sage/docs/](https://roots.io/sage/docs/).

[www.bettertimes.de](http://www.bettertimes.de/ "Agentur für Webdesign und Suchmaschinenoptimierung, Köln")
