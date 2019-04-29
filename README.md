# ConjugationShot

A simple service which screenshots a table from SpanishDict.com and saves it to `/storage/screenshots/`.    
The service listens to `GET` requests on /conj/{verb}.
The verb's indicative table will be saved to `/resources/screenshots/{verb}.png` to be used in Anki flashcards and the like.
