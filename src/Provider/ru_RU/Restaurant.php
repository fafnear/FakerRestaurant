<?php

namespace FakerRestaurant\Provider\ru_RU;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        'Сырная пицца', 'Гамбургер', 'Чизбургер', 'Бекон-бургер', 'Бекон-чизбургер',
        'Маленький гамбургер', 'Маленький чизбургер', 'Маленький бургер с беконом', 'Маленький чизбургер с беконом',
        'Сэндвич с овощами', 'Сэндвич с сыром и овощами', 'Жареный сыр',
        'Сырная собачка', 'Бекон-дог', 'Бекон-сырная собачка', 'Паста'
    ];

    protected static $beverageNames = [
        'Пиво', 'Бутон Лайт', 'Будвайзер', 'Миллер Лайт',
        'Молочный коктейль', 'Чай', 'Сладкий чай', 'Кофе', 'Горячий чай',
        'Шампанское', 'Вино', 'Лимонад', 'Кока-кола', 'Диетическая кола',
        'Вода', 'Спрайт', 'Апельсиновый сок', 'Холодный кофе'
    ];

    protected static $dairyNames = [
        'Масло',
        'Яйцо',
        'Сыр',
        'Сметана',
        'Моцарелла',
        'Йогурт',
        'Кремовый цвет',
        'Молоко',
        'Заварной крем'
    ];

    protected static $vegetableNames = [
        'Лук',
        'Чеснок',
        'Помидор',
        'Картошка',
        'Морковь',
        'Болгарский перец',
        'Белл Василий',
        'Петрушка',
        'Брокколи',
        'Кукуруза',
        'Шпинат',
        'Имбирь',
        'Чили',
        'Сельдерей',
        'Розмари',
        'Огурец',
        'Соленый огурец',
        'Авокадо',
        'Тыква',
        'Мята',
        'Баклажан',
        'Сладкий картофель'
    ];

    protected static $fruitNames = [
        'Лимон',
        'Яблоко',
        'Банан',
        'Лайм',
        'Клубника',
        'Апельсин',
        'Ананас',
        'Черника',
        'Изюм',
        'Кокос',
        'Виноград',
        'Персик',
        'Малина',
        'Клюква',
        'Манго',
        'Груша',
        'Ежевика',
        'Вишня',
        'Арбуз',
        'Киви',
        'Папайя',
        'Гуава',
        'Личи'
    ];

    protected static $meatNames = [
        'Курица',
        'Бекон',
        'Колбаса',
        'Говядина',
        'Ветчина',
        'Хотдог',
        'Свинина',
        'Куриное крыло',
        'Куриная грудка',
        'Ягненок'
    ];

    protected static $sauceNames = [
        'Томатный соус',
        'Томатная паста',
        'Майонезный соус',
        'Соус BBQ',
        'Соус чили',
        'Чесночный соус'
    ];

    protected static $categories = [
        'Завтрак', 'Обед', 'Ланч', 'Ужин', 'Напитки'
    ];

    /**
     * A random Food Name.
     * @return string
     */
    public function foodName()
    {
        return static::randomElement(static::$foodNames);
    }

    /**
     * A random Beverage Name.
     * @return string
     */
    public function beverageName()
    {
        return static::randomElement(static::$beverageNames);
    }

    /**
     * A random Dairy Name.
     * @return string
     */
    public function dairyName()
    {
        return static::randomElement(static::$dairyNames);
    }

    /**
     * A random Vegetable Name.
     * @return string
     */
    public function vegetableName()
    {
        return static::randomElement(static::$vegetableNames);
    }

    /**
     * A random Fruit Name.
     * @return string
     */
    public function fruitName()
    {
        return static::randomElement(static::$fruitNames);
    }

    /**
     * A random Meat Name.
     * @return string
     */
    public function meatName()
    {
        return static::randomElement(static::$meatNames);
    }

    /**
     * A random Sauce Name.
     * @return string
     */
    public function sauceName()
    {
        return static::randomElement(static::$sauceNames);
    }

    /**
     * A random Category Name.
     * @return string
     */
    public function categoryName()
    {
        return static::randomElement(static::$categories);
    }
}