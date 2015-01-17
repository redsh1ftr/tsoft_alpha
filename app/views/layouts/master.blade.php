<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Small Business Pie in the Sky</title>
   <link href="http://www.eternallynocturnal.com/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
   <link rel="stylesheet" href="http://www.eternallynocturnal.com/foundation/css/foundation.css">
   <link rel="stylesheet" href="http://www.eternallynocturnal.com/foundation/css/normalize.css">
   

 <script src="http://www.eternallynocturnal.com/foundation/js/vendor/modernizr.js"></script>



<style>

.main{
    position: relative;
    min-height: 900px;
    height: 100%;
    overflow: hidden;
    width: 100%;
  }

</style>

@yield('style')





</head>



<body>


<div class="off-canvas-wrap" data-offcanvas>

  <div class="inner-wrap">

    <nav class="tab-bar">

      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title">Tavaresoft</h1>
      </section>

      <section class="right-small">
        <a class="right-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>
    </nav>

    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Options</label></li>
         <li>{{link_to_route('items.index', 'Items')}}</li>
        <li>{{link_to_route('invoices.index', 'Invoices')}}</li>
      </ul>
    </aside>

    <aside class="right-off-canvas-menu">
       <ul class="off-canvas-list">
        <li><label>Actions</label></li>
          @yield('right_menu')
        </ul>
    </aside>

    <section class="main-section">
      @yield('content')
    </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>

   <script src="http://www.eternallynocturnal.com/bootstrap/js/bootstrap.min.js"></script>

  <script src="http://www.eternallynocturnal.com/foundation/js/vendor/jquery.js"></script>
  <script src="http://www.eternallynocturnal.com/foundation/js/foundation.min.js"></script>

  <script>
    $(document).foundation();
  </script>


</body>
</html>
