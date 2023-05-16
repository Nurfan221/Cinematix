<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style2.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="jajal" style="     display:block;     border: 1px solid red;     padding:5px;     margin-top:5px;     width:300px;    height:400px;     overflow:scroll;">
        <div class="row">
            <div class="col-4">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
                </div>
            </div>
            <div class="col-8">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                    <h4 id="list-item-1">Item 1</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur sit repudiandae perferendis, unde commodi dicta dolorem ut hic sint itaque atque error rerum fugit? Deleniti cumque unde molestiae quis debitis illum distinctio magni provident et consequuntur illo nobis dolore quisquam quidem consectetur molestias temporibus odit sit dicta, perferendis omnis. Possimus ab impedit voluptas sunt dicta est, nostrum explicabo! Saepe rerum dolorum harum consectetur illo placeat eius nulla quasi eveniet autem praesentium, facilis ex inventore dolores voluptatibus voluptate corrupti, perspiciatis delectus veritatis sequi magnam sed, eum possimus! Fugit veniam, tenetur nisi fugiat deserunt incidunt sint rerum quam soluta. Doloribus, blanditiis voluptate?
                    </p>
                    <h4 id="list-item-2">Item 2</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque rerum quasi itaque quis error fuga alias est autem omnis eaque quam nulla dolore quisquam optio ratione quidem vel, voluptates reiciendis eius? Officiis tenetur consequuntur vero natus. Tempora at neque cupiditate magnam illo, iste eligendi, rerum sed et ex sint cum!</p>
                    <h4 id="list-item-3">Item 3</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam laborum praesentium dolore illum debitis cumque rerum atque et? Est soluta provident quae rerum reprehenderit asperiores blanditiis at voluptatum earum cumque.</p>
                    <h4 id="list-item-4">Item 4</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione cupiditate iure cum consequatur velit dolor, corporis facilis voluptatibus quod aliquid esse odit quasi reiciendis rerum natus deserunt ducimus! Perspiciatis, unde atque? Commodi animi atque quam, non minima pariatur amet, ducimus maxime fuga adipisci quod ut vero, modi labore perspiciatis earum?</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>




<div class="box2">
    <h2><?php echo $data['judul']; ?></h2>
    <p>genre genre genre</p>
</div>
<div class="box3">
    <div class="produk2 ">
        <img src="<?php echo $data['poster']; ?>" alt=""></img>
    </div>
    <div class="desk">
        <div class="deskkiri">
            <div class="deskkiri1">
                <p>Produce </p>
            </div>
            <div class="deskkiri1">
                <p>Deskripsi </p>
            </div>
        </div>

        <div class="deskkanan">
            <div class="deskkanan1">
                <p> : <?php echo $data['produce'] ?></p>
            </div>
            <div class="deskkanan1">
                <p style="text-align: justify;"> : <?php echo $data['deskripsi'] ?></p>
            </div>

        </div>
    </div>
</div>

<div class="box4">
    <div class="jadwal1">
        <p>Jadwal</p>
    </div>

    <div class="jadwal2">
        <p>18 April</p>
        <h1>SEL</h1>
    </div>
</div>