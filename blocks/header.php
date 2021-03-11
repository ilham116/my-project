<?php
    //Запускаем сессию
    session_start();
?>
<div class="container">
  <nav>
  <ul>
    <li><a href="Podarki_box_by_ENGE.php  "> Главная </a></li>
    <li><a href="Podarki_Box.php"> Подарки Box </a></li>
    <li><a href=""> Отзывы </a></li>
    <li><a href="Contacts.php"> Контакты </a></li>
  </ul>
    </nav>
  <div class="Logo" >
  <img src="img/logo.png" alt="Podarki_Box">
  </div>
  <div id="auth_block">
            <?php
                //Проверяем авторизован ли пользователь
                if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
                    // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
            ?>
            <div class="vxod_button">
          <a href="/registration/index.php" class="vxod_but"><span class="link-content">Войти</span></a>
            </div>

            <?php
                }else{
                    //Если пользователь авторизован, то выводим ссылку Выход
            ?>
                    <div id="link_logout">
                      <p >Добро пожаловать, <strong><?php echo $_SESSION['username']; ?></strong></p>
                      <p> <a href="/registration/index.php?logout='1'" style="color: red;">Выйти</a> </p>
                    </div>
            <?php
                }
            ?>
          <div class="clear"></div>
            </div>


  </div>
