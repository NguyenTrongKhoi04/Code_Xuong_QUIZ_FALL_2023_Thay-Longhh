<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Online Quiz Management</title>
</head>
<body>
    <div class="container">
    <!-- Header  -->

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="?act=Home">Quizz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="?act=Home">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Bài thi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kết quả</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Thông tin cá nhân</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  

  <main>
    <div class="row mt-4">
    <div class="col-md-8">

        <div class="container-fuild">
            <div class="row">
                <?php foreach($dslt as $lt) : ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                      <img src="" class="card-img-top" alt="Exam 1">
                      <div class="card-body">
                        <h5 class="card-title"><?= $lt['tenLichThi']?></h5>
                        <p class="card-text"><?= $lt['tenChuyenDe']?></p>
                        <a href="?act=Test&id=<?= $lt['idDeThi']?>" class="btn btn-primary">Bắt đầu thi</a>
                      </div>
                    </div>
                  </div>
                  <?php endforeach?>
              </div>
        </div>
    </div>

    <!-- SideBar -->

    <div class="col-md-3 offset-md-1">

        <!-- Tìm kiếm -->
        
        <div class="card" style="width: 18rem">
            <div class="card-header">Tìm kiếm</div>
            <div class="card-body">
                <form action="" method="post" >
                    <input type="text" class="form-control" placeholder="Nhập" name="key" />
                    <input type="submit" class="form-control" name="timkiem" value="Tìm kiếm" />
                </form>
            </div>
        </div>

        <div class="card mt-3" style="width: 18rem;">
            <div class="card-header">
              Danh mục
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">An item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
            </ul>
          </div>    </div>


      </div>
    </div>
    </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>