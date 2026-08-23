# Home Page

| Campo | Valore |
|--------|--------|
| **Document ID** | FDN-WEB-BKP-004 |
| **Titolo** | Home Page Backup |
| **File** | README.md |
| **Versione** | 1.0 |
| **Stato** | Active |
| **Autore** | Filippo Tindari Maria Di Natale |
| **Repository** | mio_sito |
| **Ultimo aggiornamento** | 23/08/2026 |

---

# Scopo

Questa cartella contiene gli export della Home Page realizzati tramite Elementor.

Ogni esportazione rappresenta una versione storica della pagina e permette di ripristinare rapidamente il layout in caso di modifiche errate o regressioni.

---

## Convenzione dei nomi

home-portfolio-fdn-vX.Y-YYYY-MM-DD.json

Esempi

home-portfolio-fdn-v1.0-2026-07-22.json
home-portfolio-fdn-v1.1-2026-07-22.json
home-portfolio-fdn-v2.0-2026-08-15.json

---

## Per ogni versione devono essere registrati

- Versione
- Data esportazione
- Motivo della modifica
- Compatibilità con Elementor
- Compatibilità con WordPress
- Eventuale riferimento al commit Git

---

## Workflow consigliato

1. Modifica della Home.
2. Test locale.
3. Esportazione Elementor (.json).
4. Salvataggio in questa cartella.
5. Aggiornamento della documentazione.
6. Commit Git.
7. Push su GitHub.

---

## Note

Questa cartella contiene esclusivamente i file di esportazione della Home Page.

Le immagini sono archiviate nella cartella:

docs/Images/

Le informazioni relative al database sono archiviate in:

backups/database/
