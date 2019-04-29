# ConjugationShot

A simple service which screenshots a table from SpanishDict.com and saves it to `/storage/screenshots/`.

## How it works

The service listens to `GET` requests on /conj/{verb}.    
The verb's indicative conjugation table will be saved to 
`/resources/screenshots/{verb}.png` to be used in Anki 
flashcards and the like.

## Running it

Dependencies:
  - [Lumen dependencies](https://lumen.laravel.com/docs/5.8)

```
npm install
composer install
php -S localhost:8181 -t Public
```