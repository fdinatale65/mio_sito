# Changelog

| Campo | Valore |
|--------|---------|
| Document ID | UX-003 |
| Titolo | Responsive Strategy |
| File | UX-003_Responsive_Strategy.md |
| Versione | 1.0 |
| Stato | Approved |
| Autore | Filippo Tindari Maria Di Natale |
| Repository | mio_sito |
| Ultimo aggiornamento | 22/09/2026 |

---

# 1. Obiettivo

Questo documento definisce la strategia Responsive dell'intero portfolio.

L'obiettivo è garantire una navigazione ottimale su qualsiasi dispositivo mantenendo la stessa qualità dell'esperienza utente.

Il responsive non dovrà essere considerato un semplice adattamento grafico ma una parte integrante della progettazione.

---

# 2. Filosofia

Il sito dovrà essere progettato secondo il principio:

```
Desktop First
```

con adattamento progressivo verso:

- Tablet
- Smartphone

Ogni componente dovrà essere verificato nei tre layout principali.

---

# 3. Breakpoint

## Desktop

```
≥ 1200 px
```

Layout completo.

Massima larghezza contenuti.

---

## Laptop

```
992 - 1199 px
```

Riduzione delle spaziature.

Layout ancora su più colonne.

---

## Tablet

```
768 - 991 px
```

Riduzione del numero di colonne.

Immagini ridimensionate.

Menu ottimizzato.

---

## Mobile

```
≤ 767 px
```

Layout completamente verticale.

Navigazione semplificata.

CTA facilmente raggiungibili.

---

# 4. Layout

Desktop

```
3 colonne

oppure

2 colonne
```

---

Tablet

```
2 colonne
```

---

Mobile

```
1 colonna
```

---

# 5. Header

Desktop

Menu orizzontale.

---

Tablet

Menu compatto.

---

Mobile

Hamburger Menu.

Header sticky.

---

# 6. Hero

Desktop

Foto e testo su due colonne.

---

Tablet

Foto sopra.

Testo sotto.

---

Mobile

Layout verticale.

Pulsanti full width.

---

# 7. Card

Desktop

Tre card per riga.

---

Tablet

Due card.

---

Mobile

Una card.

---

# 8. Tipografia

Desktop

H1

56 px

---

Tablet

48 px

---

Mobile

36 px

---

Testo

Mai inferiore a

16 px.

---

# 9. Immagini

Desktop

Alta risoluzione.

---

Tablet

Riduzione automatica.

---

Mobile

Compressione.

Formato WebP.

---

# 10. Pulsanti

Desktop

Larghezza automatica.

---

Tablet

Padding ridotto.

---

Mobile

Larghezza 100%.

Altezza minima

48 px.

---

# 11. Tabelle

Quando presenti.

Desktop

Tabella completa.

---

Tablet

Scroll orizzontale.

---

Mobile

Conversione in card ove possibile.

---

# 12. Performance

Su dispositivi mobili dovranno essere privilegiati:

- immagini ottimizzate;
- lazy loading;
- caricamento progressivo.

---

# 13. Test

Ogni pagina dovrà essere verificata su:

Desktop

1920 px

---

Laptop

1366 px

---

Tablet

768 px

---

Mobile

390 px

---

# 14. Elementor

Utilizzare i controlli Responsive nativi.

Ogni widget dovrà prevedere:

- Desktop
- Tablet
- Mobile

con impostazioni dedicate.

---

# 15. Obiettivi

La versione Mobile dovrà mantenere tutte le funzionalità della versione Desktop.

Non dovranno esistere contenuti nascosti che impediscano la fruizione delle informazioni.

---

# 16. KPI

Tempo di caricamento:

Desktop

< 2 s

---

Mobile

< 3 s

---

CLS

< 0.10

---

LCP

< 2.5 s

---

INP

< 200 ms

---

# 17. Stato

```
Architecture Approved

Documento di riferimento per tutta la progettazione Responsive del portfolio.
```