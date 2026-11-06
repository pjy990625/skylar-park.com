# skylar-park.com

Source code for [skylar-park.com](https://www.skylar-park.com): a custom WordPress **block theme** plus site-specific functionality, built without a page builder.

## What's in this repo

```
.
├── themes/skylar-park/      Block theme (theme.json, templates, parts, patterns)
│   ├── theme.json           Design tokens: colors, spacing, typography, element styles
│   ├── templates/           front-page, page, single, case study single/archive, 404
│   ├── parts/               header, footer
│   └── patterns/            hero, case studies, about, contact, footer
├── mu-plugins/
│   └── skylar-park-core.php Case Study post type + performance tweaks
├── .wp-env.json             Local WordPress (Docker) config
├── composer.json            PHPCS + WordPress Coding Standards
└── phpcs.xml.dist           Lint rules
```

**Not in this repo (on purpose):** WordPress core, the database (page/post content), `wp-content/uploads`, and `wp-config.php`. Content is written in the WordPress editor; only code lives in Git.

Why `mu-plugins` instead of the theme? The Case Study post type is *content structure*, not design. If it lived in the theme, switching themes would make every case study disappear.

## Requirements

- [Docker Desktop](https://www.docker.com/products/docker-desktop/) (running)
- Node.js 20+
- PHP 8.1+ and [Composer](https://getcomposer.org/) (for linting)

## Local development

```bash
npm install
composer install
npm start
```

- Site: http://localhost:8888
- Admin: http://localhost:8888/wp-admin (user `admin`, password `password`)

`npm start` also activates the theme and sets pretty permalinks (see `lifecycleScripts` in `.wp-env.json`).

Other commands:

| Command | What it does |
|---|---|
| `npm run stop` | Stop the containers |
| `npm run wp -- <command>` | Run WP-CLI, e.g. `npm run wp -- plugin list` |
| `npm run reset` | Delete the local database and start fresh |
| `composer lint` | Check PHP against WordPress Coding Standards |
| `composer lint:fix` | Auto-fix what PHPCS can fix |

## Writing a case study

1. **Case Studies → Add New** in wp-admin.
2. The editor pre-fills the structure: **Problem → Constraints → Solution → Result → Trade-offs**.
3. Fill in the **Excerpt** (shown on cards) and a **Featured image**.
4. Anonymize client names unless you have written permission.

## Deployment

Only `themes/skylar-park/` and `mu-plugins/` are deployed to the host's `wp-content/`. After the first deploy, go to **Settings → Permalinks** and click **Save** once so `/case-studies/` URLs work.

## Quality targets

- PageSpeed Insights: 90+ on mobile and desktop
- No console errors
- Keyboard navigable, visible focus, WCAG AA contrast, alt text on all images

## License

GPL-2.0-or-later, the same license as WordPress.
