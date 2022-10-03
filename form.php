<html>
    <head>
        <title>
            From Bandung With You
        </title>
    </head>
    <body>
        <form method="post" action="">
            <fieldset>
                <legend>Form Tambah Produk</legend>
                    <p>
                        <label for="">Nama Produk</label>
                        <input type="text" value="" name="nama_produk" />
                    </p>
                    <p>
                        <label for="">Harga</label>
                        <input type="number" value="" name="harga_produk" />
                    </p>
                    <p>
                        <button type="submit">Save</button>
                    </p>
            </fieldset>
        </form>
    </body>
    <?php
        print_r($_POST);
    ?>
</html>