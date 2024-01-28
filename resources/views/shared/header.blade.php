  <header>
      <div class="top-bar">
        <div class="container d-flex justify-content-end py-1">
          <div>DC Power VISA</div>
          <div>Additional DC Sites</div>
        </div>
      </div>
      <nav class="container d-flex justify-content-center gap-5 align-items-center">
        <div class="logo"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></div>
        <div>
          <ul  class="d-flex">
            <li><a href="characters">Characters</a></li>
            <li><a href="/">Comics</a></li>
            <li><a href="/">Movies</a></li>
            <li><a href="/">TV</a></li>
            <li><a href="/">Games</a></li>
            <li><a href="/">Collectibles</a></li>
            <li><a href="/">Videos</a></li>
            <li><a href="/">Fans</a></li>
            <li><a href="/">News</a></li>
            <li><a href="/">Shop</a></li>
          </ul>
        </div>
        <div><input type="text" placeholder="Search.."></div>
      </nav>

  </header>
  <style lang="scss">


.top-bar{
  font-size: 10px;
  background-color: #0282f9;
  text-transform: uppercase;
  color: white;
}

ul {
  display: flex;
  gap: 35px;
  text-transform: uppercase;
  margin: 50px 0;
  li {
    list-style: none;
    position: relative;
    &:hover {
      color: #0282f9;
      cursor: pointer;
    }
    a:link {
    text-decoration: none;
    }
  }
}
  .logo img {
  width: 80px;
  }
 
</style>