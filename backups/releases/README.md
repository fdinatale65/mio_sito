# Releases

| Campo | Valore |
|--------|--------|
| **Document ID** | FDN-WEB-BKP-005 |
| **Titolo** | Releases |
| **File** | README.md |
| **Versione** | 1.0 |
| **Stato** | Active |
| **Autore** | Filippo Tindari Maria Di Natale |
| **Repository** | mio_sito |
| **Ultimo aggiornamento** | 23/08/2026 |

---

# Scopo

Questa directory contiene gli snapshot ufficiali del progetto.

Ogni release rappresenta uno stato completo del sito e permette di ricostruire il progetto in una determinata versione.

## Ogni release deve contenere

- Dump del database MySQL
- Backup Elementor
- Eventuali personalizzazioni
- Configurazioni
- Changelog della release
- Documentazione tecnica
- Eventuali screenshot della versione

## Convenzione

```
release-x.y.z/
```

Esempio

```
release-0.2.0/
```

Struttura

```
release-0.2.0/
│
├── database/
├── elementor/
├── customizations/
├── docs/
├── CHANGELOG.md
└── RELEASE_NOTES.md
```

## Obiettivo

Le release consentono di:

- ripristinare una versione stabile;
- confrontare le modifiche tra release;
- conservare uno storico completo del progetto;
- garantire la tracciabilità delle evoluzioni del sito.
