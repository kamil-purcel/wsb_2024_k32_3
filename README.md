# Projekt na PHP - Biblioteka

## Opis Projektu
Celem projektu jest stworzenie aplikacji internetowej do zarządzania biblioteką, gdzie użytkownicy mogą przeglądać dostępne książki, a bibliotekarze i administratorzy mogą zarządzać bazą danych książek i użytkowników.

---

## Funkcjonalności

### Użytkownik:
- Może zalogować się i przeglądać listę książek.
- Może wyszukiwać i sortować książki.
- Może zobaczyć szczegóły książki.

### Bibliotekarz:
- Wszystkie funkcje użytkownika.
- Może dodawać, edytować i usuwać książki.

### Administrator:
- Może zarządzać użytkownikami:
  - Dodawać nowych użytkowników.
  - Edytować dane użytkowników.
  - Usuwać użytkowników.
  - Zmieniać hasła użytkowników.

---

## Instrukcja

### Instalacja zależności
- composer install
- npm install

### Baza danych
Nazwa bazy danych: wsb_2024_k32_3
- php artisan migrate
- php artisan db:seed

### Domyślny użytkownik
- Email: admin@biblioteka.pl
- Hasło: zaq1@WSX

### Uruchomienie
- npm run dev
