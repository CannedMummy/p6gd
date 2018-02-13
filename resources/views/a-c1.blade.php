@extends('layouts.default')

@section('page-title', 'Bài 1 - Từ loại')

@section('page-content')
   <div ng-controller="p6gdController">
      <div id="main-header">
         <div class="container">
            @yield('page-title')
         </div>
      </div>
   </div>

   <div class="container">
      <div class="sub-h1">
         1) Danh từ đếm được:
      </div>

      <div class="sub-h2">
         1.1 Hình thức số ít:
         <span class="hightlight">a/an + N</span>
      </div>

      - "<span class="hightlight">a</span>"
      đứng trước N số ít bắt đầu bằng một
      <span class="hightlight">phụ âm</span>.<br>

      Ex:
      <span class="text bold">a book, a pen, ...</span>
      <br>

      - "<span class="hightlight">an</span>"
      đứng trước số ít bắt đầu bằng một
      <span class="hightlight">nguyên âm</span>.
      <br>

      Ex:
      <span class="text bold">an apple, an orange, an egg, an island, ...</span>
      <br>

      <div class="sub-h2">
         1.2 Hình thức số nhiều:
      </div>

      <div class="sub-h3">
         1.2.1 Hợp quy tắc:
         <span class="hightlight">N s/es</span>
      </div>

      Ex:
      <span class="text bold">books, pens, boxes</span>
      <br>

      <div class="sub-h3">
         1.2.2 Bất quy tắc
         <span class="hightlight">Số ít <i class="fa fa-arrow-right"></i> Số nhiều</span>
      </div>
      <ul class="hightlight">
         <li>a man <i class="fa fa-arrow-right"></i> men</li>
         <li>a woman <i class="fa fa-arrow-right"></i> women</li>
         <li>a datum <i class="fa fa-arrow-right"></i> data</li>
         <li>a foot <i class="fa fa-arrow-right"></i> feet</li>
         <li>a tooth <i class="fa fa-arrow-right"></i> teeth</li>
         <li>a mouse <i class="fa fa-arrow-right"></i> mice</li>
         <li>a phenomenon <i class="fa fa-arrow-right"></i> phenomena</li>
         <li>a child <i class="fa fa-arrow-right"></i> children</li>
         <li>a bacterium <i class="fa fa-arrow-right"></i> bacteria</li>
         <li>a goose <i class="fa fa-arrow-right"></i> geese</li>
         <li>a curriculum <i class="fa fa-arrow-right"></i> curricula</li>
         <li>a person <i class="fa fa-arrow-right"></i> people</li>
         <li>a criterion <i class="fa fa-arrow-right"></i> criteria</li>
         <li>a louse <i class="fa fa-arrow-right"></i> lice</li>
      </ul>

      <div class="sub-h3">
         1.2.3 Danh từ luôn có hình thức và mang nghĩa số nhiều:
         <span class="hightlight">
            clothes, scissors, spectacles, shorts, pants, jeans, trousers, pyjamas, binoculars, belongings, ...
         </span>
      </div>

      <div class="sub-h3">
         1.2.4 Danh từ số ít và số nhiều có hình thức giống nhau:
         <span class="hightlight">sheep, deer, aircraft, craft, fish,) ...</span>
      </div>

      <div class="sub-h3">
         1.2.5 Danh từ luôn mang nghĩa số nhiều:
         <span class="hightlight">police, cattle, people, ...</span>(xem Bài3, II, 4)
      </div>

      <div class="sub-h3">
         1.2.6 Danh từ hình thức số nhưng nhưng mang nghĩa số ít
         <span class="hightlight">news, mathematics, United States, ...</span>(xem,Bài3, I, 2)
      </div>

      <div class="sub-h1">
         2) Danh từ không đếm được: là những thứ ta không thể đếm được trực tiếp (một, 2, ba, ...): như
         <span class="hightlight">
            milk, water, rice, sugar, butter, salt, bread, news, information, iron, advice, luggage,
            health, knowledge, equipment, paper, glass, ...
         </span>
      </div>

      * Chú ý:
      <ul>
         <li>Không có hình thức số nhiều (s/es)</li>
         <li>Không dùng với a/an/one/two/...</li>
         <li>
            Có thể đi với từ chỉ dơn vị định lượng + of:
            <span class="hightlight">
               a bottle of milk, two litters of water, a loaf of bread, three sheets of paper,
               four pieces of chalk, a bar of chocolate, a gallon of petrol, ...
            </span>
         </li>
      </ul>

      <div class="sub-h1">
         3) Danh từ vừa đếm được vừa không đếm được:
      </div>

      Một số danh từ trong trường hợp này là đếm được nhưng trong trường hợp khác lại không đếm được.
      <span class="hightlight">
         Đếm được <i class="fa fa-arrow-right"></i> Không đếm được
      </span>

      <ul>
         <li>
            <span class="hightlight">a glass</span> (một cái li)
            <i class="fa fa-arrow-right"></i>
            <span class="hightlight">glass</span> (thủy tinh)
         </li>
         <li>
            <span class="hightlight">two papers</span> (2 tờ báo)
            <i class="fa fa-arrow-right"></i>
            <span class="hightlight">paper</span> (giấy)
         </li>
         <li>
            <span class="hightlight">three coffees</span> (ba tách cà phê)
            <i class="fa fa-arrow-right"></i>
            <span class="hightlight">coffee</span> (cà phê)
         </li>
         <li>
            <span class="hightlight">two sugars</span> (2 muỗng đường)
            <i class="fa fa-arrow-right"></i>
            <span class="hightlight">sugar</span> (đường)
         </li>
      </ul>
   </div>

@endsection