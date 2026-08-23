# FDN WordPress Tool Suite

| Campo | Valore |
|--------|--------|
| Document ID | FDN-WEB-ARCH-001 |
| Titolo | FDN WordPress Tool Suite |
| Repository | mio_sito |
| Versione | 1.0 |
| Stato | Draft |
| Autore | Filippo Tindari Maria Di Natale |
| Ultimo aggiornamento | 23/08/2026 |

---

# Scopo

La FDN WordPress Tool Suite è una raccolta di strumenti PowerShell progettata per automatizzare la gestione dei repository WordPress sviluppati da FDN Informatica.

L'obiettivo è standardizzare tutte le attività di backup, ripristino, versioning e manutenzione.

---

# Architettura

```
tools
│
├── backup_portfolio.ps1
├── export_database.ps1
├── import_database.ps1
├── restore_portfolio.ps1
├── create_release.ps1
├── update_version.ps1
├── verify_repository.ps1
│
└── lib
    │
    ├── filesystem.ps1
    ├── git.ps1
    ├── logger.ps1
    └── mysql.ps1
```

---

# Workflow

```
Verifica Repository
        │
        ▼
Backup Database
        │
        ▼
Backup Elementor
        │
        ▼
Backup Child Theme
        │
        ▼
Aggiornamento Documentazione
        │
        ▼
Git Commit
        │
        ▼
Git Push
        │
        ▼
Creazione Release
```

---

# Moduli

## filesystem

Gestione file e cartelle.

## git

Integrazione Git.

## logger

Sistema centralizzato di logging.

## mysql

Backup e ripristino database.

---

# Roadmap

## Versione 0.1

- Architettura
- Documentazione
- Placeholder script

## Versione 0.2

- Export Database

## Versione 0.3

- Backup Portfolio

## Versione 0.4

- Restore

## Versione 0.5

- Release Manager

## Versione 1.0

- Tool Suite completa

---

# Obiettivo finale

Realizzare una Tool Suite professionale, riutilizzabile su qualsiasi progetto WordPress sviluppato da FDN Informatica.