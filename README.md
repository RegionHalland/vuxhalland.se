# Instruktioner för vuxhalland.se


## Hämta hem webbplatsen via Git till den folder på servern där webbplatsen skall ligga

```sh
git clone https://github.com/RegionHalland/vuxhalland.se.git .
```

## Checka ut en release på servern

```sh
git checkout v1.0.0
```

## Installera en .env-fil på servern med nödvändiga variabler
Filen skall innehålla t.ex. ACF-nyckel, namn på databas, hem-url o. dyl. 

## Kör composer update i roten samt i web/app/themes/regionhalland
Du bör nu kunna nå Wordpress webbinstallerare från din sajts URL. Om du har en databaskopia från t.ex. en stage-miljö eller lokal installation kan du nu importera den. 


# Egna region-halland-plugins som används (för övriga: se composer.json i roten)

```sh
"regionhalland/region-halland-acf-add-theme-subpage": "1.3.2",
"regionhalland/region-halland-acf-cookie-notice": "1.3.2",
"regionhalland/region-halland-acf-page-education-repeater": "1.6.1",
"regionhalland/region-halland-acf-page-links-blurbs": "1.7.0",
"regionhalland/region-halland-acf-page-menu-text": "1.2.0",
"regionhalland/region-halland-breadcrumbs-pages": "1.2.0",
"regionhalland/region-halland-find-on-page": "2.0.0",
"regionhalland/region-halland-main-post-settings-vuxhalland": "1.1.0",
"regionhalland/region-halland-page-children": "1.3.0",
"regionhalland/region-halland-parent-page": "1.1.0",
"regionhalland/region-halland-prepare-the-content": "1.2.0",
"regionhalland/region-halland-single-page-information": "1.1.0",
"regionhalland/region-halland-tree-first-level": "1.4.0",
```
    
## Versionshistorik

### 1.2.0
- Sorterat kommunerna i bokstavsordning

### 1.1.0
- Justering av tillgänglighet, dvs nästling, kontrast, attribut m.m.
- nya och uppdaterade plugins inkluderat licensmodell

### 1.0.2
- Justerat versionsnummer i app.blade

### 1.0.1
- Mindre justeringar, ex bytat logotyp, tagit bort whitespace m.m.

### 1.0.0
- Första releasen
