@extends('layouts.default')

@section('page-title', 'Bài 1 - Từ loại')

@section('page-content')

   <div ng-controller="p6gdController" layout="column" flex layout-align-lt-md="" ng-cloak>
      <md-toolbar md-scroll-shrink>
         <div id="main-header" class="md-toolbar-tools">
            @yield('page-title')
         </div>
      </md-toolbar>

      <md-content flex layout-padding>
         <div>
            <a class="md-primary sub-h1">
               1) Danh từ đếm được:
            </a>

            <a class="md-primary sub-h2">
               1.1 Hình thức số ít: a/an + N
            </a>

            - "@highlight(a)" đứng trước N số ít bắt đầu bằng một
            <a class="md-primary text bold">phụ âm</a>.<br>

            Ex: a book, a pen, ...<br>

            - "@highlight(an)" đứng trước số ít bắt đầu bằng một nguyên âm. <br>

            Ex: an apple, an orange, an egg, an island, ...<br>

            <a class="md-primary sub-h2">
               1.2 Hình thức số nhiều:
            </a>

            <a class="sub-h3">
               1.2.1 Hợp quy tắc: N s/es
            </a>

            Ex: books, pens, boxes<br>

            <a class="sub-h3">
               1.2.2 Bất quy tắc: Số ít
               <i class="material-icons">arrow_forward</i>
               Số nhiều
            </a>

            *a man <i class="material-icons">arrow_forward</i> men<br>
            *a woman <i class="material-icons">arrow_forward</i> women<br>
            *a datum <i class="material-icons">arrow_forward</i> data<br>
            *a foot <i class="material-icons">arrow_forward</i> feet<br>
            *a tooth <i class="material-icons">arrow_forward</i> teeth<br>
            *a mouse <i class="material-icons">arrow_forward</i> mice<br>
            *a phenomenon <i class="material-icons">arrow_forward</i> phenomena<br>
            *a child <i class="material-icons">arrow_forward</i> children<br>
            *a bacterium <i class="material-icons">arrow_forward</i> bacteria<br>
            *a goose <i class="material-icons">arrow_forward</i> geese<br>
            *a curriculum <i class="material-icons">arrow_forward</i> curricula<br>
            *a person <i class="material-icons">arrow_forward</i> people<br>
            *a criterion <i class="material-icons">arrow_forward</i> criteria<br>
            *a louse <i class="material-icons">arrow_forward</i> lice<br>

            <a class="sub-h3">
               1.2.3 Danh từ luôn có hình thức và mang nghĩa số nhiều:
               @highlight(clothes, scissors, spectacles, shorts, pants, jeans, trousers, pyjamas, binoculars,
               belongings,) ...
            </a>

            <a class="sub-h3">
               1.2.4 Danh từ số ít và số nhiều có hình thức giống nhau:
               @highlight(sheep, deer, aircraft, craft, fish,) ...
            </a>

            <a class="sub-h3">
               1.2.5 Danh từ luôn mang nghĩa số nhiều:
               @highlight(police, cattle, people,) ...(xem Bài3, II, 4)
            </a>

            <a class="sub-h3">
               1.2.6 Danh từ hình thức số nhưng nhưng mang nghĩa số ít
               @highlight(news, mathematics, United States,) ...(xem,Bài3, I, 2)
            </a>


            2) Danh từ không đế^đứ^^ànr^^igỆhứ ta khôậg thê đếm đươc trưc tiếp (mồt, 2, bắ; ...):hlìư milk, water, rice, sugar, butter, salt, bread, news, information, iron, advice, luggage, health,knowledge, equipment, paper, glass, ...
            * Chú ý:- Không có hình thức số nhiều (s/es)
            - Không dùng với a/an/one/two... í
            - Có thể đi với từ chỉ dơn vị định lượng + of:
            a bottle of milk, two litters of water, a loaf of bread, three sheets of paper,four pieces of chalk, a bar of chocolate, a gallon of petrol, ...
            3) Danh từ vừa đếm được vừa không đếm được:
            Một số danh từ trong trường hợp này là đếm được nhưng trong trường hợp khác lại không đếm được.
            Đếm được —ỳ Không đếm được “a glass (một cái li) —» glass (thủy tinh)
            “two papers (2 tờ báo) —> paper (giây)
            *three coffees (ba tách cà phê) —> coffee (cà phê)
            “two sugars (2 muỗng dương) —ỳ sugar (đường)
         </div>
      </md-content>
   </div>

@endsection