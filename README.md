### Запуск приложения
- `./init.sh`

### Запуск тестов
- `docker-compose run --rm php ./vendor/bin/pest --coverage`

### API
- генерация случайного значения и его идентификатора:
    ```
    POST /api/indicators/
    {
        "type": 0,
        "length": 128
    }
    ```
- получение значения по id, которое вернулось в методе создания
    ```
    GET /api/indicators/{id}
    ```
