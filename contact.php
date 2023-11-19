<!DOCTYPE html>
<html>
  <head>
    <title>Contact - Daniel Dandu</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/469dab0359.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <?php include 'header.php'?>
    
    <div class="container">
      <div class="row">
        <div class="text col-md-6" style="padding: 2% 0 2% 0;">
          <p style="font-size: 20px; font-family: Verdana;">
            Adresă: Timișoara, România<br>
            Telefon: 0732619973 <br>
            Email: daniel.dandu@student.upt.ro <br>
          </p>
          <img src="img/qrcode.png">
          
          <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">
              <label class="control-label col-sm-2" for="first_name">Prenume:</label>
              <div class="col-sm-12">
                <input type="name" class="form-control" id="first_name" placeholder="Scrie prenumele tau" name="first_name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="last_name">Nume:</label>
              <div class="col-sm-12">
                <input type="name" class="form-control" id="last_name" placeholder="Scrie numele tau de familie" name="last_name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Adresa Email:</label>
              <div class="col-sm-12">
                <input type="email" class="form-control" id="email" placeholder="Scrie adresa ta de email" name="email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="phone_number">Numar de telefon:</label>
              <div class="col-sm-12">
                <input type="number" class="form-control" id="phone_number" placeholder="Scrie numarul tau de telefon" name="phone_number">
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea class="form-control" rows="5" id="message" placeholder="Scrie mesajul tau aici..."></textarea>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Trimite</button>
              </div>
            </div>
          </form>
          <br>
          
        </div>
        

        <div class="col-md-6 text-center" style="padding: 2% 0 2% 0; min-width: none;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.1925476928313!2d21.224111515862404!3d45.747285679105346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d8303f55439%3A0xbe8d0248f81cb2a9!2sFacultatea%20de%20Electronic%C4%83%2C%20Telecomunica%C8%9Bii%20%C8%99i%20Tehnologii%20Informa%C8%9Bionale!5e0!3m2!1sro!2sro!4v1671156551262!5m2!1sro!2sro" width="520" height="470" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="com_box mt-3 d-flex justify-content-center">
          <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                  <div class="text-left">
                      <h6>All comment(5)</h6>
                  </div>
                  <div class="card p-3 mb-2">
                      <div class="d-flex flex-row">
                          <img src="https://i.imgur.com/dwiGgJr.jpg"  height="40" width="40" class="rounded-circle">
                          <div class="d-flex flex-column ms-2">
                              <h6 class="mb-1 text-primary">Emma</h6>
                              <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lectus nibh, efficitur in bibendum id, pellentesque quis nibh. Ut dictum facilisis dui, non faucibus dolor sit amet lorem auctor vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque risus mauris</p>
                          </div>
                      </div>
                      <div class="d-flex justify-content-between">
                          <div class="d-flex flex-row gap-3 align-items-center">
                              <div class="d-flex align-items-center">
                                  <i class="fa fa-heart-o"></i>
                                  <span class="ms-1 fs-10">Like</span>
                              </div>
                              <div class="d-flex align-items-center">
                                  <i class="fa fa-comment-o"></i>
                                  <span class="ms-1 fs-10">Comments</span>
                              </div>
                          </div>
                          <div class="d-flex flex-row">
                              <span class="text-muted fw-normal fs-10">May 22,2020 12:10 PM</span>
                          </div>
                      </div>
                  </div>
                  <div class="card p-3 mb-2">
                      <div class="d-flex flex-row">
                          <img src="https://i.imgur.com/hczKIze.jpg"  height="40" width="40" class="rounded-circle">
                          <div class="d-flex flex-column ms-2">
                              <h6 class="mb-1 text-primary">Morne Micheal</h6>
                              <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lectus nibh, efficitur in bibendum id, pellentesque quis nibh. Ut dictum facilisis dui, non faucibus dolor sit amet lorem auctor vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque risus mauris</p>
                          </div>
                      </div>
                      <div class="d-flex justify-content-between">
                          <div class="d-flex flex-row gap-3 align-items-center">
                              <div class="d-flex align-items-center">
                                  <i class="fa fa-heart-o"></i>
                                  <span class="ms-1 fs-10">Like</span>
                              </div>
                              <div class="d-flex align-items-center">
                                  <i class="fa fa-comment-o"></i>
                                  <span class="ms-1 fs-10">Comments</span>
                              </div>
                          </div>
                          <div class="d-flex flex-row">
                              <span class="text-muted fw-normal fs-10">May 21,2020 1:10 PM</span>
                          </div>
                      </div>
                  </div>
                  <div class="card p-3 mb-2">
                      <div class="d-flex flex-row">
                          <img src="https://i.imgur.com/C4egmYM.jpg"  height="40" width="40" class="rounded-circle">
                          <div class="d-flex flex-column ms-2">
                              <h6 class="mb-1 text-primary">Tommy Hifig</h6>
                              <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lectus nibh, efficitur in bibendum id, pellentesque quis nibh. Ut dictum facilisis dui, non faucibus dolor sit amet lorem auctor vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque risus mauris</p>
                          </div>
                      </div>
                      <div class="d-flex justify-content-between">
                          <div class="d-flex flex-row gap-3 align-items-center">
                              <div class="d-flex align-items-center">
                                  <i class="fa fa-heart-o"></i>
                                  <span class="ms-1 fs-10">Like</span>
                              </div>
                              <div class="d-flex align-items-center">
                                  <i class="fa fa-comment-o"></i>
                                  <span class="ms-1 fs-10">Comments</span>
                              </div>
                          </div>
                          <div class="d-flex flex-row">
                              <span class="text-muted fw-normal fs-10">May 12,2020 12:10 PM</span>
                          </div>
                      </div>
                  </div>
                  <div class="card p-3 mb-2">
                      <div class="d-flex flex-row">
                          <img src="https://i.imgur.com/dwiGgJr.jpg"  height="40" width="40" class="rounded-circle">
                          <div class="d-flex flex-column ms-2">
                              <h6 class="mb-1 text-primary">Emma</h6>
                              <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lectus nibh, efficitur in bibendum id, pellentesque quis nibh. Ut dictum facilisis dui, non faucibus dolor sit amet lorem auctor vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque risus mauris</p>
                          </div>
                      </div>
                      <div class="d-flex justify-content-between">
                          <div class="d-flex flex-row gap-3 align-items-center">
                              <div class="d-flex align-items-center">
                                  <i class="fa fa-heart-o"></i>
                                  <span class="ms-1 fs-10">Like</span>
                              </div>
                              <div class="d-flex align-items-center">
                                  <i class="fa fa-comment-o"></i>
                                  <span class="ms-1 fs-10">Comments</span>
                              </div>
                          </div>
                          <div class="d-flex flex-row">
                              <span class="text-muted fw-normal fs-10">May 22,2020 12:10 PM</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">
              <label class="control-label col-sm-2" for="full_name">Nume:</label>
              <div class="col-sm-12">
                <input type="name" class="form-control" id="full_name" placeholder="Scrie numele tau complet" name="full_name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Adresa Email:</label>
              <div class="col-sm-12">
                <input type="email" class="form-control" id="email" placeholder="Scrie adresa ta de email" name="email">
            </div>
            <div class="form-group">
              <label for="message">Comment:</label>
              <textarea class="form-control" rows="3" id="message" placeholder="Scrie comentariul tau aici..."></textarea>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Comment</button>
              </div>
            </div>
          </form>
      </div>
    </div>
    
    <?php include 'footer.php'?>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
