# Changelog

| Campo | Valore |
|--------|---------|
| Document ID | SEO-004 |
| Titolo | Technical SEO |
| File | SEO-004_Technical_SEO.md |
| Versione | 1.0 |
| Stato | Approved |
| Autore | Filippo Tindari Maria Di Natale |
| Repository | mio_sito |
| Ultimo aggiornamento | 22/09/2026 |

---

# 1. Obiettivo

Il presente documento definisce gli standard di Technical SEO che dovranno essere rispettati durante lo sviluppo del portfolio professionale.

L'obiettivo è garantire che il sito sia facilmente indicizzabile, veloce, sicuro e conforme alle migliori pratiche dei motori di ricerca.

---

# 2. Principi

La SEO tecnica dovrà privilegiare:

- semplicità;
- velocità;
- accessibilità;
- sicurezza;
- compatibilità;
- manutenibilità.

---

# 3. URL

Gli URL dovranno essere:

- descrittivi;
- permanenti;
- leggibili;
- privi di parametri inutili.

Esempi

```
/about/

/projects/

/knowledge-base/

/blog/

/contact/
```

Da evitare

```
?p=123
```

---

# 4. Struttura Heading

Ogni pagina dovrà contenere:

- un solo H1;
- H2 per le sezioni principali;
- H3 e H4 per i contenuti secondari.

La gerarchia dovrà essere sempre coerente.

---

# 5. Meta Tag

Ogni pagina dovrà avere:

- Title univoco;
- Meta Description;
- Meta Robots;
- Canonical URL.

---

# 6. Sitemap

Generare automaticamente:

```
sitemap.xml
```

Comprendendo:

- pagine;
- articoli;
- categorie;
- immagini (quando opportuno).

---

# 7. Robots

Predisporre un file:

```
robots.txt
```

con regole chiare per:

- crawler;
- sitemap;
- aree escluse dall'indicizzazione.

---

# 8. Open Graph

Ogni pagina dovrà prevedere:

- titolo;
- descrizione;
- immagine;
- URL canonico;
- tipo di contenuto.

---

# 9. Twitter Card

Predisporre i metadati per una corretta condivisione sui social compatibili.

---

# 10. Schema.org

Utilizzare dati strutturati per descrivere:

- Person
- Organization (se applicabile)
- WebSite
- Breadcrumb
- Article
- BlogPosting
- Project (quando opportuno)

---

# 11. Breadcrumb

Implementare breadcrumb navigabili per migliorare:

- esperienza utente;
- struttura del sito;
- comprensione da parte dei motori di ricerca.

---

# 12. Internal Linking

Ogni pagina dovrà collegarsi ad altre sezioni pertinenti del sito.

Favorire una rete di collegamenti coerente tra:

- Home;
- Projects;
- Blog;
- Knowledge Base;
- Contact.

---

# 13. Immagini

Ogni immagine dovrà avere:

- nome descrittivo;
- attributo ALT;
- formato WebP quando possibile;
- dimensioni ottimizzate.

---

# 14. Sicurezza

Il sito dovrà utilizzare:

- HTTPS;
- certificato SSL valido;
- redirect HTTP → HTTPS.

---

# 15. Mobile First

La versione mobile dovrà garantire la stessa qualità della versione desktop.

Ogni pagina dovrà essere verificata sui principali breakpoint.

---

# 16. Performance Tecnica

Ridurre:

- richieste HTTP;
- JavaScript non utilizzato;
- CSS non utilizzato;
- immagini pesanti.

Favorire:

- cache;
- compressione;
- lazy loading.

---

# 17. Errori

Monitorare periodicamente:

- errori 404;
- redirect;
- broken link;
- pagine duplicate.

---

# 18. Compatibilità

Verificare il corretto funzionamento con:

- Chrome;
- Edge;
- Firefox;
- Safari.

---

# 19. Verifiche

Prima di ogni rilascio controllare:

- validità HTML;
- validità dei meta tag;
- sitemap;
- robots.txt;
- dati strutturati;
- link interni;
- immagini.

---

# 20. Evoluzione

La SEO tecnica dovrà essere aggiornata in funzione:

- delle nuove funzionalità del sito;
- degli aggiornamenti di WordPress;
- degli aggiornamenti dei plugin;
- delle evoluzioni delle linee guida dei motori di ricerca.

---

# 21. Stato

```
Approved

Documento di riferimento per la Technical SEO del portfolio.
```