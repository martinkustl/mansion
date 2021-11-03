# Aplikace zámeček

## Spuštění dev prostředí

Níže je uveden příkaz ke spuštění aplikace. --host a --port určují, na jaké doméně a portu aplikace poběží

```
php artisan serve --host=localhost --port=3000
```

## Databáze

V rámci databáze nás zajímá celá složka <strong>database</strong>

Podsložku "factories" neřešíme, v té se dá jednoduše generovat stovky dummy záznamů pro vývoj, ale to mi přišlo zybtečný používat. <br />

Zajímají nás tu tedy dvě složky - migrations a seeders <br />

### Složka migrations

V této složce jsou nadefinovány všechny tabulky naší aplikace (viz tato část dokumentace - https://laravel.com/docs/8.x/migrations#introduction)
Migrace pouštíme příkazem:

```
php artisan migrate
```

Proč je to dobrý? - Je zkrátka fajn mít všechny tyto definice SQL tabulek jako součást aplikace a to ze dvou důvodů:

<ol>
<li>V rámci vývoje stačí všem vývojářům pouze stáhnout aplikaci z gitu a pustit si migrace + seedery (o nich trochu dále)</li>
<li>Samotné SQL schéma aplikace je takto přímo spojené s aplikací, takže to, že si nechtěně smažeme schéma v DBčku, je úplně jedno. Prostě si pustíme migraci znovu a zas máme vše zpátky.</li>
<ol>

<br/>
<br/>

### Složka seeders

Další podstatná složka. <br />
Zde jsou nadefinovány tzv. seedy databáze. <br />
Kromě schématu databáze také potřebujeme nějaká data, se kterými během vývoje budeme pracovat. <br />
Insertovat je přímo v databázi je samozřejmě možné, ale je zde problém, že pro přenesení na další PC je potřeba exportovat/importovat DB, pak taky pokud si nějak databázi smažeme, tak musíme vše vytvářet znovu, ... <br />
Je to zkrátka nešikovný. Proto vznikly seedy. Ty stačí jednou nadefinovat a následně pomocí jednoho příkazu je spustit. Tím se veškerá nadefinovaná data nahrají do databáze.
Příkaz pro spuštění všech seedů <br />

```
php artisan db:seed
```

Díky migracím a seedům nám k vývoji ve finále opravdu stačí jen samotný projekt aplikace.

### Složka factories

Tu jsme nepoužily, ale pro úplnost je tu taky uvedena. <br />
Ta je velice důležitá, pokud potřebujeme mít v databázi hodně záznamů. <br />
To je neskutečný overhead vytvářet ručně a proto existují tyto factories. <br />
Stačí pouze nadefinovat jaký typ dat se má generovat do jednotlivých tabulek a kolik toho má být. Framework pak díky tzv. fakeru vygeneruje požadovaná data. <br />
