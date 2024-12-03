<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

![charts](https://github.com/user-attachments/assets/e0c0e684-f3c1-4a5b-8b49-40bff863487f)
![stats](https://github.com/user-attachments/assets/f185fd97-cffe-4f51-969c-7d454c32c6f1)
![annonuncement](https://github.com/user-attachments/assets/5b50c97c-7e0e-4dba-aee8-1015307cc23b)
![post](https://github.com/user-attachments/assets/8f912067-1c6f-4f2d-a95c-b863cf17f6f6)
![create](https://github.com/user-attachments/assets/b33cf788-57bb-4431-8df7-5a85b4ef031c)
![drag and drop](https://github.com/user-attachments/assets/a167cd9a-17d1-4b27-a6c8-8b9c538e4d48)



Аналіз та управління даними з інтерактивними графіками, картами та формами

Мета проекту:

Проект спрямований на створення веб-додатку для аналізу та управління даними з інтерактивними графіками, динамічними картами, а також формами для редагування контенту. Використано сучасні інструменти для взаємодії з користувачем, включаючи Livewire, Alpine.js, Chart.js, FinePond і drag-and-drop для покращення зручності та ефективності роботи з даними. Додаток дозволяє візуалізувати ключові бізнес-метрики, такі як кількість замовлень, користувачів, прибуток, та дає можливість зручно редагувати контент і працювати з медіафайлами.

Основні технології та інструменти:

Laravel — фреймворк для розробки бекенд-логіки додатку, обробки запитів та роботи з базою даних.

Livewire — бібліотека для створення динамічних інтерфейсів без написання значного JavaScript-коду, інтегрується безпосередньо з Laravel.

Alpine.js — JavaScript-бібліотека для створення реактивних елементів інтерфейсу на фронтенді.

Chart.js — бібліотека для побудови інтерактивних графіків та діаграм.

FinePond — інструмент для завантаження та попереднього перегляду файлів, зокрема фотографій, у форму.

Drag and Drop — для сортування елементів за допомогою перетягування збереженням порядку.

Content Editable — можливість редагувати контент безпосередньо в інтерфейсі.

Основні функціональні можливості проекту:

1. Динамічні графіки за допомогою Chart.js
Використано Chart.js для створення інтерактивних графіків та діаграм, які відображають важливі бізнес-метрики, такі як кількість замовлень, користувачів, дохід (revenue) тощо.
Дані для графіків завантажуються асинхронно з серверу, що дозволяє показувати оновлену інформацію в реальному часі без необхідності перезавантажувати сторінку.

2. Динамічний графік з використанням Livewire та Alpine.js
Livewire дозволяє створювати динамічні компоненти на стороні сервера, які автоматично оновлюються на клієнтській частині. Це дозволяє створити динамічні графіки, які змінюються залежно від введених користувачем фільтрів або оновлення даних.
Використання Alpine.js для додаткової реактивності на фронтенді, наприклад, для реалізації зміни параметрів графіків (фільтрація за датами або категоріями).

3. Динамічні карти для оновлення замовлень, користувачів та доходу (revenue)
Динамічні карти інтегровані з функціоналом для відображення актуальних даних, таких як місцезнаходження користувачів, кількість замовлень і дохід по різних регіонах.
Кожен елемент карти оновлюється у реальному часі за допомогою Livewire. Це дозволяє користувачам отримувати інформацію про зміни без необхідності перезавантаження сторінки.

4. Форма з контентом, що можна редагувати через Content Editable
Реалізовано можливість редагування контенту безпосередньо на сторінці за допомогою атрибута contenteditable. Це дозволяє користувачам змінювати текстові блоки або інші елементи прямо в інтерфейсі без необхідності відкривати окремі форми для редагування.
Редаговані дані зберігаються в базі даних, що забезпечує гнучкість та зручність для користувачів, які працюють з контентом.

5. Завантаження фотографій через FinePond
Для завантаження зображень на сервер використано FinePond, що дозволяє здійснювати попередній перегляд завантажених файлів безпосередньо в інтерфейсі форми.
FinePond забезпечує зручний та гнучкий процес завантаження зображень, з підтримкою багатофайлових завантажень, валідації форматів і розмірів файлів.

6. Поширення коду між формами Create та Edit
Для форм Create та Edit реалізовано спільне використання компонентів та логіки на серверній частині. Це дозволяє забезпечити consistency (узгодженість) між двома типами форм, з мінімальними змінами в коді.
Спільний код дозволяє уникнути дублювання, зберігаючи чистоту коду і дозволяючи швидко змінювати структуру форм або їх функціонал.

7. Drag and Drop з збереженням порядку елементів
Для зміни порядку елементів на сторінці або в списку використано drag and drop з підтримкою збереження порядку елементів у базі даних.
Це дозволяє користувачам зручно перетягувати елементи (наприклад, замовлення або продукти) у бажаному порядку, а після зміни порядок автоматично оновлюється в базі даних.
Вся логіка збереження порядку елементів реалізована за допомогою Livewire, що забезпечує миттєву реакцію інтерфейсу без необхідності перезавантаження сторінки.
