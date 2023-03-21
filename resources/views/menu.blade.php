<!DOCTYPE html>

<title>Menu</title>
<link rel="stylesheet" href="/app-menu.css">

<body>

        <div class="title-menu">
            <h1>4-Leaf Clover</h1>
            <hr>
        </div>

        <div class="back-home-from-first-menu-page">
            <a href="/4LeafClover">Go Back</a>
        </div>

        <div class="subtitle-menu">
            <h2>Steak & Grill</h2>
        </div>

        <div class="category-name">
            <h3>{{ $menus[0]->title }}</h3>
        </div>

            @foreach($menus as $menu)
                <div class="breakfast-categories">
                    <div class="subcategory-name">
                        <p>{{ $menu->name }}</p>
                    </div>

                    <div class="body">
                        <p>{{ $menu->body }}</p>
                    </div>

                    <div class="price-grams-value-unit">
                        <p>{{ $menu->price_value }} {{ $menu->price_unit }} / {{ $menu->grams_value }}{{ $menu->grams_unit }}</p>
                    </div>
                </div>
            @endforeach


    <div class="arrow-next-menu-page">
        <a href="/Menu-second-page"><i class="arrow right"></i></a>
    </div>

</body>

