<nav class="menu">
  <ol>
    <li class="menu-item"><a href="#0">მთავარი</a></li>
    <li class="menu-item">
      <a href="#0">ფილმები</a>
      <ol class="sub-menu">
        @foreach (App\Models\Category::get() as $cats)
          <li class="menu-item"><a href="#0">{{ $cats->name }}</a></li>
        @endforeach
      </ol>
    </li>
    <li class="menu-item">
      <a href="#0">ანიმაცია</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Big Widgets</a></li>
        <li class="menu-item"><a href="#0">Bigger Widgets</a></li>
        <li class="menu-item"><a href="#0">Huge Widgets</a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="#0" >შემოთავაზებები</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Shishkabobs</a></li>
        <li class="menu-item"><a href="#0">BBQ kabobs</a></li>
        <li class="menu-item"><a href="#0">Summer kabobs</a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="#0">კონტაქტი</a>
    </li>
    
  </ol>

</nav>