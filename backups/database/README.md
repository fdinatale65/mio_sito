# Database Backup

| Campo | Valore |
|--------|--------|
| **Document ID** | FDN-WEB-BKP-002 |
| **Titolo** | Database Backup |
| **Versione** | 1.0 |
| **Stato** | Active |

---

# Scopo

Questa directory contiene i backup del database MySQL associato al sito Portfolio.

---

# Struttura

```
current/
archive/
```

---

## current

Contiene sempre l'ultimo dump disponibile.

---

## archive

Contiene lo storico dei dump organizzati per versione o data.

---

# Formato

```
portfolio-v0.1.0-YYYY-MM-DD.sql.gz
```

oppure

```
portfolio-YYYY-MM-DD.sql
```

---

# Ripristino

I file possono essere importati tramite:

- mysql
- phpMyAdmin
- MySQL Workbench