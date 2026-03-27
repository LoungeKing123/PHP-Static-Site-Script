<?php
// ensure PHP uses the system timezone before formatting the date
date_default_timezone_set(date_default_timezone_get());
$day = date('l');
?>
<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Example Site</title>
  </head>
  <body>
    <header>
      <h1>Example Site</h1>
      <p>Today is <?php echo htmlspecialchars($day); ?></p>
    </header>
    <main>
      <section>
        <h2>Welcome</h2>
        <p>This is a simple example site created to demonstrate the PHP Static Site Script.</p>
      </section>
      <section>
        <h2>Sample Posts</h2>
        <ul>
          <li><a href="posts/sample.html">Sample Post</a></li>
        </ul>
      </section>
    </main>
    <footer>
      <p>&copy; Example Site</p>
    </footer>
  </body>
</html>

<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0 1rem;
    color: #222;
  }
  header { 
    background: #f5f5f5; 
    padding: 1rem 0; 
    margin-bottom: 0.5rem; 
  }
  main { 
    max-width: 900px;
   }
  footer { 
    font-size: 0.9rem; 
    color: #666; 
    margin-top: 2rem; 
  }

</style>