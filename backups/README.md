# Backups

| Campo | Valore |
|--------|--------|
| **Document ID** | FDN-WEB-BKP-001 |
| **Titolo** | Backup Strategy |
| **File** | README.md |
| **Versione** | 1.0 |
| **Stato** | Active |
| **Autore** | Filippo Tindari Maria Di Natale |
| **Repository** | mio_sito |
| **Ultimo aggiornamento** | 23/08/2026 |

---

# Scopo

Questa directory contiene tutti i backup del progetto **FDN Portfolio Website**.

L'obiettivo è consentire il ripristino completo del sito indipendentemente dal repository Git.

---

# Struttura

```
backups/

database/
elementor/
wordpress/
releases/
```

---

# Contenuto

## Database

Backup MySQL del sito.

## Elementor

Esportazioni JSON di pagine, template e impostazioni globali.

## WordPress

Backup delle personalizzazioni del sito.

## Releases

Snapshot completi delle versioni rilasciate.

---

# Nota

Il repository Git contiene esclusivamente il codice sorgente e la documentazione.

Il database e gli altri elementi non versionabili vengono archiviati in questa directory.