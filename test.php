<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <title>Javascript</title>
</head>
<body>
    <div class="container mt-1">
      <div class="row">
          <div class="col-lg-4">
              <table class="table bordered">
                  <tr>
                      <td colspan="4">
                          <input type="text" class="form-control" id="res" name="">
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <button class="btn btn-danger" value="1" onclick="cal(this.value)">1</button>
                      </td>
                      <td>
                          <button class="btn btn-danger" value="2" onclick="cal(this.value)">2</button>
                      </td>
                      <td>
                          <button class="btn btn-danger" value="3" onclick="cal(this.value)">3</button>
                      </td>
                      <td>
                          <button class="btn btn-danger" value="4" onclick="cal(this.value)">4</button>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <button class="btn btn-danger" value="+" onclick="cal(this.value)">+</button>
                      </td>
                      <td>
                          <button class="btn btn-danger" value="-" onclick="cal(this.value)">-</button>
                      </td>
                      <td>
                          <button class="btn btn-danger" value="/" onclick="cal(this.value)">/</button>
                      </td>
                       <td>
                          <button class="btn btn-danger" onclick="result()">=</button>
                      </td>
                  </tr>
                  <tr>
                       <td>
                          <button class="btn btn-danger" onclick="clr()">C</button>
                      </td>
                  </tr>
              </table>
          </div>
          <div>
              <table>
                  <tr>
                      <td>
                          <input class="form-control" id="v1" type="text" name="" />
                      </td>
                      <td>
                          <input class="form-control" id="v2" type="text" name="" />
                      </td>
                      <td>
                          <input class="form-control" id="result" type="text" name="" disabled/>
                      </td>
                      <td>
                          <button class="btn btn-danger">clear</button>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <button class="btn btn-danger" value="+" onclick="cal2(this.value)">+</button>
                      </td>
                      <td>
                          <button class="btn btn-danger" value="-" onclick="cal2(this.value)">-</button>
                      </td>
                      <td>
                          <button class="btn btn-danger" value="/" onclick="cal2(this.value)">/</button>
                      </td>
                       <td>
                          <button class="btn btn-danger" value="/" onclick="cal2(this.value)">=</button>
                      </td>
                  </tr>
              </table>
          </div>
      </div>
    </div>
</body>
</html>