# LARAVEL ONE TO MANY - Gestione Tipologie di Progetto

## Descrizione

**Laravel One to Many** è un'applicazione sviluppata con **Laravel 10** per gestire un sistema di progetti, dove ogni progetto può essere associato a una tipologia (Type). La relazione tra i progetti e le tipologie è definita come una relazione **one to many**. Questo progetto estende la funzionalità precedente aggiungendo la gestione delle tipologie di progetto.

## Funzionalità

- **Gestione Tipologie**:
  - Ogni progetto può essere associato a una tipologia specifica (Type).
  - CRUD completo per le tipologie di progetto tramite una pagina dedicata all'amministrazione.
  - Ogni progetto visualizza la tipologia associata nella sua pagina di dettaglio.

- **Relazione One to Many**:
  - Ogni tipologia può essere associata a più progetti.
  - Ogni progetto può essere legato a una sola tipologia.

- **Creazione e Modifica dei Progetti**:
  - Durante la creazione e modifica di un progetto, è possibile selezionare una tipologia per associarla al progetto.

## Tecnologie Utilizzate

- **Laravel 10**: Framework PHP per la gestione del backend.
- **Eloquent ORM**: Per la gestione delle relazioni tra modelli.
- **Blade**: Motore di templating per la gestione delle view.
- **PHP**: Linguaggio di programmazione per il backend.
- **MySQL**: Database per la memorizzazione dei dati.

