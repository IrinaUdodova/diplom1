<div class="d-flex flex-column flex-md-row align-items-center p-3 
   px-md-4 mb-3 bg-white border-bottom shadow sm">
     <img src="img/house.png" style ="width: 5%" alt="">
     <h5 class="my-0 mr-md-auto font-weight-normal" style ="font-family: cursive; color: #3e4982; font-size:30px;"> Beautifull house</h5>
     <nav class="my-2 my-md-0 mr-md-3">
     <a class="p-2 text-dark" href="#" onclick="document.location='index.php'" >Главная</a>
     </nav>

     <?php
      if(isset($_COOKIE['user']) &&  $_COOKIE['user'] == 'Да'):
     ?>

     <a class="btn btn-outline-primary" href="/auth.php">Кабинет 
     пользователя</a>
     <?php else: ?>
     <a class="btn btn-outline-primary" href="/auth.php">Войти</a>
     <?php endif; ?>
</div>
    