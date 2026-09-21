# Home Page Information Architecture

| Campo | Valore |
|--------|--------|
| **Document ID** | ARCH-002 |
| **Titolo** | Home Page Information Architecture |
| **File** | ARCH-002_Home_Page_Information_Architecture.md |
| **Versione** | 1.0.0 |
| **Stato** | Active |
| **Autore** | Filippo Tindari Maria Di Natale |
| **Repository** | FDN Portfolio |
| **Ultimo aggiornamento** | 21/09/2026 |

---

# 1. Scopo

Il presente documento definisce l'architettura informativa della Home Page del progetto **FDN Portfolio**.

La Home rappresenta il principale punto di ingresso del sito e deve consentire al visitatore di comprendere rapidamente:

- chi è Filippo Di Natale;
- quali competenze possiede;
- quali progetti ha realizzato;
- quali servizi offre;
- come contattarlo.

La progettazione segue il principio **Information First**, privilegiando chiarezza, leggibilità, semplicità e valore dei contenuti.

---

# 2. Obiettivi

La Home deve:

- presentare immediatamente il profilo professionale;
- trasmettere autorevolezza e affidabilità;
- valorizzare oltre trent'anni di esperienza nel settore IT;
- mostrare i progetti principali;
- guidare il visitatore verso una Call To Action;
- costituire il punto di accesso all'intero ecosistema FDN.

---

# 3. Target

Il sito è rivolto principalmente a:

- aziende;
- clienti privati;
- software house;
- recruiter;
- responsabili IT;
- professionisti del settore;
- colleghi sviluppatori.

---

# 4. Principi di Progettazione

La Home segue alcuni principi fondamentali.

## 4.1 Chiarezza

Il visitatore deve comprendere entro pochi secondi:

- chi sono;
- cosa faccio;
- quale valore posso offrire.

---

## 4.2 Gerarchia Visiva

Ogni sezione deve avere un preciso ordine di lettura.

Le informazioni più importanti devono essere immediatamente visibili.

---

## 4.3 Scansione Rapida

La pagina deve poter essere letta rapidamente.

Blocchi troppo lunghi verranno evitati.

---

## 4.4 Professionalità

Lo stile grafico deve trasmettere:

- competenza;
- esperienza;
- precisione;
- affidabilità.

---

## 4.5 Evoluzione

La struttura deve poter crescere senza richiedere modifiche radicali.

Nuove sezioni potranno essere aggiunte mantenendo l'architettura definita.

---

# 5. Architettura della Home

La Home sarà composta dai seguenti blocchi.

```
HOME

01 Hero

02 About Me

03 Core Competencies

04 Technology Stack

05 Featured Projects

06 Professional Experience

07 Certifications & Continuous Learning

08 Blog & Knowledge Base

09 Contact

10 Footer
```

---

# 6. Struttura Dettagliata

## 6.1 Hero

### Obiettivo

Presentare immediatamente il professionista.

### Contenuti

- badge professionale
- titolo principale (H1)
- sottotitolo
- breve introduzione
- fotografia professionale
- pulsante "Scopri i progetti"
- pulsante "Scarica CV"

### SEO

Contiene il principale H1 della pagina.

---

## 6.2 About Me

### Obiettivo

Raccontare sinteticamente il percorso professionale.

### Contenuti

- biografia sintetica
- anni di esperienza
- specializzazioni
- filosofia professionale

---

## 6.3 Core Competencies

### Obiettivo

Mostrare immediatamente le competenze principali.

### Aree

- Software Architecture
- Backend Development
- Database Design
- Legacy Modernization
- Cloud & DevOps
- System Administration
- Artificial Intelligence

---

## 6.4 Technology Stack

### Obiettivo

Mostrare le tecnologie utilizzate.

### Linguaggi

- Python
- Java
- PHP
- SQL
- JavaScript

### Database

- SQL Server
- PostgreSQL
- MySQL
- SQLite

### Framework

- Spring
- Django
- Flask
- Node.js

### DevOps

- Docker
- Kubernetes
- Git
- GitHub

### Cloud

- Azure
- AWS
- Google Cloud

---

## 6.5 Featured Projects

### Obiettivo

Presentare i progetti più rappresentativi.

Ogni progetto sarà descritto tramite una card.

### Progetti iniziali

- Conversione DB (Dalma)
- FDN Tool Suite
- Professional KB
- DoraApp
- Portfolio

Ogni card conterrà:

- titolo;
- descrizione;
- tecnologie;
- stato;
- collegamento.

---

## 6.6 Professional Experience

### Obiettivo

Valorizzare il percorso professionale.

### Contenuti

- timeline;
- esperienze principali;
- settori di attività;
- risultati significativi.

---

## 6.7 Certifications & Continuous Learning

### Obiettivo

Mostrare il continuo aggiornamento professionale.

Comprenderà:

- certificazioni;
- corsi;
- formazione continua;
- nuove tecnologie studiate.

---

## 6.8 Blog & Knowledge Base

### Obiettivo

Dimostrare competenza attraverso contenuti tecnici.

Conterrà:

- articoli;
- casi studio;
- troubleshooting;
- guide;
- documentazione.

Questa sezione rappresenterà il collegamento con la Professional Knowledge Base.

---

## 6.9 Contact

### Obiettivo

Favorire il contatto diretto.

Comprenderà:

- modulo contatti;
- email;
- LinkedIn;
- GitHub;
- CV scaricabile.

---

## 6.10 Footer

Comprenderà:

- copyright;
- link rapidi;
- privacy;
- note legali;
- social.

---

# 7. Navigazione

La Home dovrà consentire l'accesso alle principali sezioni del sito.

```
Home

About

Projects

Knowledge Base

Blog

CV

Contact
```

---

# 8. User Journey

Il percorso ideale del visitatore è il seguente.

```
Hero

↓

About

↓

Competenze

↓

Tecnologie

↓

Progetti

↓

Esperienza

↓

Knowledge Base

↓

Contatti
```

Ogni sezione prepara naturalmente la successiva.

---

# 9. SEO Strategy

La Home dovrà essere ottimizzata per:

- Backend Developer
- Software Architect
- Database Specialist
- Legacy Modernization
- AI Developer
- DevOps
- PostgreSQL
- SQL Server
- Python
- Java

L'ottimizzazione SEO verrà dettagliata in un documento dedicato.

---

# 10. Responsive Strategy

La Home dovrà essere progettata secondo il principio Mobile First.

Saranno previste tre versioni:

- Desktop
- Tablet
- Smartphone

Ogni sezione dovrà mantenere leggibilità e usabilità su tutti i dispositivi.

---

# 11. Evoluzione

La presente architettura costituisce la baseline della Home.

Nuove sezioni potranno essere introdotte mantenendo la struttura definita.

Le future evoluzioni comprenderanno:

- Portfolio avanzato;
- Demo applicative;
- AI Lab;
- Area Download;
- Case Study;
- Dashboard Progetti.

---

# 12. Documenti Correlati

- README.md
- CHANGELOG.md
- ROADMAP.md
- DEVELOPMENT_WORKFLOW.md
- DOCUMENTATION_INDEX.md
- ARCH-001_Repository_Architecture.md

---

# Cronologia Revisioni

| Versione | Data | Descrizione |
|----------|------|-------------|
| **1.0.0** | **21/09/2026** | Prima definizione dell'architettura informativa della Home Page del progetto FDN Portfolio. |