# Tools

| Campo | Valore |
|--------|--------|
| **Document ID** | FDN-WEB-TOOL-001 |
| **Titolo** | Project Tools |
| **File** | README.md |
| **Versione** | 1.0 |
| **Stato** | Active |
| **Autore** | Filippo Tindari Maria Di Natale |
| **Repository** | mio_sito |
| **Ultimo aggiornamento** | 23/08/2026 |

---

# Scopo

Questa cartella contiene tutti gli strumenti di automazione utilizzati per la gestione del progetto.

L'obiettivo è rendere ripetibili tutte le operazioni di manutenzione, backup e ripristino del sito.

---

## Tool disponibili

| Script | Descrizione |
|---------|-------------|
| backup_portfolio.ps1 | Backup completo del progetto |
| export_database.ps1 | Esportazione del database MySQL |
| import_database.ps1 | Importazione del database |
| restore_portfolio.ps1 | Ripristino completo del progetto |

---

## Obiettivi

- Automatizzare il backup
- Automatizzare il ripristino
- Evitare operazioni manuali
- Ridurre gli errori
- Standardizzare il workflow

---

## Workflow

Backup
↓
Export Database
↓
Export Elementor
↓
Commit Git
↓
Push GitHub
↓
Release