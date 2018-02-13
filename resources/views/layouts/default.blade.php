@if ($api)

   <div ng-app="p6gdChapter">
      @yield('page-content')
   </div>

@else
   <!DOCTYPE html>
   <html ng-app="p6gdChapter">
      <head>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta charset="utf-8">

         <title id="page-title">
            @yield('page-title')
         </title>
          
         <link rel="stylesheet" href="{{ config('constants.root_path') }}/css/fontawesome-all.min.css"/>
         <link rel="stylesheet" href="{{ config('constants.root_path') }}/css/bootstrap.min.css"/>
         <link rel="stylesheet" href="{{ config('constants.root_path') }}/css/site.min.css"/>
      </head>

      <body>
         @yield('page-content')
         <script type="text/javascript" src="{{ config('constants.root_path') }}/js/jquery-3.3.1.min.js"></script>
         <script type="text/javascript" src="{{ config('constants.root_path') }}/js/angular.min.js"></script>
         <script type="text/javascript" src="{{ config('constants.root_path') }}/js/popper.min.js"></script>
         <script type="text/javascript" src="{{ config('constants.root_path') }}/js/bootstrap.min.js"></script>
         <script type="text/javascript" src="{{ config('constants.root_path') }}/js/site.min.js"></script>

         <script type="text/javascript">
            var lbplugin_event_opt = {"extension_enable": true, "dict_type": 1, "dbclk_event": {"trigger": "none", "enable": true, "display": 1}, "select_event": {"trigger": "none", "enable": true, "display": 2}};

            function loadScript(t, e) {
               var n = document.createElement("script");
               n.type = "text/javascript", n.readyState ? n.onreadystatechange = function () {
                  ("loaded" === n.readyState || "complete" === n.readyState) && (n.onreadystatechange = null, e())
               } : n.onload = function () {
                  e()
               }, n.src = t, document.getElementsByTagName("head")[0].appendChild(n)
            }

            setTimeout(function () {
               null == document.getElementById("lbdictex_find_popup") && loadScript("http://stc.laban.vn/dictionary/js/plugin/lbdictplugin.min.js?" + Date.now() % 1e4, function () {
                  lbDictPlugin.init(lbplugin_event_opt)
               })
            }, 1e3);
         </script>
      </body>
   </html>
@endif