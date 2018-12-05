# Styleguide 💅🏾

Styleguide från december 2018 och framåt, tillgänglig för hela Region Halland

<details><summary><strong>View styleguide structure</strong></summary>
<p>

```sh
RH-styleguide/                	# → Root
├── dist/                      	# → Folder för min-fil
│   ├── main.min.css/          	# → Kompilerad min-fil
│   scss/                  		# → SCSS Filer
│   │   ├── main.scss          # → RH-Styleguide huvud-fil
│   │   ├── base/              # → Reset & font deklarationer
│   │   ├── components/        # → Komponenter
│   │   ├── config/            # → Utility klaser
│   │   ├── mixins/            # → Mixins
│   │   ├── settings/          # → Variabler
├── package.json               # → Node.js scripts
├── package.lock               # → NPM lock file (editera aldrig denna fil)
└── node_modules/              # → Node.js packages (editera aldrig denna fil)
```

<p>
</details>

## Vad som behövs:

* [Node](https://nodejs.org/en/) >= v6.0.0 
* [Yarn](https://yarnpkg.com/) >= v1.1.0 


## Starta med:

1. Klona repo:

```sh
$ git clone https://github.com/RegionHalland/RH-styleguide.git
$ cd RH-styleguide
$ yarn install
$ in cmd: npm install gulp --global
```

2. Bygg min-fil:

* `gulp dist` — Kompilera, optimera och spara min-fil till dist-folder