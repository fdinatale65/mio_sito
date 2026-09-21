# Changelog

| Campo | Valore |
|--------|---------|
| Document ID | DESIGN-002 |
| Titolo | Typography System |
| File | DESIGN-002_Typography_System.md |
| Versione | 1.0 |
| Stato | Approved |
| Autore | Filippo Tindari Maria Di Natale |
| Repository | mio_sito |
| Ultimo aggiornamento | 22/09/2026 |

---

# 1. Obiettivo

Questo documento definisce il sistema tipografico ufficiale del portfolio professionale.

L'obiettivo è garantire una gerarchia visiva chiara, una lettura agevole e una coerenza grafica tra tutte le pagine del sito.

---

# 2. Font Principale

Font ufficiale

```
Inter
```

Motivazioni

- eccellente leggibilità
- moderno
- ottimizzato per il web
- ampia disponibilità
- ottime performance

---

# 3. Font Secondario

Fallback

```
Roboto
```

Secondo fallback

```
Arial
```

Stack CSS

```css
font-family:
"Inter",
"Roboto",
Arial,
sans-serif;
```

---

# 4. Gerarchia Tipografica

## H1

Utilizzo

Titolo principale della pagina.

Dimensione

```
56 px
```

Peso

```
700
```

Line Height

```
1.2
```

---

## H2

Dimensione

```
42 px
```

Peso

```
700
```

---

## H3

Dimensione

```
32 px
```

Peso

```
600
```

---

## H4

Dimensione

```
26 px
```

Peso

```
600
```

---

## H5

Dimensione

```
22 px
```

Peso

```
600
```

---

## H6

Dimensione

```
18 px
```

Peso

```
600
```

---

# 5. Testo

Paragrafo

Dimensione

```
18 px
```

Peso

```
400
```

Line Height

```
1.7
```

---

Testo secondario

```
16 px
```

---

Caption

```
14 px
```

---

# 6. Link

Peso

```
500
```

Colore

Primary Blue.

Hover

Accent Blue.

---

# 7. Pulsanti

Dimensione

```
16 px
```

Peso

```
600
```

Maiuscole

No.

---

# 8. Liste

Elenco puntato

Spaziatura verticale

```
8 px
```

Indentazione uniforme.

---

# 9. Card

Titolo

```
22 px
```

Peso

```
600
```

Descrizione

```
16 px
```

Peso

```
400
```

---

# 10. Responsive

Desktop

H1

56 px

---

Tablet

H1

48 px

---

Mobile

H1

36 px

---

Il corpo del testo non dovrà mai essere inferiore a:

```
16 px
```

---

# 11. Allineamento

Titoli

Sinistra.

Eccezioni

Hero e CTA principali.

---

Testo

Sinistra.

Da evitare il testo giustificato.

---

# 12. Spaziature

Distanza tra titolo e paragrafo

```
24 px
```

Tra paragrafi

```
20 px
```

Tra sezioni

```
80–120 px
```

---

# 13. Accessibilità

Contrasto conforme WCAG 2.2 AA.

Interlinea minima

```
1.5
```

Larghezza consigliata del testo

```
60–80 caratteri
```

---

# 14. Elementor

Utilizzare i Global Fonts.

Definire:

- Primary
- Secondary
- Text
- Accent

per garantire uniformità.

---

# 15. Evoluzione

Eventuali modifiche al sistema tipografico dovranno essere documentate in questo file e riportate nel CHANGELOG del progetto.

---

# 16. Stato

```
Approved

Documento ufficiale del Typography System.
```