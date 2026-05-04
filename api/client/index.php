<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тестирование API</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .test-block { border: 1px solid #ccc; padding: 15px; margin: 10px 0; border-radius: 5px; }
        .result { background: #f0f0f0; padding: 10px; margin-top: 10px; border-radius: 3px; white-space: pre-wrap; }
        button { margin: 5px; padding: 8px 15px; cursor: pointer; }
        input { padding: 5px; margin: 5px; }
    </style>
</head>
<body>
    <h1>Тестирование API deriugin.ru</h1>
    
    <div class="test-block">
        <h3>1. Текущая дата</h3>
        <button onclick="testAPI('/api/public/day.php')">День</button>
        <button onclick="testAPI('/api/public/month.php')">Месяц</button>
        <button onclick="testAPI('/api/public/year.php')">Год</button>
        <div id="result-date" class="result"></div>
    </div>

    <div class="test-block">
        <h3>2. День недели по дате</h3>
        <input type="date" id="weekday-date" value="2024-01-01">
        <button onclick="testWeekday()">Узнать день недели</button>
        <div id="result-weekday" class="result"></div>
    </div>

    <div class="test-block">
        <h3>3. Разница между датами</h3>
        <input type="date" id="diff-date1" value="2024-01-01">
        <input type="date" id="diff-date2" value="2024-12-31">
        <button onclick="testDiff()">Вычислить разницу</button>
        <div id="result-diff" class="result"></div>
    </div>

    <div class="test-block">
        <h3>4. Города по стране</h3>
        <select id="country-select">
            <option value="Россия">Россия</option>
            <option value="Франция">Франция</option>
            <option value="Япония">Япония</option>
        </select>
        <button onclick="testCities()">Показать города</button>
        <div id="result-cities" class="result"></div>
    </div>

    <div class="test-block">
        <h3>5. CRUD операции</h3>
        <button onclick="testCRUD('all')">Все записи</button>
        <input type="number" id="record-id" placeholder="ID" value="1">
        <button onclick="testCRUD('get')">Получить запись</button>
        <button onclick="testCRUD('del')">Удалить запись</button>
        <div id="result-crud" class="result"></div>
    </div>

    <div class="test-block">
        <h3>6. Погода от Open-Meteo</h3>
        <button onclick="testWeather()">Погода в СПб</button>
        <div id="result-weather" class="result"></div>
    </div>

    <p><a href="advice.html">Совет от API</a> | <a href="facts.html">Факты о животных</a></p>

    <script>
        const BASE_URL = '';

        async function testAPI(endpoint) {
            try {
                const response = await fetch(BASE_URL + endpoint);
                const data = await response.json();
                document.getElementById('result-date').textContent = JSON.stringify(data, null, 2);
            } catch (error) {
                document.getElementById('result-date').textContent = 'Ошибка: ' + error.message;
            }
        }

        async function testWeekday() {
            const date = document.getElementById('weekday-date').value;
            try {
                const response = await fetch(`${BASE_URL}/api/public/weekday.php?date=${date}`);
                const data = await response.json();
                document.getElementById('result-weekday').textContent = JSON.stringify(data, null, 2);
            } catch (error) {
                document.getElementById('result-weekday').textContent = 'Ошибка: ' + error.message;
            }
        }

        async function testDiff() {
            const date1 = document.getElementById('diff-date1').value;
            const date2 = document.getElementById('diff-date2').value;
            try {
                const response = await fetch(`${BASE_URL}/api/public/diff.php?date1=${date1}&date2=${date2}`);
                const data = await response.json();
                document.getElementById('result-diff').textContent = JSON.stringify(data, null, 2);
            } catch (error) {
                document.getElementById('result-diff').textContent = 'Ошибка: ' + error.message;
            }
        }

        async function testCities() {
            const country = document.getElementById('country-select').value;
            try {
                const response = await fetch(`${BASE_URL}/api/public/cities.php?country=${encodeURIComponent(country)}`);
                const data = await response.json();
                document.getElementById('result-cities').textContent = JSON.stringify(data, null, 2);
            } catch (error) {
                document.getElementById('result-cities').textContent = 'Ошибка: ' + error.message;
            }
        }

        async function testCRUD(action) {
            const id = document.getElementById('record-id').value;
            let url = `${BASE_URL}/api/public/index.php?action=${action}`;
            if (id && (action === 'get' || action === 'del' || action === 'edit')) {
                url += `&id=${id}`;
            }
            try {
                const options = { method: 'GET' };
                if (action === 'edit') {
                    options.method = 'POST';
                    options.headers = { 'Content-Type': 'application/json' };
                    options.body = JSON.stringify({ title: 'Обновленный заголовок', content: 'Новое содержимое' });
                }
                const response = await fetch(url, options);
                const data = await response.json();
                document.getElementById('result-crud').textContent = JSON.stringify(data, null, 2);
            } catch (error) {
                document.getElementById('result-crud').textContent = 'Ошибка: ' + error.message;
            }
        }

        async function testWeather() {
            try {
                const response = await fetch('https://api.open-meteo.com/v1/forecast?latitude=59.9386&longitude=30.2141&current_weather=true');
                const data = await response.json();
                document.getElementById('result-weather').textContent = JSON.stringify(data, null, 2);
            } catch (error) {
                document.getElementById('result-weather').textContent = 'Ошибка: ' + error.message;
            }
        }
    </script>
</body>
</html>