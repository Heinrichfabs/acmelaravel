<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title>ACME Pet Clinic</title>
</head>
<body>

<header>
    <h1>AC <span>ME</span></h1>
    <p>pet clinic</p>
</header>
<section class="banner">
    <img src="/img/banner.jpg" alt="acmebanner">
</section>

<nav class="main-nav">
    <ul>
        <li><a href=""> About Us</a></li>
        <li><a href="">Latest News</a></li>
        <li><a href="">Consult Now!</a></li>
        <li><a href="{{ route('login') }}" class="logsign">LogIn/Signup</a></li>
    </ul>
</nav>

<main>
<article>
<h2>What is ACME?</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore asperiores neque perferendis aliquam similique reprehenderit? Repellat consequuntur sapiente facilis recusandae, ut voluptas ab consequatur dolore eligendi iure, dolorem quia soluta?
 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur saepe quia tenetur harum consequatur? Enim voluptatem culpa minus, nemo distinctio optio quaerat exercitationem facere quos et impedit consequatur odit aspernatur?
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate id, dolor incidunt magnam maiores labore optio blanditiis ut deserunt a quaerat accusamus inventore mollitia eum ullam voluptates delectus animi placeat!</p>
</article>
<ul class="photos">
    <li> <img src="/img/photo1.jpg" alt="pet clinic"></li>
    <li> <img src="/img/photo2.png" alt="pet grooming"></li>
</ul>
</main>
<section class="about">
    <h2>About Us</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore asperiores neque perferendis aliquam similique reprehenderit? Repellat consequuntur sapiente facilis recusandae, ut voluptas ab consequatur dolore eligendi iure, dolorem quia soluta?<br>
 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur saepe quia tenetur harum consequatur? Enim voluptatem culpa minus, nemo distinctio optio quaerat exercitationem facere quos et impedit consequatur odit aspernatur?<br>
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate id, dolor incidunt magnam maiores labore optio blanditiis ut deserunt a quaerat accusamus inventore mollitia eum ullam voluptates delectus animi placeat!</p>
<form>
    <input type="email" name="email" placeholder="Please type your email">
</form>
</section>
<footer>
    <p class="copyright">Copyright 2022 ACME</p>
</footer>
</body>
</html>