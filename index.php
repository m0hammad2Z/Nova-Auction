
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/index-style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
    <?php 
        require "./lib.php";
        printNav();
    ?>
        <div class="main">
            <img class="home-img" src="img/cars-home.jpg" alt="Home page">
            <div class="home-img-text">
                <span>Welcome To Nova Auction</span>
                <h2>Purchase Dream Product &amp; Try.</h2>
                <p>Nulla facilisi. Maecenas ac tellus ut ligula interdum convallis. <br> Nullam dapibus on erat in dolor posuere, none hendrerit lectus ornare. <br> Suspendisse sit amet turpina sagittis, ultrices dui et, aliquam none hendrerit lectus. </p>
                <a href="#home-body" class="button">Start Bidding</a>
            </div>
        </div>
        <div class="home-body" id="home-body">
            <h1>Best Items</h1>
            <p>Explore on the world's best & largest Bidding marketplace with our beautiful Bidding products. <br> We want to be a part of your smile, success and future growth. </p>
            <div class="cards-grid">
                <div class="card">
                    <img src="https://picsum.photos/10?a" alt="">
                    <span style="font-size:25px ;">Test car</span>
                    <br>
                    <span>Current bid: <bold>252$</bold>
                    </span>
                    <br>
                    <button class="button b_card">Place a bid</button>
                </div>
                <div class="card">
                    <img src="https://picsum.photos/10?b" alt="">
                    <span style="font-size:25px ;">Test car</span>
                    <br>
                    <span>Current bid: <bold>252$</bold>
                    </span>
                    <br>
                    <button class="button b_card">Place a bid</button>
                </div>
                <div class="card">
                    <img src="https://picsum.photos/10?c" alt="">
                    <span style="font-size:25px ;">Test car</span>
                    <br>
                    <span>Current bid: <bold>252$</bold>
                    </span>
                    <br>
                    <button class="button b_card">Place a bid</button>
                </div>
                <div class="card">
                    <img src="https://picsum.photos/10?d" alt="">
                    <span style="font-size:25px ;">Test car</span>
                    <br>
                    <span>Current bid: <bold>252$</bold>
                    </span>
                    <br>
                    <button class="button b_card">Place a bid</button>
                </div>
                <div class="card">
                    <img src="https://picsum.photos/10?e" alt="">
                    <span style="font-size:25px ;">Test car</span>
                    <br>
                    <span>Current bid: <bold>252$</bold>
                    </span>
                    <br>
                    <button class="button b_card">Place a bid</button>
                </div>
            </div>
            <button class="button">View more!</button>
        </div>
        <footer class="footer">
            <p>Copyright &copy; 2022 Nova Auction | Design By Humble Ghost Team</p>
        </footer>
    </body>
</html>
