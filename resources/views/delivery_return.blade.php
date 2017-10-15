@extends('cherrylayout.app')

@section('title', 'CART | '.config('app.name'))

@section('navigation')
    @include('cherrylayout.navigator')
@endsection


@section('lookbook')
    <div class="container">
        <div class="row" style="padding: 25px;">
            <h2 class="text-center">Доставка и возврат</h2>
            <p>Отправка заказов «Почтой России»</p>
            <p>Для всех наших клиентов мы организуем почтовую отправку выполненных заказов по всей России.</p>
            <p>Срок доставки<br/>Сроки доставки отправлений определяются «Почтой России». В зависимости от региона, в котором находится ваш город, доставка заказа занимает от 7 дней до нескольких недель. </p>
            <p>При оформлении доставки заказа через «Почту России» учитывайте, что отправка готовых заказов осуществляется только в рабочие дни. </p>
            <p>Объединение заказов<br/>Дата отправки определяется наибольшим сроком изготовления элемента заказа.
                К примеру, если в вашем заказе толстовка, куртка и футболка, посылка будет отправлена после изготовления не раньше чем через два дня, если товара нет в наличии. </p>
            <h4>Способы оплаты </h4>
            <ol>
                <li>Наложенный платеж - оплата при получении товара в вашем почтовом отделении.
                    Стоимость пересылки бандеролью весом до 2 кг – от 150 до 350 руб. (в зависимости от стоимости заказа) + комиссия по тарифам, установленным УФПС России.
                    Заказы без указания ФАМИЛИИ получателя, а также без ИНДЕКСА почтового отделения отправляться не будут.
                </li>
                <li>100% предоплата<br/>
                    150-350 рублей (в зависимости от стоимости заказа) – стоимость предоплаченной почтовой доставки КАЖДОГО ЗАКАЗА по любому адресу в пределах Российской Федерации. Сделайте вашим друзьям или близким, живущим далеко от вас, приятный сюрприз - закажите для них фотокнигу или фотосувенир и отправьте их почтой.
                    Пример: если вы оформили три заказа за один день, значит вам нужно оплатить стоимость доставки трех заказов (3 раза по 150-350 рублей), даже если они объединены почтовой службой в одну бандероль.
                    Как избежать переплаты? Оформить все необходимые товары в одном заказе.<br/>
                    100% предоплата = 100% подарок!
                    Выберите способ доставки «Почтой России» и оплатите заказ и доставку любым из доступных безналичных способов. Доставка будет включена в общую стоимость заказа, и вашим близким не придется платить ни копейки за свой подарок, получая его в местном почтовом отделении.
                </li>
            </ol>
            <h4>ВОЗВРАТ:</h4>
            <p>Возврат<br/>
                Любой возврат должен быть осуществлен в течение 30 дней с момента отгрузки.
                Возвраты посредством вызова курьера 300 руб.
            </p>
        </div>
    </div>
@endsection


@section('footer')
    @include('cherrylayout.footer2')
@endsection