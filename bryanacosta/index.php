<?php

// Check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $toEmail = 'bryanbaez2504@gmail.com';
  $subject = 'Contact request from ' . $name;
  $body = '<h2>Contact Request</h2>
  <h4>Name: <h4><p>' . $name . '</p>
  <h4>Email: <h4><p>' . $email . '</p>
  <h4>Message: <h4><p>' . $message . '</p>
  ';

  // Email Headers
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";


  // Additional headers
  $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

  if (mail($toEmail, $subject, $body, $headers)) {
    echo 'aggh';
  } else {
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">
  <title>Bryan Acosta Portfolio</title>
</head>

<body>
  <div class="container">
    <header id="main-header">
      <div class="row no-gutters">
        <div class="col-lg-4 col-md-5">
          <img src="img/bryan.jpg" alt="">
        </div>
        <div class="col-lg-8 col-md-7">
          <div class="d-flex flex-column">
            <div class="p-5 bg-dark text-white">
              <div class="d-flex flex-row justify-content-between align-items-center">
                <h1 class="display-4">Bryan Acosta</h1>
                <div class="d-none d-md-block">
                  <a href="https://twitter.com/alanacostabz" target="_blank" class="text-white">
                    <i class="fab fa-twitter"></i>
                  </a>
                </div>
                <div>
                  <a href="https://www.facebook.com/AlanAcosta25" target="_blank" class="text-white">
                    <i class="fab fa-facebook"></i>
                  </a>
                </div>
                <div>
                  <a href="https://www.instagram.com/alanacostabz/" target="_blank" class="text-white">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
                <div>
                  <a href="https://www.linkedin.com/in/bryanacostabz/" target="_blank" class="text-white">
                    <i class="fab fa-linkedin"></i>
                  </a>
                </div>
                <div>
                  <a href="https://github.com/alanacostabz" target="_blank" class="text-white">
                    <i class="fab fa-github"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="p-4 bg-black">
              Engineer in Information Systems
            </div>

            <div>
              <div class="d-flex flex-row text-white align-items-stretch text-center">
                <div class="port-item p-4 bg-primary" data-toggle="collapse" data-target="#home">
                  <i class="fas fa-home fa-2x d-block"></i>
                  <span class="d-none d-sm-block">Home</span>
                </div>
                <div class="port-item p-4 bg-success" data-toggle="collapse" data-target="#resume">
                  <i class="fas fa-graduation-cap fa-2x d-block"></i>
                  <span class="d-none d-sm-block">Resume</span>
                </div>
                <div class="port-item p-4 bg-warning" data-toggle="collapse" data-target="#work">
                  <i class="fas fa-folder-open fa-2x d-block"></i>
                  <span class="d-none d-sm-block">Work</span>
                </div>
                <div class="port-item p-4 bg-danger" data-toggle="collapse" data-target="#contact">
                  <i class="fas fa-envelope fa-2x d-block"></i>
                  <span class="d-none d-sm-block">Contact</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- HOME -->
    <div id="home" class="collapse show">
      <div class="card card-body bg-primary text-white py-5">
        <h2>Welcome To My Page</h2>
        <p class="lead">Hi, My name is Bryan Acosta and i'm in the process to qualify as
          an information systems engineer at the University Of Sonora in Mexico.
          During my time at university i've focused on leraning technologies for the development
          of information systems and web applications. I've also focused on learning about the development,
          managenent and maintenance of databases. I like to learn new things, receive feedback and work in a team.
          My favorites hobbies are play soccer and videogames.
        </p>
      </div>

      <div class="card card-body py-5">
        <h3>My Skills</h3>
        <p>
          These are the technologies that i currently use
        </p>
        <hr>
        <h4>HTML 5</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width: 60%"></div>
        </div>
        <h4>CSS 3</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width: 55%"></div>
        </div>
        <h4>JavaScript</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width: 65%"></div>
        </div>
        <h4>PHP</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width: 60%"></div>
        </div>
        <h4>Bootstrap</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width: 55%"></div>
        </div>
        <h4>Node JS</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width: 50%"></div>
        </div>
        <h4>SQL</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width: 80%"></div>
        </div>
        <h4>C#</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width: 30%"></div>
        </div>
        <h4>JAVA</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width: 40%"></div>
        </div>
        <h4>Office (Excel, Word, Power Point)</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width: 80%"></div>
        </div>
      </div>
    </div>

    <!-- RESUME -->
    <div id="resume" class="collapse">
      <div class="card card-body bg-success text-white py-5">
        <h2>My Resume</h2>
        <p class="lead">
        </p>
      </div>

      <div class="card card-body py-5">
        <h3 class="mb-4">Where Have I Worked?</h3>

        <div class="card-deck">

          <div class="card">
            <div class="card-body">
              <h4 class="card-title">University of Sonora</h4>
              <p class="card-text">Scholar (Social Service)
              </p>
              <p class="p-2 mb-3 bg-dark text-white">
                Position: Support for networks and telecomunications
              </p>
              <p class="p-2 mb-3 bg-dark text-white">
                Phone: (662) 259-2151
              </p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">Dates: Jan 2020 - Present</h6>
            </div>
          </div>


        </div>
      </div>
    </div>

    <!-- WORK -->
    <div id="work" class="collapse">
      <div class="card card-body bg-warning text-white py-5">
        <h2>My Work</h2>
        <p class="lead">Work done during college and in my jobs
        </p>
      </div>

      <div class="card card-body py-5">
        <h3 class="mb-3">What have I Built?</h3>

        <div class="card-deck">

          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-center">Works in SQL</h4>
              <a href="#" class="btn btn-dark btn-block">View</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-center">Works in PHP</h4>
              <a href="#" class="btn btn-dark btn-block">View</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-center">Works in Java</h4>
              <a href="#" class="btn btn-dark btn-block">View</a>
            </div>
          </div>

        </div>

        <div class="card-deck mt-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-center">Works in C#</h4>
              <a href="#" class="btn btn-dark btn-block">View</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-center">Works in CSS & HTML</h4>
              <a href="#" class="btn btn-dark btn-block">View</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-center">Works in BOOTSTRAP</h4>
              <a href="#" class="btn btn-dark btn-block">View</a>
            </div>
          </div>
        </div>


      </div>
    </div>

    <!-- CONTACT -->
    <div id="contact" class="collapse">
      <div class="card card-body bg-danger text-white py-5">
        <h2>Contact</h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, perspiciatis.
        </p>
      </div>

      <div class="card card-body py5">
        <h3>Get In Touch</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est modi, nihil repellat saepe commodi ut.</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="form-group">
            <div class="input-group input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white">
                  <i class="fas fa-user"></i>
                </span>
              </div>
              <input name="name" type="text" class="form-control bg-dark text-white" placeholder="Name">
            </div>
          </div>

          <div class="form-group">
            <div class="input-group input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white">
                  <i class="fas fa-envelope"></i>
                </span>
              </div>
              <input type="email" name="email" class="form-control bg-dark text-white" placeholder="Email">
            </div>
          </div>

          <div class="form-group">
            <div class="input-group input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white">
                  <i class="fas fa-pencil-alt"></i>
                </span>
              </div>
              <textarea name="message" class="form-control bg-dark text-white" placeholder="Message"></textarea>
            </div>
          </div>

          <input type="submit" name="submit" value="Submit" class="btn btn-danger btn-block btn-lg">
        </form>
      </div>
    </div>

    <!-- FOOTER -->
    <footer id="main-footer" class="p-5 bg-dark text-white">
      <div class="row">
        <div class="col-md-6">
          <a href="resources/curriculum_bryan-acosta.pdf" class="btn btn-outline-light" download>
            <i class="fas fa-cloud"></i> Download Resume
          </a>
        </div>
      </div>
    </footer>
  </div>






  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

  <script>
    $('.port-item').click(function() {
      $('.collapse').collapse('hide');
    });

    $(document).on('click', '[data-toggle="lightbox"]', function(e) {
      e.preventDefault();
      $(this).ekkoLightbox();
    });
  </script>
</body>

</html>