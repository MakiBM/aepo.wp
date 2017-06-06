# AEPO 

This is just a test project for a Codable softwarehouse.

online: [http://www.maki2002.ayz.pl/aepowp/](http://www.maki2002.ayz.pl/aepowp/)


## Stack
I used Roots stack for the project base (bedrock + sage). I used sage 9 which is still in beta, but it brings to the table blade templating and webpack so I preferred to pick it up to showcase usage of more modern approach (+ it's fun to do something new).

Javascript is written in ES6 standards and piped through webpack to transpile back to ES5. It's used mainly for sliders, ES6 might seem like overkill and I wouldn't pick it for a client for such a small project - but again, I'd like to showcase that I'm capable of working with big scale projects and writing maintainable code.

CSS is handled with SASS preprocessor and BEM naming convention which I tweak a little to something more like BE-m with unix style modifiers (.block__element -modifier).

For admin side I use ACF PRO with heavy usage of Flexible Content and Repeater fields. If you'd check the Home page you'd see how it is composed out of building blocks that are reusable in different context and could be used to produce different layouts.


## Folder Structure
If you'd like to dive into code here is the project structure:

```
├── composer.json             # → Manage versions of WordPress, plugins & dependencies
├── config                    # → WordPress configuration files
│   ├── application.php       # → Primary WP config file (wp-config.php equivalent)
│   └── environments          # → Environment specific configs
│       ├── development.php   # → Development config
│       ├── staging.php       # → Staging config
│       └── production.php    # → Production config
├── vendor                    # → Composer packages (never edit)
└── web                       # → Web root (vhost document root)
    ├── app                   # → wp-content equivalent
    │   ├── mu-plugins        # → Must use plugins
    │   ├── plugins           # → Plugins
    │   ├── themes/aepo/            # → Root of theme
    │     ├── app/                  # → Theme PHP
    │     │   ├── lib/Sage/         # → Blade implementation, asset manifest
    │     │   ├── admin.php         # → Theme customizer setup
    │     │   ├── filters.php       # → Theme filters
    │     │   ├── helpers.php       # → Helper functions
    │     │   └── setup.php         # → Theme setup
    │     ├── composer.json         # → Autoloading for `app/` files
    │     ├── composer.lock         # → Composer lock file (never edit)
    │     ├── dist/                 # → Built theme assets (never edit)
    │     ├── node_modules/         # → Node.js packages (never edit)
    │     ├── package.json          # → Node.js dependencies and scripts
    │     ├── resources/            # → Theme assets and templates
    │     │   ├── assets/           # → Front-end assets
    │     │   │   ├── config.json   # → Settings for compiled assets
    │     │   │   ├── build/        # → Webpack and ESLint config
    │     │   │   ├── fonts/        # → Theme fonts
    │     │   │   ├── images/       # → Theme images
    │     │   │   ├── scripts/      # → Theme JS
    │     │   │   └── styles/       # → Theme stylesheets
    │     │   ├── functions.php     # → Composer autoloader, theme includes
    │     │   ├── index.php         # → Never manually edit
    │     │   ├── screenshot.png    # → Theme screenshot for WP admin
    │     │   ├── style.css         # → Theme meta information
    │     │   └── views/            # → Theme templates
    │     │       ├── layouts/      # → Base templates
    │     │       └── partials/     # → Partial templates
    │     └── vendor/               # → Composer packages (never edit)
    │   └── uploads           # → Uploads
    ├── wp-config.php         # → Required by WP (never edit)
    ├── index.php             # → WordPress view bootstrapper
    └── wp                    # → WordPress core (never edit)
```

## Highlights
I recommend checking my trick on mobile nav - it can work fine without JS - I believe it's important to think about no-JS situation on mobile (network errors while traveling, slow connection, etc). We may live without sliders but nav is first class importance for accessibility. Tiles for recent posts also showcase some flexbox powers