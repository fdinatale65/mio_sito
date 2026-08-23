# Elementor Backups

| Campo | Valore |
|--------|--------|
| **Document ID** | FDN-WEB-BKP-003 |
| **Titolo** | Elementor Backups |
| **File** | README.md |
| **Versione** | 1.1 |
| **Stato** | Active |
| **Autore** | Filippo Tindari Maria Di Natale |
| **Repository** | mio_sito |
| **Ultimo aggiornamento** | 23/08/2026 |

---

# Scopo

Questa directory contiene tutte le esportazioni generate da Elementor.

Comprende:

- Pages
- Templates
- Globals

Ogni esportazione consente il ripristino di una parte del progetto senza dover ricostruire manualmente il layout.

---

## Struttura

- `pages/home/` — Template della Home
- Le future pagine saranno archiviate in directory dedicate.

## Convenzione nomi file

`<pagina>-<progetto>-v<versione>-YYYY-MM-DD.json`

Esempio:

`home-portfolio-fdn-v1.0-2026-07-22.json`

## Home

### v1.0 - 2026-07-22

Prima baseline completa della nuova Home del Portfolio FDN.

Stato:
- Desktop completato
- Tablet completato
- Mobile completato
- Verifica front-end completata

Template Elementor:
`Home - Portfolio FDN v1.0`

File:
`pages/home/home-portfolio-fdn-v1.0-2026-07-22.json`

## Ripristino

Il file JSON può essere reimportato tramite la gestione dei template di Elementor.

Dopo un eventuale ripristino verificare:
- responsive Desktop / Tablet / Mobile;
- collegamenti e pulsanti;
- menu di navigazione;
- eventuali impostazioni globali Elementor/Astra;
- assegnazione della pagina come homepage WordPress.