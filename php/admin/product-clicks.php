<!doctype html>
<html lang="ko">
<?  
  $boardSerno = $_REQUEST["boardSerno"];

  $productSQL = "select * from db_product where boardSerno = '$boardSerno'";
  $result = mysqli_query($kiki_conn, $productSQL);
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>상품 클릭 현황 - Linking 관리자</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,700|Roboto:400,700&display=swap&subset=korean">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/linking.css">
</head>

<body class="bg-dark text-light">
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary shadow-sm" style="background: linear-gradient(135deg, #222 0%, #343a40 100%);">
    <a class="navbar-brand mr-auto mr-lg-3" href="#"><img src="../assets/img/logo-light.svg" style="height: 2rem;"></a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">회원 리스트</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">상품 리스트</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">상품 클릭 현황</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">인스턴스 정보</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">상품 리스트</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0 ml-lg-auto">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="검색">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form>
    </div>
  </nav>

  <div class="nav-scroller bg-secondary navbar-dark shadow">
    <nav class="nav nav-underline">
      <a class="nav-link active text-light" href="#">Dashboard</a>
      <a class="nav-link text-light" href="#">
        Friends
        <span class="badge badge-pill bg-light align-text-bottom text-secondary">27</span>
      </a>
      <a class="nav-link text-light" href="#">Explore</a>
      <a class="nav-link text-light" href="#">Suggestions</a>
      <a class="nav-link text-light" href="#">Link</a>
      <a class="nav-link text-light" href="#">Link</a>
      <a class="nav-link text-light" href="#">Link</a>
      <a class="nav-link text-light" href="#">Link</a>
      <a class="nav-link text-light" href="#">Link</a>
    </nav>
  </div>

  <main role="main" class="container">

    <h4 class="my-3">상품 클릭 현황</h4>

    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table class="table table-striped table-hover table-dark word">
            <thead>
              <tr>
                <th scope="col">이미지</th>
                <th scope="col">상품명</th>
                <th scope="col">상품 가격</th>
                <th scope="col">등록일</th>
                <th scope="col">클릭수</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="thumbnail mr-3 rounded" style="background-image: url('../assets/img/bg-default01.jpg');"></div>
                </td>
                <td>상품이름</td>
                <td>20,000원</td>
                <td>2019-10-10</td>
                <td>73,568,578회</td>
              </tr>
              <tr>
                <td>
                  <div class="thumbnail mr-3 rounded" style="background-image: url('../assets/img/bg-default01.jpg');"></div>
                </td>
                <td>상품이름</td>
                <td>20,000원</td>
                <td>2019-10-10</td>
                <td>73,568,578회</td>
              </tr>
              <tr>
                <td>
                  <div class="thumbnail mr-3 rounded" style="background-image: url('../assets/img/bg-default01.jpg');"></div>
                </td>
                <td>상품이름</td>
                <td>20,000원</td>
                <td>2019-10-10</td>
                <td>73,568,578회</td>
              </tr>
              <tr>
                <td>
                  <div class="thumbnail mr-3 rounded" style="background-image: url('../assets/img/bg-default01.jpg');"></div>
                </td>
                <td>상품이름</td>
                <td>20,000원</td>
                <td>2019-10-10</td>
                <td>73,568,578회</td>
              </tr>
            </tbody>
          </table>
        </div>

        <nav>
          <ul class="pagination justify-content-center text-light">
            <li class="page-item">
              <a class="page-link bg-secondary border-dark text-light" href="#" tabindex="-1" aria-disabled="true">이전</a>
            </li>
            <li class="page-item"><a class="page-link bg-secondary border-dark text-light" href="#">1</a></li>
            <li class="page-item"><a class="page-link bg-secondary border-dark text-light" href="#">2</a></li>
            <li class="page-item"><a class="page-link bg-secondary border-dark text-light" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link bg-secondary border-dark text-light" href="#">다음</a>
            </li>
          </ul>
        </nav>

        <p class="text-right"><a href="#" class="btn btn-secondary">상품 등록</a></p>

      </div>

    </div>
  </main>
  <footer>
    <p class="mt-5 mb-0 p-3 text-secondary border-top border-secondary">© 2019</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    $(function () {
      'use strict'
      $('[data-toggle="offcanvas"]').on('click', function () {
        $('.offcanvas-collapse').toggleClass('open')
      })
    })

    $(function () {
      $('[data-toggle="popover"]').popover()
    })

  </script>
</body>

</html>