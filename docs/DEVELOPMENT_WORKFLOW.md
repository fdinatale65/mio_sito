# Development Workflow

| Campo | Valore |
|--------|---------|
| **Document ID** | FDN-WEB-WF-001 |
| **Titolo** | Development Workflow |
| **File** | DEVELOPMENT_WORKFLOW.md |
| **Versione** | 2.0 |
| **Stato** | Active |
| **Autore** | Filippo Tindari Maria Di Natale |
| **Repository** | mio_sito |
| **Ultimo aggiornamento** | 22/09/2026 |

---

# Scopo

Questo documento descrive il workflow di sviluppo adottato per il progetto **FDN Portfolio**.

L'obiettivo è garantire uno sviluppo ordinato, documentato, tracciabile e facilmente manutenibile durante tutto il ciclo di vita del progetto.

---

# Ambiente di sviluppo

## Sistema Operativo

Windows 11

---

## Web Server

XAMPP

---

## CMS

WordPress

---

## Tema

Astra Child (`astra-fdn`)

---

## Linguaggi

- PHP
- HTML5
- CSS3
- JavaScript

---

## IDE

Visual Studio Code

---

## Versionamento

Git

Repository remoto

GitHub

---

# Workflow di sviluppo

Ogni nuova funzionalità segue il seguente processo.

## 1. Analisi

- raccolta dei requisiti;
- definizione degli obiettivi;
- analisi della soluzione.

---

## 2. Progettazione

Aggiornamento della documentazione tecnica.

Quando necessario dovranno essere aggiornati:

- Architecture
- Components
- UX
- Design
- SEO
- Roadmap

---

## 3. Backup

Prima di modifiche significative dovranno essere eseguiti:

- backup del database MySQL;
- esportazione dei template Elementor;
- backup delle personalizzazioni;
- verifica dello stato del repository Git.

---

## 4. Implementazione

Sviluppo della funzionalità.

Principi adottati:

- codice pulito;
- modularità;
- riutilizzabilità;
- compatibilità WordPress;
- compatibilità Elementor.

---

## 5. Test

Verifica di:

- funzionalità;
- responsive;
- accessibilità;
- compatibilità browser;
- prestazioni;
- SEO tecnica.

---

## 6. Aggiornamento della documentazione

Ogni modifica significativa dovrà aggiornare la relativa documentazione presente nella cartella `docs`.

La documentazione rappresenta il riferimento ufficiale del progetto.

---

## 7. Git

Prima del commit verificare:

- `git status`;
- documentazione aggiornata;
- backup completati (quando necessari);
- test completati.

Formato commit

```text
docs: ...

feat: ...

fix: ...

style: ...

refactor: ...

chore: ...
```

Esempi

```text
docs: finalize foundation documentation

feat: implement hero section

fix: improve mobile navigation

style: refine typography

refactor: simplify hero layout

chore: update project dependencies
```

---

## 8. Push

Dopo ogni commit stabile.

```text
git push
```

Il repository remoto dovrà rappresentare sempre uno stato consistente del progetto.

---

# Convenzioni

## Tema

Tutte le personalizzazioni devono essere sviluppate esclusivamente nel tema child.

Il tema Astra originale non dovrà mai essere modificato.

---

## Componenti

Ogni componente dovrà essere:

- documentato;
- riutilizzabile;
- responsive;
- accessibile;
- coerente con il Design System.

---

## Naming

Utilizzare nomi chiari e descrittivi per:

- file;
- immagini;
- cartelle;
- componenti;
- documenti.

---

# Obiettivi del progetto

Realizzare un portfolio professionale che rappresenti:

- competenze tecniche;
- esperienza professionale;
- portfolio progetti;
- blog tecnico;
- Knowledge Base;
- curriculum;
- contatti.

---

# Fase corrente

```
Foundation Documentation

Completed
```

---

# Prossima fase

```
Home Page Implementation
```

---

# Roadmap

Le milestone e la pianificazione sono documentate nella cartella:

```text
docs/Roadmap
```

---

# Stato

**Workflow:** Active

**Repository:** Active

**Documentazione:** Foundation Completed

**Sviluppo:** Home Page Implementation (Next Phase)

**Versionamento:** Git + GitHub