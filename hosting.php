<?php include "includes/header.php"; ?>

<main class="signup-page">
    <h1 class="signup-title">Awesome! Let's dive right in!</h1>

    <form action="#" class="signup-form">


        <label for="title" class="title-label">Title</label>
        <select id="title" class="invalid title-select">
            <option value="mr">Mr.</option>
            <option value="ms">Ms.</option>
        </select>


        <label for="first-name">First name</label>
        <input type="text" id="first-name" required>


        <label for="last-name">Last name</label>
        <input type="text" id="last-name" required>


        <label for="email">E-Mail</label>
        <input type="email" id="email" required>


        <label for="password">Password</label>
        <input type="password" id="password" required>

        <div class="signup-form__checkbox">
            <input type="checkbox" id="agree-terms" required>
            <label for="agree-terms">Agree to
                <a href="#">Terms &amp; Conditions</a>
            </label>            
        </div>


        <button type="submit" class="button btn-submit">Sign Up</button>
    </form>
    
</main>

<?php include "includes/footer.php"; ?>