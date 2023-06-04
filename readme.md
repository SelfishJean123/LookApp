### Look Up
Aplikacja webowa, służąca do przeglądania produktów kosmetycznych

### Wymagania (technologie)
- Docker (wersja 3.X)
- HTML5
- CSS3
- JavaScript
- PHP (wersja 8.2)
- PostgreSQL (wersja 15.X)

### Instalacja
1. Sklonuj repozytorium na swój lokalny komputer oraz zainstaluj potrzebne technologie.
2. Uruchom skrypt inicjalizacyjny, który zainstaluje wszystkie niezbędne zależności.
3. Skonfiguruj połączenie z bazą danych PostgreSQL.
4. Uruchom aplikację lokalnie.

### Konfiguracja
1. Skopiuj plik `config.example.php` i zmień jego nazwę na `config.php`.
2. W pliku `config.php` ustaw wymagane dane, takie jak dane logowania do bazy danych, ścieżki plików, itp.

### Struktura projektu
# Pliki
- `/index.php` - plik główny aplikacji
- `/Routing.php` - konfiguracja routingu
- `/Database.php` - konfiguracja bazy danych
- `/config.php` - dane logowania do bazy danych
- `/docker-compose.yml` - konfiguracja Dockera

# Katalogi
- `/public/views` - widoki (z rozszerzeniem .php)
- `/public/css` - pliki SCSS i CSS
- `/public/js` - pliki JavaScript
- `/public/img` - pliki graficzne
- `/public/uploads` - pliki graficzne dodane przez użytkownika
- `/src/controllers` - kontrolery backendu (z rozszczeniem .php)
- `/src/repositories` - repozytoria backendu (z rozszczeniem .php)
- `/src/models` - modele dla kontrolerów i repozytoriów backendu (z rozszczeniem .php)


### Użycie
Opisz tutaj sposób użycia Twojej aplikacji oraz dostępne funkcjonalności. Możesz również zamieścić przykłady kodu.

### Autor
Joanna Hornung [https://github.com/SelfishJean123]


### Licencja
Ten projekt jest objęty licencją [nazwa licencji].
