<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Book Shop</title>

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
            <div class="content">
                <h1>Книжный магазин</h1>

                <label>Найди нужную книгу: <input type='search' id='search_bar'>
                    <input type="image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Vector_search_icon.svg/1890px-Vector_search_icon.svg.png">
                </label>
                
                <div class="product-wrap">
                    <div class="product-image">
                        <a href=""><img src="https://www.directmedia.ru/catalog/media/directmediashop/vs/rq/3f369614abf66bc6554b9d267576b017b3vztmyj2k.webp"></a>
                        <div class="shadow"></div>
                        <div class="actions">
                        <div class="actions-btn">
                            <div class="add-to-cart">
                            <a class="add-to-cart-button" href="#" title="Добавить в корзину"></a>
                            </div>
                            <div class="add-to-links">
                            <div class="add-to-wishlist">
                                <a class="add-to-wishlist-button" href="#" title="Добавить в мои желания"></a>
                            </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    <div class="product-list">
                        <h3>Дон Кихот</h3>
                        <p>Сервантес</p>
                        <div class="price">&#8381; 1999</div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
