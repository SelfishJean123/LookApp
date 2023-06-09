## Look Up
Aplikacja webowa, służąca do przeglądania produktów kosmetycznych.


## Wymagania (technologie)
- Docker (wersja 3.X)
- HTML5
- CSS3
- JavaScript
- PHP (wersja 7.4.3)
- PostgreSQL (wersja 15.X)


## Instalacja
1. Sklonuj repozytorium na swój dysk lokalny oraz zainstaluj potrzebne technologie.
2. Z poziomu katalogu głównego uruchom docker komendą docker-compose up.
3. Skonfiguruj połączenie z bazą danych PostgreSQL.
4. Otwórz aplikację lokalnie pod adresem [http://localhost:8080/].


## Struktura projektu
### Pliki
- `/index.php` - plik główny aplikacji
- `/Routing.php` - konfiguracja routingu
- `/Database.php` - konfiguracja bazy danych
- `/config.php` - dane logowania do bazy danych
- `/docker-compose.yml` - konfiguracja Dockera
- `/lookup-diagram-erd.drawio.pdf` - diagram ERD bazy danych

### Katalogi
- `/public/views` - widoki (z rozszerzeniem .php)
- `/public/views/shared` - widoki współdzielone
- `/public/css` - pliki SCSS i CSS
- `/public/js` - pliki JavaScript
- `/public/img` - pliki graficzne
- `/public/uploads` - pliki graficzne dodane przez użytkownika
- `/src/controllers` - kontrolery backendu (z rozszczeniem .php)
- `/src/repositories` - repozytoria backendu (z rozszczeniem .php)
- `/src/models` - modele dla kontrolerów i repozytoriów backendu (z rozszczeniem .php)


## Użycie
1. Niezalogowani użytkownicy mają dostęp do widoków: Home, About Look Up oraz Contact.
2. Przeglądanie oraz przeszukiwanie bazy produktów (widok Products) dostępne jest dla wszystkich zalogowanych użytkowników.
    Dostępne informacje o produktach, to: nazwa, marka, skład, zdjęcie, liczba polubień.
3. Dodawanie, edytowanie oraz usuwanie produktów dostępne jest tylko dla użytkowników posiadającyh rolę editor.
    Dodawanie - z poziomu widoku Produts.
    Edycja i usuwanie - po przejściu z widoku Products do widoku Product Details.


## Autor
Joanna Hornung [https://github.com/SelfishJean123]


## Licencja
Ten projekt jest objęty licencją Freeware.
