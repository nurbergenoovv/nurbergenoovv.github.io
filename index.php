<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ozimiz.dev - платформа для будущих программистов</title>
  <link rel="stylesheet" href="./header.css" />
</head>

<body>
  <div class="header">
    <div class="box">
      <div class="left">
        <a href="index.html">
          <img src="./logo/IMG_7798.svg" alt="logo" />
          <span class="logoName">Ozimiz</span>
        </a>
      </div>
      <div class="right">
        <a href="https://www.instagram.com/ozimiz.kaz/">
          <img src="./img/call.svg" alt="call" class="call" />
        </a>
        <a href="./sign/index.php">
          <img src="./img/user.svg" alt="user" class="user" />
        </a>
      </div>
    </div>
  </div>
  <div class="start"></div>

  <div class="box main">
    <nav>
    <a href="./index.php" class="active">Блог</a>
      <a href="./course.php" >Курсы</a>
      <a href="./rate.html">Отзывы</a>
      <a href="./faq.html">FAQ</a>
    </nav>
    <article>
      <div class="slider-container">
        <div class="slider">
          <? require_once './sign/db_connect.php';
          $sql = 'SELECT * FROM `carousel` ORDER BY `id`';
          $stmt = $pdo->query($sql);
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $img = $row['img'];
            echo '<img src="' . $img . '" alt="ads" />';
          }
          $stmt = null; ?>
        </div>
        <div class="dots"></div>
      </div>
      <div class="posts">
        <?
        $sql = 'SELECT * FROM `post` ORDER BY `id` DESC';
        $stmt = $pdo->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          $title = $row['title'];
          $description = $row['descrip'];
          $img = $row['img'];
          $date = $row['datee'];
          echo '<div class="post">
            <div class="left">
              <span class="date">' . $date . '</span>
              <span class="title">' . $title . '</span>
              <span class="description"
                >' . $description . '</span
              >
            </div>
              <div class="right">
                  <img src="' . $img . '" alt="photo"  class="postPhoto"/>
              </div>
        </div>';
        }
        $stmt = null; ?>
      </div>
    </article>
  </div>
  <script src="./script.js"></script>
  <script src="./slider.js"></script>
</body>

</html>