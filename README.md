# webCNAM v1.4.0

[![Source](https://img.shields.io/badge/source-cedwardsmedia/webcnam-blue.svg?style=flat-square "Source")](https://www.github.com/cedwardsmedia/webcnam)
![Version](https://img.shields.io/badge/version-1.4.0-brightgreen.svg?style=flat-square)
[![License](https://img.shields.io/badge/license-MIT-lightgrey.svg?style=flat-square "License")](./LICENSE)
[![Gratipay](https://img.shields.io/gratipay/cedwardsmedia.svg?style=flat-square "License")](https://gratipay.com/~cedwardsmedia/)

![webCNAM Screenshot](https://cdn.cedwardsmedia.com/images/cnam/screenshot.png "CNAM Screenshot")

_webCNAM_ is a web-based reverse phone number lookup tool written in PHP and sourced by [EveryoneAPI](https://www.everyoneapi.com/). In order to use CNAM, you must have an [EveryoneAPI account](https://www.everyoneapi.com/sign-up)  with [available funds](https://www.everyoneapi.com/pricing).

## Installation

For **personal** or **private** use:

1. Clone the repo.
2. Run `php composer.phar install`
3. Rename `config.default.php` to `config.php`.
4. Edit `config.php` and add your EveryoneAPI credentials.
5. Point your browser to index.php and enter a valid 10-digit United States or Canada phone number and click the ![Search](https://cdn.cedwardsmedia.com/images/cnam/search.png "Search") button or press enter.

For **public** use:

1. Clone the repo.
2. Run `php composer.phar install`
3. Point your browser to index.php
4. Click the ![Settings](https://cdn.cedwardsmedia.com/images/cnam/cog.png "Settings") icon
5. Enter your EveryoneAPI credentials and click "save changes"
6. Enter a valid 10-digit United States or Canada phone number and click the ![Search](https://cdn.cedwardsmedia.com/images/cnam/search.png "Search") button or press enter.

## Command-line client
The command-line client has been split off into a [separate project](https://github.com/cedwardsmedia/cnam-cli).


## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request ^^,

## Known Issues:

1. Apple Contacts, Google Contacts, and others do not import avatar from exported vCard. This is an issue with the way these products parse vCard documents and is NOT a bug in CNAM. However, in the interest of interoperability, I will add base64 encoded images to the vCard format in a future release.
2. (Web only) There is currently no way to select specific fields to return in the query. As such, all current queries request all available data from EveryoneAPI. This will be added in an upcoming release. The command-line tool, cnam.php, is not affected by this.

## Credits
Concept and original codebase: Corey Edwards ([@cedwardsmedia](https://www.twitter.com/cedwardsmedia))

Optimization and Debugging: Brian Seymour ([@eBrian](http://bri.io))

## License
_webCNAM_ is licensed under the **MIT License**. See LICENSE for more.

---
**Disclaimer**: _webCNAM_ is not endorsed by, sponsored by, or otherwise associated with [OpenCNAM](http://www.opencnam.com), [EveryoneAPI](http://www.everyoneapi.com), or [Telo USA, Inc](http://www.telo.com).
