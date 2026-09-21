# Repository Architecture

| Campo | Valore |
|--------|--------|
| **Document ID** | ARCH-001 |
| **Titolo** | Repository Architecture |
| **File** | ARCH-001_Repository_Architecture.md |
| **Versione** | 1.1.0 |
| **Stato** | Active |
| **Autore** | Filippo Tindari Maria Di Natale |
| **Repository** | FDN Portfolio |
| **Ultimo aggiornamento** | 21/09/2026 |

---

# 1. Scopo

Il presente documento definisce l'architettura del repository del progetto **FDN Portfolio**.

L'obiettivo è realizzare una struttura ordinata, facilmente manutenibile e completamente documentata, separando il codice sorgente dalla documentazione tecnica, dai backup e dagli strumenti di sviluppo.

Questa organizzazione permette di mantenere il progetto scalabile nel tempo e conforme alle buone pratiche di sviluppo software.

---

# 2. Obiettivi

L'architettura del repository è progettata per:

- separare chiaramente codice, documentazione e backup;
- evitare modifiche dirette al core di WordPress;
- sviluppare esclusivamente tramite Theme Child;
- mantenere lo storico delle modifiche;
- documentare ogni componente del progetto;
- facilitare il versionamento tramite Git;
- rendere ripetibili backup e ripristini;
- automatizzare le attività ricorrenti mediante Tool Suite.

---

# 3. Principi Architetturali

Il repository segue alcuni principi fondamentali.

## 3.1 Separazione delle responsabilità

Ogni cartella svolge un unico compito.

Ad esempio:

- documentazione
- backup
- strumenti
- codice personalizzato

rimangono completamente separati.

---

## 3.2 Nessuna modifica al Core

Il core WordPress non deve essere modificato.

Qualsiasi personalizzazione dovrà essere sviluppata all'interno del tema child oppure tramite plugin dedicati.

---

## 3.3 Repository Pulito

Nel repository vengono mantenuti esclusivamente:

- codice sviluppato
- documentazione
- backup esportabili
- configurazioni

Sono esclusi:

- cache
- upload
- file temporanei
- log runtime
- backup automatici
- database di lavoro

---

## 3.4 Documentazione First

Ogni modifica significativa deve essere accompagnata dall'aggiornamento della documentazione tecnica.

La documentazione è parte integrante del progetto.

---

## 3.5 Backup Versionabili

I backup presenti nel repository sono esclusivamente backup esportabili e leggibili.

I backup completi del sito e del database vengono conservati esternamente al repository.

---

# 4. Struttura del Repository

La struttura logica è la seguente.

```
FDN Portfolio
│
├── backups/
│
├── docs/
│
├── tools/
│
├── wp-content/
│
│   └── themes/
│       └── astra-fdn/
│
├── .editorconfig
├── .gitattributes
├── .gitignore
├── CHANGELOG.md
├── LICENSE
└── README.md
```

---

# 5. Directory Principali

## backups/

Contiene esclusivamente backup esportabili.

Comprende:

```
backups/

├── customizations/
├── database/
│   ├── current/
│   └── archive/
├── elementor/
│   ├── globals/
│   ├── pages/
│   └── templates/
└── releases/
```
---

## docs/

Raccoglie tutta la documentazione tecnica del progetto.

Comprende:

- Architecture
- Components
- Design
- Images
- Meetings
- Roadmap
- Screens
- Archive

---

## tools/

Contiene gli strumenti di supporto allo sviluppo.

Comprende:

- backup automatici
- esportazioni
- utility Git
- utility MySQL
- logging

---

## wp-content/themes/astra-fdn/

Contiene il tema child sviluppato per il sito.

Rappresenta l'unica area nella quale viene scritto codice personalizzato.

---

## 5.1 Backup Strategy

La filosofia dei backup è cosi impostata

- SQL prima delle milestone
- Export Elementor
- Git come versionamento del codice
- Backup esterni completi
- Convenzione dei nomi

# 6. Workflow di Sviluppo

Ogni nuova funzionalità segue il seguente processo.

1. Analisi
2. Documentazione
3. Backup Baseline
4. Implementazione
5. Verifica
6. Commit Git
7. Push
8. Aggiornamento CHANGELOG
9. Aggiornamento Roadmap
10. Snapshot Elementor
11. Snapshot Database

---

# 7. Standard di Versionamento

Il progetto utilizza Git come sistema di versionamento.

I commit seguono la convenzione:

- feat
- fix
- docs
- refactor
- style
- chore

---

# 8. Convenzioni Documentali

Ogni documento del repository deve riportare:

- identificativo univoco
- titolo
- versione
- stato
- autore
- repository
- data ultimo aggiornamento

Tutta la documentazione utilizza Markdown.

---

## 8.1 Backup Naming Convention

```
portfolio-db-v1.0-2026-09-21.sql.gz

portfolio-kit-v1.0-2026-09-21.zip

home-v1.0-2026-09-21.json
```
---

# 9. Evoluzione dell'Architettura

L'architettura del repository è progettata per crescere insieme al progetto.

Nuove directory potranno essere introdotte mantenendo i principi definiti nel presente documento.

Ogni modifica strutturale dovrà essere documentata tramite una nuova revisione di questo documento.

---

# 10. Documenti Correlati

- README.md
- CHANGELOG.md
- DEVELOPMENT_WORKFLOW.md
- ROADMAP.md
- DOCUMENTATION_INDEX.md
- ARCH-002 Portfolio Information Architecture

---

# Cronologia Revisioni

| Versione | Data | Descrizione |
|----------|------|-------------|
| 1.0.0 | 23/08/2026 | Prima emissione del documento. |
| 1.1.0 | 21/09/2026 | Aggiornata la strategia dei backup, workflow e convenzioni di versionamento. |