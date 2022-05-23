<?php

/* 
## Snack 5

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/
$text = ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi a rem praesentium sequi assumenda nemo
error nam accusantium eos. Inventore quisquam eius id praesentium ratione quos, debitis quae quam reiciendis aut
accusantium molestias adipisci repudiandae, ullam laborum laboriosam delectus incidunt consequuntur non, laudantium
velit sequi voluptate? Inventore, numquam? Dolorem. veritatis et eaque ducimus ex at porro sint aspernatur placeat repudiandae
laudantium veniam soluta! Dolor exercitationem cum sed? Voluptatem, cumque veniam odio doloremque dicta culpa iusto consectetur
eius ratione, debitis tempore officia laborum deserunt laboriosam id, repellat quis iure aliquid ut suscipit recusandae sapiente
dolor? Eos molestias magni eius debitis impedit voluptas. nihil dolorum et veniam, non illum dolorem sequi architecto omnis molestiae
placeat repellat, soluta enim maiores, illo officiis. Ad quae neque vitae amet dicta, quasi inventore! Obcaecati magnam nostrum earum
deleniti, nulla, ad voluptatum voluptatibus incidunt at esse molestiae illum! Vitae eaque corporis minima fugiat sint.
Recusandae nobis perferendis eos ab, unde fugit expedita commodi cumque natus ex quod sit sint dignissimos deserunt quis.
Totam commodi, cum aut eum minus quaerat voluptate nisi? Ea, enim sint? Soluta, labore libero fugit itaque aspernatur illo
pariatur deleniti, tempore provident quibusdam quis est quam error nulla impedit esse beatae eius molestias? Omnis sequi saepe
itaque error quos sapiente laudantium ut, praesentium minima possimus eligendi nesciunt esse distinctio beatae ducimus earum.
Beatae, sint eum perspiciatis reiciendis officia non dignissimos at explicabo, neque nisi sunt pariatur. Ipsam molestias voluptates
mollitia repellendus impedit vero officiis id dolore et. Commodi veritatis rerum placeat quo reiciendis inventore quas nesciunt
temporibus, dolores quia nisi accusamus, odio corrupti ullam voluptatum aperiam eum pariatur doloribus. Officiis molestiae fugiat
dolore sed blanditiis et quas tenetur qui voluptatibus veniam soluta nihil, dicta accusantium, maxime architecto cumque provident
alias magni id ipsum. Repellat neque debitis, sint, unde quidem ducimus ratione eveniet iusto libero perferendis repudiandae quis
dolorem. Ducimus asperiores explicabo doloribus molestias sit fuga, sint quia repellendus. Eum fugiat sint placeat fuga accusantium
dignissimos minima cupiditate molliti. illum ratione! Aliquam quas natus sapiente ex dicta quaerat a inventore voluptatum maiores sint.
Temporibus magnam iste inventore debitis consequuntur! Blanditiis excepturi fugit est placeat corrupti ipsum vitae suscipit cum
molestias laborum voluptates dolorum harum porro exercitationem sunt, laboriosam inventore cumque modi illo atque! Non quisquam
distinctio est eveniet cumque beatae ipsa ipsum inventore ad vel a ducimus, impedit eum necessitatibus ut doloribus nam quam nihil
hic reprehenderit fugiat similique iste ex illum. Incidunt porro eveniet maxime, consequuntur, veniam quas animi, modi aspernatur
ea corrupti qui. Ut accusantium aspernatur sunt dolores. Voluptate aliquid quia omnis, dolore exercitationem laborum soluta delectus 
animi culpa eligendi totam.';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php foreach (explode('.', $text) as $paragraph) : ?>
        <p><?php echo $paragraph; ?></p>
    <?php endforeach; ?>

</body>

</html>