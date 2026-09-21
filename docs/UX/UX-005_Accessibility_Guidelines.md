# Changelog

| Campo | Valore |
|--------|---------|
| Document ID | UX-005 |
| Titolo | Accessibility Guidelines |
| File | UX-005_Accessibility_Guidelines.md |
| Versione | 1.0 |
| Stato | Approved |
| Autore | Filippo Tindari Maria Di Natale |
| Repository | mio_sito |
| Ultimo aggiornamento | 22/09/2026 |

---

# 1. Obiettivo

Questo documento definisce le linee guida di accessibilità del portfolio professionale.

L'obiettivo è garantire che il sito sia utilizzabile dal maggior numero possibile di utenti, indipendentemente dal dispositivo utilizzato o dalle eventuali limitazioni fisiche o cognitive.

L'accessibilità rappresenta un requisito progettuale e non una funzionalità opzionale.

---

# 2. Standard di riferimento

Il progetto seguirà le raccomandazioni:

- WCAG 2.2
- Livello AA

---

# 3. Principi fondamentali

Il sito dovrà essere:

- percepibile;
- utilizzabile;
- comprensibile;
- robusto.

Ogni componente dovrà rispettare questi quattro principi.

---

# 4. Contrasto dei colori

Il rapporto di contrasto minimo dovrà essere:

Testo normale

```
4.5 : 1
```

Titoli grandi

```
3 : 1
```

Evitare testi grigi su sfondi chiari.

---

# 5. Tipografia

Dimensione minima

```
16 px
```

Interlinea consigliata

```
1.5
```

Lunghezza massima della riga

```
80 caratteri
```

---

# 6. Heading

Ogni pagina dovrà avere un solo:

```
H1
```

La gerarchia dovrà essere:

```
H1

↓

H2

↓

H3

↓

H4
```

Non saltare mai un livello.

---

# 7. Immagini

Ogni immagine dovrà avere:

- attributo ALT descrittivo;
- nome file significativo.

Le immagini puramente decorative potranno avere ALT vuoto.

---

# 8. Link

Il testo dei link dovrà essere descrittivo.

Da evitare:

- clicca qui;
- leggi;
- maggiori informazioni.

Preferire:

- Scarica il Curriculum Vitae
- Visualizza il progetto Conversione DB

---

# 9. Pulsanti

Dimensione minima consigliata:

```
48 × 48 px
```

Ogni pulsante dovrà avere una descrizione comprensibile anche fuori contesto.

---

# 10. Tastiera

Tutte le funzionalità del sito dovranno essere accessibili tramite tastiera.

Particolare attenzione a:

- menu;
- pulsanti;
- moduli;
- link.

---

# 11. Focus

Il focus dovrà essere sempre visibile.

Non dovrà mai essere rimosso tramite CSS.

---

# 12. Form

Ogni campo dovrà avere:

- etichetta;
- placeholder (facoltativo);
- messaggi di errore chiari;
- indicazione dei campi obbligatori.

---

# 13. Errori

Gli errori dovranno:

- spiegare il problema;
- suggerire la soluzione;
- evidenziare il campo interessato.

---

# 14. Responsive

L'accessibilità dovrà essere mantenuta su:

- Desktop
- Laptop
- Tablet
- Smartphone

---

# 15. Animazioni

Le animazioni dovranno rispettare la preferenza:

```
prefers-reduced-motion
```

Gli utenti che richiedono la riduzione del movimento dovranno poter utilizzare il sito senza effetti non necessari.

---

# 16. Compatibilità

Il sito dovrà essere verificato con i principali browser:

- Chrome
- Edge
- Firefox
- Safari

---

# 17. Test di accessibilità

Prima di ogni release dovranno essere verificati:

- contrasto colori;
- navigazione da tastiera;
- struttura Heading;
- ALT delle immagini;
- link;
- moduli.

---

# 18. Obiettivi

Garantire una navigazione:

- semplice;
- inclusiva;
- leggibile;
- coerente.

L'accessibilità costituisce parte integrante della qualità del progetto.

---

# 19. Stato

```
Architecture Approved

Documento di riferimento per tutte le verifiche di accessibilità del portfolio.
```