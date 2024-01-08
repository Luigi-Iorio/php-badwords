# PHP Badwords

### Descrizione

Lo scopo di questo progetto in PHP era creare un modulo che consentisse l'invio di due informazioni: un paragrafo e una parola da censurare.

### Funzionamento

Il progetto è composto da due file: `index.php` e `censura.php`.

- `index.php` contiene il form che permette all'utente di inserire il paragrafo e la parola da censurare. Il form invia i dati tramite il metodo get al file `censura.php`.
- `censura.php` riceve i dati dal form e li elabora. In particolare, esegue queste operazioni:
  - stampa a schermo il paragrafo e la sua lunghezza
  - stampa di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (\*\*\*) le parole da censurare
