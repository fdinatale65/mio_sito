# Development Workflow

| Campo | Valore |
|--------|--------|
| **Document ID** | FDN-WEB-WF-001 |
| **Titolo** | Development Workflow |
| **File** | DEVELOPMENT_WORKFLOW.md |
| **Versione** | 1.0 |
| **Stato** | Active |
| **Autore** | Filippo Tindari Maria Di Natale |
| **Repository** | mio_sito |
| **Ultimo aggiornamento** | 23/08/2026 |

---

# Scopo

Questo documento descrive il workflow di sviluppo adottato per il progetto **FDN Portfolio Website**.

L'obiettivo è garantire uno sviluppo ordinato, tracciabile e facilmente manutenibile.

---

# Ambiente di sviluppo

## Sistema operativo

Windows 11

## Web Server

XAMPP

## Linguaggi

- PHP
- HTML5
- CSS3
- JavaScript

## CMS

WordPress

## Tema

Astra Child (astra-fdn)

## IDE

Visual Studio Code

## Versionamento

Git

Repository remoto:

GitHub

---

# Workflow di sviluppo

Ogni nuova funzionalità segue il seguente processo.

## 1. Analisi

- raccolta requisiti
- definizione obiettivi
- studio soluzione

---

## 2. Progettazione

Produzione della documentazione:

- Architecture
- Components
- Design
- Roadmap

---

## 3. Implementazione

Sviluppo del codice.

Principi adottati:

- codice pulito
- riutilizzabilità
- modularità
- compatibilità WordPress

---

## 4. Test

Verifica di:

- funzionalità
- responsive
- compatibilità browser
- prestazioni
- accessibilità

---

## 5. Git

Ogni modifica significativa deve essere:

- verificata
- documentata
- committata

Formato commit:

```
type: descrizione
```

Esempi:

```
feat: add hero section

fix: improve responsive menu

docs: update architecture documentation

style: improve typography
```

---

## 6. Push

Dopo ogni commit stabile:

- Push su GitHub

---

## 7. Documentazione

Ogni modifica importante deve aggiornare almeno uno dei documenti presenti nella cartella docs.

---

# Convenzioni

## Tema

Tutte le personalizzazioni devono essere sviluppate esclusivamente nel tema child.

Il tema Astra originale non deve essere modificato.

---

## Componenti

Ogni componente deve essere:

- riutilizzabile
- documentato
- facilmente manutenibile

---

## Naming

Utilizzare nomi chiari e descrittivi.

---

# Obiettivi del progetto

Realizzare un portfolio professionale che rappresenti:

- competenze tecniche
- esperienza professionale
- portfolio lavori
- blog tecnico
- curriculum
- contatti

---

# Roadmap

Le attività pianificate sono descritte nella cartella:

```
docs/Roadmap
```

---

# Stato

**Workflow:** Active

**Repository:** Active

**Sviluppo:** In corso