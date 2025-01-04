# php-strong-password-generator
Descrizione: generatore di password (abbastanza) sicure, che permette di scegliere la lunghezza, la composizione tra cui numeri e caratteri speciali e la loro unicità.

Milestone 1
Ho creato un form che invii in GET la lunghezza della password. Una funzione utilizza questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all'utente. Scritto tutto (logica e layout) in un unico file index.php.
Milestone 2
Verificato il corretto funzionamento del codice, ho spostato la logica in un file functions.php incluso nella pagina principale.
Milestone 3 (BONUS)
Invece di visualizzare la password nell'index, avviene un redirect ad una pagina dedicata che tramite $_SESSION recupera la password da mostrare all'utente.
Milestone 4 (BONUS)
Ho introdotto la gestione di ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Possibilità di permettere o meno la ripetizione di caratteri uguali.