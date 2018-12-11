# Styleguide

# Översikt (Kan endast nås inom Region nätet RHWLAN) - http://demo.regionhalland.se/rh-cdn/styleguide/style.php#

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

# Roadmap

Under vintern 2018/2019 definieras grafiskt i programmet Figma designen för de komponenter som kommer att utrryckas som CSS här i Styleguiden. Exempel på den uppmärkning i HTML som krävs kommer också att tillgängliggöras. Planen för implementationen av CSS-delen här i Styleguiden är som följer: 

**Styleguide version 0.1. Utveckling klar 12/12**
 
- Huvudmeny  
- Sekundärmeny  
- Vänstermeny  
- Hitta på sidan  

**Styleguide version 0.2. Utveckling klar 19/12**\
Version 0.2 fokuserar på det som visas på en startsida 
  
- Länkstig (Brödsmuleväg)
- Knapp 
- Sidfot  
- Sidfot med loggor (ska användas för webbplatser som har gemensamma avsändare) 
- Sidhuvud (Ska innehålla logga, sajtnamn, topplänkar, sökruta) 
- Logga + sajtnamn 
- Topplänkar 
- Sökruta 
- Taggar 
- Puffar 
- Nyhetsflöde 
- Snabblänkar 
- Herobild 
- Viktigt meddelande  
  
**Styleguide version 0.3. Utveckling klar 16/1 2019**
  
- Bild och Bildtext 
- Länklista (modul) 
- Sidinformation (senast ändrad, publicerad) 
- Textfält 
- Tabell 
- Filmer 
- Dokument 
- Länkar - olika states 
- Formulär 
- Artikel (nyhet)  

**Styleguide version 1.0. Utveckling klar 23/1 2019**\
När denna version är klar så räknar vi med att vi har version 1.0 av Styleguiden. 
  
- Filtrering 
- Metadatakomponent 
- Träfflistekort 
- Paginering 
- Alfabetisk gruppering 
- Kalender 
- Datumkort 
- Tabbar 
- Direktlänk (söket)
