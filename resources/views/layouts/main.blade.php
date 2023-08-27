<!doctype html> 
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Всем привет!</title>
  <meta name="description" content="Я первая страничка">
  <meta name="csrf-token" content="<?php echo csrf_token(); ?>" id="token">
  <link rel="stylesheet" href="/css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <base href="{{URL('/')}}">
</head>
<body>
<header>
    <script>

        function search(){
            let searchText = document.getElementById('search').value;
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            fetch('/search', {
                  headers: {
                      "Content-Type": "application/json",
                      "Accept": "application/json, text-plain, */*",
                      "X-Requested-With": "XMLHttpRequest",
                      "X-CSRF-TOKEN": token
                      },
                  method: 'post',
                  credentials: "same-origin",
                  body: JSON.stringify({
                      input: searchText,
                  })
              })
              .then((response) => {
                 response.json().then((data) => {
                let container = document.getElementById('serched_products');
                for(let i = 0; i < data.length; i++){
                    let div = document.createElement("div");
                    div.innerHTML = data[i].title;
                    container.appendChild(div);
                    console.log(data[i].title);
                }

                }).catch((err) => {
                    console.log(err);
                })
            });
        }

    </script>

<div class="header_row">
    <div class="header_line-gray">
        <div class="header_line-gray__content">
        <div class="header_contact_item">
            <div class="header_contact_item__image">
                <img src="images/mail.svg">
            </div>
            <div class="mail_text">
                ecortbel@gmail.com
            </div>
        </div>
        <div class="header_contact_item">
            <div class="header_contact_item__image">
                <img src="images/phone.svg">
            </div>
            <div class="phone_text">
                +375(44) 228 10 15
            </div>
        </div>
        </div>
    </div>
    <div class="header_line-main">
        <div class="logo">
            <img src="images/logo.svg">
        </div>
        <div class="header_navigation">
            <nav>
                <a href="">Главная</a>
                <a href="">Каталог</a>
                <a href="">О нас</a>
                <a href="">Контакты</a>
            </nav>
        </div>
        
        @csrf
        <div class="search">    
            <div class="search_input">
                <input type="text" placeholder="Поиск" name="search" id="search" onkeydown="search()">
            </div>
                <div>
                <button type="submit" class="search_button">
                    Найти
                </button>
                <div class="mobile_burger">
                    <img src="images/mobile_burger.svg">
                </div>
                </div>
        </div>
    </div>
</div>
<div class="serched_products" id="serched_products">

</div>
</header>

<div class="bread_crumbs">
    <div class="bread_crumbs_item">
        <div class="bread_crumbs_item_img">
            <img src="images/home.png">
        </div>
        <div class="bread_crumbs_item_text">
            Главная
        </div>
    </div>

    @isset($bread_crumbs)
    @foreach ($bread_crumbs as $crumb)
    <div class="bread_crumbs_item">
        <div class="bread_crumbs_item_img">
            <img src="images/arrow.svg">
        </div>
        <div class="bread_crumbs_item_text">
            {{$crumb->text}}
        </div>
    </div>
    @endforeach
    @endisset
</div>
<div class="content_container">
    <div class="mobile_banner">
        <img src="images/baner.svg">
    </div>
    <div class="left_menu">
        <div class="left_menu_header">
            <div class="left_menu_header_text">
                Меню
            </div>
            <div class="left_menu_header_img">
                <img src="images/burger.svg">
            </div>
        </div>
        <div class="menu_items">
            <nav>
            <a href="">
                <div class="left_menu_item">
                    <div class="flex">
                    <div class="left_menu_img">
                        <img src="images/phisic.png">
                    </div>
                    <div class="left_menu_text">
                        Кабинет физики
                    </div>
                    </div>
                    <div class="flex">
                    <div class="left_menu_arrow">
                        <img src="images/vector.svg">
                    </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="left_menu_item">
                    <div class="flex">
                    <div class="left_menu_img">
                        <img src="images/che.png">
                    </div>
                    <div class="left_menu_text">
                        Кабинет химии
                    </div>
                    </div>
                    <div class="flex">
                    <div class="left_menu_arrow">
                        <img src="images/vector.svg">
                    </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="left_menu_item">
                    <div class="flex">
                    <div class="left_menu_img">
                        <img src="images/b.png">
                    </div>
                    <div class="left_menu_text">
                        Кабинет биологии
                    </div>
                    </div>
                    <div class="flex">
                    <div class="left_menu_arrow">
                        <img src="images/vector.svg">
                    </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="left_menu_item">
                    <div class="flex">
                    <div class="left_menu_img">
                        <img src="images/math.png">
                    </div>
                    <div class="left_menu_text">
                        Кабинет математики
                    </div>
                    </div>
                    <div class="flex">
                    <div class="left_menu_arrow">
                        <img src="images/vector.svg">
                    </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="left_menu_item">
                    <div class="flex">
                    <div class="left_menu_img">
                        <img src="images/phisic.png">
                    </div>
                    <div class="left_menu_text">
                        Кабинет информатики
                    </div>
                    </div>
                    <div class="flex">
                    <div class="left_menu_arrow">
                        <img src="images/vector.svg">
                    </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="left_menu_item">
                    <div class="flex">
                    <div class="left_menu_img">
                        <img src="images/phisic.png">
                    </div>
                    <div class="left_menu_text">
                        Кабинет технология
                    </div>
                    </div>
                    <div class="flex">
                    <div class="left_menu_arrow">
                        <img src="images/vector.svg">
                    </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="left_menu_item">
                    <div class="flex">
                    <div class="left_menu_img">
                        <img src="images/phisic.png">
                    </div>
                    <div class="left_menu_text">
                        Кабинет технология
                    </div>
                    </div>
                    <div class="flex">
                    <div class="left_menu_arrow">
                        <img src="images/vector.svg">
                    </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="left_menu_item">
                    <div class="flex">
                    <div class="left_menu_img">
                        <img src="images/phisic.png">
                    </div>
                    <div class="left_menu_text">
                        Кабинет технология
                    </div>
                    </div>
                    <div class="flex">
                    <div class="left_menu_arrow">
                        <img src="images/vector.svg">
                    </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="left_menu_item">
                    <div class="flex">
                    <div class="left_menu_img">
                        <img src="images/phisic.png">
                    </div>
                    <div class="left_menu_text">
                        Кабинет технология
                    </div>
                    </div>
                    <div class="flex">
                    <div class="left_menu_arrow">
                        <img src="images/vector.svg">
                    </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="left_menu_item">
                    <div class="flex">
                    <div class="left_menu_img">
                        <img src="images/phisic.png">
                    </div>
                    <div class="left_menu_text">
                        Кабинет технология
                    </div>
                    </div>
                    <div class="flex">
                    <div class="left_menu_arrow">
                        <img src="images/vector.svg">
                    </div>
                    </div>
                </div>
            </a>
                        <a href="">
                <div class="left_menu_item">
                    <div class="flex">
                    <div class="left_menu_img">
                        <img src="images/phisic.png">
                    </div>
                    <div class="left_menu_text">
                        Кабинет технология
                    </div>
                    </div>
                    <div class="flex">
                    <div class="left_menu_arrow">
                        <img src="images/vector.svg">
                    </div>
                    </div>
                </div>
            </a>
            
            </nav>
        </div>

    </div>
    <div class="main_content">
        @yield('content')
    </div>
</div>
<footer>
    <div class="footer_container">
        <div class="left">
            <div class="footer_title">
                Продажа учебного оборудования
            </div>
            <div class="footer_copiright">
                © kabinett.by 2023, все права защищены<br>
                Использование материалов, размещенных на сайте, возможно с разрешения правообладателя
            </div>
        </div>
        <div class="center">
        </div>
        <div class="right">
            <div class="logo">
                <img src="images/logo.svg">
            </div>
        </div>
    </div>
</footer>
</body>
</html>