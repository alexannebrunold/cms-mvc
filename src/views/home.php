<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/views/header.php";

$controller = new Home;
$articles = $controller->getAllArticles();
?>

<body>
  <h1>Derniers articles</h1>

<?php foreach ($articles as $article) { ?>
    <h1><?php print_r($article['title']); ?></h1>
   <img src="<?php print_r($article['image']); ?>" />
    <p><?php print_r($article['content']); ?></p>

</button>


<?php }; ?>
</body>

</html>