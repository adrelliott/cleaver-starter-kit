# Cleaver Starter Kit

[![Current Version](https://img.shields.io/packagist/v/aschmelyun/cleaver.svg?style=flat-square)](https://packagist.org/packages/aschmelyun/cleaver)
![License](https://img.shields.io/github/license/aschmelyun/cleaver.svg?style=flat-square)
[![Total Downloads](https://img.shields.io/packagist/dt/aschmelyun/cleaver.svg?style=flat-square)](https://packagist.org/packages/aschmelyun/cleaver)

**NOTE:** This is mainly the original repo, plus a couple of tweaks, such as:

- Tailwindcss has been updated to 3.0
- Included AlpineJS
- Created a few layout files
- Included the `dist` folder in the repo, for CloudFlare Pages (it cries its eyes out if you try to build it on the platform)

## Getting Started

1. Clone this repo `git clone https://github.com/adrelliott/cleaver-starter-kit.git <folder-name>`
2. Do a `composer update`
3. Run `npm install`
4. Run `npm run dev` for local build

To serve locally:

`cd dist` then run
`valet link <project-name>`

Visit at <project-name>.test.

## Deploying to Cloudflare Pages

As mentioned, Cloudflare Pages doesn't seem to like this, so instead of running the build command on Cloudflare, run `npm run production` locally, and set the root folder to `dist` on the project setup page on Cloudflare.

Push the repo and Cloudflare should automatically deploy - the contents of the `dist` folder are served publicly. 

See the [original repo](https://github.com/aschmelyun/cleaver) for full instructions.
---
## License

The MIT License (MIT). See [LICENSE.md](https://github.com/aschmelyun/cleaver/blob/master/LICENSE.md) for more details.
