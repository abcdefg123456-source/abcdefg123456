<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="https://soranews24.com/wp-content/uploads/sites/3/2022/06/BR-2.jpg">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary sticky-top" id="home">
        <div class="container-fluid">
            <a class="navbar-brand fw-bolder fs-1" id="logo">Hello</a>
            <a class="active" href="#cok">Home</a>
            <a class="active" href="#news">News</a>
            <a class="active" href="#about">About</a>
            <a class="active" href="#contact">Contact Me</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="search">
            </form>
        </div>
    </nav>

    <div class="container-sm mt-5 " id="cok">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="images\bg-1.jpg" class="d-block w-100 " alt="">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="images\bg-2.jpg" class="d-block w-100 " alt="">
                </div>
                <div class="carousel-item">
                    <img src="images\bg-3.jpg" class="d-block w-100 " alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="row m-5 d-flex justify-content-center" id="news">
        <div class="card col-6 col-sm-9 m-3" style="width: 18rem;">
            <h1 class="card-header">Berserk</h1>
            <img src="images\bg-1.jpg" class="card-img-top img-thumbnail" alt="">
            <div class="card-body">
                <h5 class="card-title">What is berserk?</h5>
                <p class="card-text">Berserk is a Japanese manga series written and illustrated by Kentaro Miura. Set in
                    a medieval Europe-inspired dark fantasy world, the story centers on the characters of Guts, a lone
                    swordsman, and Griffith, the leader of a mercenary band called the "Band of the Hawk".</p>
            </div>
        </div>
        <div class="card col-6 col-sm-9 m-3" style="width: 18rem;">
            <h1 class="card-header">Berserk</h1>
            <img src="images\bg-2.jpg" class="card-img-top img-thumbnail" alt="">
            <div class="card-body">
                <h5 class="card-title">Who is the author of this manga?</h5>
                <p class="card-text">Kentaro Miura (三浦 建太郎, Miura Kentarō, July 11, 1966 – May 6, 2021) was a Japanese
                    manga artist. He was best known for his acclaimed dark fantasy series Berserk, which began
                    serialization in 1989 and continued until his death. As of 2021, Berserk had more than 50 million
                    copies in circulation, making it one of the best-selling manga series of all time. In 2002, Miura
                    received the Award for Excellence at the 6th Tezuka Osamu Cultural Prizes.</p>
            </div>
        </div>
        <div class="card col-3 col-sm-9 m-3" style="width: 18rem;">
            <h1 class="card-header">Berserk</h1>
            <img src="images\bg-3.jpg" class="card-img-top img-thumbnail" alt="">
            <div class="card-body">
                <h5 class="card-title">Who is guts?</h5>
                <p class="card-text">Guts, renowned as the "Black Swordsman", is a former mercenary and branded wanderer
                    who travels the world in a constant internal struggle between pursuing his own ends and upholding
                    his attachments to those dear to him.</p>
            </div>
        </div>
    </div>

    <div class="parallax" id="about">
        <div class="about">
            <h4 class="title">Hello Everyone!!</h4>
            <p class="description">Don't care how i am. because i am just do coding here.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="card mt-5">
                    <div class="card-item mt-3">
                        <h5 class="card-title">Hello</h5>
                        <p class="card-description">This is a prototype</p>
                        <a href="#top" class="derdor">Click This</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax" id="contact">
        <div class="contact">
            <h4 class="title">Contact Me</h4>
        </div>
        <div class="mb-3" id="email">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3" id="text">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <a class="btn bg-light" id="btn" href="#">Click this</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function tombol() {
        location.replace("https://www.youtube.com/watch?v=CNDI4WlJ8eo")
    }
    </script>
</body>

</html>
