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
            <div class="md-primary sub-h1">
               1) Danh từ đếm được:
            </div>

            <div class="md-primary sub-h2">
               1.1 Hình thức số ít: a/an + N
            </div>

            - "@highlight(a)" đứng trước N số ít bắt đầu bằng một
            <a class="md-primary text bold">phụ âm</a>.<br>

            Ex: a book, a pen, ...<br>

            - "@highlight(an)" đứng trước số ít bắt đầu bằng một nguyên âm. <br>

            Ex: an apple, an orange, an egg, an island, ...<br>

            <div class="md-primary sub-h2">
               1.2 Hình thức số nhiều:
            </div>

            <div class="sub-h3">
               1.2.1 Hợp quy tắc: N s/es
            </div>

            Ex: books, pens, boxes<br>

            <div class="sub-h3">
               1.2.2 Bất quy tắc: Số ít
               <i class="material-icons">arrow_forward</i>
               Số nhiều
            </div>

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

            <div class="sub-h3">
               1.2.3 Danh từ luôn có hình thức và mang nghĩa số nhiều:
               @highlight(clothes, scissors, spectacles, shorts, pants, jeans, trousers, pyjamas, binoculars,
               belongings,) ...
            </div>

            <div class="sub-h3">
               1.2.4 Danh từ số ít và số nhiều có hình thức giống nhau:
               @highlight(sheep, deer, aircraft, craft, fish,) ...
            </div>

            <div class="sub-h3">
               1.2.5 Danh từ luôn mang nghĩa số nhiều:
               @highlight(police, cattle, people,) ...(xem Bài3, II, 4)
            </div>

            <div class="sub-h3">
               1.2.6 Danh từ hình thức số nhưng nhưng mang nghĩa số ít
               @highlight(news, mathematics, United States,) ...(xem,Bài3, I, 2)
            </div>

            <div class="sub-h1">
               2) Danh từ không đếm được: là những thứ ta không thể đếm được trưc tiếp (một, 2, ba, ...): như @highlight(milk, water, rice, sugar, butter, salt, bread, news, information, iron, advice, luggage, health,knowledge, equipment, paper, glass,) ...
            </div>

            * Chú ý:- Không có hình thức số nhiều (s/es)<br>
            - Không dùng với a/an/one/two...<br>
            - Có thể đi với từ chỉ dơn vị định lượng + of:<br>
            a bottle of milk, two litters of water, a loaf of bread, three sheets of paper,four pieces of chalk, a bar of chocolate, a gallon of petrol, ...

            <div class="sub-h1">
               3) Danh từ vừa đếm được vừa không đếm được:
            </div>

            Một số danh từ trong trường hợp này là đếm được nhưng trong trường hợp khác lại không đếm được.
            Đếm được
            <i class="material-icons">arrow_forward</i>
            Không đếm được<br>
            *a glass (một cái li) <i class="material-icons">arrow_forward</i> glass (thủy tinh)
            *two papers (2 tờ báo) <i class="material-icons">arrow_forward</i> paper (giấy)
            *three coffees (ba tách cà phê) <i class="material-icons">arrow_forward</i> coffee (cà phê)
            *two sugars (2 muỗng đường) <i class="material-icons">arrow_forward</i> sugar (đường)
         </div>
      </md-content>
   </div>

@endsection