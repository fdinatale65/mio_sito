# Changelog

| Campo | Valore |
|--------|---------|
| Document ID | UX-004 |
| Titolo | Interaction Guidelines |
| File | UX-004_Interaction_Guidelines.md |
| Versione | 1.0 |
| Stato | Approved |
| Autore | Filippo Tindari Maria Di Natale |
| Repository | mio_sito |
| Ultimo aggiornamento | 22/09/2026 |

---

# 1. Obiettivo

Il presente documento definisce le linee guida per tutte le interazioni dell'utente con il portfolio.

Ogni elemento interattivo dovrà offrire un comportamento prevedibile, coerente e intuitivo.

L'interazione dovrà migliorare l'esperienza utente senza distrarre dal contenuto.

---

# 2. Principi

Ogni interazione dovrà essere:

- naturale;
- immediata;
- coerente;
- accessibile;
- discreta.

Le animazioni non dovranno mai diventare protagoniste del layout.

---

# 3. Hover

Tutti gli elementi cliccabili dovranno fornire un feedback visivo.

Esempi.

- cambio colore;
- lieve ombra;
- leggero ingrandimento;
- sottolineatura dei link.

---

# 4. Pulsanti

Ogni pulsante dovrà prevedere quattro stati.

## Default

Colore principale.

---

## Hover

Leggero cambio colore.

Transizione:

```
0.25 s
```

---

## Active

Leggera pressione visiva.

---

## Disabled

Riduzione opacità.

Nessuna animazione.

---

# 5. Link

I link dovranno essere facilmente riconoscibili.

Hover

- cambio colore;
- sottolineatura.

Non utilizzare effetti invasivi.

---

# 6. Card

Ogni card potrà prevedere:

Hover

- ombra più marcata;
- lieve sollevamento;
- transizione morbida.

Durata massima:

```
250 ms
```

---

# 7. Icone

Le icone potranno cambiare colore durante l'hover.

Non dovranno ruotare né effettuare animazioni continue.

---

# 8. Scroll

Lo scrolling dovrà risultare fluido.

Le sezioni potranno utilizzare un leggero effetto Fade In durante il primo ingresso nel viewport.

---

# 9. Form

I campi del modulo contatti dovranno prevedere:

- focus evidente;
- messaggi di errore chiari;
- conferma dell'invio.

---

# 10. Feedback

Ogni azione importante dovrà produrre un feedback immediato.

Esempi.

- invio modulo;
- download CV;
- apertura menu.

---

# 11. Menu

Desktop

Menu orizzontale.

Hover con evidenziazione.

---

Mobile

Menu hamburger.

Animazione semplice.

Chiusura automatica dopo la selezione.

---

# 12. Animazioni

Consentite.

- Fade In
- Fade Up
- Slide Up
- Scale leggera

Da evitare.

- Flash
- Bounce continui
- Rotazioni
- Zoom eccessivi

---

# 13. Durata

Animazioni consigliate.

```
200–300 ms
```

Mai superiori a:

```
500 ms
```

---

# 14. Microinterazioni

Consentite.

- cambio colore pulsanti;
- comparsa icone;
- effetto elevazione card;
- focus dei campi.

---

# 15. Responsive

Le interazioni dovranno mantenere lo stesso comportamento su Desktop, Tablet e Mobile.

Gli elementi touch dovranno avere una dimensione minima di:

```
48 × 48 px
```

---

# 16. Accessibilità

Tutte le interazioni dovranno essere utilizzabili tramite tastiera.

Il focus dovrà essere sempre visibile.

Le animazioni dovranno rispettare le preferenze di riduzione del movimento del sistema operativo.

---

# 17. Elementor

Utilizzare esclusivamente animazioni leggere disponibili nativamente.

Evitare plugin dedicati alle animazioni se non strettamente necessari.

---

# 18. Stato

```
Architecture Approved

Documento di riferimento per tutte le interazioni del portfolio.
```