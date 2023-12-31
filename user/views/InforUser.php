<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <title>User Info</title>
    <style>
      .container {
        margin-top: 70px;
      }

      h1 {
        font-size: 25px;
        text-align: center;
      }

      hr {
        margin-bottom: 50px;
      }

      form {
        width: 80%;
        background-color: #ffffff;
        padding: 20px 50px;
      }

      form .left,
      form .right {
        width: 40%;
      }

      form button {
        width: 90%;
        height: 35px;

        margin-top: 25px;
        margin-bottom: 90px;
        align-items: center;
        font-family: inherit;
        font-weight: 500;

        font-size: 16px;
        color: white;
        background-color: green;
        box-shadow: 0 0.7em 1.5em -0.5em #14a73e98;
        letter-spacing: 0.05em;
        border-radius: 20em;
        cursor: pointer;
      }

      form button:hover {
        color: black;
        background: red;
      }

      form input[type="email"],
      form input[type="password"],
      form input[type="text"],
      form input[type="date"] {
        display: block;
        width: 100%;
        margin-bottom: 25px;
        height: 40px;
        border-radius: 15px;
        border: none;
        background: #f2f2f2;
        padding: 10px;
        font-size: 14px;
        position: relative;
        margin-top: 5px;
      }

      .form__image {
        max-width: 100%;
        width: 80%;
        object-fit: contain;
      }
      .rdo {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
        padding: 0 10px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <section>
        <div id="container" class="container">
            <h1 class="form__title">Sửa tài khoản <span style="color: #15825a;">Quiz</span></h1>
            <div style="display: flex; justify-content: center; margin: 0 auto;">
            </div>
            <hr>
            <div class="row container-fluid">
    
                <div class="col-sm-6">
                    <div class="form__padding bounce_auto">
                        <img class="form__image bounce" src="./assets/img/ico/computer.png"/>
                    </div>
                </div>
                <form class="col-sm-6">
                    <div>
                        <div class="row">
                            <div class="col-sm-6">
                                <span>Họ tên: </span>
                                <input ng-model="Student.fullname" class="form__email" type="text" />
                            </div>
                            <div class="col-sm-6">
                                <span>Tên đăng nhập:</span>
                                <input ng-model="Student.username" class="form__email" type="text" readonly/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <span>Email:</span>
                                <input  ng-model="Student.email"class="form__email" id="email" type="text" readonly/>
                            </div>
                            <div class="col-sm-6">
                              <span>Ngày sinh:</span>
                              <input  ng-model='Student.birthday'class='form__email' type="date" id="bd" value="{{Student.birthday}}" />
                          </div>
                        </div>
                    </div>
    
                    <div>
                        <div class="row">

    
                            <div class="col-sm-6">
                                <span>Điểm:</span>
                                <input ng-model="Student.marks"class="form__email" type="text" readonly/>
                            </div>
                            <div class="col-sm-6">
                              <span>Giới tính: </span>
                              <div class="rdo">
                                  <div class="rdoz">
                                      <input ng-checked="checkGender == 'Male'" type="radio" id="maleGender" name="gender" required/>
                                      <label for="maleGender"> Nam</label>
                                  </div>
                                  <div class="rdoz">
                                      <input ng-checked="checkGender == 'Female'" type="radio" id="femaleGender"  name="gender" required />
                                      <label for="femaleGender"> Nữ</label>
                                  </div>
                                  <div class="rdoz">
                                      <input ng-checked="checkGender == 'Other'" type="radio"   id="other" name="gender"  required/>
                                      <label for="other"> Khác</label>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <button ng-click="confirm()">Xác nhận</button>
                            </div>
                        </div>
    
                    </div>
    
    
    
    
    
                </form>
    
    
            </div>
        </div>
    </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>