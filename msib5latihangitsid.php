<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>PROFIL</h1>
    </header>


    <!-- <img class="avatar" src="adr.JPG" class="img-fluid" alt="..."> -->
    <dl class="row">
        <dt class="col-sm-3">Nama</dt>
        <dd class="col-sm-9">Muhamad <?php echo "Andre Hermawan" ?></dd>

        <dt class="col-sm-3">Universitas</dt>
        <dd class="col-sm-9"> <?php echo "Pakuan Bogor" ?></dd>

        <dt class="col-sm-3">Fakultas</dt>
        <dd class="col-sm-9"><?php echo "Matematika & Ilmu Pengetahuan Alam" ?></dd>

        <dt class="col-sm-3 text-truncate">Program Studi</dt>
        <dd class="col-sm-9"><?php echo "Ilmu Komputer" ?></dd>

        <dt class="col-sm-3">Hobi</dt>
        <dd class="col-sm-9"> <?php echo "Bermain Sepakbola & Bermain Game FPS" ?></dd>
    </dl>

    <footer>
        <div class="row">
            <div class="col-lg-4">
                <div class="profil">
                    <img class="mx-auto rounded-circle" src="adr.JPG" />
                    <h4>Muhamad Andre Hermawan</h4>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/leonn.mah/"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
    </footer>

</body>

</html>