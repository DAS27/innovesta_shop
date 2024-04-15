<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Уведомление о новой заявке</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            background-color: #ffffff;
            margin: 20px auto;
            padding: 20px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
        }

        .footer {
            text-align: center;
            padding: 10px 20px;
            background-color: #f8f9fa;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
<div class="email-container">
    <div class="header">
        <h1>Новая заявка</h1>
    </div>
    <div class="content">
        <p>Здравствуйте,</p>
        <p>Вы получили новую заявку от пользователя:</p>
        <ul>
            <li>Дата: {{ $created_at }}</li>
            <li>Имя: {{ $first_name }}</li>
            <li>Фамилия: {{ $last_name ?? 'Не указано' }}</li>
            <li>Email: {{ $email ?? 'Не указан' }}</li>
            <li>Телефон: {{ $phone }}</li>
            <li>Метод связи:
                {!!
                    match ($contact_method) {
                    'phone' => 'Телефон',
                    'email' => 'Email',
                    'both' => 'Любой'}
                 !!}
            </li>
            <li>Тип помещения:
                {!!
                    match ($room_type->value) {
                    'mall' => 'ТРЦ',
                    'business_center' => 'Бизнес центр',
                    'hotel' => 'Гостиничный бизнес',
                    'restaurant' => 'Рестораны и кафе',
                    'coworking_space' => 'Сoworking пространсва',
                    'gaming_club' => 'Gaming клубы',
                    }
                !!}
            </li>
            <li>Размер помещения: {{ $room_dimensions ?? 'Не указан' }}</li>
            <li>Коды товара/Артикулы: {{ $sku ?? 'Не указано' }}</li>
            <li>Комментарий: {{ $comment ?? 'Не указан' }}</li>
        </ul>
        <p>Пожалуйста, проверьте детали заявки в вашей системе.</p>
    </div>
    <div class="footer">
        С уважением,<br>
        Ваша команда Innovesta
    </div>
</div>
</body>
</html>
