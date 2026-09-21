# Changelog

| Campo | Valore |
|--------|---------|
| Document ID | SEO-005 |
| Titolo | Performance and Core Web Vitals |
| File | SEO-005_Performance_and_Core_Web_Vitals.md |
| Versione | 1.0 |
| Stato | Approved |
| Autore | Filippo Tindari Maria Di Natale |
| Repository | mio_sito |
| Ultimo aggiornamento | 22/09/2026 |

---

# 1. Obiettivo

Il presente documento definisce gli standard di performance del portfolio professionale.

L'obiettivo è garantire un'esperienza utente veloce, fluida e conforme ai Core Web Vitals, migliorando al tempo stesso il posizionamento organico sui motori di ricerca.

---

# 2. Principi

Le prestazioni del sito dovranno essere considerate un requisito progettuale.

Ogni nuova funzionalità dovrà essere valutata anche in termini di:

- velocità;
- impatto sul caricamento;
- utilizzo delle risorse;
- esperienza utente.

---

# 3. Core Web Vitals

Il progetto dovrà rispettare i valori raccomandati da Google.

## Largest Contentful Paint (LCP)

Obiettivo

```
≤ 2.5 s
```

---

## Interaction to Next Paint (INP)

Obiettivo

```
≤ 200 ms
```

---

## Cumulative Layout Shift (CLS)

Obiettivo

```
≤ 0.10
```

---

# 4. Lighthouse

Obiettivi minimi.

Performance

```
95+
```

---

Accessibility

```
95+
```

---

Best Practices

```
95+
```

---

SEO

```
100
```

---

# 5. Ottimizzazione Immagini

Le immagini dovranno essere:

- ottimizzate;
- ridimensionate;
- convertite in WebP quando possibile;
- caricate in modalità Lazy Loading.

---

# 6. CSS

Ridurre al minimo:

- CSS inutilizzato;
- duplicazioni;
- dipendenze non necessarie.

Preferire CSS modulari e facilmente manutenibili.

---

# 7. JavaScript

Ridurre:

- JavaScript bloccante;
- librerie inutilizzate;
- codice duplicato.

Caricare gli script solo quando necessari.

---

# 8. Font

Utilizzare:

- font ottimizzati;
- preload dei font principali;
- numero limitato di famiglie tipografiche.

---

# 9. Cache

Implementare:

- cache del browser;
- cache lato server (quando disponibile);
- ottimizzazione delle risorse statiche.

---

# 10. Compressione

Abilitare:

- GZIP o Brotli;
- compressione delle immagini;
- minificazione di CSS e JavaScript.

---

# 11. Hosting

Il sito dovrà essere ospitato su un'infrastruttura affidabile, con:

- HTTPS;
- HTTP/2 o superiore;
- supporto PHP aggiornato;
- database ottimizzato.

---

# 12. Database

Ottimizzare periodicamente:

- tabelle;
- revisioni inutilizzate;
- transient scaduti;
- overhead.

Effettuare backup prima di ogni operazione di manutenzione.

---

# 13. Plugin

Installare esclusivamente plugin realmente necessari.

Ogni nuovo plugin dovrà essere valutato considerando:

- impatto sulle prestazioni;
- sicurezza;
- aggiornamenti;
- compatibilità.

---

# 14. Elementor

Ottimizzare:

- contenitori;
- widget;
- Global Styles;
- caricamento delle risorse.

Evitare elementi duplicati e layout complessi non necessari.

---

# 15. Monitoraggio

Le prestazioni dovranno essere monitorate tramite:

- Google Lighthouse;
- Google PageSpeed Insights;
- Google Search Console;
- Chrome DevTools.

---

# 16. Test

Eseguire verifiche periodiche su:

Desktop

```
1920 px
```

Laptop

```
1366 px
```

Tablet

```
768 px
```

Mobile

```
390 px
```

---

# 17. KPI

Tempo di caricamento iniziale

```
< 2 secondi
```

---

Tempo di caricamento su Mobile

```
< 3 secondi
```

---

Dimensione della pagina

```
< 2 MB
```

---

Numero richieste HTTP

```
< 60
```

---

# 18. Roadmap

Fase 1

Ottimizzazione delle risorse.

---

Fase 2

Verifica Lighthouse.

---

Fase 3

Monitoraggio Core Web Vitals.

---

Fase 4

Miglioramento continuo.

---

# 19. Manutenzione

Le verifiche delle prestazioni dovranno essere effettuate:

- dopo ogni release importante;
- dopo aggiornamenti di WordPress;
- dopo aggiornamenti dei plugin;
- dopo modifiche significative al layout.

---

# 20. Evoluzione

Gli obiettivi di performance saranno aggiornati in funzione:

- delle nuove tecnologie web;
- degli aggiornamenti dei browser;
- delle linee guida di Google;
- dell'evoluzione del portfolio.

---

# 21. Stato

```
Approved

Documento ufficiale per il monitoraggio delle Performance e dei Core Web Vitals del portfolio.
```